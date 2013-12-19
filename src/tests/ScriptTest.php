<?php
namespace Jade\Tests;

/**
 * Class Script test
 * @package Jade\Tests
 */
class ScriptTest extends TestBase {
    public function testScript_Whitespace() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            