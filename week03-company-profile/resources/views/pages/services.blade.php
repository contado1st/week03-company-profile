@extends('layouts.app')
@section('title', 'Services - RedLine Creative Studios')

@section('content')
<div class="max-w-6xl mx-auto py-16 px-4">
    <!-- Header -->
    <div class="text-center mb-16">
        <h1 class="text-4xl font-bold text-white uppercase mb-2">Our Creative <span class="text-red-600">Arsenal</span></h1>
        <p class="text-xl text-gray-400">Professional art services for games, media, and personal commissions.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
        <!-- Service 1: Original Character Design -->
        <div class="bg-gray-800 rounded overflow-hidden shadow-lg group flex flex-col justify-between border border-gray-700 hover:border-red-600 transition-colors duration-300">
            <div class="h-[420px] bg-black flex items-center justify-center overflow-hidden border-b-4 border-red-600 relative">
                <img src="{{ asset('img/oc-design.png') }}" alt="Original Character Design" class="w-full h-full object-contain p-2 group-hover:scale-105 transition-transform duration-500">
            </div>
            <div class="p-6 flex-grow flex flex-col justify-between">
                <div>
                    <h3 class="font-bold text-xl mb-3 text-white uppercase">Original Character (OC) Design</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Breathe life into your ideas. Our concept artists specialize in designing unique, highly detailed original characters complete with turnaround sheets, expression charts, and dynamic action poses.</p>
                </div>
            </div>
        </div>

        <!-- Service 2: Game Assets & Splash Art -->
        <div class="bg-gray-800 rounded overflow-hidden shadow-lg group flex flex-col justify-between border border-gray-700 hover:border-red-600 transition-colors duration-300">
            <div class="h-[420px] bg-black flex items-center justify-center overflow-hidden border-b-4 border-red-600 relative">
                <img src="{{ asset('img/splash-art.png') }}" alt="Game Assets & Splash Art" class="w-full h-full object-contain p-2 group-hover:scale-105 transition-transform duration-500">
            </div>
            <div class="p-6 flex-grow flex flex-col justify-between">
                <div>
                    <h3 class="font-bold text-xl mb-3 text-white uppercase">Game Assets & Splash Art</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Need high-energy visuals? We produce vibrant, highly polished splash art and 2D assets perfectly suited for modern gaming, particularly inspired by dynamic action and gacha-style aesthetics.</p>
                </div>
            </div>
        </div>

        <!-- Service 3: 3D Modeling & Asset Creation -->
        <div class="bg-gray-800 rounded overflow-hidden shadow-lg group flex flex-col justify-between border border-gray-700 hover:border-red-600 transition-colors duration-300">
            <div class="h-[420px] bg-black flex items-center justify-center overflow-hidden border-b-4 border-red-600 relative">
                <img src="{{ asset('img/3d-render.png') }}" alt="3D Modeling & Asset Creation" class="w-full h-full object-contain p-2 group-hover:scale-105 transition-transform duration-500">
            </div>
            <div class="p-6 flex-grow flex flex-col justify-between">
                <div>
                    <h3 class="font-bold text-xl mb-3 text-white uppercase">3D Modeling & Asset Creation</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">Taking concepts from 2D into the third dimension. Using tools like Blender, we sculpt, texture, and render characters and environments that are ready for integration into your next big project.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection