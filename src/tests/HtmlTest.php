<?php
namespace Jade\Tests;

/**
 * Class Html test
 * @package Jade\Tests
 */
class HtmlTest extends TestBase {
    public function testHtml() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            