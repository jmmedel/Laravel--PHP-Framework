<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo e($listing->name); ?> <a href="/listings" class="pull-right btn btn-default btn-xs">Go Back</a></div>

            <div class="panel-body">
              <ul class="list-group">
                <li class="list-group-item">Address: <?php echo e($listing->address); ?></li>
                <li class="list-group-item">Website: <a href="<?php echo e($listing->website); ?>" target="_blank"><?php echo e($listing->website); ?></a></li>
                <li class="list-group-item">Email: <?php echo e($listing->email); ?></li>
                <li class="list-group-item">Phone: <?php echo e($listing->phone); ?></li>
              </ul>
              <hr>
              <div class="well">
                <?php echo e($listing->bio); ?>

              </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>