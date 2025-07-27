@props([
    'job',
])

<div
    class="group flex gap-3 rounded-xl border border-transparent bg-white/5 p-4 shadow-xs transition duration-500 hover:scale-101 hover:border-blue-600 hover:shadow-blue-600"
    onclick="window.location.href= '{{ $job->url }}'"
>
    <div>
        <x-employer-logo :employer="$job->employer" />
    </div>

    <div class="flex h-[full] grow-1 flex-col gap-1">
        <div class="text-sm font-medium text-gray-400">{{ $job->employer->name }}</div>
        <h3 class="mb-4 text-xl font-bold transition group-hover:text-blue-600">{{ $job->title }}</h3>
        <p class="mt-auto font-medium text-gray-400">{{ $job->schedule }} - From $ {{ $job->salary }}</p>
    </div>

    <div class="mt-auto flex items-center justify-between">
        <div class="space-x-1">
            @foreach ($job->tags as $tag)
                <x-tag :$tag />
            @endforeach
        </div>
    </div>
</div>
