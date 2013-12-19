<?php
namespace Jade\Tests;

/**
 * Class Scope test
 * @package Jade\Tests
 */
class ScopeTest extends TestBase {
    public function testScope() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            