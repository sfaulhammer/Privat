<?php
/**
 * Created by PhpStorm.
 * User: Sebastian
 * Date: 05.09.2017
 * Time: 17:39
 */

echo output("Hallo","--","--");

function output($txt,$front,$end)
{
    return $front.$txt.$end;
}