@extends('layouts.admin')

@section('content')
    <div class="flex flex-wrap items-center justify-between gap-3 mb-6">
      <h2 class="text-xl font-semibold text-gray-800 dark:text-white/90">
        Dashboard
      </h2>
      <nav>
        <ol class="flex items-center gap-1.5">
          <li>
            <a class="inline-flex items-center gap-1.5 text-sm text-gray-500 dark:text-gray-400" href="/">
              Home
              <svg class="stroke-current" width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.0765 12.667L10.2432 8.50033L6.0765 4.33366" stroke="" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
          </li>
          <li class="text-sm text-gray-800 dark:text-white/90">
            Dashboard
          </li>
        </ol>
      </nav>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Card 1 -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-theme-xs p-6 border border-gray-200 dark:border-gray-800">
            <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium uppercase tracking-wider">Total Users</h3>
            <div class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">1,234</div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-theme-xs p-6 border border-gray-200 dark:border-gray-800">
            <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium uppercase tracking-wider">Revenue</h3>
            <div class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">$12,345</div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-theme-xs p-6 border border-gray-200 dark:border-gray-800">
            <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium uppercase tracking-wider">New Orders</h3>
            <div class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">56</div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-theme-xs p-6 border border-gray-200 dark:border-gray-800">
            <h3 class="text-gray-500 dark:text-gray-400 text-sm font-medium uppercase tracking-wider">Pending Issues</h3>
            <div class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">7</div>
        </div>
    </div>

    <div class="mt-8 bg-white dark:bg-gray-800 shadow-theme-xs rounded-2xl p-6 border border-gray-200 dark:border-gray-800">
        <h3 class="text-lg font-medium text-gray-900 dark:text-white">Recent Activity</h3>
        <p class="mt-2 text-gray-600 dark:text-gray-400">This is a placeholder for recent activity or a table.</p>
    </div>
@endsection
