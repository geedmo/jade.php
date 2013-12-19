<?php
namespace Jade\Tests;

/**
 * Class Html5 test
 * @package Jade\Tests
 */
class Html5Test extends TestBase {
    public function testHtml5() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            