<x-app-layout>
    <x-nav></x-nav>
    <x-subnav></x-subnav>
    <x-wrapper>
        <div class="container overflow-hidden">
            <div class="row gx-5">
              <div class="col">
               <div class="p-3 border bg-light">Custom column padding</div>
              </div>
              <div class="col">
                <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Your Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Your Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Phone -->
                        <div class="mt-4">
                            <x-input-label for="phone" :value="__('Your Phone')" />

                            <x-text-input id="phone" class="block mt-1 w-full"
                                            name="password"
                                            required/>

                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
    </x-wrapper>
</x-app-layout>
