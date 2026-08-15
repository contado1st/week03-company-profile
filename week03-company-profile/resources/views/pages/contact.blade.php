@extends('layouts.app')
@section('title', 'Contact Us - TechCorp')

@section('content')
<div class="max-w-5xl mx-auto py-12 px-4 grid md:grid-cols-2 gap-8">
    <div>
        <h1 class="text-3xl font-bold mb-4">Get In Touch</h1>
        <p class="text-gray-600 mb-2"><strong>Address:</strong> 123 Innovation Way, Tech City</p>
        <p class="text-gray-600 mb-2"><strong>Email:</strong> contact@techcorp.com</p>
        <p class="text-gray-600 mb-4"><strong>Phone:</strong> +1 (555) 019-2834</p>
    </div>
    <form class="bg-white p-6 rounded shadow space-y-4" onsubmit="event.preventDefault()">
        <input type="text" placeholder="Your Name" class="w-full border p-2 rounded" required>
        <input type="email" placeholder="Your Email" class="w-full border p-2 rounded" required>
        <textarea placeholder="Your Message" class="w-full border p-2 rounded h-32" required></textarea>
        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 w-full">Send Message</button>
    </form>
</div>
@endsection