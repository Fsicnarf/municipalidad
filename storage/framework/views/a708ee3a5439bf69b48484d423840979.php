

<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Lista de Comunicaciones</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Responsable</th>
                    <th>Mensaje</th>
                    <th>Fecha de envio</th>
                    <?php if(session('perfil')=='admin'): ?>
                    <th>Acciones</th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $comunicaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comunicacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($comunicacion["responsable"]->nombre); ?></td>
                        <td><?php echo e($comunicacion["mensaje"]); ?></td>
                        <td><?php echo e($comunicacion["fecha_envio"]); ?></td>
                        
                        <?php if(session('perfil')=='admin'): ?>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\municipalidad\resources\views/lista_comunicaciones.blade.php ENDPATH**/ ?>