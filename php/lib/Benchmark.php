<?php
abstract class Benchmark
{
    /**
     * Elapsed time for current test execution.
     */
    protected $elapsed;

    /**
     * Description of test.
     */
    protected $description = 'Unknown test';

    /**
     * Description output format.
     */
    protected $outputFormat = 'Passed :elapsed seconds';

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
        $this->elapsed = microtime(true) - $start;
    }

    /**
     * View benchmark results (echo to stdout).
     */
    public function describe() {
        echo $this->description . "\n";
        echo str_replace(':elapsed', $this->elapsed, $this->outputFormat);
        echo "\n";
    }
}
