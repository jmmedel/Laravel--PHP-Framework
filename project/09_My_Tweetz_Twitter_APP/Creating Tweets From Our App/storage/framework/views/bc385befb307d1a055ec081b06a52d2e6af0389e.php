<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MyTweetz</title>
    <link rel="stylesheet" href="https://bootswatch.com/cerulean/bootstrap.min.css">
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a href="/" class="navbar-brand">MyTweetz</a>
        </div>
      </div>
    </nav>

    <div class="container">
      <form class="well" action="<?php echo e(route('post.tweet')); ?>" method="post" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <?php if(count($errors) > 0): ?>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alert alert-danger">
              <?php echo e($error); ?>

            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

        <div class="form-group">
          <label>Tweet Text</label>
          <input type="text" name="tweet" class="form-control">
        </div>
        <div class="form-group">
          <label>Upload Images</label>
          <input type="file" name="images[]" multiple class="form-control">
        </div>
        <div class="form-group">
          <button class="btn btn-success">Create Tweet</button>
        </div>
      </form>

      <?php if(!empty($data)): ?>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tweet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="well">
            <h3><?php echo e($tweet['text']); ?>

              <i class="glyphicon glyphicon-heart"></i> <?php echo e($tweet['favorite_count']); ?>

              <i class="glyphicon glyphicon-repeat"></i> <?php echo e($tweet['retweet_count']); ?>

            </h3>
            <?php if(!empty($tweet['extended_entities']['media'])): ?>
              <?php $__currentLoopData = $tweet['extended_entities']['media']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="<?php echo e($i['media_url_https']); ?>" style="width:100px;">
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php else: ?>
        <p>No Tweets Found...</p>
      <?php endif; ?>
    </div>
  </body>
</html>
