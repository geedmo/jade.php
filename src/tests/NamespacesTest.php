<?php
namespace Jade\Tests;

/**
 * Class Namespaces test
 * @package Jade\Tests
 */
class NamespacesTest extends TestBase {
    public function testNamespaces() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            