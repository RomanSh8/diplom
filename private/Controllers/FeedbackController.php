<?php


//include "../private/Models/FeedbackModel.php";
//
//class FeedbackController extends Controller
//{
//    private $feedbackModel;
//
//    function __construct()
//    {
//        $this->feedbackModel = new FeedbackModel();
//    }
//
//    public function indexAction(){
//        $title = "Feedback";
//        $view = 'feedback_view.php';
//
//        $data = $this->feedbackModel->feedback();
//        $this->generateResponse($view, [
//            'title' => $title,
//            'goods' => $data
//        ]);
//    }
//
////    public function addAction($param){
////
////    }
//}

namespace Diplom\Bar\Controllers;

use Diplom\Bar\App\Controller;
class FeedbackController extends Controller
{
    public function indexAction(){
        $view = 'feedback_view.php';
        $title = 'Feedback';
        $this->generateResponse($view, [
            'title'=> $title,
        ]);
    }
}
