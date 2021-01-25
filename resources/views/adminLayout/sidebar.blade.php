<div class="logo">
    <a href="http://www.creative-tim.com" class="simple-text logo-mini">
      CT
    </a>
    <a href="http://www.creative-tim.com" class="simple-text logo-normal">
      Creative Tim
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
        <li class="nav-item active  ">
          <a class="nav-link" href="#0">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <!-- your sidebar here -->
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

        <!-- logout button -->
            <li class="nav-item">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </li>
            </div>
        </li>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="main-panel">