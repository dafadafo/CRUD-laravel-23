

<?php $__env->startSection('content'); ?>
<h4 class="text-center mb-6">Edit Data</h4>
<div class="container">
        <form action="/siswa/<?php echo e($siswa->id); ?>" method="post">
            <?php echo method_field('put'); ?>
            <?php echo csrf_field(); ?>
            <div class="form-group">
            <label for="exampleInputEmail1">nama</label>
            <input type="text" name="nama_siswa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nama" value="<?php echo e($siswa->nama_siswa); ?>">
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">NIS</label>
            <input type="text" name="nis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nomor identitas siswa" value="<?php echo e($siswa->nis); ?>">
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Kelas</label>
            <input type="text" name="kelas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="kelas" value="<?php echo e($siswa->kelas); ?>">
        </div>

        <select class="custom-select" name="jenis_kelamin" >
        <option selected > Pilih Jenis Kelamin</option>
                <option value="L" <?php if($siswa->jenis_kelamin == "L"): ?> selected <?php endif; ?>>Laki-Laki</option>
                <option value="P" <?php if($siswa->jenis_kelamin == "P"): ?> selected <?php endif; ?>>Perempuan</option>
        </select>
        <br>
        <br>
        <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label"> ALAMAT </label>
                    <textarea class="form-control" name="alamat"rows="10"><?php echo e($siswa->alamat); ?></textarea><br>
        </div>
        <input type="submit" name="submit" class="btn btn-info" value="SIMPAN PERUBAHAN">

        </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.desain', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud\resources\views/siswa/edit.blade.php ENDPATH**/ ?>