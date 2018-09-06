<?php $__env->startSection('content'); ?>
  <a class="btn btn-default" href="/todo/<?php echo e($todo->id); ?>">Go Back</a>
  <h1>Edit Todo</h1>
  <?php echo Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']); ?>

    <?php echo e(Form::bsText('text', $todo->text)); ?>

    <?php echo e(Form::bsTextArea('body', $todo->body)); ?>

    <?php echo e(Form::bsText('due', $todo->due)); ?>

    <?php echo e(Form::hidden('_method', 'PUT')); ?>

    <?php echo e(Form::bsSubmit('Submit', ['class' => 'btn btn-primary'])); ?>

  <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>