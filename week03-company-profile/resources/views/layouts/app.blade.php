<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'RedLine Creative Studios')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom Black & Red Grid Background Pattern */
        body {
            background-color: #0b0b0b;
            background-image: 
                linear-gradient(to right, rgba(220, 38, 38, 0.07) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(220, 38, 38, 0.07) 1px, transparent 1px);
            background-size: 32px 32px;
        }
    </style>
</head>
<body class="text-gray-300 flex flex-col min-h-screen font-sans">
    @include('components.navbar')
    <main class="flex-grow">
        @yield('content')
    </main>
    @include('components.footer')
</body>
</html>