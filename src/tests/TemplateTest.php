<?php
namespace Jade\Tests;

/**
 * Class Template test
 * @package Jade\Tests
 */
class TemplateTest extends TestBase {
    public function testTemplate() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            