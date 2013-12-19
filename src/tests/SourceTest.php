<?php
namespace Jade\Tests;

/**
 * Class Source test
 * @package Jade\Tests
 */
class SourceTest extends TestBase {
    public function testSource() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            