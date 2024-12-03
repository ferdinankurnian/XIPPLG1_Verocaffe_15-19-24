<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member List</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <!-- Tombol kembali -->
    <div class="absolute top-4 left-4">
        <a href="/" class="flex items-center space-x-2 text-green-700">
            <!-- Icon panah -->
            <span class="material-symbols-outlined">
                arrow_back
            </span>
            <!-- Teks -->
            <span class="text-sm font-medium">Go to Home</span>
        </a>
    </div>

    <div class="flex items-center justify-center">
        <img src="assets/verocafesimple.svg" alt="Logo">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-md">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-xl font-bold">My member</h1>
                <a href="<?php echo e(route('logout')); ?>"
                    class="bg-gradient-to-r from-red-500 to-pink-500 text-white rounded-full px-4 py-1 text-sm">Log
                    out</a>
            </div>
            <div class="space-y-4">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <span class="bg-green-500 w-3 h-3 rounded-full mr-2"></span>
                        <div class="flex flex-col">
                            <span class="text-[13px] bold">Name</span>
                            <span><?php echo e(Auth::user()->name); ?></span>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <span class="bg-green-500 w-3 h-3 rounded-full mr-2"></span>
                        <div class="flex flex-col">
                            <span class="text-[13px] bold">Email</span>
                            <span><?php echo e(Auth::user()->email); ?></span>
                        </div>
                    </div>
                    <span class="bg-green-500 text-white rounded-full px-3 py-1 text-sm cursor-pointer">Change</span>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <span class="bg-green-500 w-3 h-3 rounded-full mr-2"></span>
                        <div class="flex flex-col">
                            <span class="text-[13px] bold">Password</span>
                            <span>ꞏꞏꞏꞏꞏꞏꞏꞏꞏꞏꞏ</span>
                        </div>
                    </div>
                    <span class="bg-green-500 text-white rounded-full px-3 py-1 text-sm cursor-pointer">Change</span>
                </div>
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <span class="bg-green-500 w-3 h-3 rounded-full mr-2"></span>
                        <div class="flex flex-col">
                            <span class="text-[13px] bold">Number</span>
                            <span>Not set</span>
                        </div>
                    </div>
                    <span class="bg-green-500 text-white rounded-full px-3 py-1 text-sm cursor-pointer">Set
                        number</span>
                </div>
            </div>
        </div>
    </div>
</body>

</html><?php /**PATH /home/iydheko/Projects/XIPPLG1_Verocaffe_15-19-24-main/resources/views/member.blade.php ENDPATH**/ ?>