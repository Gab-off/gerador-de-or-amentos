<?php

/* group functions to login, logout and validate user */

/**
 * validate user login and password
 * @param $user
 * @param $password
 * @return string
 */
function validateLogin($user, $password): string
{
    $user = htmlspecialchars($user);
    $user = trim($user);
        if ($user === 'braz' && $password === '12345') {
            $_SESSION['logado'] = true;
        } else {
            unset($_SESSION['logado']);
            $_SESSION['message'] = 'Usuário ou senha incorretos';
        }
        return $_SESSION['message'] ?? '';
}

