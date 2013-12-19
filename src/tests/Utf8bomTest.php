<?php
namespace Jade\Tests;

/**
 * Class Utf8bom test
 * @package Jade\Tests
 */
class Utf8bomTest extends TestBase {
    public function testUtf8bom() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            