<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BP Website - <?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
  </head>
  <body>
    <?php echo $__env->make('inc.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="container">
      <?php echo $__env->yieldContent('content'); ?>
    </div>
  </body>
</html>
