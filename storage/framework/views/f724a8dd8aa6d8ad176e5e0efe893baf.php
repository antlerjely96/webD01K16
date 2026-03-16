

<?php $__env->startSection('content-header'); ?>
    Brand List
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <a href="<?php echo e(route('brands.create')); ?>">Add a brand</a>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th></th>
            <th></th>
        </tr>
        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <?php echo e($brand->id); ?>

                </td>
                <td>
                    <?php echo e($brand->name); ?>

                </td>
                <td>
                    <a href="<?php echo e(route('brands.edit', $brand->id)); ?>">Edit</a>
                </td>
                <td>
                    <form method="post" action="<?php echo e(route('brands.destroy', $brand->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\webD01K16\resources\views/brands/index.blade.php ENDPATH**/ ?>