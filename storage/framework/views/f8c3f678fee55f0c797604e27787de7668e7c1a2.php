<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col">
      <h1>Borrar Reporte: <?php echo e($report->title); ?></h1>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <a class="btn btn-secondary" href="/expense_reports/">Regresar</a>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <form action="/expense_reports/<?php echo e($report->id); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <button class="btn btn-primary" type="submit">Borrar</button>
      </form>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\curso-laravel\resources\views/expenseReport/confirmDelete.blade.php ENDPATH**/ ?>