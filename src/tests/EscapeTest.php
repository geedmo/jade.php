<?php
namespace Jade\Tests;

/**
 * Class Escape test
 * @package Jade\Tests
 */
class EscapeTest extends TestBase {
    public function testEscape_Chars() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            