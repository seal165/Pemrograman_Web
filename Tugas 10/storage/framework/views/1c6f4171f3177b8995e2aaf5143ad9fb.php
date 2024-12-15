<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Categories</title>
  <style>
    .table-data {
      border-collapse: collapse;
      width: 100%;
    }

    .table-data tr th,
    .table-data tr td {
      border: 1px solid black;
      font-size: 11pt;
      padding: 10px 20px;
      text-align: center;
    }

    .table-data tr th {
      background-color: #2c3e50;
      color: white;
    }

    .table-data tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .table-data tr:hover {
      background-color: #f5f5f5;
    }
  </style>
</head>

<body>
  <h3>Data Categories</h3>
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
      </tr>
    </thead>
    <tbody>
      <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
      <tr>
        <td><?php echo e($loop->iteration); ?></td>
        <td><?php echo e($categories->updated_at); ?></td>
        <td><?php echo e($categories->transportation); ?></td>
        <td><?php echo e($categories->region); ?></td>
        <td><?php echo e($categories->date); ?></td>
        <td><?php echo e($categories->name); ?></td>
        <td><?php echo e($categories->from); ?></td>
        <td><?php echo e($categories->to); ?></td>
        <td><?php echo e($categories->time); ?></td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
      <tr>
        <td colspan="7" align="center">Tidak ada data</td>
      </tr>
      <?php endif; ?>
    </tbody>
</body>

</html><?php /**PATH C:\laragon\www\informasi-schedule\resources\views/categories/categories-cetak.blade.php ENDPATH**/ ?>