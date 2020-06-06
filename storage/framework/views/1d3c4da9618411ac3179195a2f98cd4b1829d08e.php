<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col">
      <h1>Detalle del Reporte: <?php echo e($report->title); ?></h1>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <a class="btn btn-secondary" href="/expense_reports/">Regresar</a>
    </div>
  </div>
  <div class="row">
    <div class="col|">
      <h3>Detalles</h3>
      <table class="table">
        <?php $__currentLoopData = $report->expenses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($expense->description); ?></td>
            <td><?php echo e($expense->created_at); ?></td>
            <td><?php echo e($expense->amount); ?></td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <a class="btn btn-primary" href="/expense_reports/<?php echo e($report->id); ?>/expenses/create">Nuevo Gasto</a>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\curso-laravel\resources\views/expenseReport/show.blade.php ENDPATH**/ ?>