<?php
namespace src\org\cms\page;

class Controller
{

    private static $INSTANCE = new Controller();

    private function __construct()
    {}

    public function get($arg)
    {
        switch ($arg) {
            case "author":
                return "";
        }
    }

    public function createURL($arg0, $arg1)
    {}

    public static function getInstance()
    {
        return Controller::$INSTANCE;
    }
}
?>