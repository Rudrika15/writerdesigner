<header>
    <nav class="navbar navbar-expand-lg  main-header shadow-sm p-3 ">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" class="img-fluid logo" alt="Logo">
            </a>
            <a class="header-title" href="/">Home</a>
            <a class="header-title @if (Route::currentRouteName() == 'main.influencer') activeted @endif" href="{{ route('main.influencer') }}">Influencers</a>
            <a class="header-title @if (Route::currentRouteName() == 'main.brandOffer') activeted @endif" href="{{ route('main.brandOffer') }}">Brand Offers</a>
            {{-- <a class="nav-link" href="{{ route('main.brandStory') }}">Brand Story</a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="btn btnlogin rounded-pill " href="{{ route('login') }}">Login</a>
                        <!-- <a class="btn rounded-pill px-4 btn-primary" href="{{ route('otp.login') }}">Login</a> -->
                    </li>
                    <li class="nav-item px-1">
                        <a class="btn rounded-pill  btnregister" href="{{ route('otp.login') }}">Register</a>
                    </li>
                    <!-- <li class="nav-item">
          <a class="nav-link" href="#plans">Our Plans</a>
        </li> -->
                </ul>
            </div>
        </div>
    </nav>
</header>
