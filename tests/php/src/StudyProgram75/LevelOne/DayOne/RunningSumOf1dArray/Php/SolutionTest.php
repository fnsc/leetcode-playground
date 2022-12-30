<?php

namespace LeetCodePlayground\StudyProgram75\LevelOne\DayOne\RunningSumOf1dArray\Php;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @dataProvider getSumArrayProvider
     */
    public function testShouldReturnTheSum(array $haystack, array $expected): void
    {
        // Set
        $service = new Solution();

        // Action
        $result = $service->runningSum($haystack);

        // Assertions
        $this->assertSame($expected, $result);
    }

    public function getSumArrayProvider(): array
    {
        return [
            [
                'haystack' => [1,2,3,4],
                'expected' => [1,3,6,10],
            ],
            [
                'haystack' => [1,1,1,1,1],
                'expected' => [1,2,3,4,5],
            ],
            [
                'haystack' => [3,1,2,10,1],
                'expected' => [3,4,6,16,17],
            ],
        ];
    }
}