@props(['students'])
<h1>hi there</h1>

@if ($students->isEmpty())
<p>not found data</p>
@endif

@foreach ($students as $student)
<p> {{$student->name}} </p>
<p> {{$student->roll}} </p>
<p> {{$student->year}} </p>
<p> {{$student->sub1}} </p>
<p> {{$student->sub2}} </p>
@endforeach

