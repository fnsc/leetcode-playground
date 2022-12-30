/**
 * @param {number[]} nums
 * @return {number[]}
 */
const runningSum = function (nums) {
    let result = [];
    result.push(nums[0]);
    let size = nums.length - 1;

    for (let i = 1; i <= size; i++) {
        result[i] = result[i - 1] + nums[i];
    }

    return result;
};
