<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 15/10/2018
 * Time: 10:18
 */

use src\Laptop;
use PHPUnit\Framework\TestCase;

class LaptopTest extends TestCase
{
    /**
     * Testing laptop Class
     */
    public function testPushAndPop()
    {
        // create a new laptop class
        $laptop = new Laptop();

        // open laptop
        $this->assertSame(true, $laptop->Open());

        // close laptop
        $this->assertSame(false, $laptop->Close());
    }
}