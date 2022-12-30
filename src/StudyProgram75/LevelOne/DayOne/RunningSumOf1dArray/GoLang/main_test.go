package main

import "testing"

func TestSumOf1dArray(t *testing.T) {
	var scenarios = []struct {
		input    []int
		expected []int
	}{
		{[]int{1, 2, 3, 4}, []int{1, 3, 6, 10}},
		{[]int{1, 1, 1, 1, 1}, []int{1, 2, 3, 4, 5}},
		{[]int{3, 1, 2, 10, 1}, []int{3, 4, 6, 16, 17}},
	}

	for _, scenario := range scenarios {
		result := RunningSum(scenario.input)

		if result != scenario.expected {
			t.Error("Test Failed: {} input, {} expected, received: {}", scenario.input, scenario.expected, result)
		}
	}
}
