<?php $__env->startSection('content'); ?>

<table>
    <thead>
        <th> No </th>
        <th> Nama Mahasiswa </th>
        <th> Jurusan </th>
        <th> Prodi </th>
    </thead>
    <tbody>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <td><?php echo e(++$no); ?> </td>
            <td><?php echo e(++$d->nama); ?> </td>
            <td><?php echo e(++$d->jurusan); ?> </td>
            <td><?php echo e(++$d ->prodi); ?> </td>
            <td>
                <a href="<?php echo e(route('mahasiswa.edit', $d->id)); ?>" class="btn btn-warning">Edit</a>
            </td>
            <td>
                <form action="<?php echo e(route('mahasiswa.delete', ['id' => 1])); ?>">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('DELETE')); ?>

                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\web_lanjut\resources\views/mahasiswa.blade.php ENDPATH**/ ?>