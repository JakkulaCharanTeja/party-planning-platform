<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guests List</title>
</head>
<body>
    <h1>Guests List</h1>
    
    <a href="<?php echo e(route('guests.create')); ?>">Add New Guest</a>
    <ul>
        <?php $__currentLoopData = $guests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $guest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($guest->name); ?> - <?php echo e($guest->email); ?> - <?php echo e($guest->phone); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html>
<?php /**PATH /Users/admin/party-planning-platform/resources/views/guests/index.blade.php ENDPATH**/ ?>