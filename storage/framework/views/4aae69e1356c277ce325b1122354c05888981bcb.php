<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col">
      <h1>Editar Reporte: <?php echo e($report->title); ?></h1>
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
        <?php echo method_field('put'); ?>
        <div class="form-group">
          <label for="title">Titulo:</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Ingrese el titulo" value="<?php echo e($report->title); ?>">
        </div>
        <button class="btn btn-primary" type="submit">Guardar</button>
      </form>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\curso-laravel\resources\views/expenseReport/edit.blade.php ENDPATH**/ ?>