@props(['student'])
    <x-guest-layout>
        <div class="d-flex justify-content-center mt-3">
            <div class="me-5">
                <img src="/images/tulogo.png"
                width="50"
                height="50"
                alt="">
            </div>
            <div class="font-medium text-md text-gray-700 dark:text-gray-300">
                <p>Name - {{$student->name}}</p>
                <p>Roll - {{$student->roll}}</p>
                <p>Year - {{ucwords($student->year) }}</p>
            </div>
        </div>
        <div class="mt-5 ms-5">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Subjects</th>
                    <th scope="col">Grades</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Myanmar</td>
                    <td>{{$student->sub1}}</td>
                  </tr>
                    <th scope="row">2</th>
                    <td>English</td>
                    <td>{{$student->sub2}}</td>
                  </tr><tr>
                    <th scope="row">3</th>
                    <td>Engineering Mathematics I</td>
                    <td>{{$student->sub3}}</td>
                  </tr><tr>
                    <th scope="row">4</th>
                    <td>Engineering Physics I</td>
                    <td>{{$student->sub4}}</td>
                  </tr><tr>
                    <th scope="row">5</th>
                    <td>Engineering Chemistry I	</td>
                    <td>{{$student->sub5}}</td>
                  </tr><tr>
                    <th scope="row">6</th>
                    <td>Basic Engineering Drawing I</td>
                    <td>{{$student->sub6}}</td>
                  </tr><tr>
                    <th scope="row">7</th>
                    <td>Introduction to Mechatronics I	</td>
                    <td>{{$student->sub7}}</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </x-guest-layout>

