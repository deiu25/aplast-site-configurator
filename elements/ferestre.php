<!-- Ferestre -->
<div class="container">
    <div class="row">
        <?php for($i=0; $i<2; $i++): ?>
            <div class="col-md-4 d-flex justify-content-center mt-5">
                <div class="d-flex flex-column">
                    <div class="box d-flex flex-column align-items-center"></div>
                    <div class="door-text">Usa intrare 1 canat Stanga</div>
                </div>
            </div>
        <?php if(($i+1) % 3 == 0 && $i != 4): ?>
        </div>
        <div class="row">
        <?php endif; ?>
        <?php endfor; ?>
    </div>
</div>