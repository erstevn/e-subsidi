<div class="container-fluid">
    <div class="row">
        <div class="border border-3 p-5 mb-5 col-lg-8 col mx-auto mt-5 bg-light rounded-32 min-vh-100">
            <div class="container py-2">
                <h1 class="display-5 text-center fw-bold my-3">Riwayat Aktivitas</h1>
                <div class="accordion accordion-flush" id="riwayat">
                    <?php $i = 0 ?>
                    <?php foreach ($data['riwayatFull']  as $r) : ?>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading<?= $i ?>">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= $i ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <span class='badge bg-secondary me-3'><?= $r['timestamp'] ?? '' ?></span><?= $r['userId'] . ' ' . $r['aksi'] ?>
                                </button>
                            </h2>
                            <div id="flush-collapse<?= $i ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?= $i ?>" data-bs-parent="#riwayat">
                                <div class="accordion-body"><?= $r['nikDipengaruhi'] ?? 'Tidak ada Keterangan' ?></div>
                            </div>
                            <?php $i++ ?>
                        <?php endforeach ?>
                        </div>
                </div>
            </div>
        </div>

    </div>
</div>