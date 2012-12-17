<?php
require_once 'lib/Benchmark.php';
class DoubleQuotesString extends Benchmark
{
    const TIMES = 20000000;
    protected $description = 'Double-quotes strings instantiation';

    public function run() {
        for ($i = 0; $i < self::TIMES; $i++) {
            $string = "new string instance";
        }
    }
}
