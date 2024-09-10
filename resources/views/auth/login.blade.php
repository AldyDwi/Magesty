<x-authentikasi>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="min-[320px]:hidden lg:block lg:ml-52">
        <img src="{{ asset('storage/gambar/icon2.png') }}" alt="icon2" class="h-64">
    </div>

    <div class="lg:mr-20 w-10/12 lg:w-1/3 shadow-lg shadow-slate-500 rounded-2xl px-6 pb-12 pt-6 bg-white border-2 border-purple-600">
        <h1 class="text-purple-600 text-2xl font-bold mb-10">Login</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
    
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" class="text-lg/[19px] text-purple-600" />
                <x-text-input id="email" class="block mt-3 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <!-- Password -->
            <div class="mt-6">
                <x-input-label for="password" :value="__('Password')" class="text-lg/[19px] text-purple-600" />
    
                <x-text-input id="password" class="block mt-3 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-purple-500 shadow-sm focus:ring-purple-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
    
            <div class="flex items-center justify-end mt-4">
                {{-- @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif --}}
    
                <x-primary-button class="w-full justify-center py-3 bg-purple-600 hover:bg-purple-700 focus:bg-purple-700 active:bg-purple-600 focus:ring-purple-600">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
        <div class="mt-5">
            <p class="text-center">Belum punya akun? <a href="{{ route('register') }}" class="text-purple-600 font-bold">Register</a></p>
        </div>
    </div>

    
    {{-- <div class="mt-5">
        <p class="text-center">Belum punya akun? <a href="{{ route('register') }}" class="text-red-400 font-bold">Daftar</a></p>
    </div> --}}
</x-authentikasi>
