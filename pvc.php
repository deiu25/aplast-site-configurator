<?php include "includes/header.php"; ?>

<!-- Navigation -->
<?php include "includes/navigation.php"; ?>

<section class="pvcAl-head">
    <div class="pvcAl-img-container">
        <img class="img-fluid pvcAl-img-h" src="getsvg.php?svg=pvcHeader" alt="pvcHeader">
        <p class="pvcAl-p left">Aplast-Windows and Doors</p>
        <h1 class="h1-pvcAl-h left">PVC</h1>
        <img class="logo-pvcAl right" src="getsvg.php?svg=logoWhite" alt="logo">
    </div>
    <div class="mt-5 top">
        <h1 class="title mb-2">PVC</h1>
        <p class="p-center-pvcAl fs-5 fw-bold text-muted mt-3">Fereastra noastră din PVC nu setează doar accente vizuale. Calitatea lor este, de asemenea, extrem de importantă pentru noi. Acestea asigură securitate, izolează împotriva frigului sau căldurii și oferă izolare fonică.</p>
    </div>
    <div class="arrow-container mt-5 mb-5">
        <div class="oval-container">
            <i class="bi bi-arrow-down arrow-icon"></i>
        </div>
    </div>
    <div class="d-grid gap-3 d-md-flex justify-content-md-center">
        <button class="btn btn-primary btn-lg left" id="mom-button">Realizat la comandă (MoM)</button>
        <button class="btn btn-outline-primary btn-lg right" id="standard-button">Standard</button>
    </div>
    <div class="container flex-row justify-content-center gap-4 mt-5 mb-5" id="mom">
        <a href="pvc.php" class="lines-image-container position-relative">
            <img class="img-fluid linesImage lines-zoom" src="./images/ferestre.webp" alt="pvc">
            <span class="lines-image-text position-absolute top-50 start-50 translate-middle">Ferestre</span>
        </a>
        <a href="aluminiu.php" class="lines-image-container position-relative">
            <img class="img-fluid linesImage lines-zoom" src="./images/usi.webp" alt="aluminiu">
            <span class="lines-image-text position-absolute top-50 start-50 translate-middle">Usi</span>
        </a>
        <a href="aluminiu.php" class="lines-image-container position-relative">
            <img class="img-fluid linesImage lines-zoom" src="./images/produse_speciale.webp" alt="aluminiu">
            <span class="lines-image-text position-absolute top-50 start-50 translate-middle">Produse Speciale</span>
        </a>
    </div>

    <div class="container flex-row justify-content-center gap-4 mt-5 mb-5 standard" id="standard">
        <a href="pvc.php" class="lines-image-container position-relative">
            <img class="img-fluid linesImage lines-zoom" src="./images/ferestre.webp" alt="pvc">
            <span class="lines-image-text position-absolute top-50 start-50 translate-middle">Ferestre</span>
        </a>
        <a href="aluminiu.php" class="lines-image-container position-relative">
            <img class="img-fluid linesImage lines-zoom" src="./images/usi.webp" alt="aluminiu">
            <span class="lines-image-text position-absolute top-50 start-50 translate-middle">Usi</span>
        </a>
    </div>

</section>


<?php include "includes/footer.php"; ?>

<script>
    document.getElementById('standard-button').addEventListener('click', function() {
        document.getElementById('mom').style.display = 'none';
        document.getElementById('standard').style.display = 'flex';
    });

    document.getElementById('mom-button').addEventListener('click', function() {
        document.getElementById('mom').style.display = 'flex';
        document.getElementById('standard').style.display = 'none';
    });
</script>