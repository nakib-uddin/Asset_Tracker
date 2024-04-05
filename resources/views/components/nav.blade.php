<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="images/assetlogo.png" class="img-fluid logo-image">
            <div class="d-flex flex-column">
                <strong class="logo-text">ATMS</strong>
                <small class="logo-slogan">Asset Tracking System</small>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav align-items-center ms-lg-5">

                <li class="nav-item ms-lg-auto">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link custom-btn btn" href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>