<?php
namespace Jade\Tests;

/**
 * Class Each test
 * @package Jade\Tests
 */
class EachTest extends TestBase {
    public function testEach_Else() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            