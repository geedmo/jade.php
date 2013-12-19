<?php
namespace Jade\Tests;

/**
 * Class Mixins test
 * @package Jade\Tests
 */
class MixinsTest extends TestBase {
    public function testMixins() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            