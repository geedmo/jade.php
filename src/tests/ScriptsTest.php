<?php
namespace Jade\Tests;

/**
 * Class Scripts test
 * @package Jade\Tests
 */
class ScriptsTest extends TestBase {
    public function testScripts() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
    public function testScripts_Nonjs() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            