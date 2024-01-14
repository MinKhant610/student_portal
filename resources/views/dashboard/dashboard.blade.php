@props(['students'])
<x-app-layout>
    @include('layouts.navigation')
    {{-- search box --}}
    <div class="containter mt-5">
        <div class="row">
            <form action="" class="d-flex col-md-10 mx-auto">
                <input class="form-control me-2 rounded-pill"
                name="name"
                type="search"
                value="{{request('name')}}"
                placeholder="Search..."
                aria-label="Search"
                >
                <button class="btn bg-primary btn-primary  rounded-pill" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Year</th>
                            <th scope="col" colspan="3">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <td>{{$student->name}}</td>
                                <td>{{$student->year}}</td>
                                <td>
                                    <a href="/dashboard/students/{{$student->id}}/check" class="btn btn-success"> check </a>
                                </td>
                                <td>
                                    <a href="/dashboard/students/{{$student->id}}/edit" class="btn btn-warning"> Edit </a>
                                </td>
                                <td>
                                    <form action="/dashboard/students/{{$student->id}}/delete"
                                    method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn bg-danger btn-danger">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                      {{$students->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
