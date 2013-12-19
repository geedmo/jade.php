<?php

namespace Jade\Tests;

use Jade\Jade;
use PHPUnit_Framework_TestCase;

abstract class TestBase extends PHPUnit_Framework_TestCase {
    /**
     * @var Jade
     */
    private $jade = null;
    private $assets = '';
    protected function setUp() {
        $this->assets = dirname(__FILE__) . '/assets';
        $this->jade = new Jade(true);
    }

    /**
     * @param string $test_method
     * @return string
     */
    protected function verification($test_method) {
        $filename = implode('.', explode('_', substr($test_method,4)));
        return preg_replace('~\R~u', "\n", file_get_contents($this->assets . strtolower("/$filename.html")));
    }

    /**
     * @param string $test_method
     * @return string
     */
    protected function jadeFile($test_method) {
        $filename = implode('.', explode('_', substr($test_method,4)));
        return file_get_contents($this->assets . strtolower("/$filename.jade"));
    }

    /**
     * @param string $test_method
     * @param array $scope
     * @return string
     */
    protected function render($test_method, $scope = array()) {
        $content = $this->jade->render($this->jadeFile($test_method), $scope, array('includes' => dirname(__FILE__). DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR));
        $results_dir = dirname(__FILE__) . '/results/';
        if (!file_exists($results_dir))
            mkdir($results_dir);
        file_put_contents($results_dir. $test_method .".php", $content);
        ob_start();
        clearstatcache();
        extract($scope);
        eval("?>" . $content);
        $rendered = ob_get_contents();
        ob_end_clean();
        return $rendered;
    }
} 