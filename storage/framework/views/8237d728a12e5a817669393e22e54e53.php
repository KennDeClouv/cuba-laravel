<?php switch(Route::currentRouteName()):
    case ('admin.footer_dark'): ?>
        <footer class="footer footer-dark">
        <?php break; ?>
    
    <?php case ('admin.footer_fixed'): ?>
        <footer class="footer footer-fix">
        <?php break; ?>

    <?php default: ?>
       <footer class="footer">
<?php endswitch; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 footer-copyright text-center">
                <p class="mb-0">Copyright <span class="year-update"> </span> © Cuba Theme By Pixelstrap </p>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH D:\01 - Projects\04 TECHNOBIT DEV\laravel\cuba-laravel\resources\views/layouts/simple/footer.blade.php ENDPATH**/ ?>