<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $descricao = $_POST['descricao'];
    $tipoDeCalculo = $_POST['tipoCalculo'];
    $quantidade = $_POST['quantidade'];
    $valor = $_POST['valor'];

    $totalOrcamento = 0.0;
    $quantityArrayFields = count($_POST['descricao']);

    for ($i=0; $i < $quantityArrayFields; $i++) { 

        $unitQuantity = (float) $quantidade[$i];
        $valueQuantity = (float) $valor[$i];

        $total = $quantidade[$i] * $valor[$i];
        echo "Serviço {$descricao[$i]} no valor de R$" .  number_format($total, 2, ',', '.') . "</br>";

        $totalOrcamento += $total;
    }	    
    
    echo "O total do serviço é R$" . number_format($totalOrcamento, 2, ',', '.');

    }

