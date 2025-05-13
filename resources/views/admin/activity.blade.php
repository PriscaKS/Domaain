@extends('layouts.admin')

@section('title', 'DPP Admin | Activity Center')

@section('content')
    <div class="max-w-7xl mx-auto p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Activity Center</h2>

        @if ($activities->isEmpty())
            <div class="bg-yellow-100 border border-yellow-300 text-yellow-800 px-4 py-3 rounded">
                No activities recorded yet.
            </div>
        @else
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <ul class="divide-y divide-gray-200">
                    @foreach ($activities as $activity)
                        <li class="p-4 hover:bg-gray-50 transition">
                            <div class="flex items-start justify-between">
                                <div>
                                    <h3 class="text-lg font-medium text-gray-900">
                                        {{ $activity->title }}
                                    </h3>
                                    <p class="text-sm text-gray-600 mt-1">
                                        {{ Str::limit($activity->description, 120) }}
                                    </p>
                                    <span
                                        class="inline-block mt-2 px-3 py-1 text-xs font-medium bg-indigo-100 text-indigo-700 rounded-full">
                                        {{ ucfirst($activity->type) }}
                                    </span>
                                </div>
                                <div class="text-sm text-gray-400 ml-4 whitespace-nowrap">
                                    {{ $activity->created_at->diffForHumans() }}
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="mt-6">
                {{ $activities->links() }}
            </div>

        @endif
    </div>
@endsection
