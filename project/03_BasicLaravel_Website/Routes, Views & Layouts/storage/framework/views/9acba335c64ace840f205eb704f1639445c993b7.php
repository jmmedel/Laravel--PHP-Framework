<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Acme</title>
  </head>
  <body>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('inc.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </body>
</html>
