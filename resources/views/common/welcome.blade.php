<span class="menu-icon">
    <i class="mdi mdi-speedometer"></i>
  </span>
  <span class="menu-title">Logout</span>
</a>
<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
  {{ csrf_field() }}
</form>
