<nav>
    <div class="navbar bg-base-100 shadow-md z-50">
        <div class="navbar-start">
          <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden hover:bg-purple-500 hover:text-white">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M4 6h16M4 12h8m-8 6h16" />
              </svg>
            </div>
            <ul
              tabindex="0"
              class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                <li><a class="btn btn-ghost font-semibold text-base py-3 hover:bg-purple-500 hover:text-white text-purple-500">Home</a></li>
                <li><a class="btn btn-ghost font-semibold text-base py-3 hover:bg-purple-500 hover:text-white text-purple-500">About</a></li>
                <li><a class="btn btn-ghost font-semibold text-base py-3 hover:bg-purple-500 hover:text-white text-purple-500">Contact</a></li>
                <li><a class="btn btn-ghost font-semibold text-base py-3 hover:bg-purple-500 hover:text-white text-purple-500">Paket</a></li>
            </ul>
          </div>
          <a href="{{ route('home') }}" class="btn btn-ghost hover:bg-white text-base font-semibold text-purple-500"><img src="{{ asset('storage/gambar/icon.png') }}" alt="logo" class="w-9"> MAGESTY <span class="min-[320px]:hidden md:block">ORGANIZER</span></a>
        </div>
        
        <div class="navbar-end mr-5">
          <div class=" hidden lg:flex mx-1">
            <ul class="menu menu-horizontal px-1">
              <li><a href="{{ route('home') }}" class="btn btn-ghost mx-1 font-semibold text-base hover:bg-purple-500 hover:text-white text-purple-500">Home</a></li>
              <li><a class="btn btn-ghost mx-1 font-semibold text-base hover:bg-purple-500 hover:text-white text-purple-500">About</a></li>
              <li><a href="{{ route('contact') }}" class="btn btn-ghost mx-1 font-semibold text-base hover:bg-purple-500 hover:text-white text-purple-500">Contact</a></li>
              <li><a class="btn btn-ghost mx-1 font-semibold text-base hover:bg-purple-500 hover:text-white text-purple-500">Paket</a></li>
            </ul>
          </div>
        @if (Route::has('login'))
            @auth
            {{-- <a href="{{ route('home') }}" class="mr-7">
                <svg xmlns="http://www.w3.org/2000/svg" id="Isolation_Mode" data-name="Isolation Mode" viewBox="0 0 24 24" width="25" height="25" class="fill-current text-purple-500 hover:text-purple-600 transition-colors duration-200 ease-in-out"><path d="M23.608,17.013l-2.8-10.1A9.443,9.443,0,0,0,2.486,7.4L.321,17.14a2.5,2.5,0,0,0,2.441,3.042H6.905a5.285,5.285,0,0,0,10.154,0H21.2a2.5,2.5,0,0,0,2.409-3.169Zm-20.223.169,2.03-9.137a6.443,6.443,0,0,1,12.5-.326l2.628,9.463Z"/></svg>
            </a> --}}
            {{-- <a href="{{ route('home') }}" class="mr-3">
                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="25" height="25" class="fill-current text-purple-500 hover:text-purple-600 transition-colors duration-200 ease-in-out"><path d="M18,0H6A3,3,0,0,0,3,3V23.9l3.67-2.51,2.671,1.826,2.666-1.826,2.666,1.826,2.664-1.825L21,23.9V3A3,3,0,0,0,18,0ZM15,14H7V12h8Zm2-5H7V7H17Z"/></svg>
            </a> --}}
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 ">
                        <div class="w-10">
                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="42" height="42" class="fill-current text-purple-500 hover:text-purple-700 transition-colors duration-200 ease-in-out rounded-full"><path d="m12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm-4,21.164v-.164c0-2.206,1.794-4,4-4s4,1.794,4,4v.164c-1.226.537-2.578.836-4,.836s-2.774-.299-4-.836Zm9.925-1.113c-.456-2.859-2.939-5.051-5.925-5.051s-5.468,2.192-5.925,5.051c-2.47-1.823-4.075-4.753-4.075-8.051C2,6.486,6.486,2,12,2s10,4.486,10,10c0,3.298-1.605,6.228-4.075,8.051Zm-5.925-15.051c-2.206,0-4,1.794-4,4s1.794,4,4,4,4-1.794,4-4-1.794-4-4-4Zm0,6c-1.103,0-2-.897-2-2s.897-2,2-2,2,.897,2,2-.897,2-2,2Z"/></svg>
                            {{-- <svg width="42" height="42" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-current text-purple-500 transition-colors duration-200 ease-in-out rounded-full">
                              <path d="M13 3C6.928 3 2 7.704 2 13.5C2 19.296 6.928 24 13 24C19.072 24 24 19.296 24 13.5C24 7.704 19.072 3 13 3ZM13 7.2C15.123 7.2 16.85 8.8485 16.85 10.875C16.85 12.9015 15.123 14.55 13 14.55C10.877 14.55 9.15 12.9015 9.15 10.875C9.15 8.8485 10.877 7.2 13 7.2ZM13 21.9C10.767 21.9 8.127 21.039 6.246 18.876C8.17301 17.4335 10.5511 16.6496 13 16.6496C15.4489 16.6496 17.827 17.4335 19.754 18.876C17.873 21.039 15.233 21.9 13 21.9Z" fill="#AA6BF7"/>
                              </svg> --}}
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link-user :href="route('profile.edit')">
                        {{ __('Transaksi') }}
                    </x-dropdown-link-user>
                    <x-dropdown-link-user :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link-user>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link-user :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();" class="hover:bg-red-500 text-red-500 focus:bg-red-600">
                            {{ __('Log Out') }}
                        </x-dropdown-link-user>
                    </form>
                </x-slot>
            </x-dropdown>
            @else
                <a href="{{ route('login') }}" class="btn text-base bg-purple-500 border-0 hover:bg-purple-600 text-white">Login</a>
            @endauth
        @endif
        </div>
      </div>
</nav>