<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top z-50">
    <div class="container">
        <a class="navbar-brand" href="#"><span class="text-success">Website</span>First</a> <button
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
            class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->RouteIs('landing.home') ? 'text-success' : '' }}"
                        href="{{ route('landing.home') }}" title="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->RouteIs('landing.profile') ? 'text-success' : '' }}"
                        href="{{ route('landing.profile') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->RouteIs('landing.info-kampus') ? 'text-success text-lg' : '' }}"
                        href="{{ route('landing.info-kampus') }}">Campus</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
