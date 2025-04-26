<?php
class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        foreach ($nums as $index1 => $num) {
            foreach ($nums as $index2 => $num_2) {
                if ($index1 !== $index2) {
                    $sum = $num + $num_2;
                    if ($sum == $target) {
                        return [$index1, $index2];
                    }
                }
            }
        }
    }
}
