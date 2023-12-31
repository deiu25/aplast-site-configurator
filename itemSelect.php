<?php include "includes/header.php"; ?>

<!-- Navigation -->
<?php include "includes/navigation.php"; ?>

<!-- Page Content -->
<div class="container margin-top">
    <div class="row justify-content-center custom-container ">
        <ul class="item-select-ul nav d-flex flex-row flex-lg-row justify-content-center align-items-center nav-pills mb-3" id="myTab" role="tablist">
            <li class="custom d-flex justify-content-center me-lg-5 mb-3 mb-lg-0" role="presentation">
                <button class="nav-link d-flex flex-column flex-lg-row justify-content-center align-items-center" id="usiIntrare-tab" data-bs-toggle="tab" data-bs-target="#usiIntrare-tab-pane" type="button" role="tab" aria-controls="usiIntrare-tab-pane" aria-selected="true">
                    <img src="getsvg.php?svg=usiIntrare" alt="Usi de intrare" class="img-fluid element-img">
                    <p class="color-primary mt-3">Usi de intrare</p>
                </button>
            </li>
            <li class="custom d-flex justify-content-center ms-lg-3 mb-3 mb-lg-0" role="presentation">
                <button class="nav-link d-flex flex-column flex-lg-row justify-content-center align-items-center" id="usiBalcon-tab" data-bs-toggle="tab" data-bs-target="#usiBalcon-tab-pane" type="button" role="tab" aria-controls="usiBalcon-tab-pane" aria-selected="false">
                    <img src="getsvg.php?svg=usiBalcon" alt="Usi de balcon" class="img-fluid element-img">
                    <p class="color-primary mt-3">Usi de balcon</p>
                </button>
            </li>
            <li class="custom d-flex justify-content-center ms-lg-5" role="presentation">
                <button class="nav-link d-flex flex-column flex-lg-row justify-content-center align-items-center" id="ferestre-tab" data-bs-toggle="tab" data-bs-target="#ferestre-tab-pane" type="button" role="tab" aria-controls="ferestre-tab-pane" aria-selected="false">
                    <img src="getsvg.php?svg=ferestre" alt="Ferestre" class="img-fluid element-img">
                    <p class="color-primary mt-3">Ferestre</p>
                </button>
            </li>
        </ul>
    </div>

    <div class="row align-items-center">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="usiIntrare-tab-pane" role="tabpanel" aria-labelledby="usiIntrare-tab">
                <?php include "./elements/usiIntrare.php"; ?>
            </div>
            <div class="tab-pane fade" id="usiBalcon-tab-pane" role="tabpanel" aria-labelledby="usiBalcon-tab">
                <?php include "./elements/usiBalcon.php"; ?>
            </div>
            <div class="tab-pane fade" id="ferestre-tab-pane" role="tabpanel" aria-labelledby="ferestre-tab">
                <?php include "./elements/ferestre.php"; ?>
            </div>
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>