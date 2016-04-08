<?php
session_start();
if (isset($_SESSION['user'])) {
    echo "logged in as $_SESSION";
}else {
    echo "not logged in";
}
