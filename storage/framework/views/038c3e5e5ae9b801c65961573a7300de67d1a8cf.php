<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Detail Siswa</h3>
        <hr>
      </div>
    </div>
    <div class="row">
    <div class="col-md-12">
        <div class="form-group">
          <strong>Image: </strong> <img width="150px" src='<?php echo e(asset('images/'.$iphone->image)); ?>'>
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Aboyt: </strong> <?php echo e($iphone->about); ?>

        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Price: </strong> <?php echo e($iphone->price); ?>

        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <strong>Description: </strong> <?php echo e($iphone->desc); ?>

        </div>
      </div>
      <div class="col-md-12">
        <a href="<?php echo e(route('iphone.index')); ?>" class="btn btn-sm btn-success">Back</a>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>