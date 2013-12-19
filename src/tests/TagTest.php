<?php
namespace Jade\Tests;

/**
 * Class Tag test
 * @package Jade\Tests
 */
class TagTest extends TestBase {
    public function testTag_Interpolation() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            