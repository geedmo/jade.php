<?php
namespace Jade\Tests;

/**
 * Class Includes test
 * @package Jade\Tests
 */
class IncludesTest extends TestBase {
    public function testIncludes() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $verification = str_replace("\r\n","\n", $verification);
        $verification = str_replace("\r","\n", $verification);
        $rendered = str_replace("\r\n","\n", $rendered);
        $rendered = str_replace("\r","\n", $rendered);
        $this->assertEquals($verification, $rendered);
    }
    
}
            