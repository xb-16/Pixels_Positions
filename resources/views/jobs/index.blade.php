<x-layout>
    <div class="space-y-10">
        <section class="mx-auto my-24 w-fit space-y-5">
            <h1 class="text-center text-5xl font-bold">Let's Find Your Next Job</h1>
            {{--
                <form action="">
                <input
                type="text"
                placeholder="I am Looking For..."
                class="font-hanken mx-auto block w-[80%] rounded-lg bg-white/20 p-2 placeholder:text-gray-500 focus:outline-0"
                />
                </form>
            --}}

            <x-forms.form action="/search" class="mt-6">
                <x-forms.input :label="false" name="q" placeholder="I am Looking For..." />
            </x-forms.form>
        </section>
        <section>
            <x-section-heading>Top Jobs</x-section-heading>
            <div class="mt-6 grid grid-cols-3 gap-4">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="mt-6 space-y-5">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>
