  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Adjudication Rules</li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#adjudication-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Adjudication Rules</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="adjudication-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('create-adjudication')}}">
              <i class="bi bi-circle"></i><span>Create Adjudication Rule</span>
            </a>
          </li>
          <li>
            <a href="{{route('list-adjudication')}}">
              <i class="bi bi-circle"></i><span>Adjudication Rules List </span>
            </a>
          </li>

        </ul>
      </li><!-- End Adjudications Nav -->

    </ul>

  </aside><!-- End Sidebar-->
