<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 15/10/2018
 * Time: 10:57
 */

namespace src;

class Laptop
{

    /**
     * @var bool
     */
    private $open;

    /**
     * Open laptop
     */
    public function Open(){
        return $this->open = true;
    }

    /**
     * Close laptop
     */
    public function Close(){
        return $this->open = false;
    }
}