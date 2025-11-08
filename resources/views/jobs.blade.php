<x-layout title="Jobs" heading="Jobs">
    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class=" block px-4 py-6 border border-gray-400 rounded-lg">

                <div class="font-bold text-sm text-blue-500">{{ $job->employer->name }}</div>
                <div>
                    <span class="font-bold">{{ $job['title'] }}:</span> {{ $job['salary'] }}
                </div>
            </a>
        @endforeach
    </div>
</x-layout>