<div
    onclick="window.location.href= '{{ $job->url }}'"
    class="group flex flex-col rounded-xl border border-transparent bg-white/5 p-4 text-center shadow-xs transition duration-500 hover:scale-102 hover:border-blue-600 hover:shadow-blue-600"
>
    <div class="self-start text-sm">{{ $job->employer->name }}</div>
    <div class="space-y-3 py-8">
        <h3 class="text-lg font-bold transition group-hover:text-blue-600">{{ $job->title }}</h3>
        <p>{{ $job->schedule }} From $ {{ $job->salary }}</p>
    </div>
    <div class="mt-auto flex items-center justify-between">
        <div class="space-x-1">
            @foreach ($job->tags as $tag)
                <x-tag :$tag />
            @endforeach
        </div>
        <div>
            <x-employer-logo :employer="$job->employer" :width="45"/>
        </div>
    </div>
</div>
