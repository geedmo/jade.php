<?php

namespace Jade\Tests;

/**
 * Class Each Else test
 * @package Jade\Tests
 */
class EachElseTest extends TestBase {
    public function testEach_Else() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
}
 