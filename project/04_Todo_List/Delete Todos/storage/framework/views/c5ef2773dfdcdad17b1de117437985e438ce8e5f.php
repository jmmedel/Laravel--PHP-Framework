<?php $__env->startSection('content'); ?>
  <h1>Create Todo</h1>
  <?php echo Form::open(['action' => 'TodosController@store', 'method' => 'POST']); ?>

    <?php echo e(Form::bsText('text')); ?>

    <?php echo e(Form::bsTextArea('body')); ?>

    <?php echo e(Form::bsText('due')); ?>

    <?php echo e(Form::bsSubmit('Submit', ['class' => 'btn btn-primary'])); ?>

  <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>