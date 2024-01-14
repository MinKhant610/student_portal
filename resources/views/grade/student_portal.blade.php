<x-app-layout>
    <x-nav></x-nav>
    <x-subnav></x-subnav>
    <x-guest-layout>
        <div>
            <a href="/student">
                <img src="/images/student.png" alt="student-logo"
                class="w-20 h-20 fill-current text-gray-500 mx-auto">
            </a>
        </div>
        @if (session('error'))
        <p style="color: red;">{{ session('error') }}</p>
        @endif
        <form action="/get_result" method="GET">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Roll -->
            <div class="mt-4">
                <x-input-label for="roll" :value="__('Roll')" />
                <x-text-input id="roll" class="block mt-1 w-full"  name="roll" :value="old('roll')" required/>
                <x-input-error :messages="$errors->get('roll')" class="mt-2" />
            </div>

            <!-- Year -->
            <x-input-label for="year" :value="__('Year')" class="mt-4"/>
            <select name="year" required
            class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm block mt-1 w-full"
            >
                <option value="first_year">First Year</option>
                <option value="second_year">Second Year</option>
                <option value="third_year">Third Year</option>
                <option value="fourth_year">Fourth Year</option>
                <option value="fifth_year">Fifth Year</option>
                {{-- <option value="final_year">Final Year</option> --}}
            </select>

            <div class="flex items-center justify-end mt-4">

                <x-primary-button class="ms-4">
                    {{ __('Find') }}
                </x-primary-button>
            </div>
        </form>
    </x-guest-layout>

</x-app-layout>
