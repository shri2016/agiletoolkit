<?php
require '../vendor/autoload.php';

$app = new \atk4\ui\App('Database');

$app->initLayout('Centered');

$db = $app->dbConnect('mysql://shrinivas:shrini@localhost/localdb');

$data = $db->connection->expr('select * from user')->get();

class User extends \atk4\data\Model {
    public $table = 'user';
    function init() {
        parent::init();
        $this->addField('email');
        $this->addField('password', ['type'=>'password']);
    }
}

class UserView extends \atk4\ui\View {
    public $form;
    public $table;

    function init() {   //extending constructor
        parent::init(); //calling native constructor
        if ($this->app->stickyGet('user_id')) {  //check if user is logged in
          $this->form = $this->add('Form');   //adding form
        } else {
            $this->table = $this->add('Table'); //adding table
        }
    } 
    function setModel(\atk4\data\Model $m) {            //changing setModel
        if($this->form) {              //if form is added then...
            $m->load($_GET['user_id']); //loading current user data
            $this->form->setModel($m);
        } 
        elseif($this->table) 
        {
            $this->table->setModel($m);
            $this->table->addDecorator(
                'email',
                ['Link',[],['user_id'=>'id']]  //adding link to a tile 'email'
            );
        }
    } 
}

$user = new User($db);
$user->loadAny();

/*$table = $app->add('Table');
$table->setModel($user);
*/

/*
$form = $app->add('Form');
$form->setModel($user);
*/

$crud = $app->add(new UserView());
$crud->setModel($user);