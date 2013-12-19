<?php
namespace Jade\Tests;

/**
 * Class Input test
 * @package Jade\Tests
 */
class InputTest extends TestBase {
    public function testInput_Checked() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
    public function testInput_Selected() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            