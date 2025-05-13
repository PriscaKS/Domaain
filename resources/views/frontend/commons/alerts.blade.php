
@if (session('success'))
    <div 
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        x-transition
        class="mb-4 p-4 rounded-lg bg-green-100 text-green-800 border border-green-300"
    >
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div 
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        x-transition
        class="mb-4 p-4 rounded-lg bg-red-100 text-red-800 border border-red-300"
    >
        {{ session('error') }}
    </div>
@endif

@if ($errors->any())
    <div 
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 4000)"
        x-show="show"
        x-transition
        class="mb-4 p-4 rounded-lg bg-red-100 text-red-800 border border-red-300"
    >
        <ul class="list-disc pl-5 space-y-1 text-sm">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
