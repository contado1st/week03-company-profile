@extends('layouts.app')
@section('title', 'Contact - RedLine Creative Studios')

@section('content')
<div class="max-w-6xl mx-auto py-16 px-4 grid md:grid-cols-2 gap-12">
    <!-- Contact Info -->
    <div>
        <h1 class="text-4xl font-bold mb-2 text-white uppercase">Let’s <span class="text-red-600">Collaborate.</span></h1>
        <p class="text-gray-400 mb-8 text-lg">Have a vision? Let’s put it on the canvas. Reach out for commissions, studio inquiries, or portfolio submissions.</p>
        
        <div class="space-y-6 text-gray-300 bg-gray-800 p-8 rounded border-l-4 border-red-600">
            <p class="flex flex-col">
                <span class="font-bold text-white uppercase text-sm mb-1 text-red-500">Email</span> 
                create@redlinestudios.art
            </p>
            <p class="flex flex-col">
                <span class="font-bold text-white uppercase text-sm mb-1 text-red-500">Studio Location</span> 
                The Creative Hub, Laguna, Philippines
            </p>
            <p class="flex flex-col">
                <span class="font-bold text-white uppercase text-sm mb-1 text-red-500">Business Hours</span> 
                Monday - Friday, 10:00 AM - 7:00 PM (PST)
            </p>
        </div>
    </div>

    <!-- Custom Contact Form -->
    <form class="bg-gray-800 p-8 rounded shadow-lg space-y-5 border border-gray-700" onsubmit="event.preventDefault()">
        <div>
            <label class="block text-sm font-bold text-gray-400 uppercase mb-2">Name / Artist Handle</label>
            <input type="text" class="w-full bg-black border border-gray-700 text-white p-3 rounded focus:outline-none focus:border-red-600 focus:ring-1 focus:ring-red-600 transition" required>
        </div>
        
        <div>
            <label class="block text-sm font-bold text-gray-400 uppercase mb-2">Email Address</label>
            <input type="email" class="w-full bg-black border border-gray-700 text-white p-3 rounded focus:outline-none focus:border-red-600 focus:ring-1 focus:ring-red-600 transition" required>
        </div>

        <div>
            <label class="block text-sm font-bold text-gray-400 uppercase mb-2">Inquiry Type</label>
            <select class="w-full bg-black border border-gray-700 text-white p-3 rounded focus:outline-none focus:border-red-600 focus:ring-1 focus:ring-red-600 transition" required>
                <option value="" disabled selected>Select an option...</option>
                <option value="commission">Commission Request</option>
                <option value="commercial">Commercial Project</option>
                <option value="portfolio">Portfolio Submission</option>
                <option value="general">General Inquiry</option>
            </select>
        </div>
        
        <div>
            <label class="block text-sm font-bold text-gray-400 uppercase mb-2">Project Details / Concept Description</label>
            <textarea placeholder="Tell us about your project or character..." class="w-full bg-black border border-gray-700 text-white p-3 rounded h-32 focus:outline-none focus:border-red-600 focus:ring-1 focus:ring-red-600 transition" required></textarea>
        </div>

        <div>
            <label class="block text-sm font-bold text-gray-400 uppercase mb-2">Reference Links</label>
            <input type="url" placeholder="Link to your mood boards or reference sheets" class="w-full bg-black border border-gray-700 text-white p-3 rounded focus:outline-none focus:border-red-600 focus:ring-1 focus:ring-red-600 transition">
        </div>

        <button class="bg-red-600 text-white px-6 py-3 rounded uppercase font-bold tracking-wider hover:bg-red-700 w-full transition">Send Inquiry</button>
    </form>
</div>
@endsection