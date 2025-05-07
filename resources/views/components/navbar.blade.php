<nav class="navbar navbar-expand-lg navbar-dark bg-primary py-3 fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary-bg-subtle py-3 fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('images/logo (3).png') }}" height="50" width="50" alt="Logo" class="me-2">
                DapurKita.id
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('pengelolaan')}}">Pengelolaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</nav>
