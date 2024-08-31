<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <div class="copyright-text-wrap">
                        <p class="mb-0">
                            <span class="copyright-text">Copyright © <?php echo date("Y"); ?> <a href="#"></a>. All rights reserved.</span>
                            Design: <a rel="sponsored" href="https://developia.com" target="_blank">Developia</a>
                        </p>
                    </div>
                    @if (Route::has('login'))
                        <nav class="ml-auto">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="btn btn-outline-secondary btn-sm">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-sm">
                                    Log in
                                </a>
                                {{-- Uncomment if you want to include the register button
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-sm ml-2">
                                        Register
                                    </a>
                                @endif
                                --}}
                            @endauth
                        </nav>
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>