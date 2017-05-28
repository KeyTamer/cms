<?php
namespace src\org\cms\page;

/**
 *
 * @author user
 *        
 */
class Connection
{

    private static $INSTANCE = new Connection();

    private function __construct()
    {}

    public static function getInstance()
    {
        return Connection::$INSTANCE;
    }

    public function getArticle($id)
    {}

    public function getAuthor($id)
    {}
}

