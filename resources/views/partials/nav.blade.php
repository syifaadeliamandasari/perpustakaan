<!-- resources/views/partials/nav.blade.php -->
<aside id="sidebar" style="background-color: #69888e;">
    <div class="d-flex">
      <!-- Toggle Button -->
      <button class="toggle-btn" type="button">
        <!-- Assuming this button is for toggling the sidebar -->
        <i class="lni lni-grid-alt"></i> <!-- You can use a menu icon -->
      </button>
      <div class="sidebar-logo">
        <a href="#">STARLEARN</a>
      </div>
    </div>
    <ul class="sidebar-nav">
      <!-- Sidebar Items -->
      <li class="sidebar-item">
        <a href="{{ route('dA') }}" class="sidebar-link">
          <i class="material-icons opacity-10">dashboard</i> <!-- Dashboard icon -->
          <span>Dashboard</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a href="{{ route('member') }}" class="sidebar-link">
          <i class="material-icons opacity-10">group</i> <!-- Group or user icon -->
          <span>Members</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a href="{{ route('aB') }}" class="sidebar-link">
          <i class="material-icons opacity-10">book</i> <!-- Book icon -->
          <span>Buku</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a href="{{ route('rPJ') }}" class="sidebar-link">
          <i class="material-icons opacity-10">event_note</i> <!-- Event or calendar icon -->
          <span>Peminjaman</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a href="{{ route('rPG') }}" class="sidebar-link">
          <i class="material-icons opacity-10">event_available</i> <!-- Checkmark or success icon -->
          <span>Pengembalian</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a href="{{ route('rD') }}" class="sidebar-link">
          <i class="lni lni-money"></i> <!-- Money or financial icon -->
          <span>Denda</span>
        </a>
      </li>
    </ul>
    <div class="sidebar-footer">
      <!-- Logout Button -->
      <a href="#" class="sidebar-link">
        <i class="lni lni-exit"></i> <!-- Exit or log out icon -->
        <span>Logout</span>
      </a>
    </div>
  </aside>
