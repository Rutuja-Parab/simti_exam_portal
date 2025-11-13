<nav class="navbar fixed-bottom bottom-navigation-mb justify-content-around d-flex d-md-none d-lg-none d-xl-none d-xxl-none">
    <ul class="navbar-list mx-auto ">
        <li class="navbar-item">
            <a class="navbar-link" id="sidebarToggleM" >
                <i class="bi bi-list navbar-link-icon"></i>
            </a>
        </li>

        <li class="navbar-item">
            <a class="navbar-link <?php echo e(request()->is('admin/company*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.company.index')); ?>">
                <i class="bi bi-building navbar-link-icon"></i>
            </a>
        </li>

        <li class="navbar-item">
            <a class="navbar-link <?php echo e(request()->is('admin/dashboard') ? 'active' : ''); ?>" href="<?php echo e(route('admin.dashboard')); ?>">
                <i class="bi bi-house navbar-link-icon"></i>
            </a>
        </li>

        <li class="navbar-item">
            <a class="navbar-link <?php echo e(request()->is('admin/manager-user*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.manager-user.index')); ?>">
                <i class="bi bi-people navbar-link-icon"></i>
            </a>
        </li>

        <li class="navbar-item">
            <a class="navbar-link <?php echo e(request()->is('admin/profile*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.profile.edit')); ?>">
                <i class="bi bi-person navbar-link-icon"></i>
            </a>
        </li>


        <div class="navbar-underscore"></div>
    </ul>
</nav>
<?php /**PATH C:\xampp\htdocs\simti\resources\views/admin/layout/partials/navbar.blade.php ENDPATH**/ ?>