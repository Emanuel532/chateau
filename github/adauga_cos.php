<?php
session_start();


if (isset($_POST['action'])) {
    echo "<alert>" . $_POST['action'] .  "</alert>";
    $_SESSION['cos'][$_POST['action']]= 1;

}