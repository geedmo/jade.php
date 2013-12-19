<?php
namespace Jade\Tests;

/**
 * Class Filters test
 * @package Jade\Tests
 */
class FiltersTest extends TestBase {
    public function testFilters_Cdata() {
        $verification = $this->verification(__FUNCTION__);
        $rendered = $this->render(__FUNCTION__);
        $this->assertEquals($verification, $rendered);
    }
    
}
            