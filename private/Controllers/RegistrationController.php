<?php

//include "../private/Models/RegModel.php";
//
//class RegistrationController extends Controller 
//{
//    private $regModel;
//    
//    function __construct()
//    {
//        $this->regModel = new RegModel();
//    }
//    
//    public function indexAction(){
//        $title = "Registration";
//        $view = 'reg_view.php';
//
//        $data = $this->regModel->registration();
//        $this->generateResponse($view, [
//            'title' => $title,
//            'goods' => $data
//        ]);
//    }
//}

namespace Diplom\Bar\Controllers;

use Diplom\Bar\App\Controller;
class RegistrationController extends Controller
{
    public function indexAction(){
        $view = 'reg_view.php';
        $title = 'Registration';
        $this->generateResponse($view, [
            'title'=> $title,
        ]);
    }
}