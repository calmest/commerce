<!--================ Start Header Menu Area =================-->
    <header class="header_area">
      <div class="main_menu">
        <div class="search_input" id="search_input_box">
          <div class="container">
            <form class="d-flex justify-content-between" >
              <input
                type="text"
                class="form-control"
                placeholder="Search Here"
              />
              <button type="submit" class="btn"></button>
              <span
                class="ti-close"
                id="close_search"
                title="Close Search"
              ></span>
            </form>
          </div>
        </div>



        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="/"
              ><img src="/img/logo.png" alt=""
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="{{ Request::is('/') ? 'active' : '' }} nav-item">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="{{ Request::is('about') ? 'active' : '' }} nav-item">
                  <a class="nav-link" href="/about">About</a>
                </li>
                
                <li class="{{ Request::is('blog') ? 'active' : '' }} nav-item">
                  <a class="nav-link" href="/blog">Blog</a>
                </li>
                <li class="{{ Request::is('contact') ? 'active' : '' }} nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                @guest
                <li class="nav-item submenu dropdown">
                    <a
                        href="#"
                        class="nav-link dropdown-toggle"
                        data-toggle="dropdown"
                        role="button"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >Account</a
                    >
                    <ul class="dropdown-menu">
                        <li class="nav-item">
                        <a class="nav-link" href="/user/login">Login</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/user/register"
                            >Register</a
                        >
                        </li>
                    </ul>
                  </li>
                @else
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link btn-success btn-lg dropdown-toggle" style="border-radius: 5px;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item btn-success btn-lg" style="color:#fff; border-radius: 0px; display: block; width: 100%; font-size: 18px;" href="/user/dashboard">Dashboard</a>
                      <a class="dropdown-item btn-primary btn-lg" style="color:#fff; border-radius: 0px; display: block;" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
                </li>
                @endguest
                <li class="nav-item">
                  <a href="#" class="nav-link search" id="search">
                    <i class="ti-search"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================ End Header Menu Area =================-->
