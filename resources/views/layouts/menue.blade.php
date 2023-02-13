<header>
    <!-- START NAVBAR -->
  
    <div class="container">
      <div class="row" id="home-navbar">
        <div class="navbar__logo">
          <a class="navbar-brand d-lg-flex" href="{{asset('/')}}">
            <img class="img-fluid" src="assets/images/companylogo.jpeg" alt="phone list" />
          </a>
        </div>

        <nav class="navbar navbar--center d-lg-flex d-none">
          <ul class="navbar__ul">
            <li class="navbar__li">
              <a href="{{asset('consultation')}}" class="navbar__a"> Doctor </a>
            </li>
            <li class="navbar__li">
              <a href="{{asset('consultation')}}" class="navbar__a"> vedio consultation </a>
            </li>
            <li class="navbar__li">
              <a href="https://blog.phonelist.io" class="navbar__a"> services </a>
            </li>
            <li class="navbar__li">
              <a href="careers.html" class="navbar__a">talk to our expart </a>
            </li>
            <li class="navbar__li">
              <a href="careers.html" class="navbar__a"> Contact us</a>
            </li>
           
            <li class="navbar__li">
              <a href="login.html" class="navbar__a">
                SignUp</a>
            </li>
          </ul>
        </nav>
       
      </div>
    </div>
    <!-- END NAVBAR -->
  </header>

  <!-- START NAVBAR FOR SMALL SCREEN -->
  <div class="d-lg-none d-flex">
    <div class="navbar__logo ms-md-5 ms-2 ps-5">
      <a class="navbar-brand d-flex" href="/">
        <img class="img-fluid" src="assets/images/logo--company-name-dark.svg" alt="phone list" />
      </a>
    </div>
    <div class="navigation">
      <input type="checkbox" class="navigation__checkbox" id="navi-toggle" />

      <label for="navi-toggle" class="navigation__button">
        <span class="navigation__icon">&nbsp;</span>
      </label>

      <div class="navigation__background">&nbsp;</div>

      <nav class="navigation__nav">
        <ul class="navigation__list">
          <li class="navigation__item">
            <a href="product.html" class="navigation__link">Doctor</a>
          </li>
          <li class="navigation__item">
            <a href="pricing/packages.html" class="navigation__link">vedio consultation </a>
          </li>
          <li class="navigation__item">
            <a href="https://blog.phonelist.io" class="navigation__link">survices</a>
          </li>
          <li class="navigation__item">
            <a href="#" class="navigation__link">talk to our expart</a>
          </li>
          <li class="navigation__item">
            <a href="#" class="navigation__link">Contact us</a>
          </li>
          
          <li class="navigation__item">
            <a href="login.html" class="navigation__link">SignUp</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- END NAVBAR FOR SMALL SCREEN -->