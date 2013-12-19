<?php
namespace Jade\Tests;

/**
 * Class Vars test
 * @package Jade\Tests
 */
class VarsTest extends TestBase {
    public function testVars() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            