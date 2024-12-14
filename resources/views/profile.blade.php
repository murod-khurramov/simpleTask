
@include('components.navbar')
<title>Profile</title>
<div class="bg-gray-100 min-h-screen flex items-center justify-center">

<!-- Profile Card -->
<div class="bg-white rounded-lg shadow-md p-6 w-full max-w-md">
    <div class="flex items-center">
        <!-- Profile Picture -->
        <img src="https://via.placeholder.com/80" alt="Profile Picture" class="w-20 h-20 rounded-full">
        <div class="ml-4">
            {{--            <h1 class="text-xl font-bold text-gray-800">John Doe</h1>--}}
            <p class="text-gray-600">{{ Auth::user()->email }}</p>
            <p class="text-gray-500 text-sm">Joined: {{ Auth::user()->created_at->format('F, j, Y') }}</p>
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
</div>
