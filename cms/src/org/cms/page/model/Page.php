<?php
namespace src\org\cms\page;

interface Page
{
    static function get($arg);
    static function createURL($arg0, $arg1);
}
?>