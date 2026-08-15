@extends('layouts.app')
@section('title', 'About Us - TechCorp')

@section('content')
<div class="max-w-5xl mx-auto py-12 px-4 space-y-8">
    <h1 class="text-3xl font-bold text-gray-800">About Our Company</h1>
    <p class="text-gray-600">Founded in 2020, TechCorp has grown into a reliable digital transformation partner.</p>
    <div class="grid md:grid-cols-2 gap-6">
        <div class="p-6 bg-white shadow rounded">
            <h3 class="font-bold text-xl mb-2">Our Mission</h3>
            <p class="text-gray-600">To deliver secure and scalable software solutions worldwide.</p>
        </div>
        <div class="p-6 bg-white shadow rounded">
            <h3 class="font-bold text-xl mb-2">Our Vision</h3>
            <p class="text-gray-600">To be the industry benchmark in cloud and client-server architecture.</p>
        </div>
    </div>
</div>
@endsection