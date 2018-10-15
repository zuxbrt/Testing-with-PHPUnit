<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 15/10/2018
 * Time: 11:24
 */

namespace src\PrototypePattern;

abstract class BookPrototype
{
    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $category;

    /**
     * Defining abstract class method for cloning object.
     *
     * @return mixed
     */
    abstract public function __clone();


    /**
     * Method for getting book title.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }


    /**
     * Method for setting book title.
     *
     * @param $title
     * @return string
     */
    public function setTitle($title): string
    {
        return $this->title = $title;
    }

}