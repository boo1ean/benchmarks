<?php
require_once 'DummyKeyValueForeach.php';
require_once 'DummyValueOnlyForeach.php';

$dummy = new DummyValueOnlyForeach;
echo "value only foreach started\n";
echo $dummy->execute();
echo "\nTest ended\n";

$dummy = new DummyKeyValueForeach;
echo "key => value foreach started\n";
echo $dummy->execute();
echo "\nTest ended\n";
