<?php
namespace Diplom\Bar\App;

class Controller
{
    protected function generateResponse($view, $data=[]){
        if (is_array($data)) {
            extract($data);
        } 
        require_once "../private/View/template.php";
        
    }
}