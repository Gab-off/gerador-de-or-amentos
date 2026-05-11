<?php
require "pedido_dados.php"; 

/**
 * @var string $employerEnterprise
 * @var string $employerName
 * @var string $jobCostFormatted
 * @var string $discountedCostFormatted
 * @var string $isUrgentJob
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Project Budget</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1 class="employer-enterprise">Project Budget for <?= $employerEnterprise ?></h1>
            <p class="employer-name">Contractor: <?= $employerName ?></p>
        </header>
        <main>
            <p>Total Budget: <?= $jobCostFormatted ?></p>
            <p>Budget with discount: <?= $discountedCostFormatted ?></p>
        </main>
        <footer>
            <h4 class="urgent-job"><?= $isUrgentJob ?></h4>
        </footer>
    </div>
</body>
</html>
