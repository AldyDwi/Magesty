<x-authentikasi>
    <div class="min-[320px]:hidden lg:block lg:ml-52">
        <img src="{{ asset('storage/gambar/icon2.png') }}" alt="icon2" class="h-64">
    </div>
    <div class="lg:mr-20 w-10/12 lg:w-[32rem] shadow-lg shadow-slate-500 border-2 border-purple-600 rounded-2xl px-6 pb-12 pt-6 bg-white my-5">
        <h1 class="text-purple-600 text-2xl font-bold mb-10">Register</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
    
            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nama')" class="text-lg/[19px] text-purple-600" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
    
            <!-- No Hp -->
            <div class="mt-4">
                <x-input-label for="no_hp" :value="__('No Hp')" class="text-lg/[19px] text-purple-600" />
                <x-text-input id="no_hp" class="block mt-1 w-full" type="text" name="no_hp" :value="old('no_hp')" required autofocus autocomplete="no_hp" />
                <x-input-error :messages="$errors->get('no_hp')" class="mt-2" />
            </div>
    
            <!-- Alamat -->
            <div class="mt-4">
                <x-input-label for="alamat" :value="__('Alamat')" class="text-lg/[19px] text-purple-600" />
                <x-text-input id="alamat" class="block mt-1 w-full" type="text" name="alamat" :value="old('alamat')" required autofocus autocomplete="alamat" />
                <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
            </div>
    
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" class="text-lg/[19px] text-purple-600" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
    
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" class="text-lg/[19px] text-purple-600" />
    
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
    
            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-lg/[19px] text-purple-600" />
    
                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />
    
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
    
            <div class="flex items-center justify-end mt-4">
                {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a> --}}
    
                <x-primary-button class="w-full justify-center py-3 bg-purple-600 hover:bg-purple-700 focus:bg-purple-700 active:bg-purple-600 focus:ring-purple-600">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>
        <div class="mt-5">
            <p class="text-center">Sudah punya akun? <a href="{{ route('login') }}" class="text-purple-600 font-bold">Login</a></p>
        </div>
    </div>
</x-authentikasi>
