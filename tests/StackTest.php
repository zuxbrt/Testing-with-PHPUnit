<?php

/**
 * Created by PhpStorm.
 * User: zulfo
 * Date: 15/10/2018
 * Time: 10:18
 */

use PHPUnit\Framework\TestCase;

class TestOne extends TestCase
{
    /**
     * Testing array operations
     */
    public function testPushAndPop()
    {
        $stack = [];
        $this->assertSame(0, count($stack));

        array_push($stack, 'foo');
        $this->assertSame('foo', $stack[count($stack) - 1]);
        $this->assertSame(1, count($stack));

        $this->assertSame('foo', array_pop($stack));
        $this->assertSame(0, count($stack));
    }
}