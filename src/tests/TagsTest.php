<?php
namespace Jade\Tests;

/**
 * Class Tags test
 * @package Jade\Tests
 */
class TagsTest extends TestBase {
    public function testTags_Self_Closing() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            