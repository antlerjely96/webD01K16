<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <h3>Update a brand</h3>
    <form method="post" action="<?php echo e(route('brands.update', $brand->id)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        Name: <input type="text" name="name" value="<?php echo e($brand->name); ?>"><br>
        <button>Update</button>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\webD01K16\resources\views/brands/edit.blade.php ENDPATH**/ ?>