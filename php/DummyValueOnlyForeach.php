<?php
require_once 'lib/Benchmark.php';
class DummyValueOnlyForeach extends Benchmark
{
    public function run() {
        foreach (array(1, 2, 3, 4, 5, 6) as $dummy)
            foreach (array(1, 2, 3, 4, 5, 6) as $dummy)
                foreach (array(1, 2, 3, 4, 5, 6) as $dummy)
                    foreach (array(1, 2, 3, 4, 5, 6) as $dummy)
                        foreach (array(1, 2, 3, 4, 5, 6) as $dummy)
                            foreach (array(1, 2, 3, 4, 5, 6) as $dummy)
                                foreach (array(1, 2, 3, 4, 5, 6) as $dummy)
                                    foreach (array(1, 2, 3, 4, 5, 6) as $dummy)
                                        foreach (array(1, 2, 3, 4, 5, 6) as $dummy);
    }
}
