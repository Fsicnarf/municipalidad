

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Crear Establecimiento</h2>
                    </div>
                    <div class="card-body">
                        <form method="post" action="/admin/establecimiento/guardar">
                            <?php echo csrf_field(); ?>

                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre" required>
                            </div>

                            <div class="form-group">
                                <label for="direccion">Dirección:</label>
                                <input type="text" class="form-control" name="direccion" placeholder="Ingrese la dirección" required>
                            </div>

                            <div class="form-group">
                                <label for="tipo">Tipo:</label>
                                <input type="text" class="form-control" name="tipo" placeholder="Ingrese el tipo" required>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\municipalidad\resources\views/admin/establecimientos.blade.php ENDPATH**/ ?>