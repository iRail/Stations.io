<?php

class FetchDataModel{
 
    private $handle, $mapping;

    public function __construct($url, array $mapping){
        $this->mapping = $mapping;

        $this->handle = fopen('php://temp', 'w+');

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_FILE, $this->handle);
        curl_exec($curl);
        curl_close($curl);

        rewind($this->handle);
        $firstrow = fgetcsv($this->handle, 1000, ",");
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
