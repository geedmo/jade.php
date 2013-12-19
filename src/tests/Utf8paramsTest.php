<?php
namespace Jade\Tests;

/**
 * Class Utf8params test
 * @package Jade\Tests
 */
class Utf8paramsTest extends TestBase {
    public function testUtf8params() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            