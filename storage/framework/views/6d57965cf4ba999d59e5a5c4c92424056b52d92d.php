<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col">
      <h1>Enviar el reporte al Email</h1>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <a class="btn btn-secondary" href="/expense_reports/">Regresar</a>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
      <?php endif; ?>
      <form action="/expense_reports/<?php echo e($report->id); ?>/sendMail" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group">
          <label for="email">Email: </label>
          <input type="text" class="form-control" id="email" name="email" placeholder="example@mail.com" value="<?php echo e(old('email')); ?>">
        </div>
        <button class="btn btn-primary" type="submit">Send Mail</button>
      </form>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\control-gastos\resources\views/expenseReport/confirmSendMail.blade.php ENDPATH**/ ?>