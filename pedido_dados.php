<?php

require "calculos.php";

$employerName = "Carl Seagan";
$employerEnterprise = "Seagan Enterprises";
$estimatedHours = 160;
$percetualDiscountSolicited = 10;
$urgencyJob = true;

$jobCost = calculateCostJob(
    totalHoursJob: $estimatedHours,
    valueHour: VALUE_HOUR,
);
$discountedCost = applyDiscount(
    maxCost: $jobCost,
    discount: $percetualDiscountSolicited,
);

$isUrgentJob = urgentJob(isUrgent: $urgencyJob);

$jobCostFormatted = valueToBRL($jobCost);
$discountedCostFormatted = valueToBRL($discountedCost);
