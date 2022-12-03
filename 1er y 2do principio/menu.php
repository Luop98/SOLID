<?php

use App\MenuOutput;

class Menu 
{
    public function view($products, MenuOutput $output)
    {
       return $output-> output($products);
    }
    
}