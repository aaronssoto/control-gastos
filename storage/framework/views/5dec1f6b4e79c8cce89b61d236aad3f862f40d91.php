<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col">
      <h1>Reports</h1>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <a class="btn btn-primary" href="/expense_reports/create">Crear un nuevo reporte</a>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <table class="table">
        <?php $__currentLoopData = $expenseReports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expenseReport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($expenseReport->title); ?></td>
          <td><a href="/expense_reports/<?php echo e($expenseReport->id); ?>">Detalle</a></td>
          <td><a href="/expense_reports/<?php echo e($expenseReport->id); ?>/edit">Editar</a></td>
          <td><a href="/expense_reports/<?php echo e($expenseReport->id); ?>/confirmDelete">Borrar</a></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </table>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\control-gastos\resources\views/expenseReport/index.blade.php ENDPATH**/ ?>