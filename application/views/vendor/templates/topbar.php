<nav class="navbar navbar-dark bg-primary navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="<?=base_url('assets/logo.png')?>" width="100px" height="70px" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?=$this->uri->segment('2')=="" ? 'active' : '';?>"  href="<?=base_url('vendorberanda')?>">Proyek</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?=$this->uri->segment('2')=="profile" ? 'active' : '';?>" href="<?=base_url('vendorberanda/profile')?>">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?=$this->uri->segment('2')=="password" ? 'active' : '';?>" href="<?=base_url('vendorberanda/password')?>">Password</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
      
      </ul>
      <form class="d-flex">
        <a href="<?=base_url('loginvendor/logout')?>" class="btn btn-dark" type="submit">Logout</a>
      </form>
    </div>
  </div>
</nav>