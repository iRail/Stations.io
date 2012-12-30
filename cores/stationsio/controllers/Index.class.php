<?php

class Index extends AController{
    public function GET($matches){
        include_once("custom/template/header.php");
        include_once("cores/stationsio/index.php");
        include_once("custom/template/footer.php");
    }

}
