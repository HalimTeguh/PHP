<nav class="navbar navbar-expand-lg bg-info" >
    <div class="container">
      <a class="navbar-brand" href="/">HALIMWEB</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($halaman === 'Home') ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($halaman === 'About') ? 'active' : '' }} " href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($halaman === 'Contact') ? 'active' : '' }} " href="/contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($halaman === 'Blog') ? 'active' : '' }} " href="/blog">Blog</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>