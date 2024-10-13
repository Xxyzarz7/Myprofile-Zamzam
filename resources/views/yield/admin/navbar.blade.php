<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target"
    id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">ZAMZAM<span>.</span></a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse"
            data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="#" class="nav-link"><span></span></a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('Projects.index') }}" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Projects</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="{{ route('Projects.create') }}">Add Project</a></li>
                    </ul>
                  </li>
                <li class="nav-item"><a href="{{ route('Contact.index') }}" class="nav-link"><span>Contact</span></a></li>
                <a href="/"><li class="nav-item"><div class="form-group"><input type="submit" value="Logout" class="btn btn-primary py-2 px-4"></div></li></a>
            </ul>
        </div>
    </div>
</nav>