<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport"  content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <!-- Title -->
    <title>Royal Hotel</title>

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo e(asset('assets/img/favicon.png')); ?>">
    <link rel="apple-touch-icon" href="<?php echo e(asset('assets/img/favicon_60x60.png')); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('assets/img/favicon_76x76.png')); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(asset('assets/img/favicon_120x120.png')); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(asset('assets/img/favicon_152x152.png')); ?>">

    <!-- CSS Plugins -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/bootstrap/dist/css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('plugins/slick-carousel/slick/slick.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('plugins/animate.css/animate.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('plugins/animsition/dist/css/animsition.min.css')); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">


<!-- CSS Icons -->
    <link rel="stylesheet" href="<?php echo e(asset('css/themify-icons.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('plugins/font-awesome/css/font-awesome.min.css')); ?>" />

    <!-- CSS Theme -->
    <link id="theme" rel="stylesheet" href="<?php echo e(asset('css/themes/theme-beige.css')); ?>" />

</head>

<body>

<!-- Body Wrapper -->
<div id="body-wrapper" class="animsition">
<?php echo $__env->make('layouts.frontLayout.design_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.frontLayout.cart', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('layouts.frontLayout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Body Overlay -->
    <div id="body-overlay"></div>

</div>

<!-- Video Modal / Demo -->
<div class="modal modal-video fade" id="modalVideo" role="dialog">
    <button class="close" data-dismiss="modal"><i class="ti-close"></i></button>
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <iframe height="500"></iframe>
        </div>
    </div>
</div>


<!-- Floating checkout button -->
<a href="<?php echo e(url('/checkout')); ?>" class="float">
    <i class="fa fa-shopping-cart fa-4 my-float"></i>
</a>

<!-- Floating button text -->
<div class="label-container">
    <div class="label-text">Click here to checkout</div>
    <i class="fa fa-play label-arrow"></i>
</div>

<?php $__env->startSection('scripts'); ?>


    <script type="text/javascript">

        $("#update-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '<?php echo e(url('update-cart')); ?>',
                method: "patch",
                data: {_token: '<?php echo e(csrf_token()); ?>', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
                success: function (response) {
                    window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure")) {
                $.ajax({
                    url: '<?php echo e(url('remove-from-cart')); ?>',
                    method: "DELETE",
                    data: {_token: '<?php echo e(csrf_token()); ?>', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>

<?php $__env->stopSection(); ?>

<!-- JS Plugins -->
<script src="<?php echo e(asset('plugins/jquery/dist/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/tether/dist/js/tether.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/slick-carousel/slick/slick.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/jquery.appear/jquery.appear.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/jquery.scrollto/jquery.scrollTo.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/jquery.localscroll/jquery.localScroll.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/jquery-validation/dist/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/twitter-fetcher/js/twitterFetcher_min.js')); ?>"></script>
<script src="<?php echo e(asset('js/backend_js/matrix.form_validation.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/skrollr/dist/skrollr.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/animsition/dist/js/animsition.min.js')); ?>"></script>
<script type="text/javascript">
    $(function() {
        $('#country').on('change', function() {
            $('#mobile').val($(this).val());
        });
    })
</script>
<!-- JS Core -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAejxUruUkUhtoM5-PVb6ucheSwZVZuE-I&libraries=places,geometry"></script>
<script src="<?php echo e(asset('js/core.js')); ?>"></script>
<script src="<?php echo e(asset('test.js')); ?>"></script>
<script src="<?php echo e(asset('js/delivery.js')); ?>"></script>
<script src="<?php echo e(asset('js/payment.js')); ?>"></script>
<script src="<?php echo e(asset('js/datatables.js')); ?>"></script>
</body>

</html>
<?php /**PATH /opt/lampp/htdocs/royalhotel/resources/views/layouts/front_design.blade.php ENDPATH**/ ?>