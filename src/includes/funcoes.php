<?php
session_start();

// if (!isset($_SESSION['user'])) {
//     $_SESSION['user'] = "";
//     $_SESSION['nome'] = "";
//     $_SESSION['nivel'] = "";
// }

function gerarHash($senha)
{
    $hash = password_hash($senha, PASSWORD_DEFAULT);
    return $hash;
}

function testarHash($senha, $hash)
{
    $verificador = password_verify($senha, $hash);
    return $verificador;
}

function logout()
{
    $_SESSION['nick'] = "";
    $_SESSION['user'] = "";
    $_SESSION['email'] = "";
    $_SESSION['nome'] = "";
    $_SESSION['nivel'] = "";
}

function isLogado()
{
    if (empty($_SESSION['user'])) {
        return false;
    } else {
        return true;
    }
}

function isAdmin()
{
    $nivel = $_SESSION['nivel'] ?? null;
    if (is_null($nivel)) {
        return false;
    } else {
        if ($nivel == 'admin') {
            return true;
        } else {
            return false;
        }
    }
}

function isUsu()
{
    $nivel = $_SESSION['nivel'] ?? null;
    if (is_null($nivel)) {
        return false;
    } else {
        if ($nivel == 'usu') {
            return true;
        } else {
            return false;
        }
    }
}

function isEditor()
{
    $nivel = $_SESSION['nivel'] ?? null;
    if (is_null($nivel)) {
        return false;
    } else {
        if ($nivel == 'editor') {
            return true;
        } else {
            return false;
        }
    }
}
