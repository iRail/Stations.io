<?php

class Index extends AController{
    public function GET($matches){
        include_once("custom/template/header.php");
        if($matches[1] == ""){
            include_once("cores/stationsio/index.php");
        }else if($matches[1] == "usecases"){
            include_once("cores/stationsio/usecases.php");
        }else if($matches[1] == "helpout"){
            include_once("cores/stationsio/helpout.php");
        }
        include_once("custom/template/footer.php");
    }

}
