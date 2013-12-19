<?php
namespace Jade\Tests;

/**
 * Class Nesting test
 * @package Jade\Tests
 */
class NestingTest extends TestBase {
    public function testNesting() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            