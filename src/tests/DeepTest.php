<?php
namespace Jade\Tests;

/**
 * Class Deep test
 * @package Jade\Tests
 */
class DeepTest extends TestBase {
    public function testDeep_Arrays() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            