<!DOCTYPE html>
<html lang="en" <?php if(Route::currentRouteName() == 'admin.rtl_layout'): ?> dir="rtl" <?php endif; ?>>

<head>
    <?php echo $__env->make('layouts.simple.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.simple.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<?php switch(Route::currentRouteName()):
    case ('admin.default_dashboard'): ?>
        <body onload="startTime()">
        <?php break; ?>

    <?php case ('admin.box_layout'): ?>
        <body class="box-layout">
        <?php break; ?>

    <?php case ('admin.rtl_layout'): ?>
        <body class="rtl">
        <?php break; ?>

    <?php case ('admin.dark_layout'): ?>
        <body class="dark-only">
        <?php break; ?>

    <?php default: ?>
        <body>
<?php endswitch; ?>
    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="loader-index"><span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
            </filter>
        </svg>
    </div>
    <!-- loader ends-->

    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <?php echo $__env->make('layouts.simple.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <?php echo $__env->make('layouts.simple.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="page-body">
                <?php echo $__env->yieldContent('main_content'); ?>
            </div>
            
            <?php echo $__env->make('layouts.simple.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <?php echo $__env->make('layouts.simple.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.inc.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH D:\01 - Projects\04 TECHNOBIT DEV\laravel\cuba-laravel\resources\views/layouts/simple/master.blade.php ENDPATH**/ ?>