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
                    <td>English</td>
                    <td>{{$student->sub1}}</td>
                  </tr>
                    <th scope="row">2</th>
                    <td>Engineering Mathematics V</td>
                    <td>{{$student->sub2}}</td>
                  </tr><tr>
                    <th scope="row">3</th>
                    <td>Electronic Devices I</td>
                    <td>{{$student->sub3}}</td>
                  </tr><tr>
                    <th scope="row">4</th>
                    <td>Digital Electronics I</td>
                    <td>{{$student->sub4}}</td>
                  </tr><tr>
                    <th scope="row">5</th>
                    <td>Electrical Machine and Control I	</td>
                    <td>{{$student->sub5}}</td>
                  </tr><tr>
                    <th scope="row">6</th>
                    <td>Programmable Logic Controller I	</td>
                    <td>{{$student->sub6}}</td>
                  </tr><tr>
                    <th scope="row">7</th>
                    <td>Material Science and Strength of Material I</td>
                    <td>{{$student->sub7}}</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </x-guest-layout>
