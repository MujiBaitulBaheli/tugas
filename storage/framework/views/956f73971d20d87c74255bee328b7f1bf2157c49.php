<?php $__env->startSection('content'); ?>

<table>
    <thead>
        <tr>
        <th> Id </th>
        <th> Author </th>
        <th> Title </th>
        <th> Body </th>
        <th> Keyword </th>
        <th> Aksi </th>
    </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?> </td>
            <td><?php echo e($d->author); ?> </td>
            <td><?php echo e($d->title); ?> </td>
            <td><?php echo e($d->body); ?> </td>
            <td><?php echo e($d ->keyword); ?> </td>
            <td>
                <a href="<?php echo e(route('tugas.edit', $d->id)); ?>" class="btn btn-warning">Edit</a>
            </td>
            <td>
                <form action="<?php echo e(route('tugas.delete', ['id' => 1])); ?>">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('DELETE')); ?>

                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\web_lanjut\resources\views/tugas.blade.php ENDPATH**/ ?>