<nav class="navbar navbar-expand-md bg-dark shadow p-3">

    <div class="container-fluid">
        <div class="navbar-brand fw-bold text-white">Bulletin Board</div>

        <button class="navbar-toggler bg-white rounded-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navbarCollapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="{{ route('home.index') }}" class="nav-link text-white">Blogs</a></li>
                <li class="nav-item"><a href="{{ route('user.login') }}" class="nav-link text-white">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
