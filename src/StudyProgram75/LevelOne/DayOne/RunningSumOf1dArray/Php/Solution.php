<?php

namespace LeetCodePlayground\StudyProgram75\LevelOne\DayOne\RunningSumOf1dArray\Php;

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum(array $nums): array
    {
        $result = [];
        $result[] = $nums[0];
        $length = count($nums) - 1;

        for ($i = 1; $i <= $length; $i++) {
            $result[$i] = $result[$i - 1] + $nums[$i];
        }

        return $result;
    }
}