<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shoes List</title>
</head>
<body>
    <a href="<?php echo e(route('shoes.create')); ?>">Add a shoe</a>
    <table border="1px" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Type</th>
            <th>Brand</th>
            <th></th>
            <th></th>
        </tr>
        <?php $__currentLoopData = $shoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shoe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <?php echo e($shoe->id); ?>

                </td>
                <td>
                    <?php echo e($shoe->name); ?>

                </td>
                <td>
                    <?php echo e($shoe->description); ?>

                </td>
                <td>
                    <?php echo e($shoe->type->name); ?>

                </td>
                <td>
                    <?php echo e($shoe->brand->name); ?>

                </td>
                <td>
                    <a href="<?php echo e(route('shoes.edit', $shoe->id)); ?>">Edit</a>
                </td>
                <td>
                    <form method="POST" action="<?php echo e(route('shoes.destroy', $shoe->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\webD01K16\resources\views/shoes/index.blade.php ENDPATH**/ ?>