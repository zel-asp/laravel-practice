<x-layout title="Jobs" heading="Jobs">
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/job/{{ $job['id'] }}">
                    {{ $job['title'] }} - {{ $job['salary'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>