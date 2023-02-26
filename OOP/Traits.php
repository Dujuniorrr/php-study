<?php

    trait Objects{
        public function test(){
            echo "Testando objeto";
        }
    }

    class Central{
        use Objects;
    }

    $test = new Central;
    $test->test();
?>