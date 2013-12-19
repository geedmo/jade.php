<?php
namespace Jade\Tests;

/**
 * Class Doctype test
 * @package Jade\Tests
 */
class DoctypeTest extends TestBase {
    public function testDoctype_Custom() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
    public function testDoctype_Default() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
    public function testDoctype_Keyword() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            