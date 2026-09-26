<!-- resources/views/components/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="ms">

<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Instrumen Penilaian Kesejahteraan Psikologi Pekerja Senior' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-purple-100 to-indigo-100 min-h-screen text-gray-800">
    <div class="container mx-auto px-4 py-10 max-w-3xl">
        <div class="bg-white shadow-xl rounded-2xl p-8 sm:p-10">
            <div class="mb-6 border-b pb-4">
                <h1 class="text-2xl font-bold text-indigo-800">
                    {{ $title ?? 'Instrumen Penilaian Kesejahteraan Psikologi Pekerja Senior' }}
                </h1>
            </div>
            <div>
                @if (session('message'))
                    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show" x-transition
                        class="mb-6 flex items-start space-x-3 p-4 bg-green-100 border-l-4 border-green-500 text-green-800 rounded shadow"
                        role="alert">
                        <svg class="w-6 h-6 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>

                        <span class="text-sm">{{ session('message') }}</span>
                    </div>
                @endif

                @hasSection('content')
                    @yield('content')
                @else
                    {{ $slot }}
                @endif
            </div>
        </div>
        <div class="text-center text-xs text-gray-500 mt-6">
            © {{ date('Y') }} Metatret. All rights reserved.
        </div>
    </div>

    @livewireScripts
</body>

</html>
