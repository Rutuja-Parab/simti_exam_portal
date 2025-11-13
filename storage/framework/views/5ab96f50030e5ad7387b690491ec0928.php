

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <section class="content">
            <figure>
                <blockquote class="blockquote">
                    <h2>Kullanıcı Listesi</h2>
                </blockquote>
            </figure>
            <div class="row">
                <div class="col-12 col-lg-12">
                    <h4><a href="<?php echo e(route('admin.manager-user.create')); ?>" class="btn btn-success">Kullanıcı Oluştur</a>
                    </h4>
                </div>
                <div class="col-12 col-lg-12 mt-3 overflow-auto">
                    <table id="data-table" class="table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>Adı Soyadı</th>
                            <th>TCKN</th>
                            <th>Telefon</th>
                            <th>Şirket</th>
                            <th>Dil</th>
                            <th>Durum</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($user->user->name .' '. $user->user->surname); ?></td>
                                <td><?php echo e($user->user->tc); ?></td>
                                <td><?php echo e($user->phone); ?></td>
                                <td><?php echo e($user->company->title); ?></td>
                                <td><?php echo e($user->language->title); ?></td>
                                <td class="<?php echo e($user->status == 1 ? 'text-success' : 'text-danger'); ?> fw-bold"><?php echo e($user->status == 1 ? 'Aktif' : 'Pasif'); ?></td>
                                <td>
                                    <a href="<?php echo e(route('admin.manager-user.edit',$user->userId)); ?>">
                                        <i class="bi bi-pen text-dark"></i>
                                    </a>
                                    <button
                                        onclick="deleteButton(this,`$<?php echo e(route('admin.manager-user.destroy',$user->userId)); ?>`)">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('meta'); ?>
    <title>Kullanıcı Listesi</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <?php echo $__env->make('partials.stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        const backUrl = '<?php echo e(route('admin.manager-user.index')); ?>';
    </script>
    <?php echo $__env->make('partials.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\simti\resources\views/admin/users/index.blade.php ENDPATH**/ ?>