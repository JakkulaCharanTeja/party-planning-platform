<!DOCTYPE html>
<html>
<head>
    <title>Guest List</title>
</head>
<body>
    <h1>Guest List</h1>

    <?php if(session('success')): ?>
        <p style="color: green;"><?php echo e(session('success')); ?></p>
    <?php endif; ?>

    <a href="<?php echo e(route('guests.create')); ?>">Add New Guest</a>
    <br><br>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Attending</th>
            <th>Actions</th>
        </tr>
        <?php $__currentLoopData = $budgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $budget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><?php echo e($budget->category); ?></td>
        <td><?php echo e($budget->amount); ?></td>
        <td>
            <a href="<?php echo e(route('budgets.edit', $budget->id)); ?>">Edit</a> |
            <form action="<?php echo e(route('budgets.destroy', $budget->id)); ?>" method="POST" style="display:inline;">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>
</body>
</html>
<?php /**PATH /Users/admin/party-planning-platform/resources/views/budgets/index.blade.php ENDPATH**/ ?>