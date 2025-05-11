<?php
session_start();
if (isset($_SESSION['profile'])) {
    header("Location: profile.php");
} else {
    header("Location: edit_profile.php");
}
exit;