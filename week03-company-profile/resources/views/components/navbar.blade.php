<nav class="bg-black/90 backdrop-blur text-white p-4 px-8 flex justify-between items-center border-b border-red-900 sticky top-0 z-50">
    <div class="flex items-center space-x-3">
        <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
            <img src="{{ asset('img/logo.png') }}" alt="RedLine Logo" class="h-10 w-auto object-contain group-hover:scale-105 transition-transform">
            <span class="text-xl font-bold tracking-wider text-red-600">REDLINE <span class="text-white">STUDIOS</span></span>
        </a>
    </div>
    <div class="space-x-6 text-sm font-semibold uppercase tracking-wide">
        <a href="{{ route('home') }}" class="hover:text-red-500 transition-colors">Home</a>
        <a href="{{ route('about') }}" class="hover:text-red-500 transition-colors">About</a>
        <a href="{{ route('services') }}" class="hover:text-red-500 transition-colors">Services</a>
        <a href="{{ route('contact') }}" class="hover:text-red-500 transition-colors">Contact</a>
    </div>
</nav>