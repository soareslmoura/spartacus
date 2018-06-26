<?php
/**
 * Created by PhpStorm.
 * User: Leo
 * Date: 6/25/2018
 * Time: 9:30 PM
 */

namespace Spartacus;


class Model
{
    private $values = [];

    public function __call($name, $args)
    {
        $method = substr($name,0,3);
        $fieldName = substr($name,3, strlen($name));

        var_dump($method,$fieldName);
        exit;
    }
}