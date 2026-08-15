@extends('layouts.app')
@section('title', 'Home - RedLine Creative Studios')

@section('content')
<!-- Hero Section -->
<section class="bg-black text-white py-24 text-center border-b border-gray-800 relative">
    <div class="absolute inset-0 bg-red-900 opacity-10"></div>
    <div class="relative z-10 max-w-4xl mx-auto px-4">
        <h1 class="text-5xl font-extrabold mb-4 uppercase tracking-tight text-white">Bring Your Imagination to the <span class="text-red-600">Canvas.</span></h1>
        <p class="text-xl mb-8 text-gray-400">We are a collective of digital artists specializing in dynamic character design, world-building, and immersive game assets.</p>
        <div class="space-x-4">
            <a href="#" class="bg-red-600 text-white px-8 py-3 rounded uppercase font-bold tracking-wide hover:bg-red-700 transition">View the Gallery</a>
            <a href="{{ route('contact') }}" class="bg-transparent border border-red-600 text-red-500 px-8 py-3 rounded uppercase font-bold tracking-wide hover:bg-red-600 hover:text-white transition">Commission Our Studio</a>
        </div>
    </div>
</section>

<!-- Welcome Section -->
<section class="max-w-5xl mx-auto py-16 px-4 text-center">
    <h2 class="text-3xl font-bold mb-6 text-white uppercase border-b-2 border-red-600 inline-block pb-2">Welcome to RedLine Creative</h2>
    <p class="text-lg text-gray-400 max-w-3xl mx-auto mb-16">
        Whether you are an indie game developer looking for striking splash art or a creator needing your original characters brought to life, RedLine delivers. We are an artist-first studio that believes in the power of visual storytelling, blending technical skill with raw creativity.
    </p>

    <!-- Key Highlights -->
    <div class="grid md:grid-cols-3 gap-8 text-left">
        <div class="p-6 bg-gray-800 rounded border-l-4 border-red-600">
            <h3 class="font-bold text-xl mb-2 text-white">Built by Artists, For Artists</h3>
            <p class="text-gray-400 text-sm">An environment designed around the creative process, ensuring passion fuels every project.</p>
        </div>
        <div class="p-6 bg-gray-800 rounded border-l-4 border-red-600">
            <h3 class="font-bold text-xl mb-2 text-white">Versatile Workflows</h3>
            <p class="text-gray-400 text-sm">Our studio experts leverage Clip Studio Paint, Krita, and Blender to bring ideas into reality without limits.</p>
        </div>
        <div class="p-6 bg-gray-800 rounded border-l-4 border-red-600">
            <h3 class="font-bold text-xl mb-2 text-white">Bold Aesthetics</h3>
            <p class="text-gray-400 text-sm">Modern, high-impact designs tailored for the digital age to make your projects stand out.</p>
        </div>
    </div>
</section>
@endsection