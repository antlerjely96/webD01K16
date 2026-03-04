<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo e(route('shoes.update', $shoe->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        Name: <input type="text" name="name" value="<?php echo e($shoe->name); ?>"><br>
        Description: <textarea name="description">
            <?php echo e($shoe->description); ?>

        </textarea><br>
        Brand: <select name="brand_id">
            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($brand->id); ?>"
                    <?php if($brand->id == $shoe->brand_id): ?>
                        <?php echo e('selected'); ?>

                    <?php endif; ?>
                >
                    <?php echo e($brand->name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br>
        Type: <select name="type_id">
            <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($type->id); ?>"
                    <?php if($type->id == $shoe->type_id): ?>
                        <?php echo e('selected'); ?>

                    <?php endif; ?>
                >
                    <?php echo e($type->name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br>
        <button>Update</button>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\webD01K16\resources\views/shoes/edit.blade.php ENDPATH**/ ?>