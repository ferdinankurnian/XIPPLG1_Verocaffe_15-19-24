<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<h1>Welcome, <?php echo e(Auth::user()->name); ?></h1>
    <ul>
        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($u->name); ?> - <?php echo e($u->email); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <a href="<?php echo e(route('logout')); ?>">Logout</a>
</body>
</html>
<?php /**PATH /home/iydheko/Projects/XIPPLG1_Verocaffe_15-19-24-main/resources/views/member.blade.php ENDPATH**/ ?>