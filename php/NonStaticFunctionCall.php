<?php
require_once 'lib/Benchmark.php';
class NonStaticFixture
{
    public function feature() {
        return 1 + 2 + 3;
    }
}

class NonStaticFunctionCall extends Benchmark
{
    const TIMES = 10000000;
    public function run() {
        $fixture = new NonStaticFixture;
        for ($i = 0; $i < self::TIMES; $i++) {
            $fixture->feature();
        }
    }
}
