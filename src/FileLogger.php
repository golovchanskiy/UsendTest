<?php

class FileLogger
{

    protected $path;

    public function __construct($path)
    {
        $this->path = $path;
    }

    public function log($message)
    {
        // write log
    }

}