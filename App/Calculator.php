<?php

namespace App;

use Exceptions\DivideEx;

class Calculator
{

        public static function add(int $numb1, int $numb2)
        {
            return $numb1 + $numb2;
        }
    
        public static function substruct(int $numb1, int $numb2)
        {
            return $numb1 - $numb2;
        }
    
        public static function divide(int $numb1, int $numb2)
        {
            if($numb2 == 0){
                throw new DivideEx('divide on 0!');
            }else {
                $res = $numb1 / $numb2;
            }
            
        }
    
        public static function multyple(int $numb1, int $numb2)
        {
            return $numb1 * $numb2;
        }
}

