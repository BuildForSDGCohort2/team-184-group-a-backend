<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>The Royal Hotel</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo e(asset('images/logo/favicon.png')); ?>" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo e(asset('css/animate-3.7.0.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/font-awesome-4.7.0.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-4.1.3.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/owl-carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/jquery.datetimepicker.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>
      <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

        <?php echo $__env->make('layouts.frontLayout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

        <?php echo $__env->make('layouts.frontLayout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!-- Javascript -->
    <script src="<?php echo e(asset('js/vendor/jquery-2.2.4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/bootstrap-4.1.3.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/owl-carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/jquery.datetimepicker.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/vendor/jquery.nice-select.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
</body>
</html>
<?php /**PATH /opt/lampp/htdocs/royalhotel/resources/views/layouts/frontLayout/front_design.blade.php ENDPATH**/ ?>