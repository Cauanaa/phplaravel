<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Estou usando Laravel!</h3>
    <p>Bem vinda(o): </p>
    <?php $__currentLoopData = $pessoas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($item->idade >18): ?>
            <p><?php echo e($item->nome); ?> - <?php echo e($item->idade); ?></p>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>

<?php /**PATH C:\Users\ADM\Downloads\pweb2_laravel_2023_2-main\pweb2_laravel_2023_2-main\resources\views/index.blade.php ENDPATH**/ ?>