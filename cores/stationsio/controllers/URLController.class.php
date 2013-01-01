<?php
include_once("cores/stationsio/model/StationsioModel.class.php");

class URLController extends AController{

    private $countrycodes = array(
        88 =>"belgium",
    );

    public function GET($matches){
        $uci_id = $matches[1];
        EasyRdf_Namespace::set('transit', 'http://vocab.org/transit/terms/');
        $sparql = new EasyRdf_Sparql_Client('http://localhost:8080/');

        if($matches[2] !== "about"){
            parent::setFormat($matches[2]);
        }

        echo $graph->serialise(parent::getFormat());
    }

}

