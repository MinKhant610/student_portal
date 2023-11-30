<x-form.form-wrapper>
    <p class="fs-3 text-center mb-4">Get In Touch With Us</p>
    <hr style="height: 4px;">
    <form class="mt-3">
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
                            name="phone"
                            required/>

            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>
        <!-- comment box -->
        <div class="mt-4">
            <x-input-label for="message" :value="__('Your Messages')" />

            <textarea
            required
            name="body"
            cols="10"
            rows="5"
            class="form-control mt-1
            border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm
            "
            placeholder="say something..."
            ></textarea>

            <x-input-error :messages="$errors->get('phone')" class="mt-2" />

            <div class="d-flex justify-content-center mt-3">
                    <button type="submit" class="btn btn-primary bg-primary">
                        Send Message
                    </button>
            </div>
    </form>
</div>
</x-form.form-wrapper>
