<?php

namespace App\Model\Entity;

class Image {

    private $base64Code;
    private $name;

    public function __construct(string $name, string $base64Code)
    {
        $this->base64Code = $base64Code;
        $this->name = $name;
    }

    public function getBase64Code() 
    {
        return $this->base64Code;
    }

    public function getName() 
    {
        return $this->name;
    }
}