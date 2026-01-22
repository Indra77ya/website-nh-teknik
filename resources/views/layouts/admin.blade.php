<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64 bg-gray-800 text-white">
                <div class="flex items-center justify-center h-16 bg-gray-900 text-xl font-bold">
                    Admin Panel
                </div>
                <div class="flex flex-col flex-1 overflow-y-auto">
                    <nav class="flex-1 px-2 py-4 space-y-2">
                        <a href="{{ url('/admin/dashboard') }}" class="flex items-center px-4 py-2 text-gray-300 hover:bg-gray-700 hover:text-white rounded-md">
                            Dashboard
                        </a>
                        <!-- Add more links here -->
                    </nav>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex flex-col flex-1 w-0 overflow-hidden">
            <!-- Navbar -->
            <header class="bg-white shadow">
                <div class="flex justify-between items-center px-6 py-4">
                    <h2 class="text-xl font-semibold text-gray-800">
                        @yield('header', 'Dashboard')
                    </h2>
                    <div>
                        <!-- Placeholder for logout or profile -->
                        <span class="text-gray-500">Welcome, Admin</span>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
