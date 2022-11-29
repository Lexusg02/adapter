<?php

interface MainInterf
{
    public function mainRequest();
}

interface AdaptedInterf
{
    public function adaptedRequest();
}

class Adaptee implements AdaptedInterf
{
    public function adaptedRequest()
    {
        return "result";
    }
}

class Adapter implements MainInterf
{
    protected $adaptee = null;

    public function __construct()
    {
        $this -> adaptee = new Adaptee();
    }

    public function mainRequest()
    {
        return $this->adaptee->adaptedRequest();
    }

}

$Main = new Adapter();