@props(['student'])
<x-app-layout>
    @include('layouts.navigation')

    <x-guest-layout>
        <h1 class="text-center fs-3 text-secondary fst-italic mb-5">
            Student Grade Edit Form
        </h1>
        <form action="/dashboard/students/{{$student->id}}/update"
        method="POST"
        enctype="multipart/form-data"
        >
        @csrf
        @method('patch')
            {{-- Name --}}
            <div>
                <x-input-label for="name" :value="__('Name')"/>
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                value="{{$student->name}}" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <!-- Roll -->
            <div class="mt-4">
                <x-input-label for="roll" :value="__('Roll')" />
                <x-text-input id="roll" class="block mt-1 w-full"  name="roll" :value="old('roll')"
                value="{{$student->roll}}"
                required/>
                <x-input-error :messages="$errors->get('roll')" class="mt-2" />
            </div>

            {{-- Year --}}
            <x-input-label for="year" :value="__('Year')"
            class="mt-4"/>
            <select name="year" required
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full"
            >
                <option value="first_year">First Year</option>
                <option value="second_year">Second Year</option>
                <option value="third_year">Third Year</option>
                <option value="fourth_year">Fourth Year</option>
                <option value="fifth_year">Fifth Year</option>
                <option value="final_year">Final Year</option>
            </select>

            <!-- subject -->
            <div class="mt-4">
                <x-input-label for="sub1" :value="__('Subject 1')" />
                <x-text-input id="sub1" class="block mt-1 w-full"  name="sub1" :value="old('sub1')" required
                value="{{$student->sub1}}" />
                <x-input-error :messages="$errors->get('sub1')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="sub2" :value="__('Subject 2')" />
                <x-text-input id="sub2" class="block mt-1 w-full"  name="sub2" :value="old('sub2')"
                value="{{$student->sub2}}"  required/>
                <x-input-error :messages="$errors->get('sub2')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="sub3" :value="__('Subject 3')" />
                <x-text-input id="sub3" class="block mt-1 w-full"  name="sub3" :value="old('sub3')" value="{{$student->sub3}}" required/>
                <x-input-error :messages="$errors->get('sub3')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="sub4" :value="__('Subject 4')" />
                <x-text-input id="sub4" class="block mt-1 w-full"  name="sub4" :value="old('sub4')" value="{{$student->sub4}}" required/>
                <x-input-error :messages="$errors->get('sub1')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="sub5" :value="__('Subject 5')" />
                <x-text-input id="sub5" class="block mt-1 w-full"  name="sub5" :value="old('sub5')"
                value="{{$student->sub5}}" required/>
                <x-input-error :messages="$errors->get('sub5')" class="mt-2" />
            </div><!-- subject -->
            <div class="mt-4">
                <x-input-label for="sub6" :value="__('Subject 6')" />
                <x-text-input id="sub6" class="block mt-1 w-full"  name="sub6" :value="old('sub6')" value="{{$student->sub6}}" required/>
                <x-input-error :messages="$errors->get('sub6')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="sub7" :value="__('Subject 7')" />
                <x-text-input id="sub7" class="block mt-1 w-full"  name="sub7" :value="old('sub7')"
                value="{{$student->sub7}}" required/>
                <x-input-error :messages="$errors->get('sub7')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-primary-button class="ms-4">
                    {{ __('Update') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>
</x-app-layout>
