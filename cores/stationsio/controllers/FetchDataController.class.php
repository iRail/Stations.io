<?php
include_once("cores/stationsio/model/FetchDataModel.class.php");

class FetchDataController extends AController{

    public function GET($matches){
        if(parent::isBasicAuthenticated()){
            $country = $matches[1];

            //Get ini file
            $documents = parse_ini_file("custom/documents.ini",true);
            $documents["mapping"]["columns"] = explode(",",$documents["mapping"]["columns"]);
            if(isset($documents["spreadsheets"][$country])){
                $model = new FetchDataModel($documents["spreadsheets"][$country], $documents["mapping"]);
                $graph = $model->read();
            
                if($matches[2] !== "about"){
                    parent::setFormat($matches[2]);
                }
                echo $graph->serialise(parent::getFormat());
            }
            else{
                throw new TDTException(404,array($country));
            }
        }else{
            throw new TDTException(401,array());
        }
    }
}
