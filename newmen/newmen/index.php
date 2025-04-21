<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Inventory System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <a href="index.php" class="flex items-center py-4 px-2">
                            <span class="font-semibold text-gray-500 text-lg">Inventory System</span>
                        </a>
                    </div>
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="index.php" class="py-4 px-2 text-blue-500 border-b-4 border-blue-500 font-semibold">Home</a>
                        <a href="about.php" class="py-4 px-2 text-gray-500 font-semibold hover:text-blue-500 transition duration-300">About</a>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-3">
                    <?php if (isset($_SESSION['user'])): ?>
                        <a href="dashboard.php" class="py-2 px-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-400 transition duration-300">Dashboard</a>
                        <a href="logout.php" class="py-2 px-2 bg-red-500 text-white font-semibold rounded hover:bg-red-400 transition duration-300">Logout</a>
                    <?php else: ?>
                        <a href="login.php" class="py-2 px-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-400 transition duration-300">Login</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="p-8">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">Welcome to the Inventory Management System</h1>
                <p class="text-gray-600 mb-6">A comprehensive solution for tracking and managing your retail inventory in real-time.</p>
                
                <?php if (isset($_SESSION['user'])): ?>
                    <a href="dashboard.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">
                        Go to Dashboard
                    </a>
                <?php else: ?>
                    <div class="flex space-x-4">
                        <a href="login.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block">
                            Login
                        </a>
                        <a href="about.php" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded inline-block">
                            Learn More
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>