<?php
require_once 'lib/Benchmark.php';
class DummyKeyValueForeach extends Benchmark
{
	protected $description = '9 deep foreach key => value';

    public function run() {
        foreach (array(1, 2, 3, 4, 5, 6) as $key => $dummy)
            foreach (array(1, 2, 3, 4, 5, 6) as $key => $dummy)
                foreach (array(1, 2, 3, 4, 5, 6) as $key => $dummy)
                    foreach (array(1, 2, 3, 4, 5, 6) as $key => $dummy)
                        foreach (array(1, 2, 3, 4, 5, 6) as $key => $dummy)
                            foreach (array(1, 2, 3, 4, 5, 6) as $key => $dummy)
                                foreach (array(1, 2, 3, 4, 5, 6) as $key => $dummy)
                                    foreach (array(1, 2, 3, 4, 5, 6) as $key => $dummy)
                                        foreach (array(1, 2, 3, 4, 5, 6) as $key => $dummy);
    }
}
