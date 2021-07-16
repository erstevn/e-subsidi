<?php

use Ebansos\core\App;
?>
<nav class="w-100 px-3 mb-4 fixed-top border-bottom navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand my-2 fw-bold" href="<?= BASEURL ?>">
        <img src="<?= LOGOURL ?>" alt="logo" height="32">
        <?= APPNAME ?> <?= KELURAHAN ?>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">

            <li class="nav-item ms-1 me-3 my-auto text-center">
                <span class="nav-link active p-3">Halo, <?= $_SESSION['user']['namaAkun'] ?> <i class="bi bi-emoji-smile"></i></span>
            </li>
            <li class="nav-item my-auto text-center">
                <a class="nav-link <?php if (($data['navActive'] ?? '') == 'beranda') {
                                        echo 'active';
                                    } ?>" href="<?= BASEURL ?>">Beranda</a>
            </li>
            <li class="nav-item my-auto text-center">
                <a class="nav-link" href="<?= BASEURL ?>/keluar">Log Out</a>
            </li>
        </ul>
    </div>
</nav>
<main style='margin-top:128px; padding-bottom:64px' class='mb-5'>