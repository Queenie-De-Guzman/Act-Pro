<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function Kweng11()
   {
      echo 'hello Kweng11';
   }

}



