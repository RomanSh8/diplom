<?php
//namespace Diplom\Bar\Controllers;
//
//use Diplom\Bar\App\Controller;
//
////include "../private/Models/PosterModel.php";
//    
//class PosterController extends Controller
//{
//    private $posterModel;
//    
//    function __construct()
//    {
//        $this->posterModel = new PosterModel();
//    }
//    
//    public function indexAction(){
//        $title = "Poster";
//        $view = 'poster_view.php';
//
//        $data = $this->posterModel->poster();
//        $this->generateResponse($view, [
//            'title' => $title,
//            'goods' => $data
//        ]);
//    }
//}

namespace Diplom\Bar\Controllers;

use Diplom\Bar\App\Controller;
class PosterController extends Controller
{
    public function indexAction(){
        $view = 'poster_view.php';
        $title = 'Poster';
        $this->generateResponse($view, [
            'title'=> $title,
        ]);
    }
}
