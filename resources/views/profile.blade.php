<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

<!-- Profile Card -->
<div class="bg-white rounded-lg shadow-md p-6 w-full max-w-md">
    <div class="flex items-center">
        <!-- Profile Picture -->
        <img src="https://via.placeholder.com/80" alt="Profile Picture" class="w-20 h-20 rounded-full">
        <div class="ml-4">
            <h1 class="text-xl font-bold text-gray-800">John Doe</h1>
            <p class="text-gray-600">john.doe@example.com</p>
            <p class="text-gray-500 text-sm">Joined: January 1, 2024</p>
        </div>
    </div>
    <hr class="my-4">
    <!-- Profile Details -->
    <div>
        <h2 class="text-lg font-semibold text-gray-700">About Me</h2>
        <p class="text-gray-600 mt-2">
            Hello! I’m a software developer with a passion for building modern web applications.
        </p>
    </div>
    <!-- Edit Profile Button -->
    <button class="mt-4 w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
        Edit Profile
    </button>
</div>

</body>
</html>
