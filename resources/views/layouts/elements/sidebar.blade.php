<aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a href="../../index3.html" class="brand-link">
      <span class="brand-text font-weight-light">Job Schedule</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
         <div class="image">
            <img src="{{ asset('images/no-image.jpg') }}" class="img-circle elevation-2" alt="User Image">
         </div>
         <div class="info">
            <a href="#" class="d-block">Gia Thanh</a>
         </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
         <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
               <button class="btn btn-sidebar">
                  <i class="fas fa-search fa-fw"></i>
               </button>
            </div>
         </div>
      </div>

      <!-- Sidebar Menu -->
      @include('layouts.elements.menu')
      <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
</aside>