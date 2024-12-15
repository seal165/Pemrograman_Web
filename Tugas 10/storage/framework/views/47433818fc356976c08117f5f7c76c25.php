

<?php $__env->startSection('title'); ?>
Categories | Catshop Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h3>Categories</h3>
<button type="button" class="btn btn-tambah">
  <a href="/category/tambah">Tambah Data</a>
</button>
<table class="table-data">
  <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Transportation</th>
        <th scope="col">Region</th>
        <th scope="col">Date</th>
        <th scope="col">Name</th>
        <th scope="col">From</th>
        <th scope="col">To</th>
        <th scope="col">Time</th>
        <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <tr>
      <td><?php echo e($category->id); ?></td>
      <td><?php echo e($category->transportation); ?></td>
      <td><?php echo e($category->region); ?></td>
      <td><?php echo e($category->date); ?></td>
      <td><?php echo e($category->name); ?></td>
      <td><?php echo e($category->from_location); ?></td>
      <td><?php echo e($category->to_location); ?></td>
      <td><?php echo e($category->time); ?></td>
      <td>
        <a class='btn-edit' href="/category/edit/<?php echo e($category->id); ?>">Edit</a>
        |
        <a class='btn-delete' href="/category/delete/<?php echo e($category->id); ?>">Hapus</a>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <tr>
      <td colspan="5" align="center">Tidak ada data</td>
    </tr>
    <?php endif; ?>
  </tbody>
</table>
    <button type="button" class="btn btn-tambah">
        <a href="/category/cetak">Cetak</a>
    </button>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\informasi-schedule\resources\views/categories/categories.blade.php ENDPATH**/ ?>