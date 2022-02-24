<?php
class Master
{
    private $title;

    function __construct()
    {
        $this->title = 'Teste';
    }

    public function getTitle(){
        return $this->title;
    }

}


?>