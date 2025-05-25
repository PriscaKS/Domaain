@extends('layouts.front', ['pageTitle' => 'Dpp | code_of_conduct'])
@section('content') <!-- Background Image Section with Overlay -->
    <div class="background-container-documents">
        <div class="overlay"></div> <!-- Gradient Overlay -->

        <div class="text-container">
            <div class="home-link">Code of Conduct</div>
            <a href="{{  route('welcome') }}" class="contact-text">home / Code of Conduct</a>
        </div>
    </div>




    <!-- Manifesto Section -->
    <div class="flex flex-col items-center mt-10 p-6 bg-white shadow-lg rounded-lg w-full max-w-6xl mx-auto">
        <h2 class="text-2xl font-semibold text-[var(--theme-color)] mb-4">Democratic Progressive Party Code of Conduct
        </h2>
        <p class="text-gray-600 mb-6 text-center">Read the official Code of Conduct by the Democratic Progressive Party
            below or download a copy.</p>

        <!-- Embedded Online PDF -->
        <div class="w-full h-[500px] border rounded-lg shadow-md">
            <iframe src="https://mec.org.mw/wp-content/uploads/2019/03/Political-party-code-of-conduct-2019.pdf?utm_source"
                class="w-full h-full" frameborder="0"></iframe>
        </div>

        <!-- Download Button -->
        <a href="https://mec.org.mw/wp-content/uploads/2019/03/Political-party-code-of-conduct-2019.pdf?utm_source"
            target="_blank"
            class="mt-6 bg-[var(--theme-color)] text-white py-2 px-6 rounded-lg hover:bg-blue-700 transition duration-300 flex items-center gap-2">
            <i class="fas fa-download"></i> Download Code of Conduct
        </a>
    </div>




@endsection