<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>DATA SISWA</title>
  </head>
  <body>
    <?php echo $__env->yieldContent('content'); ?>
  </body>
</html>


<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('siswa')); ?></div>

                <div class="card-body">
                <a class="btn btn-primary mb-3" href="/siswa/create">Tambahkan siswa</a>
            <table class="table table-sm">
                <tr>
                    <th>No</th>
                    <th>NAMA</th>
                    <th>NIS</th>
                    <th>KELAS</th>
                    <th>JENIS KELAMIN</th>
                    <th>ALAMAT</th>
                    <th>AKSI</th>
                </tr>
                <?php $__currentLoopData = $siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($s->id); ?></td>
                        <td><?php echo e($s->nama_siswa); ?></td>
                        <td><?php echo e($s->nis); ?></td>
                        <td><?php echo e($s->kelas); ?></td>
                        <td><?php echo e($s->jenis_kelamin); ?></td>
                        <td><?php echo e($s->alamat); ?></td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a class="btn btn-warning" href="/siswa/<?php echo e($s->id); ?>/edit">Edit</a>
                                <form action="/siswa/<?php echo e($s->id); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('delete'); ?>
                                <input class="btn btn-danger" type="submit" name="Hapus" value="Hapus" >
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud\resources\views/siswa/index.blade.php ENDPATH**/ ?>