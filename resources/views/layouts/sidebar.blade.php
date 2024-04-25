
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
      <div class="sidebar-brand-icon">
        <img src="img/logo.png">
      </div>
      <div class="sidebar-brand-text">
        Conseil Regional de l'Indénié-Djuablin
      </div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Tableau de bord</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Fichier
      </div>

    <li class="nav-item">
      <a class="nav-link" href="{{ route('avis.index') }}">
        <span>Un avis de bureau</span>
      </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('deliberation.index') }}">
          <span>Une délibération</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('entreprise.index') }}">
          <span>Une entreprise</span>
        </a>
      </li>
    <hr class="sidebar-divider">
    




</ul>



