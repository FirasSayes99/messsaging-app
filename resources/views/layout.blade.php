<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title') - Laravel Blog</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css"
    />
  </head>

  <body>
    
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a
          role="button"
          class="navbar-burger"
          aria-label="menu"
          aria-expanded="false"
          data-target="navMenu"
        >
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>
      <div id="navMenu" class="navbar-menu">
        <div class="navbar-start">

        </div>

      </div>
    </nav>

    <section class="section">
      <div class="container">
        <div class="columns is-centered">
          <div class="column is-8">
            @if (session('notification'))
            <div class="notification is-primary">
              {{ session('notification') }}
            </div>
            @endif @yield('content')
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="content has-text-centered">
        <p>
          <strong>GoMessage</strong> |
         BY ME
        </p>
      </div>
    </footer>

    <script src="{{ asset('js/nav.js') }}"></script>

    <script>

document.addEventListener('DOMContentLoaded', () => {
  const $navbarBurgers = Array.prototype.slice.call(
    document.querySelectorAll('.navbar-burger'),
    0
  )

  if ($navbarBurgers.length > 0) {
    $navbarBurgers.forEach(el => {
      el.addEventListener('click', () => {
        const target = el.dataset.target
        const $target = document.getElementById(target)
        el.classList.toggle('is-active')
        $target.classList.toggle('is-active')
      })
    })
  }
})


    </script>

   



  </body>
</html>
