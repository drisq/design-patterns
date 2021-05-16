<?php

namespace Cettervescre\SOLID\L;

class Project
{
    private $documents = array();

    public function setDocument($documents)
    {
        $this->documents = func_get_args();
    }

    public function addDocument($document)
    {
        if (! $document instanceof WritableDocument) {   
            array_push($this->documents, $document);
        } else {
            array_push($this->writableDocuments, $document);
        }
        
    }

    public function openAll()
    {
        foreach ($this->documents as $doc) {
            echo $doc->open() . PHP_EOL;
        }
    }

    public function saveAll()
    {
        foreach ($this->documents as $doc) {
            if ($doc instanceof WritableDocument) {
                echo $doc->save() . PHP_EOL;
            }
        }
    }
}