<?php

namespace Cettervescre\SOLID\L;

class Document
{
    protected $data;

    protected $filename;

    public function __construct($filename, $data)
    {
        $this->filename = $filename;
        $this->data = $data;
    }

    public function open()
    {
        return "Opening document {$this->filename} ...";
    }
}