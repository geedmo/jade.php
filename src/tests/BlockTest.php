<?php
namespace Jade\Tests;

/**
 * Class Block test
 * @package Jade\Tests
 */
class BlockTest extends TestBase {
    public function testBlock_Expansion() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
    public function testBlock_Expansion_Shorthands() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            