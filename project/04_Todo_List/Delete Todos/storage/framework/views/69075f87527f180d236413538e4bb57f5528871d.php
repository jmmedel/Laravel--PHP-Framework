<?php $__env->startSection('content'); ?>
  <a class="btn btn-default" href="/">Go Back</a>
  <h1><a href="todo/<?php echo e($todo->id); ?>"><?php echo e($todo->text); ?></a></h1>
  <div class="label label-danger"><?php echo e($todo->due); ?></div>
  <hr>
  <p><?php echo e($todo->body); ?></p>
  <br><br>
  <a href="/todo/<?php echo e($todo->id); ?>/edit" class="btn btn-default">Edit</a>
  <?php echo Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST', 'class' => 'pull-right']); ?>

    <?php echo e(Form::hidden('_method', 'DELETE')); ?>

    <?php echo e(Form::bsSubmit('Delete', ['class' => 'btn btn-danger'])); ?>

  <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>