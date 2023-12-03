<x-app-layout>
    <x-nav></x-nav>
    <x-subnav></x-subnav>
    <x-guest-layout>
    <h1>Student Results</h1>

    @if (count($results) === 0)
        <p>No results found for the given information.</p>
    @else
        <div id="result-container">
            @foreach ($results as $result)
                <p>Semester: {{ $result->semester }}, GPA: {{ $result->gpa }}</p>
            @endforeach
        </div>
    @endif
    </x-guest-layout>

</x-app-layout>
