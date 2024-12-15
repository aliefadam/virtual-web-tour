 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">
     <ul class="sidebar-nav" id="sidebar-nav">
         <li class="nav-item">
             <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                 <i class="bi bi-grid"></i>
                 <span>Dashboard</span>
             </a>
         </li>
         <!-- End Dashboard Nav -->

         @if (Auth::user()->role == 'admin')
             <li class="nav-item">
                 <a class="nav-link {{ request()->routeIs('user-role') ? 'active' : '' }}"
                     href="{{ route('user-role') }}">
                     {{-- <a class="nav-link collapsed" href="{{ route('user-role') }}"> --}}
                     <i class="bi bi-person"></i>
                     <span>User and Role</span>
                 </a>
             </li><!-- End User and Role Page Nav -->
         @endif

         @if (Auth::user()->role == 'stand')
             <li class="nav-item">
                 <a class="nav-link {{ request()->routeIs('master') ? 'active' : '' }}" href="{{ route('master') }}">
                     <i class="bi bi-table"></i>
                     <span>Master Data</span>
                 </a>
             </li>
         @endif
     </ul>
 </aside>
 <!-- End Sidebar-->
