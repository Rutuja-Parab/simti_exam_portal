

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <section class="content">
            <figure>
                <blockquote class="blockquote">
                    <h2>Şirketler</h2>
                </blockquote>
            </figure>

            <div class="row">
                <div class="col-12 col-lg-12">
                    <h4><a href="<?php echo e(route('admin.company.create')); ?>" class="btn btn-success">Şirket Oluştur</a></h4>
                </div>
                <div class="col-12 col-lg-12 mt-3 overflow-auto">
                    <table id="data-table" class="table table-striped" style="width:100%">
                        <thead>
                        <tr>
                            <th>İd</th>
                            <th>Şirket Adı</th>
                            <th>Kalan Gün</th>
                            <th>Ödeme</th>
                            <th>Durum</th>
                            <th>Güncelleme Tarih</th>
                            <th>İşlemler</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($company->id); ?></td>
                                <td><?php echo e($company->title); ?></td>
                                <td><?php echo e(invoiceDiffDate($company->id)); ?></td>
                                <td class="<?php echo e($company->invoice->status == 1 ? 'text-success' : 'text-danger'); ?> fw-bold"><?php echo e($company->invoice->status == 1 ? 'Ödeme Alındı' : 'Ödeme Alınmadı'); ?></td>
                                <td class="<?php echo e($company->status == 1 ? 'text-success' : 'text-danger'); ?> fw-bold"><?php echo e($company->status == 1 ? 'Aktif' : 'Pasif'); ?></td>
                                <td><?php echo e($company->updated_at); ?></td>
                                <td>
                                    <a href="<?php echo e(route('admin.company.edit',$company->id)); ?>" class="me-2">
                                        <i class="bi bi-pen text-dark"></i>
                                    </a>
                                    <a href="<?php echo e(route('admin.company.invoice',$company->id)); ?>">
                                        <i class="bi bi-receipt text-dark"></i>
                                    </a>
                                    <button onclick="deleteButton(this,`$<?php echo e(route('admin.company.destroy',$company)); ?>`)">
                                        <i
                                            class="bi bi-trash"></i>
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

    <title>Şirketler</title>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <?php echo $__env->make('partials.stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        const backUrl = '<?php echo e(route('admin.company.index')); ?>';
    </script>
    <?php echo $__env->make('partials.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\simti\resources\views/admin/company/index.blade.php ENDPATH**/ ?>