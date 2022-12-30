package main

func RunningSum(nums []int) []int {
	result := []int{}
	result = append(result, nums[0])
	size := len(nums)

	for i := 1; i < size; i++ {
		aux := result[i-1] + nums[i]

		result = append(result, aux)
	}

	return result
}
