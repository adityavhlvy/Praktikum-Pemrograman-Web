<nav class="navbar navbar-expand-lg custom-navbar-up">
    <div class="container-fluid">
        <a class="navbar-brand" href="/" style="font-size: 30; font-weight:bold">KitaCoding</a>
        <div class="d-grid gap-2 d-md-block justify-content-end">
            <div class="btn-group btn-sm">
                <button class="btn btn-dark" type="button">Dark Mode</button>
                <button class="btn btn-success" type="button">Login</button>
            </div>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg custom-navbar-down">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Home' ? 'active' : '' }}" href="/">HTML</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">CSS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">JavaScript</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">PHP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">C++</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Java</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Python</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item justify-content-end">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
