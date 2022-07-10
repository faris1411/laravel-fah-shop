<x-layout>
    <header class="navbar navbar-dark sticky-top bg-dark d-flex flex-row py-2 shadow">
      <button class="navbar-toggler d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="{{ route('dashboard') }}">Company name</a>
      <form method="post" action="{{ route('logout') }}" class="m-0">
        @csrf
        <button type="submit" class="btn btn-dark">Log out</button>
      </form>
    </header>
    
    <div class="container-fluid">
      <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse position-fixed h-100">
          <div class="position-sticky pt-3">
            <ul class="nav nav-pills flex-column">

              <li class="nav-item">
                <a class="nav-link link-dark d-flex align-items-center" href="{{ route('dashboard') }}">
                  <i class="fa-solid fa-house col-2"></i>                  
                  Home
                </a>
              </li>
  
              <li class="nav-item">
                <a class="nav-link link-dark accordion-button px-3 py-2" href="#produk" data-bs-toggle="collapse">
                  <i class="fa-solid fa-box col-2"></i>
                  Produk
                </a>
                <div id="produk" class="collapse show">
                  <div>
                    <a href="{{ route('admin.products.create') }}" class="nav-link link-dark">
                      <span class="ms-5">Tambah Produk</span>
                    </a>
                    <a href="{{ route('admin.products.index') }}" class="nav-link link-dark">
                      <span class="ms-5">Daftar Produk</span>
                    </a>
                  </div>
                </div>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li>
            </ul>
    
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul>
          </div>
        </nav>
    
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

          @if (session('status'))
            <div class="toast show position-fixed top-25 start-50 translate-middle-x w-auto m-2" role="alert" style="z-index: 1055">
              <div class="d-flex">
                <div class="toast-body">
                  {{ session('status') }}
               </div>
                <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
              </div>
            </div>
          @endif

          <div class="mt-5">
            {{ $slot }}
          </div>
          
        </main>
      </div>
    </div>
  </x-layout>