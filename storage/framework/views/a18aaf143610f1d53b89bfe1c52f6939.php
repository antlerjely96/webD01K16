<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo e(route('carts.updateCart')); ?>">
        <?php echo csrf_field(); ?>
        <table border="1px" cellpadding="0" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Image</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>
                        <?php echo e($id); ?>

                    </td>
                    <td>
                        <?php echo e($products['name']); ?>

                    </td>
                    <td>
                        <?php echo e($products['price']); ?>

                    </td>
                    <td>
                        <a href="<?php echo e(route('carts.minus', $id)); ?>">-</a>
                        <input type="text" name="updateQuantity[<?php echo e($id); ?>]" value="<?php echo e($products['quantity']); ?>">
                        <a href="<?php echo e(route('carts.plus', $id)); ?>">+</a>
                    </td>
                    <td></td>
                    <td>

                    </td>
                    <td>
                        <a href="<?php echo e(route('carts.removeOneProduct', $id)); ?>">Remove</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td colspan="7">
                    <a href="<?php echo e(route('carts.deleteCart')); ?>">Delete Cart</a>
                </td>
            </tr>
        </tbody>
    </table>
    <button>Update cart</button>
</form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\webD01K16\resources\views/carts/index.blade.php ENDPATH**/ ?>