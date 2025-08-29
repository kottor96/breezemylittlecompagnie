<header class="w-full text-sm mb-6 not-has-[nav]:hidden flex">
    @if (Route::has('login'))
        <nav class="flex items-center justify-end gap-4 bg-green-500 w-full p-3">
            <div>
                <a href="{{route('home')}}" class="px-5 py-1.5 dark:text-[#EDEDEC]">home</a>
                <a href="{{route('produit')}}" class="px-5 py-1.5 dark:text-[#EDEDEC]">liste produit</a>
                <a href="{{route('team')}}" class='px-5 py-1.5 dark:text-[#EDEDEC]'>team</a>
                <a href="{{route('contact')}}" class='px-5 py-1.5 dark:text-[#EDEDEC]'>contact</a>
            </div>
            <div class="">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#ffffff35] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                    >
                        Dashboard
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                    >
                        Log in
                    </a>
    
                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#f9f8f735] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                            Register
                        </a>
                    @endif
                @endauth
            </div>
        </nav>
    @endif
</header>