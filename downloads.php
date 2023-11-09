<?php include "includes/header.php"; ?>

<!-- Navigation -->
<?php include "includes/navigation.php"; ?>

<section class="durabilitate-head">
    <div class="prod-img-container">
        <img class="img-fluid prod-img-h" src="./images/dura-banner-bot.webp" alt="downloads-hero">
        <h1 class="h1-prod-h left">Downloads</h1>
        <img class="logo-prod right" src="getsvg.php?svg=logoWhite" alt="logo">
    </div>
    <div class="mt-5 top">
        <h1 class="title mb-2">Downloads</h1>
        <p class="p-center-production fs-5 fw-bold text-muted mt-3">Puteți găsi cataloagele noastre mai jos</p>
    </div>
    <div class="arrow-container">
        <div class="oval-container">
            <i class="bi bi-arrow-down arrow-icon"></i>
        </div>
    </div>
</section>

<?php
$sectiuni = [
    [
        'img' => './download/visio-robusto-slim.webp',
        'pdf' => './download/GE_oki-Catalog-DE-email-FINAL.pdf',
        'titlu' => 'Vision Robusto Slim & Aluminium - versiune în limba germană'
    ],
    [
        'img' => './download/visio-robusto-slim.webp',
        'pdf' => './download/Catalog-Engleza-2021-Veka-SL70-si-Aplast-70-Plus-LowRes-Apr-2021.pdf',
        'titlu' => 'Vision Robusto Slim & Aluminium - versiune în limba engleză'
    ],
    [
        'img' => './download/visio-robusto-slim.webp',
        'pdf' => './download/Catalog-Romania-2021-Veka-SL70-si-Aplast-70-Plus-LowRes-Apr-2021.pdf',
        'titlu' => 'Vision Robusto Slim & Aluminiu - versiune în limba romană'
    ],
    [
        'img' => './download/Catalog-Franta-2019-Aplast-70-Plus.webp',
        'pdf' => './download/Catalog-Franta-2019-Aplast-70-Plus.pdf',
        'titlu' => 'Vision 70 Plus - versiune în limba franceză'
    ],
    [
        'img' => './download/Screenshot-2021-05-26-at-21.00.57.webp',
        'pdf' => './download/oki-Catalog-IT-email-FINAL.pdf',
        'titlu' => 'Aplast 70 Plus & Veka Softline - versiune în limba italiană'
    ],
    [
        'img' => './download/Catalog-Franta-2019-Veka-Softline-70.webp',
        'pdf' => './download/Catalog-Franta-2019-Veka-Softline-70.pdf',
        'titlu' => 'Veka Softline 70 - versiune în limba franceză'
    ],
    [
        'img' => './download/cer1.webp',
        'pdf' => './download/Certificat-de-conformitate-nr.-726-Ferestre-si-usi_0001-5.pdf',
        'titlu' => 'Certificat de conformitate nr. 726 - Ferestre si usi'
    ],
    [
        'img' => './download/cer3.webp',
        'pdf' => './download/ISO-7.pdf',
        'titlu' => 'Certificat ISO'
    ],
    [
        'img' => './download/cer2.webp',
        'pdf' => './download/Certificat-de-conformitate-nr.725-Elemente-de-vitraj-izolante_0001-4.pdf',
        'titlu' => 'Certificat de conformitate nr.725 - Elemente de vitraj izolante'
    ],
];

echo '<section class="mb-5 container"><div class="row p-4 justify-content-center g-4 gap-4 bottom">';

foreach ($sectiuni as $sectiune) {
    echo '<div class="col-md-3 border border-3 rounded p-4 mr-3 download-card">';
    echo '<a href="' . $sectiune['pdf'] . '" target="_blank">';
    echo '<img src="' . $sectiune['img'] . '" class="img-fluid" alt="img">';
    echo '<h6 class="text-center mt-1">' . $sectiune['titlu'] . '</h6>';
    echo '</a>';
    echo '</div>';

}

echo '</div></section>';
?>

<?php include "includes/footer.php"; ?>
<!-- 
5205914501642
160.14 -->