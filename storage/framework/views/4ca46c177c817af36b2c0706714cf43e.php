

<?php $__env->startSection('content'); ?>
    <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>
        <div class="signin" [hidden]="login">
            <h1 class="topline">Giriş Yap</h1>
            <br />
            <div class="input-field">
                <input id="tc" type="text" placeholder="TCKN" class="<?php $__errorArgs = ['tc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="tc" value="<?php echo e(old('tc')); ?>" required autocomplete="tc" autofocus maxlength="11">
                <?php $__errorArgs = ['tc'];
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

            <div class="input-field">
                <input id="password" type="password" placeholder="Şifre" class="<?php $__errorArgs = ['password'];
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

            <div class="action">
                <a class="forgot" href="<?php echo e(route('password.request')); ?>">Parolanızı mı unuttunuz?</a>
            </div>

            <div class="login-box-button">
                <button type="submit">
                    Giriş yap
                </button>
            </div>

            <footer>
                <p class="text-center mt-5">
                    <a href="<?php echo e(route('static.page.privacy-policy')); ?>" class="text-decoration-none small" style="color: #909090" target="_blank">Gizlilik Politikası - KVKK</a>
                </p>
            </footer>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\simti\resources\views/auth/login.blade.php ENDPATH**/ ?>