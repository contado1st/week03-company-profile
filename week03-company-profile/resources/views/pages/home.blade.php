@extends('layouts.app')
@section('title', 'Home - TechCorp')

@section('content')
<section class="bg-blue-600 text-white py-20 text-center">
    <h1 class="text-4xl font-bold mb-4">Innovating Digital Excellence</h1>
    <p class="text-lg mb-6">We craft high-performance web and enterprise IT solutions.</p>
    <a href="{{ route('services') }}" class="bg-white text-blue-600 px-6 py-3 rounded font-semibold hover:bg-gray-100">Our Services</a>
</section>
<section class="max-w-5xl mx-auto py-12 px-4 text-center">
    <h2 class="text-2xl font-bold mb-4">Welcome to TechCorp</h2>
    <p class="text-gray-600">Empowering businesses through cutting-edge technology and software engineering.</p>
</section>
@endsection