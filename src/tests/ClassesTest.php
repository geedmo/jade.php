<?php
namespace Jade\Tests;

/**
 * Class Classes test
 * @package Jade\Tests
 */
class ClassesTest extends TestBase {
    public function testClasses_Empty() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
    public function testClasses() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            