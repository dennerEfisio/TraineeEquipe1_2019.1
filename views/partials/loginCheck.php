<?php

session_start();
if (!($_SESSION['login'])) {
    return header('Location: /login');
}
