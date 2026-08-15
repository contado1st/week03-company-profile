@extends('layouts.app')
@section('title', 'About Us - RedLine Creative Studios')

@section('content')
<div class="max-w-5xl mx-auto py-16 px-4">
    <!-- Header -->
    <div class="text-center mb-16">
        <h1 class="text-4xl font-bold text-white uppercase mb-2">The Artists Behind the <span class="text-red-600">Canvas</span></h1>
        <p class="text-xl text-gray-400 italic">From sketch to final render.</p>
    </div>

    <!-- Our Story -->
    <div class="bg-gray-800 p-8 rounded mb-12 shadow-lg">
        <h2 class="text-2xl font-bold text-white mb-4 uppercase border-l-4 border-red-600 pl-4">Forged in Creativity</h2>
        <p class="text-gray-300 leading-relaxed mb-4">
            RedLine Creative Studios began with a simple idea: self-taught artists need a place to thrive. We understand the journey of staring at a blank screen and working through the layers to create something extraordinary.
        </p>
        <p class="text-gray-300 leading-relaxed">
            We built this studio to provide a stable, collaborative environment where creators can refine their craft, build fulfilling careers, and produce art they can genuinely be proud of.
        </p>
    </div>

    <!-- Core Values -->
    <h2 class="text-2xl font-bold text-white mb-6 uppercase text-center">Our Core Values</h2>
    <div class="grid md:grid-cols-3 gap-6">
        <div class="p-6 bg-black shadow rounded border-t-2 border-red-600">
            <h3 class="font-bold text-lg mb-2 text-white uppercase">Creative Freedom</h3>
            <p class="text-gray-400 text-sm">We champion originality, heavily supporting original character (OC) creation alongside high-quality fan art projects.</p>
        </div>
        <div class="p-6 bg-black shadow rounded border-t-2 border-red-600">
            <h3 class="font-bold text-lg mb-2 text-white uppercase">Technical Excellence</h3>
            <p class="text-gray-400 text-sm">We don't just draw; we engineer art. From rigorous anatomy studies to mastering 3D lighting, we push the boundaries of digital illustration.</p>
        </div>
        <div class="p-6 bg-black shadow rounded border-t-2 border-red-600">
            <h3 class="font-bold text-lg mb-2 text-white uppercase">Community & Stability</h3>
            <p class="text-gray-400 text-sm">We believe in creating sustainable, stable futures for our artists so they can focus entirely on what they do best: creating.</p>
        </div>
    </div>
</div>
@endsection