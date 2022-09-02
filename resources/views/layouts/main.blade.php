<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Oson Hisob - paneli</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <link href="/assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header boshlandi======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard" class="logo d-flex align-items-center">
        <img src="../assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Oson Hisob</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- Logo tugashi -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center">
        <input type="text" name="query" placeholder="Qidirish..." title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- Search Bar tugadi -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
  
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Palonchiyev Pistonchibek</span>
          </a><!--Profile Iamge Icon tugadi -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Pistonchi</h6>
              <span>Zavod direktori

              </span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <!-- <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile">
                <i class="bi bi-person"></i>
                <span>Mening akkauntim</span>
              </a>
            </li> -->
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/">
                <i class="bi bi-box-arrow-right"></i>
                <span>Hisobdan chiqish</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <!-- 
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="dashboard">
          <i class="bi bi-grid"></i>
          <span>Boshqaruv Paneli</span>
        </a>
      </li>

      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Mahsulotlar</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="m-list">
              <i class="bi bi-circle"></i><span>Ro'yxati</span>
            </a>
          </li>
          <li>
            <a href="m-add">
              <i class="bi bi-circle"></i><span>Qo'shish</span>
            </a>
          </li>
          <li>
            <a href="k-hisob">
              <i class="bi bi-circle"></i><span>Kurs hisoboti</span>
            </a>
          </li>
          <li>
            <a href="m-hisob">
              <i class="bi bi-circle"></i><span>Hisob-Kitobi</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Hodimlar</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="h-list">
              <i class="bi bi-circle"></i><span>Ro'yxati</span>
            </a>
          </li>
          <li>
            <a href="h-hisob">
              <i class="bi bi-circle"></i><span>Hisob-Kitobi</span>
            </a>
          </li>
          
          <li>
            <a href="h-add">
              <i class="bi bi-circle"></i><span>Qo'shish</span>
            </a>
          </li>
        </ul>
      </li> End Hodimlar Nav 


      <li class="nav-heading">Qo'shimcha</li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="j-club">
          <i class="bi bi-question-circle"></i>
          <span>Yordam</span>
        </a>
      </li> End Yordam Page Nav -

    </ul>

  </aside>
  End Sidebar-->

  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('dashboard.index') }}">
          <i class="bi bi-grid"></i>
          <span>Boshqaruv Paneli</span>
        </a>
      </li><!-- Boshqaruv Paneli -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="{{ route('staff.index') }}" aria-expanded="false">
          <i class="bi bi-people"></i><span>Hodimlar</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="users-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('staff.index')}}">
              <i class="bi bi-circle"></i><span>Ro'yxati</span>
            </a>
          </li>
          <li>
            <a href="{{ route('daily.create')}}">
              <i class="bi bi-circle"></i><span>Yo'qlama</span>
            </a>
          </li>
          <li>
            <a href="hisob">
              <i class="bi bi-circle"></i><span>Hisob Kitob</span>
            </a>
          </li>
          
        </ul>
      </li><!-- staff -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="{{ route('silk.index') }}" aria-expanded="false">
          <i class="bi bi-menu-button-wide"></i><span>Oldi-sotdi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('silk.create') }}">
              <i class="bi bi-circle"></i><span>Qo'shish</span>
            </a>
          </li>
          <li>
            <a href="{{ route('silk.index') }}">
              <i class="bi bi-circle"></i><span>Hisobot</span>
            </a>
          </li>
          <!-- <li>
            <a href="components-badges.html">
              <i class="bi bi-circle"></i><span>Badges</span>
            </a>
          </li> -->
        </ul>
      </li><!-- Ip  -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="{{ route('accounts.index') }}" aria-expanded="false">
          <i class="bi bi-journal-text"></i><span>Hisobdan-hisobga</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('accounts.create')}}">
              <i class="bi bi-circle"></i><span>Yangi o'tkazma</span>
            </a>
          </li>
          <li>
            <a href="{{ route('accounts.index')}}">
              <i class="bi bi-circle"></i><span>O'tkazmalar Hisoboti</span>
            </a>
          </li>
        </ul>
      </li><!-- staff -->

      
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
          <i class="bi bi-layout-text-window-reverse"></i><span>Valyutada oldi-sotdi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li>End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="{{ route('credits.index') }}" aria-expanded="false">
          <i class="bi bi-bar-chart"></i><span>Nasiya va Qarz</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('credits.create') }}">
              <i class="bi bi-circle"></i><span>Qarzni qayd etish</span>
            </a>
          </li>
          <li>
            <a href="{{ route('credits.index') }}">
              <i class="bi bi-circle"></i><span>Qarz Hisoboti</span>
            </a>
          </li>
          <li>
            <a href="{{ route('loans.create') }}">
              <i class="bi bi-circle"></i><span>Nasiyani qayd etish</span>
            </a>
          </li>
          <li>
            <a href="{{ route('loans.index') }}">
              <i class="bi bi-circle"></i><span>Nasiya Hisoboti</span>
            </a>
          </li>
        </ul>
      </li><!-- Qarzlar -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#products-nav" data-bs-toggle="collapse" href="{{ route('products.index') }}" aria-expanded="false">
          <i class="bi bi-laptop"></i><span>Mahsulot ombori</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="products-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('products.create') }}">
              <i class="bi bi-circle"></i><span>Mahsulot Kirishi</span>
            </a>
          </li>
          <li>
            <a href="{{ route('products.index') }}">
              <i class="bi bi-circle"></i><span>Mahsulot Ro'yxati</span>
            </a>
          </li>
        </ul>
      </li><!-- Mahsulotlar -->

      <li class="nav-heading">Sahifalar</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="help">
          <i class="bi bi-question-circle"></i>
          <span>Yordam</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->



    </ul>

  </aside>
  <main id="main" class="main">
      @yield('content')
  </main><!-- Main tugadi -->

  <!-- <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Junior Club</span></strong>. 
    </div>
    <div class="credits">
      Dizayn <a href="">Junior Club</a>
    </div>
  </footer> -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <script src="../assets/js/main.js"></script>

</body>

</html>