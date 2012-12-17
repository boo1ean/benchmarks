<?php
require_once 'lib/Benchmark.php';
class SingleQuotesString extends Benchmark
{
    const TIMES = 20000000;
    protected $description = 'Single-quotes strings instantiation';

    public function run() {
        for ($i = 0; $i < self::TIMES; $i++) {
            $string = 'new string instance';
        }
    }
}
