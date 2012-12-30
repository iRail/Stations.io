<?php

class URIController extends AController{
    public function GET($matches){
        $url = $this->getBaseURL($matches[1] . ".about");
        header("Location: $url");
    }

}
