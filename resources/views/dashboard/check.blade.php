@props(['student'])
<x-app-layout>
    @include('layouts.navigation')
    @if ($student->year == "first_year")
        <x-first :student="$student"></x-first>
    @endif
    @if ($student->year == "second_year")
        <x-second :student="$student"></x-second>
    @endif
    @if ($student->year == "third_year")
        <x-third :student="$student"></x-third>
    @endif
    @if ($student->year == "fourth_year")
        <x-fourth :student="$student"></x-fourth>
    @endif
    @if ($student->year == "fifth_year")
        <x-fifth :student="$student"></x-fifth>
    @endif
</x-app-layout>

