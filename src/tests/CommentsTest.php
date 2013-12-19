<?php
namespace Jade\Tests;

/**
 * Class Comments test
 * @package Jade\Tests
 */
class CommentsTest extends TestBase {
    public function testComments_Conditional() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
    public function testComments() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            