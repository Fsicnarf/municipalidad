

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Crear Comunicación</h2>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/admin/comunicacion/guardar">
                            <?php echo csrf_field(); ?>

                            <div class="form-group">
                                <label for="responsable_id">Responsable:</label>
                                <select class="form-control" name="responsable_id" required>
                                    <?php $__currentLoopData = $responsables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $responsable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($responsable->id); ?>"><?php echo e($responsable->nombre); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="mensaje">Mensaje:</label>
                                <textarea class="form-control" name="mensaje" placeholder="Ingrese el mensaje" rows="4" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="fecha_envio">Fecha de Envío:</label>
                                <input type="datetime-local" class="form-control" name="fecha_envio" required>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\municipalidad\resources\views/admin/comunicaciones.blade.php ENDPATH**/ ?>