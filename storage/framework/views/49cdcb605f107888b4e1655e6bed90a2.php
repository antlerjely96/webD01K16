<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo e(route('shoes.create')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        Name: <input type="text" name="name"><br>
        Image: <input type="file" name="image"><br>
        Description: <textarea name="description"></textarea><br>
        Brand: <select name="brand_id">
            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($brand->id); ?>">
                    <?php echo e($brand->name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br>
        Type: <select name="type_id">
            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($type->id); ?>">
                    <?php echo e($type->name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br>
        <button>Add</button>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\webD01K16\resources\views/shoes/create.blade.php ENDPATH**/ ?>