<?php
    session_start();
    unset($_SESSION['doc_id']);
    unset($_SESSION['doc_number']);
    session_destroy();

    header("Location: 0_his_doc_logout_home.php");
    exit;
?>