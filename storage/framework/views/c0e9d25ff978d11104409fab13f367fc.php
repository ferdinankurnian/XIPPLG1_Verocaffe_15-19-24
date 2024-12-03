<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - VeroCaffè</title>
    <link rel="shortcut icon" href="assets/verocafesimple.svg" type="image/x-icon">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>

<body class="bg-[#f2e8a7] flex items-center justify-center min-h-screen">
    <!-- Tombol kembali -->
    <div class="absolute top-4 left-4">
        <a href="/" class="flex items-center space-x-2 text-green-700">
            <!-- Icon panah -->
            <span class="material-symbols-outlined">
                arrow_back
            </span>
            <!-- Teks -->
            <span class="text-sm font-medium">Back to Home</span>
        </a>
    </div>


    <div class="flex flex-col">
        <?php if($errors->has('login_error')): ?>
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded-lg">
            <p><?php echo e($errors->first('login_error')); ?></p>
        </div>
        <?php endif; ?>

        <div class="flex w-[800px] h-[450px] bg-white rounded-lg shadow-lg overflow-hidden">
            <!-- Bagian kiri untuk foto -->
            <div class="w-1/2 bg-green-700 flex items-center justify-center">
                <img src="assets/login.jpg" alt="Image">
            </div>
            <!-- Bagian kanan untuk form -->
            <div class="w-1/2 p-8">
                <img src="assets/verocafelogo.svg" class="h-10 mb-5" alt="Logo VeroCaffè">
                <h2 class="text-3xl font-bold mb-5 text-gray-800">Sign In</h2>
                <form action="<?php echo e(route('login.process')); ?>" method="POST" class="space-y-4">
                    <?php echo csrf_field(); ?>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                            placeholder="Enter your email" />
                    </div>
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-600">Password</label>
                        <input type="password" id="password" name="password"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-300"
                            placeholder="Enter your password" />
                    </div>
                    <button type="submit"
                        class="w-full py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
                        Sign In
                    </button>
                </form>
                <p class="mt-6 text-center text-sm">
                    New Here? <a href="<?php echo e(route('register')); ?>" class="text-blue-500 hover:underline">Sign Up</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html><?php /**PATH /home/iydheko/Projects/XIPPLG1_Verocaffe_15-19-24-main/resources/views/login.blade.php ENDPATH**/ ?>