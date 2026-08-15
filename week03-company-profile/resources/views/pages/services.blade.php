@extends('layouts.app')
@section('title', 'Services - TechCorp')

@section('content')
<div class="max-w-6xl mx-auto py-12 px-4">
    <h1 class="text-3xl font-bold text-center mb-8">Our Services</h1>
    <div class="grid md:grid-cols-3 gap-6">
        @php
            $services = [
                ['title' => 'Web Development', 'desc' => 'Custom dynamic applications build with modern frameworks.'],
                ['title' => 'Mobile Development', 'desc' => 'Cross-platform iOS and Android app solutions.'],
                ['title' => 'UI/UX Design', 'desc' => 'User-centric interfaces optimized for engagement.'],
                ['title' => 'Cloud Solutions', 'desc' => 'Scalable infrastructure and cloud deployment.'],
                ['title' => 'Cybersecurity', 'desc' => 'Robust security auditing and threat defense.'],
                ['title' => 'IT Consulting', 'desc' => 'Expert strategic guidance for business systems.']
            ];
        @endphp
        @foreach($services as $service)
            <div class="p-6 bg-white shadow rounded border hover:border-blue-500">
                <h3 class="font-bold text-xl mb-2">{{ $service['title'] }}</h3>
                <p class="text-gray-600 text-sm">{{ $service['desc'] }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection