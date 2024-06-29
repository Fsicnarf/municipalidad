<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <?php echo e(config('app.name', 'Laravel')); ?>

                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    <?php if(auth()->guard()->check()): ?>    
                        <!--<li class="nav-item">
                            <a class ="nav-link" style="color: #8a2ce2" href="/cliente/direccion">Registrar direccion </a>
                        </li>
                        <li class="nav-item">
                            <a class ="nav-link" style="color: #31e22b" href="/cliente/compra">Registro Compra</a>
                        </li>-->
                        <?php if(session('perfil')=='admin'): ?>
                        <li class="nav-item">
                            <a class ="nav-link" style="color: #e2742b" href="/admin/dashboard/crear">Registrar Responsable</a>
                        </li>
                        <li class="nav-item">
                            <a class ="nav-link" style="color: rgb(0, 0, 0)" href="/admin/dashboard/mostrar">Ver Responsables</a>
                        </li>

                        <li class="nav-item">
                            <a class ="nav-link" style="color: #e2742b" href="/admin/comunicacion/crear">Crear Comunicación</a>
                        </li>
                        <li class="nav-item">
                            <a class ="nav-link" style="color: rgb(0, 0, 0)" href="/admin/comunicacion/mostrar">Ver Comunicaciones</a>
                        </li>

                        <li class="nav-item">
                            <a class ="nav-link" style="color: #e2742b" href="/admin/actividad/crear">Crear Actividad</a>
                        </li>
                        <li class="nav-item">
                            <a class ="nav-link" style="color: rgb(0, 0, 0)" href="/admin/actividad/mostrar">Ver Actividades</a>
                        </li>

                        <li class="nav-item">
                            <a class ="nav-link" style="color: #e22b2b" href="/admin/establecimientos/crear">Registrar Establecimiento</a>
                        </li>
                        <li class="nav-item">
                            <a class ="nav-link" style="color: #2b90e2" href="/admin/establecimientos/mostrar">Ver Establecimientos</a>
                        </li>
                        <?php endif; ?>

                        <?php if(session('perfil')=='responsable'): ?>
                        <li class="nav-item">
                            <a class ="nav-link" style="color: #e2742b" href="/responsable/actividades/crear">Crear Actividad</a>
                        </li>
                        <li class="nav-item">
                            <a class ="nav-link"  href="/responsable/actividades/ver">Ver Actividades</a>
                        </li>

                        <li class="nav-item">
                            <a class ="nav-link" style="color: #e2742b" href="/responsable/comunicaciones/crear">Crear Comunicación</a>
                        </li>
                        <li class="nav-item">
                            <a class ="nav-link" style="color: rgb(0, 0, 0)" href="/responsable/comunicaciones/mostrar">Ver Comunicaciones</a>
                        </li>

                        <li class="nav-item">
                            <a class ="nav-link" style="color: rgb(0, 0, 0)" href="/responsable/responsables/mostrar">Ver Responsables</a>
                        </li>

                        <?php endif; ?>
                        <?php if(session('perfil')=='visitante'): ?>
                        <li class="nav-item">
                            <a class ="nav-link" style="color: #2b90e2"  href="/visitante/actividades/ver">Ver Actividades</a>
                        </li>

                        <li class="nav-item">
                            <a class ="nav-link" style="color: rgb(136, 52, 52)" href="/visitante/responsables/mostrar">Ver Responsables</a>
                        </li>

                        <li class="nav-item">
                            <a class ="nav-link" style="color: #2b90e2" href="/visitante/establecimientos/mostrar">Ver Establecimientos</a>
                        </li>
                        <?php endif; ?>
                    <?php endif; ?> 
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
            </div>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\laragon\www\municipalidad\resources\views/layouts/app.blade.php ENDPATH**/ ?>