<x-layout title="Jobs" heading="Jobs">
    <h2 class="font-bold text-">Title: {{ $job->title }}</h2>
    <p class=" text-sm text-gray-500">
        This job pays {{ $job->salary }} per year.
    </p>

    <!-- you can use ['id'] -->
    <x-link href="/jobs/{{ $job->id }}/edit" class="mt-6">
        Edit Job
    </x-link>
</x-layout>