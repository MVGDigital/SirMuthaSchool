<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($page_title ?? 'Sir Mutha') ?></title>

    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/splide.min.css') ?>">
    <!-- <link rel="stylesheet" href="<?= base_url('css/splide-core.min.css') ?>"> -->
    <link rel="stylesheet" href="<?= base_url('css/custom.css') ?>">
</head>
<body>

    <!-- Header Section -->
    <nav class="navbar  navbar-light">
        <div class="container-fluid itemSpaceBetween">
          <a class="navbar-brand logo" href="<?= base_url('index') ?>">
            <img src="<?= base_url('images/sir-mutha-logo.svg') ?>" class="img-fluid" alt="Sir Mutha School Logo">
            <p>Sir mutha school</p>
          </a>
          <div class="headerInfo">
            <a class="contactBtn" href="<?= base_url('about') ?>">contact Us</a>
            <!-- Search Code -->
            <button class="search">
                <img src="<?= base_url('images/search.svg') ?>" alt="">
            </button>         
            <!-- Search Code -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <img src="<?= base_url('images/menu-icon.svg') ?>" alt="menu icon">
            </button>
          </div>
        </div>
    </nav>
    <!-- Header Section -->