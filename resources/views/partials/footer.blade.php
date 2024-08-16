<footer class="site-footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <div class="copyright-text-wrap">
                    <p class="mb-0">
                        <span class="copyright-text">Copyright © <?php echo date("Y"); ?> <a href="#"></a>. All rights reserved.</span>
                        Design:
                        <a rel="sponsored" href="https://developia.com" target="_blank">Developia</a>
                    </p>
                </div>
                @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Log in
                        </a>

                        {{-- @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Register
                            </a>
                        @endif --}}
                    @endauth
                </nav>
            @endif
            </div>

        </div>
    </div>
</footer>