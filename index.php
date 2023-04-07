<?php
if (isset($_SESSION['user'])) {
    header('Location: profile.html');
    exit;
}
header('Location: home.html');
exit;
