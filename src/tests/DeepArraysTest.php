<?php

namespace Jade\Tests;

/**
 * Class CommentsTest
 * @package Jade\Tests
 */
class DeepArraysTest extends TestBase {
    public function testDeep_Arrays() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
}
 