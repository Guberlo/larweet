<x-app>
    <form action="/users/{{ $user->username }}" method="post">
        @csrf
        @method('PATCH')

        <div class="flex flex-wrap">
            <label for="username" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                {{ __('Username') }}:
            </label>

            <input id="username" type="text" class="form-input w-full @error('username')  border-red-500 @enderror"
                name="username" value="{{ $user->username }}" required autocomplete="username" autofocus>

            @error('username')
            <p class="text-red-500 text-xs italic mt-4">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="flex flex-wrap">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                {{ __('Name') }}:
            </label>

            <input id="name" type="text" class="form-input w-full @error('name')  border-red-500 @enderror"
                name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

            @error('name')
            <p class="text-red-500 text-xs italic mt-4">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="flex flex-wrap">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                {{ __('E-Mail Address') }}:
            </label>

            <input id="email" type="email"
                class="form-input w-full @error('email') border-red-500 @enderror" name="email"
                value="{{ $user->email }}" required autocomplete="email">

            @error('email')
            <p class="text-red-500 text-xs italic mt-4">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="flex flex-wrap">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                {{ __('Password') }}:
            </label>

            <input id="password" type="password"
                class="form-input w-full @error('password') border-red-500 @enderror" name="password"
                required autocomplete="new-password">

            @error('password')
            <p class="text-red-500 text-xs italic mt-4">
                {{ $message }}
            </p>
            @enderror
        </div>

        <div class="flex flex-wrap">
            <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                {{ __('Confirm Password') }}:
            </label>

            <input id="password-confirm" type="password" class="form-input w-full"
                name="password_confirmation" required autocomplete="new-password">
        </div>

        <div class="flex flex-wrap  mt-5">
            <button type="submit"
                class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                {{ __('Edit Profile') }}
            </button>
        </div>


    </form>
</x-app>