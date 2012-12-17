<?php
require_once 'lib/Benchmark.php';
class Fixture
{
    public static function feature() {
        return 1 + 2 + 3;
    }
}

class StaticFunctionCall extends Benchmark
{
    const TIMES = 10000000;
	protected $description = '10000000 static function call';

    public function run() {
        for ($i = 0; $i < self::TIMES; $i++) {
            Fixture::feature();
        }
    }
}
