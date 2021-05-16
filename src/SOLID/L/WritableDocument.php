<?php

namespace Cettervescre\SOLID\L;

class WritableDocument extends Document
{
    public function save()
    {
        return "Saving document {$this->filename} ... ";
    }
}