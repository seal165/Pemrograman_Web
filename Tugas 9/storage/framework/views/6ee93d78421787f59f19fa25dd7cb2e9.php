

<?php $__env->startSection('title'); ?>
Tambah Category | Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h3>Input Categories</h3>
<div class="form-login">
  <form action="<?php echo e(url('/category/store')); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <label for="id">ID</label>
    <input class="input" type="id" name="id" id="id" placeholder="ID" value="<?php echo e(old('id')); ?>" />
    <?php $__errorArgs = ['id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <p style="font-size: 10px; color: red"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <label for="transportation">Tranportation</label>
    <textarea class="input" name="transportation" id="transportation" placeholder="Tranportation"><?php echo e(old('transportation')); ?></textarea>
    <?php $__errorArgs = ['transportation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <p style="font-size: 10px; color: red"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    
    <label for="region">Region</label>
    <textarea class="input" name="region" id="region" placeholder="Region"><?php echo e(old('region')); ?></textarea>
    <?php $__errorArgs = ['region'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <p style="font-size: 10px; color: red"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <label for="date">Date</label>
    <textarea class="date" name="date" id="date" placeholder="Date"><?php echo e(old('date')); ?></textarea>
    <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <p style="font-size: 10px; color: red"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <label for="name">Name</label>
    <textarea class="input" name="name" id="name" placeholder="Name"><?php echo e(old('name')); ?></textarea>
    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <p style="font-size: 10px; color: red"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <label for="from_location">From</label>
    <textarea class="input" name="from_location" id="from_location" placeholder="From"><?php echo e(old('from_location')); ?></textarea>
    <?php $__errorArgs = ['from_location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <p style="font-size: 10px; color: red"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <label for="to_location">To</label>
    <textarea class="input" name="to_location" id="to_location" placeholder="To"><?php echo e(old('to_location')); ?></textarea>
    <?php $__errorArgs = ['to_location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <p style="font-size: 10px; color: red"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <label for="time">Time</label>
    <textarea class="time" name="time" id="time" placeholder="Timr"><?php echo e(old('time')); ?></textarea>
    <?php $__errorArgs = ['time'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <p style="font-size: 10px; color: red"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
      Simpan
    </button>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\informasi-schedule\resources\views/categories/categories-entry.blade.php ENDPATH**/ ?>