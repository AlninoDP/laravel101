<nav class="navbar navbar-expand-lg navbar bg-primary navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Teknik Informatika</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === 'Home') ? 'active' : ' '}}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{($title === 'About') ? 'active' : ' '}}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{($title === 'Post') ? 'active' : ' '}}" href="/post">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{($title === 'Data Mahasiswa') ? 'active' : ' '}}" href="/report">Data Akademik</a>
                </li>
            </ul>
        </div>
    </div>
</nav>