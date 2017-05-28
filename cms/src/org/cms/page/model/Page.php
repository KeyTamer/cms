<?php
namespace src\org\cms\page;

interface Page
{
    static function getInstance();
    
    function get($arg);
    function createURL($arg0, $arg1);
}
?>