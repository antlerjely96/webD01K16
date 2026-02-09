<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <h3>Add a brand</h3>
    <form method="post" action="<?php echo e(route('brands.store')); ?>">
        <?php echo csrf_field(); ?>
        Name: <input type="text" name="name"><br>
        <button>Add</button>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\webD01K16\resources\views/brands/create.blade.php ENDPATH**/ ?>