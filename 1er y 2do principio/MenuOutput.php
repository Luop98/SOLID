<?php

namespace App;

interface MenuOutput
{
    public function output($products)
    {
        $menu .= "ID\tnomrbre\t\tPrecio\n";
            $menu .= str_repeat('=',30)."\n";

            foreach ($products as $product)
        {
            $menu .= $product['id']."\t"
            . str_pad($product ['name'],15,'')."\t"
            . $product ['price']."\n";
        }
        return $menu;
    }

}