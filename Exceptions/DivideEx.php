<?php

namespace Exceptions;

use Throwable;

class DivideEx extends \Exception
{
    public function __construct($m = "", $c = 0, Throwable $p= null){
        parent::__construct($m, $c, $p);
        
    }
}