<?php

namespace Jade\Tests;

/**
 * Class Each Else test
 * @package Jade\Tests
 */
class EscapeCharsTest extends TestBase {
    public function testEscape_Chars() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
}
 