
<!DOCTYPE html>
<html>
<head>
    <title>Timeline</title>
</head>
<body>
    <h1>Timeline Events</h1>

    <?php if(session('success')): ?>
        <div style="color: green;"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <a href="<?php echo e(route('timelines.create')); ?>">Add New Timeline Event</a>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $timelines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->title); ?></td>
                    <td><?php echo e($item->date); ?></td>
                    <td><?php echo e($item->description); ?></td>
                    <td>
                        <a href="<?php echo e(route('timelines.edit', $item->id)); ?>">Edit</a> |
                        <form action="<?php echo e(route('timelines.destroy', $item->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" onclick="return confirm('Delete this event?')">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH /Users/admin/party-planning-platform/resources/views/timelines/index.blade.php ENDPATH**/ ?>