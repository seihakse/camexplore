<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('home') }}
        </h2> --}}
        <div class="mt-4">
            <a href="{{ route('home') }}" class="btn btn-primary font-bold" role="button">
                Check Home Page ->
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    <p>Welcome to your dashboard. Here you can manage your account, view your bookings, and more.</p>
                    <p>Use the navigation menu to explore different sections of the application.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
