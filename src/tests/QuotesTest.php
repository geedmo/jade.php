<?php
namespace Jade\Tests;

/**
 * Class Quotes test
 * @package Jade\Tests
 */
class QuotesTest extends TestBase {
    public function testQuotes() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            