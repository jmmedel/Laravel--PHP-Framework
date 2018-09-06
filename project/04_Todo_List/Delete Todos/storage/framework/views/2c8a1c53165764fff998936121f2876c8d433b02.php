<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TodoList</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <?php echo $__env->make('inc.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="container">
      <?php echo $__env->make('inc.messages', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php echo $__env->yieldContent('content'); ?>
    </div>

    <footer id="footer" class="text-center">
      <p>Copyright &copy; 2017 TodoList</p>
    </footer>
  </body>
</html>
