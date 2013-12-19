<?php
namespace Jade\Tests;

/**
 * Class Styles test
 * @package Jade\Tests
 */
class StylesTest extends TestBase {
    public function testStyles() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            