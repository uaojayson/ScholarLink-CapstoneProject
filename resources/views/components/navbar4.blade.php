<nav class="navbar fixed-top navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand mx-4" href="/">
        <img src="/image/scholarlinkLogo.png" style="height: 60px" alt="owl" />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mx-4" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a
              class="nav-link"
              aria-current="page"
              href="/"
              onclick="setActiveLink(this)"
              >Home</a
            >
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle {{ (Request::is('AboutUs') || Request::is('AbtUs')) ? 'active' : '' }}"
              href="/AboutUs"
              onclick="setActiveLink(this)"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              About Us
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="{{route('ourStory')}}"
                  >Our Story</a
                >
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a
                  class="dropdown-item"
                  href="{{route('howitWorks')}}"
                  >How It Works?</a
                >
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              onclick="setActiveLink(this)"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Our Mentors
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Find A Mentor</a></li>
              <li><hr class="dropdown-divider" /></li>
              <li><a class="dropdown-item" href="#">Become A Mentor</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle {{ (Request::is('Affil') || Request::is('Affiliate')) ? 'active' : '' }}"
              href="/Affil"
              onclick="setActiveLink(this)"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Our Affiliates
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="{{route('afList')}}"
                  >Affiliate List</a
                >
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a
                  class="dropdown-item"
                  href="{{route('beAffiliate')}}"
                  >Become An Affiliate</a
                >
              </li>
            </ul>
          </li>
         
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle {{ Request::is('stypeGovernment') ? 'active' : '' }}"
              href="#"
              role="button"
              onclick="setActiveLink(this)"
             
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Government Funded
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('scholarships')}}">Scholarships Homepage</a></li>
                <li><hr class="dropdown-divider" /></li>
              <li>
                <a class="dropdown-item" href="{{route('private')}}">Privately Funded</a>
              </li>
              <li><hr class="dropdown-divider" /></li>
             
              <li><a class="dropdown-item" href="{{route('ngo')}}">NGO Funded</a></li>
    
            
            
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle {{ (Request::is('SupCenter') || Request::is('SupCtr')) ? 'active' : '' }}"
              href="#"
              onclick="setActiveLink(this)"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Support Center
            </a>
            <ul class="dropdown-menu">
              <li>
                <a   onclick="setActiveLink(this)" class="dropdown-item" href="{{route('faqs')}}"
                  >FAQs and Contacts</a
                >
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a
                  class="dropdown-item"
                  href="{{route('terms')}}"
                  >Terms of Usage and Privacy Policy</a
                >
              </li>
            </ul>
          </li>
        </ul>

        <a href="/home" class="btn btn-login custom-border mx-3 text-white" type="submit">
          Access Account &nbsp; <i class="fas fa-chevron-right"></i>
        </a>
      </div>
    </div>
  </nav>
