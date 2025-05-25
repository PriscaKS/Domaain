@extends('layouts.front', ['pageTitle' => 'Dpp | music'])

@section('content')
    <!-- Background Image Section with Overlay -->
    <div class="background-container-music">
        <div class="overlay"></div> <!-- Gradient Overlay -->
        <div class="text-container">
            <div class="home-link playfair text-5xl md:text-7xl font-bold mb-6 animate-float">DPP Music</div>
            <a href="{{  route('welcome') }}" class="contact-text">home / Music</a>
        </div>
    </div>


    <div id="musicLis" class="bg-gray-100 rounded-lg p-10 shadow-lg w-full md:w-[80%] mx-auto">
        @if ($music->isEmpty())
            <p class="text-center text-gray-600">No music found. Please check back later!</p>
        @else
            <ul class="space-y-6">
                @foreach ($music as $track)
                    <li
                        class="flex flex-col md:flex-row items-center justify-between bg-white p-4 rounded shadow-sm hover:bg-gray-50 transition">
                        <div class="flex items-center space-x-4">
                            <div class="text-purple-600 text-xl">
                                <i class="fas fa-music"></i>
                            </div>
                            <div>
                                <p class="text-lg font-semibold text-gray-800">{{ $track->title }}</p>
                                <p class="text-sm text-gray-500">{{ $track->artist }} &bull; {{ $track->category }}</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4 mt-4 md:mt-0">
                            <audio controls class="w-64">
                                <source src="{{ asset('storage/' . $track->file) }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                            {{-- <a href="{{ asset('storage/' . $track->file) }}" download
                                class="text-green-600 hover:text-green-800" title="Download">
                                <i class="fas fa-download text-xl"></i>
                            </a> --}}
                        </div>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

@endsection