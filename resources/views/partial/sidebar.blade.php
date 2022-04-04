<nav id="sidebar">
  <div class="sidebar_blog_1">
     <div class="sidebar-header">
        <div class="logo_section">
           <a href="index.html"><img class="logo_icon img-responsive" src="{{asset('pluto-1.0.0/images/logo/logo_icon.png')}}" alt="#" /></a>
        </div>
     </div>
     <div class="sidebar_user_info">
        <div class="icon_setting"></div>
        <div class="user_profle_side">
           <div class="user_img"><img class="img-responsive" src="{{asset('pluto-1.0.0/images/layout_img/user_img.jpg')}}" alt="#" /></div>
           <div class="user_info">
              <h6>{{ Auth::user()->name }}</h6>
              <p><span class="online_animation"></span> Online</p>
           </div>
        </div>
     </div>
  </div>
  <div class="sidebar_blog_2">
     <h4>General</h4>
     <ul class="list-unstyled components">
        <li class="active">
           <a href="/dashboard"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
        </li>
        <li><a href="/supplier"><i class="fa fa-clock-o orange_color"></i> <span>Supplier</span></a></li>
        <li><a href="/kategori"><i class="fa fa-tree purple_color2"></i> <span>Kategori</span></a></li>
        <li>
           <a href="/barang"><i class="fa fa-diamond purple_color"></i> <span>Barang</span></a>
        </li>
        <li><a href="/inventori"><i class="fa fa-table purple_color2"></i> <span>Inventori</span></a></li>
     </ul>
  </div>
</nav>