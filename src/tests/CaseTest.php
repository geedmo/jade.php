<?php
namespace Jade\Tests;

/**
 * Class Case test
 * @package Jade\Tests
 */
class CaseTest extends TestBase {
    public function testCase_Blocks() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
    public function testCase() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            