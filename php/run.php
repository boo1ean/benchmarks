<?php
define('TEST_EXT', '.php');

$tests = array(
    'DummyKeyValueForeach',
    'DummyValueOnlyForeach',
    'StaticFunctionCall',
    'NonStaticFunctionCall',
    'SingleQuotesString',
    'DoubleQuotesString'
);

foreach ($tests as $test) {
    require_once $test . TEST_EXT;
    $bench = new $test();
    $bench->execute();
    $bench->describe();
	echo "\n";
}
