@extends('layouts.admin')

@section('header')
    Dashboard
@endsection

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Card 1 -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-gray-500 text-sm font-medium uppercase tracking-wider">Total Users</h3>
            <div class="mt-2 text-3xl font-bold text-gray-900">1,234</div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-gray-500 text-sm font-medium uppercase tracking-wider">Revenue</h3>
            <div class="mt-2 text-3xl font-bold text-gray-900">$12,345</div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-gray-500 text-sm font-medium uppercase tracking-wider">New Orders</h3>
            <div class="mt-2 text-3xl font-bold text-gray-900">56</div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-gray-500 text-sm font-medium uppercase tracking-wider">Pending Issues</h3>
            <div class="mt-2 text-3xl font-bold text-gray-900">7</div>
        </div>
    </div>

    <div class="mt-8 bg-white shadow rounded-lg p-6">
        <h3 class="text-lg font-medium text-gray-900">Recent Activity</h3>
        <p class="mt-2 text-gray-600">This is a placeholder for recent activity or a table.</p>
    </div>
@endsection
