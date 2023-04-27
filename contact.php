<?php
session_start();
if (isset($_SESSION['admin'])) {
    if ($_SESSION['admin'] == 1) {
        header('Location: feedback.php');
        exit;
    }
}
header('Location: user_contact.php');
exit;
