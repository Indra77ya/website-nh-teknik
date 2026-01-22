<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite(['resources/css/admin.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="dark:bg-gray-900 bg-gray-50 font-outfit text-base font-normal z-1 relative">
    <div
      x-data="{
          isExpanded: true,
          isMobileOpen: false,
          isHovered: false,
          isApplicationMenuOpen: false,
          openSubmenu: null,
          isActive(path) { return window.location.href === path || window.location.href.startsWith(path + '/'); },
      }"
      class="min-h-screen xl:flex"
    >
        @include('partials.tailadmin-sidebar')

        <!-- Backdrop -->
        <div x-show="isMobileOpen" @click="isMobileOpen = false" class="fixed inset-0 z-40 bg-gray-900 bg-opacity-50 lg:hidden" style="display: none;"></div>

        <div class="flex-1 transition-all duration-300 ease-in-out"
             :class="{
                 'lg:ml-[290px]': isExpanded || isHovered,
                 'lg:ml-[90px]': !isExpanded && !isHovered,
                 'ml-0': isMobileOpen
             }"
        >
            @include('partials.tailadmin-header')

            <div class="p-4 mx-auto max-w-screen-2xl md:p-6">
                @yield('content')
            </div>
        </div>
    </div>
</body>
</html>
