<x-layout>
    <x-page-heading>Create a Job Offer</x-page-heading>

    <x-forms.form method="POST" action="/jobs/create">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="90,000" />
        <x-forms.input label="Location" name="location" placeholder="Winter Park, Florida" />

        <x-forms.select label="Schedule" name="schedule">
            <option value="Part Time">Part Time</option>
            <option value="Full Time">Full Time</option>
        </x-forms.select>
        <x-forms.input label="URL" name="url" placeholder="https:://acme.com/jobs/ceo-wanted" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (Comma Seperated)" name="tags" placeholder="Laracasts, Video, Education" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
