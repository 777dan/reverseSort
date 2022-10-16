<?php
$arr = ["Hello world!", "Bye world!", "Hello dog", "Hello cat", "Bye fox"];
function cmp($a, $b)
{
    for ($i = 0; $i < func_num_args(); $i++) {
        return $a <=> $b;
    }
}

uasort($arr, "cmp");
print_r($arr);
