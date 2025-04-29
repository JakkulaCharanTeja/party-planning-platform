<!DOCTYPE html>
<html>
<head>
    <title>Add New Budget</title>
</head>
<body>
    <h1>Add New Budget</h1>

    <!-- Show validation errors -->
    <?php if($errors->any()): ?>
        <div style="color: red;">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <!-- Budget Form -->
    <form action="<?php echo e(route('budgets.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <label for="category">Category:</label>
    <input type="text" name="category" required><br>

    <label for="amount">Amount:</label>
    <input type="number" name="amount" required><br>

    <button type="submit">Submit</button>
</form>



    <br>
    <a href="<?php echo e(route('budgets.index')); ?>">Back to Budget List</a>
</body>
</html>

<?php /**PATH /Users/admin/party-planning-platform/resources/views/budgets/create.blade.php ENDPATH**/ ?>