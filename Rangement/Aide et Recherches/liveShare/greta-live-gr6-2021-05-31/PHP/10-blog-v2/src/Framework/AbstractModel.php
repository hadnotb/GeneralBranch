<?php 

abstract class AbstractModel {

    protected $database;

    public function __construct()
    {
        $this->database = new Database();
    }
}