<?php
namespace wcs;

class Hello
{
    private string $talk='Hello world';

    public function __toString()
     {
         return $this->talk;
     }

}
