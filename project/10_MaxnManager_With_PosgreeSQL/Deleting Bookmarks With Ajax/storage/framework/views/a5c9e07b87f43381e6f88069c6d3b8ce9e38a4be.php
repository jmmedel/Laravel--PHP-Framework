<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                  <?php echo $__env->make('inc.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <button
                      class="btn btn-primary btn-lg"
                      data-toggle="modal"
                      data-target="#addModal"
                      type="button"
                      name="button">Add Bookmark</button>
                      <hr>
                      <h3>My Bookmarks</h3>
                      <ul class="list-group">
                        <?php $__currentLoopData = $bookmarks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bookmark): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li class="list-group-item clearfix">
                            <a href="<?php echo e($bookmark->url); ?>" target="_blank" style="position:absolute;top:30%"><?php echo e($bookmark->name); ?> <span class="label label-default"><?php echo e($bookmark->description); ?></span></a>
                            <span class="pull-right button-group">
                              <button data-id="<?php echo e($bookmark->id); ?>" type="button" class="delete-bookmark btn btn-danger" name="button"><span class="glyphicon glyphicon-remove"></span> Delete</button>
                            </span>
                          </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="addModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add Bookmark</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo e(route('bookmarks.store')); ?>" method="post">
          <?php echo e(csrf_field()); ?>

          <div class="form-group">
            <label>Bookmark Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group">
            <label>Bookmark URL</label>
            <input type="text" class="form-control" name="url">
          </div>
          <div class="form-group">
            <label>Website Description</label>
            <textarea class="form-control" name="description"></textarea>
          </div>
          <input type="submit" name="submit" value="Submit" class="btn btn-success">
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>