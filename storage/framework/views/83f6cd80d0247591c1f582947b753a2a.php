

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Registrar Responsable (Administrador <?php echo e(auth()->user()->name); ?>)</h2>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/admin/dashboard/guardar">
                            <?php echo csrf_field(); ?>

                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre" required>
                            </div>

                            <div class="form-group">
                                <label for="correo">Correo:</label>
                                <input type="text" class="form-control" name="correo" placeholder="Ingrese el correo" required>
                            </div>

                            <div class="form-group">
                                <label for="telefono">Teléfono:</label>
                                <input type="text" class="form-control" name="telefono" placeholder="Ingrese el teléfono" required>
                            </div>

                            <div class="form-group">
                                <label for="establecimiento_id">Establecimiento:</label>
                                <select class="form-control" name="establecimiento_id" required>
                                    <?php $__currentLoopData = $establecimientos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $establecimiento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($establecimiento->id); ?>"><?php echo e($establecimiento->nombre); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\municipalidad\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>