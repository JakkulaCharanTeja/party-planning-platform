<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendors List</title>
</head>
<body>
    <h1>Vendors List</h1>
    
    <a href="<?php echo e(route('vendors.create')); ?>">Add New Vendor</a>
    <ul>
        <?php $__currentLoopData = $vendors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vendor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($vendor->name); ?> - <?php echo e($vendor->service_type); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html>
<?php /**PATH /Users/admin/party-planning-platform/resources/views/vendors/index.blade.php ENDPATH**/ ?>