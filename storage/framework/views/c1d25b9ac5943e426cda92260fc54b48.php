<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <?php echo csrf_field(); ?>
        Email: <input type="email" name="email"><br>
        Password: <input type="password" name="password"><br>
        <button>Login</button>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\webD01K16\resources\views/admins/index.blade.php ENDPATH**/ ?>