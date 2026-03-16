

<?php $__env->startSection('content-header'); ?>
    Add a brand
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>
    <form method="post" action="<?php echo e(route('brands.store')); ?>">
        <?php echo csrf_field(); ?>
        Name: <input type="text" name="name"><br>
        <button>Add</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\webD01K16\resources\views/brands/create.blade.php ENDPATH**/ ?>