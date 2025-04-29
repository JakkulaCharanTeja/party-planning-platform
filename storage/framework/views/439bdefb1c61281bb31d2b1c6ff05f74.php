<!DOCTYPE html>
<html>
<head>
    <title>Add Timeline Event</title>
</head>
<body>
    <h1>Add New Timeline Event</h1>

    <?php if($errors->any()): ?>
        <div style="color: red;">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('timelines.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <label>Title:</label>
        <input type="text" name="title" required><br>

        <label>Date:</label>
        <input type="date" name="date" required><br>

        <label>Description (optional):</label>
        <textarea name="description"></textarea><br>

        <button type="submit">Submit</button>
    </form>

    <br>
    <a href="<?php echo e(route('timelines.index')); ?>">Back to Timeline</a>
</body>
</html>

<?php /**PATH /Users/admin/party-planning-platform/resources/views/timelines/create.blade.php ENDPATH**/ ?>