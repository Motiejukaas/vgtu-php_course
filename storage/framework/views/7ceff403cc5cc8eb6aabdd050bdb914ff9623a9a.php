<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="shortcut icon" href=<?php echo e(asset('favicon.ico')); ?> type="image/x-icon"/>
    <title><?php echo e(__('app.title')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldPushContent('styles'); ?>
    <link href="<?php echo e(asset('css/site.css')); ?>" rel="stylesheet">

</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                <img class="logo-size"
                     src=<?php if(app()->getLocale() == "en"): ?>  <?php echo e(asset('img/VGTU-logo-en.png')); ?> <?php else: ?> <?php echo e(asset('img/VGTU-logo-lt.png')); ?> <?php endif; ?>>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="<?php echo e(__('Toggle navigation')); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item <?php echo e((request()->is('content/about')) ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('content/about')); ?>">
                            <?php echo e(__('app.menu.about')); ?>

                        </a>
                    </li>

                    <li class="nav-item <?php echo e((request()->is('content/contacts')) ? 'active' : ''); ?>">
                        <a class="nav-link" href="<?php echo e(url('content/contacts')); ?>">
                            <?php echo e(__('app.menu.contacts')); ?>

                        </a>
                    </li>


                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?php echo e(strtoupper(app()->getLocale())); ?> <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(url('locale/en')); ?>">EN</a>
                            <a class="dropdown-item" href="<?php echo e(url('locale/lt')); ?>">LT</a>
                        </div>
                    </li>


                    <!-- Authentication Links -->
                    <?php if(auth()->guard()->guest()): ?>
                        
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle auth-link-space" href="#"
                               role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo e(route('home')); ?>">
                                    <?php echo e(__('app.admin.home.home_dashboard')); ?>

                                </a>
                                <a class="dropdown-item" href="<?php echo e(route('course.list')); ?>">
                                    <?php echo e(__('app.admin.create_course.dropdown_title')); ?>

                                </a>
                                <a class="dropdown-item" href="<?php echo e(route('edit.content')); ?>">
                                    <?php echo e(__('app.admin.edit_pages.dropdown_title')); ?>

                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <?php echo e(__('app.menu.logout')); ?>

                                </a>


                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                      style="display: none;">
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
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</div>
</body>
</html>
<?php /**PATH /var/www/html/laravel/resources/views/layouts/app.blade.php ENDPATH**/ ?>