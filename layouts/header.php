<!DOCTYPE html>
<html lang="en">
<head>

<?php require_once './layouts/head.php'; ?>

</head>
<body>
<div id="treehose">
        <!-- HEADER -->

    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <div><a class="header__logo" href="/PHP_HW5/?page=home" title="Tree house logo">
                    <span class="header__logo_img"></span>
                    <span class="header__logo_name">TreeHous</span></a>
                </div>
                <button class="header__nav_bnt"><label class="toggle" for="header__nav"><span></span><span></span><span></span></label></button>
                <input type="checkbox" id="header__nav">
                <?php require_once './layouts/nav.php'; ?>
            </div>
        </div>
    </header>