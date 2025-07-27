<x-layout>
    <x-page-heading>Search Results of <span class="underline">{{ request('q') }}</span> </x-page-heading>

    <div class="mt-6 space-y-5">
        @foreach ($jobs as $job)
            <x-job-card-wide :$job />
        @endforeach
    </div>
</x-layout>
