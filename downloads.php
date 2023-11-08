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

<section class="mb-5">
    <div class="row p-4 justify-content-center g-4 bottom">
        <div class="col-md-3 border border-3 rounded p-4 mr-3 download-card">
            <h2>Sticlă izolatoare</h2>
            <p>Umplerea cu gaz argon în spațiul dintre geamuri aduce o contribuție suplimentară la creșterea izolației termice. Cu un geam triplu foarte izolant de la Aplast, puteți atinge chiar valori Uw de până la 0,68 W / m²K și astfel vă puteți multiplica potențialul de economisire.</p>
        </div>
        <div class="col-md-3 border border-3 rounded p-4 mx-3 download-card">
            <h2>Distanțier de geam</h2>
            <p>Acest lucru menține gazul Argon izolant termic în spațiul dintre geamuri și previne pătrunderea vaporilor de apă. Distanțierele de sticlă din PVC foarte izolante reduc aburirea panoului de pe partea camerei, la marginile baghetelor de fixare ale geamului.</p>
        </div>
        <div class="col-md-3 border border-3 rounded p-4 ml-3 download-card">
            <h2>Profilul ferestrei</h2>
            <p>Relația dintre numărul de camere ale profilului, grosimea profilului și adâncimea de instalare a acestuia trebuie să fie optimă. De exemplu, un profil de 70 mm ar trebui să aibă cel puțin 5 camere de profil pentru o izolare optimă a cadrului.</p>
        </div>
    </div>
</section>

<?php
$sectiuni = [
    [
        'titlu' => 'Sticlă izolatoare',
        'text' => 'Umplerea cu gaz argon în spațiul dintre geamuri aduce o contribuție suplimentară la creșterea izolației termice. Cu un geam triplu foarte izolant de la Aplast, puteți atinge chiar valori Uw de până la 0,68 W / m²K și astfel vă puteți multiplica potențialul de economisire.'
    ],
    // Adaugă aici mai multe înregistrări...
];

echo '<section class="mb-5"><div class="row p-4 justify-content-center g-4 bottom">';

foreach ($sectiuni as $sectiune) {
    echo '<div class="col-md-3 border border-3 rounded p-4 mr-3 download-card">';
    echo '<h2>' . $sectiune['titlu'] . '</h2>';
    echo '<p>' . $sectiune['text'] . '</p>';
    echo '</div>';
}

echo '</div></section>';
?>
