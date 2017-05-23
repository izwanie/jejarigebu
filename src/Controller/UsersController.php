<?php
namespace App\Controller;

use  App\Controller\AppController;

class UsersController extends AppController {

    //kat sini nak dapatkan senarai users
    public function index(){
      $users=$this->paginate('Users');

      //pr($users);
      //hantar data ke template
      $this->set('users', $users);


    }



}


 ?>
