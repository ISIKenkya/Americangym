<?php
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('Location: ../../login/login.html');
?>