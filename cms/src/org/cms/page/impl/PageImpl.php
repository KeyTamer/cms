<?php
namespace src\org\cms\page\impl;

use src\org\cms\page\Page;

/**
 *
 * @author user
 *        
 */
class PageImpl implements Page
{
    private static $instance = new PageImpl();
    
    /**
     */
    private function __construct()
    {
        
        // TODO - Insert your code here
    }

    /**
     * (non-PHPdoc)
     *
     * @see \src\org\cms\page\Page::get()
     *
     */
    public function get($arg)
    {
        
        // TODO - Insert your code here
    }

    /**
     * (non-PHPdoc)
     *
     * @see \src\org\cms\page\Page::createURL()
     *
     */
    public function createURL($arg0, $arg1)
    {
        
        // TODO - Insert your code here
    }

    /**
     * (non-PHPdoc)
     *
     * @see \src\org\cms\page\Page::getInstance()
     *
     */
    public static function getInstance()
    {
        return PageImpl::$instance;
    }

    /**
     */
    function __destruct()
    {
        
        // TODO - Insert your code here
    }
}

