<?php
/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 15/10/2018
 * Time: 11:26
 */

namespace src\PrototypePattern;

class FooBookPrototype extends BookPrototype
{
    /**
     * Setting book category.
     *
     * @var string
     */
    protected $category = 'Foo';
    /**
     * This function extends the abstract class method
     * __clone and clones the current object class.
     */
    public function __clone()
    {
    }
}