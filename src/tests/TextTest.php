<?php
namespace Jade\Tests;

/**
 * Class Text test
 * @package Jade\Tests
 */
class TextTest extends TestBase {
    public function testText_Block() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
    public function testText() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            