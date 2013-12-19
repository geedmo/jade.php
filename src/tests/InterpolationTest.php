<?php
namespace Jade\Tests;

/**
 * Class Interpolation test
 * @package Jade\Tests
 */
class InterpolationTest extends TestBase {
    public function testInterpolation_Escape() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            