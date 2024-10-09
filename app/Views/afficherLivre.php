<?php ob_start() ?>

<div class="row w-100">
    <div class="col-6">
        <img src="<?= SITE_URL ?>images/<?= $livre->getUrlImage() ?>" alt="<?= $livre->getTextAlternatif() ?>">
    </div>
</div>
<div class="col-6">
    <p>Titre : <?= $livre->getTitre() ?></p>
    <p>Nombre de pages : <?= $livre->getNbreDePages() ?></p>
</div>


<?php
$titre = $livre->getTitre();
$content = ob_get_clean();
require_once 'template.php';
