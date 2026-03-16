

<?php $__env->startSection('content-header'); ?>
    Update a brand
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <form method="post" action="<?php echo e(route('brands.update', $brand->id)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        Name: <input type="text" name="name" value="<?php echo e($brand->name); ?>"><br>
        <button>Update</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\webD01K16\resources\views/brands/edit.blade.php ENDPATH**/ ?>