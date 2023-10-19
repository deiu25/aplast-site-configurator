<?php include "includes/header.php"; ?>

<!-- Navigation -->
<?php include "includes/navigation.php"; ?>

<!-- Page Content -->
<div class="">
    <div class="row justify-content-center custom-container">
        <div class="col-md-2 d-flex flex-row justify-content-center align-items-center">
            <a href="configurator.php?tip=usiIntrare">
                <img src="getsvg.php?svg=usiIntrare" alt="Usi de intrare" class="img-fluid element-img">
            </a>
            <p class="mt-3">Usi de intrare</p>
        </div>
        <div class="col-md-2 d-flex flex-row justify-content-center align-items-center">
            <a href="configurator.php?tip=usiDeBalcon">
                <img src="getsvg.php?svg=usiDeBalcon" alt="Usi de intrare" class="img-fluid element-img">
            </a>
            <p class="mt-3">Usi de balcon</p>
        </div>
        <div class="col-md-2 d-flex flex-row justify-content-center align-items-center">
            <a href="configurator.php?tip=ferestre">
                <img src="getsvg.php?svg=ferestre" alt="Usi de intrare" class="img-fluid element-img">
            </a>
            <p class="mt-3">Ferestre</p>
        </div>
    </div>

    <div class="row align-items-center">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="usiIntrare" role="tabpanel" aria-labelledby="usiIntrare-tab">
                    <?php include "./elements/usiIntrare.php"; ?>
                </div>
                <div class="tab-pane fade" id="usiBalcon" role="tabpanel" aria-labelledby="usiBalcon-tab">
                    <?php include "./elements/usiBalcon.php"; ?>
                </div>
                <div class="tab-pane fade" id="usiInterior" role="tabpanel" aria-labelledby="usiInterior-tab">
                    <?php include "./elements/ferestre.php"; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>