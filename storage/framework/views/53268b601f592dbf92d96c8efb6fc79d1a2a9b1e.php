<!-- Header -->
<header id="header" class="light">

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- Logo -->
                <div class="module module-logo light">
                    <a href="<?php echo e(url('/')); ?>">
                        
                        <img src="" alt="" height="100%" width="100%"/>
                    </a>
                </div>
            </div>
            <div class="col-7">

            </div>
            <div class="col-2">
                <nav class="module module-navigation left mr-4">
                    <ul id="nav-main" class="nav nav-main">
                        <li class="has-dropdown">
                        <?php if(Auth::check()): ?>
                        <a href="javascript:void(0);"> <?php echo e(Auth::user()->name); ?></a>
                        <?php else: ?>
                        <a href="javascript:void(0);">Sign in/Register</a>
                        <?php endif; ?>
                            <div class="dropdown-container">
                                <ul class="dropdown-mega">
                                    <?php if(empty(Auth::check())): ?>
                                        <li><a href="#loginHeaderModal" data-toggle="modal">Login</a></li>
                                        <li><a href="#registerHeaderModal" data-toggle="modal">Register</a></li>
                                    <?php else: ?>
                                        <li ><a href="<?php echo e(url('/account')); ?>" >My Account Details</a></li>
                                        <li ><a href="<?php echo e(url('/order-details')); ?>" ><i class="#"></i> My Orders</a></li>
                                        <li ><a href="<?php echo e(url('/user-logout')); ?>"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                    <?php endif; ?>
                                </ul>
                                <div class="dropdown-image">
                                    <img src="<?php echo e(asset('assets/img/photos/dropdown-about.jpg')); ?>" alt="">
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</header>
<!-- Header / End -->

<!-- Header -->
<header id="header-mobile" class="light">
<div class="module module-nav-toggle">
            <a href="#" id="nav-toggle" data-toggle="panel-mobile"><span></span><span></span><span></span><span></span></a>
        </div>
    <div class="module module-logo">
        <a href="<?php echo e(url('/')); ?>">
            <img src="<?php echo e(asset('assets/img/KiliMobileLogo.png')); ?>" alt="">
        </a>
         <nav class="module module-navigation">
            <ul id="nav-main" class="nav nav-main">
                <li class="has-dropdown">
                    <!-- <a href="javascript:void(0);">Sign in / Register</a> -->
                    <div class="dropdown-container">
                        <ul class="dropdown-mega">
                            <?php if(empty(Auth::check())): ?>
                                <li><a href="#loginHeaderModal" data-toggle="modal">Login</a></li>
                                <li><a href="#registerHeaderModal" data-toggle="modal">Register</a></li>
                            <?php else: ?>
                                <li ><a href="<?php echo e(url('/account')); ?>" >My Account Details</a></li>
                                <li ><a href="<?php echo e(url('/order-details')); ?>" ><i class="#"></i> My Orders</a></li>
                                <li ><a href="<?php echo e(url('/user-logout')); ?>"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                            <?php endif; ?>
                        </ul>
                        <div class="dropdown-image">
                            <img src="<?php echo e(asset('assets/img/photos/dropdown-about.jpg')); ?>" alt="">
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!-- Header / End -->
<!-- Modal / Login -->
<div class="modal" id="loginHeaderModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Login</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo e(route('login')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">

                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"><?php echo e(old('remember') ? 'checked' : ''); ?>


                                <label class="form-check-label" for="remember">
                                    <?php echo e(__('Remember me')); ?>

                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-primary">
                                    <span>
                                        <?php echo e(__('Login')); ?>

                                    </span>
                            </button>
                            <br />
                            <?php if(Route::has('password.request')): ?>
                                <a style="margin-left: -30px;" class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                    <?php echo e(__('Forgot Your Password?')); ?>

                                </a>
                            <?php endif; ?>
                            <br />
                            <a data-toggle="modal" href="#registerHeaderModal" class="btn btn-link">Join us Today</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal / Register -->
<div class="modal fade" id="registerHeaderModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Register</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo e(route('register')); ?>">
                    <?php echo csrf_field(); ?>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="new-password">

                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                            <?php echo e(__('Register')); ?>

                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /opt/lampp/htdocs/royalhotel/resources/views/layouts/frontLayout/design_header.blade.php ENDPATH**/ ?>