<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid d-flex align-items-center">
        <!-- Brand -->
        <a class="navbar-logo" href="index.php">
            <img src="getsvg.php?svg=logo" alt="Logo">
        </a>

        <div class="d-flex align-items-center">

            <!-- Navbar links -->
            <div class="navbar-collapse flex-row me-auto" id="navbarNav">
                <ul class="navbar-nav flex-row gap-4 align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Productie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Birouri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Cariere</a>
                    <li class="nav-item">
                        <?php
                        $currentPage = basename($_SERVER['PHP_SELF']);
                        ?>
                        <a href="itemSelect.php">
                            <?php if ($currentPage != 'configurator.php') : ?>
                                <img src="<?php echo $currentPage == 'index.php' || $currentPage == 'shoppingCart.php' ? 'getsvg.php?svg=configuratorBlack' : 'getsvg.php?svg=configurator'; ?>" alt="configurator" class="nav-link">
                            <?php endif; ?>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="ms-5"></div>
            <div class="navbar-nav flex-row ms-5 align-items-center">
                <a class="nav-link me-3" href="#"><i class="bi bi-globe"></i></a>
                <a class="nav-link me-3" href="shoppingCart.php">
                    <i class="bi bi-cart <?php if ($currentPage == 'shoppingCart.php') echo 'active'; ?>"></i>
                </a>
                <a class="nav-link" href="#"><i class="bi bi-list"></i></a>
            </div>

        </div>
    </div>
</nav>