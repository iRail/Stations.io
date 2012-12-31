<?php
include_once("cores/stationsio/model/StationsioModel.class.php");

class URLController extends AController{

    private $countrycodes = array(
        88 =>"belgium",
    );

    public function GET($matches){
        $uci_id = $matches[1];

        //Get ini file
        $documents = parse_ini_file("custom/documents.ini",true);
        $documents["mapping"]["columns"] = explode(",",$documents["mapping"]["columns"]);
        $model = new StationsioModel($documents["spreadsheets"]["belgium"],
                                     $documents["mapping"]);
        $graph = $model->read();
        if($matches[2] !== "about"){
            parent::setFormat($matches[2]);
        }
        
        Log::getInstance()->logInfo("Formatter used: " . parent::getFormat());
        echo $graph->serialise(parent::getFormat());
    }

}
