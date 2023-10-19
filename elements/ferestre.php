<!-- Page Content -->
<div class="container">
    <div class="row">
        <?php for($i=0; $i<2; $i++): ?>
        <div class="col-md-4 d-flex justify-content-center mt-5">
            <div class="box"></div>
        </div>
        <?php if(($i+1) % 3 == 0 && $i != 4): ?>
        </div>
        <div class="row">
        <?php endif; ?>
        <?php endfor; ?>
    </div>
</div>