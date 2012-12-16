<?php
abstract class Benchmark
{
    /**
     * Code to test.
     */
    abstract public function run();

    /**
     * Execute benchmark and count time.
     * @return float elapsed time in seconds.
     */
    public function execute() {
        $start = microtime(true);
        $this->run();
        return microtime(true) - $start;
    }
}
