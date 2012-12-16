<?php
require_once 'DummyKeyValueForeach.php';
require_once 'DummyValueOnlyForeach.php';
require_once 'StaticFunctionCall.php';
require_once 'NonStaticFunctionCall.php';

$dummy = new DummyValueOnlyForeach;
echo "value only foreach started\n";
echo $dummy->execute();
echo "\nTest ended\n";

$dummy = new DummyKeyValueForeach;
echo "key => value foreach started\n";
echo $dummy->execute();
echo "\nTest ended\n";

$static = new StaticFunctionCall;
echo "static function call started\n";
echo $static->execute();
echo "\nTest ended\n";

$nonstatic = new NonStaticFunctionCall;
echo "non-static function call started\n";
echo $nonstatic->execute();
echo "\nTest ended\n";
