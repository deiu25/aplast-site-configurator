<nav class="navbar navbar-expand-lg" id="navbar">
    <div class="container-fluid d-flex align-items-center">
        <a class="navbar-logo" href="index.php">
            <img src="getsvg.php?svg=logo" alt="Logo">
        </a>

        <div class="d-flex align-items-center">

            <!-- Navbar links -->
            <div class="d-none d-lg-block">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto gap-4 align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="production.php">Productie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="offices.php">Birouri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactPage.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cariere.php">Cariere</a>
                        <li class="nav-item">
                            <?php
                            $currentPage = basename($_SERVER['PHP_SELF']);
                            $whiteBgPages = ['index.php', 'shoppingCart.php', 'production.php', 'offices.php', 'contactPage.php', 'cariere.php', 'productLines.php', 'architects.php', 'installers.php', 'durabilitate.php', 'downloads.php', 'compliance.php', 'termsAndConditions.php', 'cookiePolicy.php', 'gdprPolicy.php', 'customerInformationNote.php', 'canditateInformationNote.php', 'pvc.php', 'aluminiu.php', 'momFerestre.php', 'momUsi.php', 'momProduseSpeciale.php', 'standardFerestre.php', 'standardUsi.php'];

                            function getSvg($currentPage, $whiteBgPages)
                            {
                                if (in_array($currentPage, $whiteBgPages)) {
                                    return 'getsvg.php?svg=configuratorBlack';
                                } else {
                                    return 'getsvg.php?svg=configurator';
                                }
                            }
                            ?>

                            <?php if ($currentPage == 'configurator.php') : ?>
                                <div class="bg-confg-btn d-flex justify-content-center align-items-center white-bg">
                                    <a href="itemSelect.php"></a>
                                </div>
                            <?php else : ?>
                                <div class="bg-confg-btn d-flex justify-content-center align-items-center <?php echo in_array($currentPage, $whiteBgPages) ? 'white-bg' : '' ?>">
                                    <a href="itemSelect.php">
                                        <img src="<?php echo getSvg($currentPage, $whiteBgPages); ?>" alt="configurator" class="nav-link">
                                    </a>
                                </div>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="ms-5"></div>
            <div class="navbar-nav flex-row ms-5 align-items-center">
                <a class="nav-link me-3" href="#"><i class="bi bi-globe"></i></a>
                <a class="nav-link me-3 d-none d-lg-block" href="shoppingCart.php">
                    <i class="bi bi-cart <?php if ($currentPage == 'shoppingCart.php') echo 'active'; ?>"></i>
                </a>
                <button class="navbar-toggler" type="button" onclick="togglesmallMenu()" aria-controls="navbarNav navbarNavSmall" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars menu-btn"></i>
                </button>
            </div>
        </div>
    </div>
    <?php include "elements/smallScreensNav.php"; ?>
</nav>