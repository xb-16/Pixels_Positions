<x-layout>
    <x-page-heading>
        <span class="underline">'{{ request('tag')->name }}'</span>
        Jobs
    </x-page-heading>

    <div class="mt-6 space-y-5">
        @foreach ($jobs as $job)
            <x-job-card-wide :$job />
        @endforeach
    </div>
</x-layout>
