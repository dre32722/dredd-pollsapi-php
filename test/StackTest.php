<?php

class StackTest extends \PHPUnit_Framework_TestCase
{
    public function testInitialPage()
    {
        $stack = array();
        $this->assertEquals(0, count($stack));
    }
}
