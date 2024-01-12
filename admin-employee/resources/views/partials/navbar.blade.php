<nav class="navbar navbar-expand-lg bg-body-tertiary rounded custom-navbar" aria-label="Thirteenth navbar example">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11"
            aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
            <a class="navbar-brand col-lg-3 me-0 fw-bold" href="/">Admin Employee</a>
            <ul class="navbar-nav col-lg-6 justify-content-end">
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-bs-toggle="dropdown"
                            aria-expanded="false">{{ auth()->user()->username }}</a>
                    </li>
                @endauth
            </ul>
            @auth
                <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                    <a class="btn btn-danger" href="/logout">Logout</a>
                </div>
            @else
                <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                    <a class="btn btn-primary" href="/">Login</a>
                </div>
            @endauth
        </div>
    </div>
</nav>
