<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="dc.language" content="<?php echo e(app()->getLocale()); ?>">
    <meta http-equiv="content-language" content="<?php echo e(app()->getLocale()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Quiz app uygulaması codenteq adı altında yazılmış bir online sınav uygulamasıdır.">
    <meta name="author" content="Ahmet Arşiv">
    <meta name="generator" content="Quiz App">
    <?php echo $__env->yieldContent('meta'); ?>

    <link rel="icon" href="<?php echo e(asset('images/favicon.png')); ?>" type="image/x-icon"/>
    <?php echo $__env->make('admin.layout.stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('css'); ?>
</head>
<body>

<div class="d-flex" id="wrapper">

    <div class="border-end d-flex d-sm-flex" id="sidebar-wrapper">
        <div class="sidebar-heading">
            <div class="list-group list-group-flush sidebar-menu">

                <a class="sidebar-logo-link d-md-none d-lg-none d-xl-none d-xxl-none" href="<?php echo e(route('admin.dashboard')); ?>">
                    <img class="sidebar-logo" src="<?php echo e(asset('images/laerx.png')); ?>" alt="logo">
                </a>

                <?php echo $__env->make('admin.layout.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>
        </div>
    </div>
    <div class="sidebar-toggle-button">
        <a class="btn btn-light" id="sidebarToggle"><i class="bi bi-list fs-4"></i></a>
    </div>

    <div id="page-content-wrapper">

        <?php echo $__env->make('admin.layout.partials.navbar-top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="content-app">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <?php echo $__env->make('admin.layout.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</div>

</body>
<?php echo $__env->make('partials.together.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->yieldContent('js'); ?>
</html>
<?php /**PATH C:\xampp\htdocs\simti\resources\views/admin/layout/app.blade.php ENDPATH**/ ?>