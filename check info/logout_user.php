<?php
session_start();
unset($_SESSION['all-good']);
header('Location: ../index.php');