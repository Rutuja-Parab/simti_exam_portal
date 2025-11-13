<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="dc.language" content="<?php echo e(app()->getLocale()); ?>">
    <meta http-equiv="content-language" content="<?php echo e(app()->getLocale()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(getSubdomainCompanyName() ?? config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="<?php echo e(asset('images/favicon.png')); ?>" type="image/x-icon"/>
    <link href="<?php echo e(asset('css/login.css')); ?>" rel="stylesheet">
</head>
<body>
<div class="columns container-fluid">
    <div class="login-box ">
        <img style="width: 50%; margin-bottom: 20px;" src="/storage/<?php echo e(getSubdomainLogo()); ?>" alt="">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\simti\resources\views/layouts/app.blade.php ENDPATH**/ ?>