<?php

class StationsioModel{
 
    private $handle, $mapping;

    public function __construct($url, array $mapping){
        $this->mapping = $mapping;
        if (($this->handle = fopen($url, "r")) === FALSE) {
            throw new TDTException(552, array($url));
        }else{
            $firstrow = fgetcsv($this->handle, 1000, ",");
        }
    }
    
    public function __destruct(){
       fclose($this->handle);
    }

    public function read(){
        $graph = new EasyRdf_Graph();
        
        $baseurl = Config::get("general","hostname").Config::get("general","subdir");

        while (($data = fgetcsv($this->handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            $station = $graph->resource($baseurl . $data["0"] , $this->mapping["rows"]);
            $i=0;
            foreach($this->mapping["columns"] as $col){
                $station->set($col,$data[$i]);
                $i++;
            }
        }
        return $graph;
    }
}
