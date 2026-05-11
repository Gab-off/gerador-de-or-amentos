<?php
/**
 * Calculates the maximum cost of a job based on the total hours and value per hour.
 * Applies a discount if the discount is greater than the maximum allowed discount.
 * Returns a string indicating an urgency fee if the job is urgent.
 * Converts a value to BRL format.
 */

require_once "config.php";

/**
 * Calculates the maximum cost of a job based on the total hours and value per hour.
 *
 * @param int $totalHoursJob The total number of hours for the job.
 * @param float $valueHour The value per hour for the job.
 * @return float The maximum cost of the job.
 */
function calculateCostJob(int $totalHoursJob, float $valueHour): float
{
    return $totalHoursJob * $valueHour;
}

/**
 * Applies a discount to the maximum cost of a job.
 *
 * @param float $maxCost The maximum cost of the job.
 * @param float $discount The discount to apply.
 * @return float The cost of the job after applying the discount.
 */
function applyDiscount(float $maxCost, float $discount = 0): float
{
    if ($discount > MAX_DISCOUNT) {
        $discount = MAX_DISCOUNT;
    }
    return $maxCost - ($maxCost * $discount) / 100;
}

/**
 * Indicates an urgency fee if the job is urgent.
 *
 * @param bool $isUrgent Whether the job is urgent.
 * @return string A string indicating an urgency fee if the job is urgent, or an empty string otherwise.
 */
function urgentJob(bool $isUrgent = false): string
{
    if ($isUrgent) {
        return "Priority service may have an urgency fee.";
    }
    return "";
}

/**
 * Converts a value to BRL format.
 *
 * @param float $value The value to convert.
 * @return string The value in BRL format.
 */
function valueToBRL(float $value): string
{
    return "R$ " . number_format($value, 2, ",", ".");
}
