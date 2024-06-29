

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Lista de Actividades</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre de Actividad</th>
                    <th>Descripcion</th>
                    <th>Fecha de Actividad</th>
                    <th>Lugar</th>
                    <?php if(session('perfil')=='admin'): ?>
                    <th>Acciones</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $actividades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actividad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($actividad["nombre"]); ?></td>
                        <td><?php echo e($actividad["descripcion"]); ?></td>
                        <td><?php echo e($actividad["fecha"]); ?></td>
                        <td><?php echo e($actividad["lugar"]); ?></td>
                        
                        <?php if(session('perfil')!='visitante'): ?>
                        <td>
                        <button type="button" class="btn btn-outline-primary">Ver</button>
                        <button type="button" class="btn btn-outline-warning">Actualizar</button>
                        <button type="button" class="btn btn-outline-danger">Eliminar</button>
                        </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\municipalidad\resources\views/lista_actividades.blade.php ENDPATH**/ ?>