<div class="topbar">
  <nav class="navbar navbar-expand-lg navbar-light">
     <div class="full">
        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
        <div class="logo_section">
           <a href="/"><img class="img-responsive" src="{{asset('pluto-1.0.0/images/logo/logo.png')}}" alt="#" /></a>
        </div>
        <div class="right_topbar">
           <div class="icon_info">
              <ul class="user_profile_dd">
                 <li>
                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="{{asset('pluto-1.0.0/images/layout_img/user_img.jpg')}}" alt="#" /><span class="name_user">{{ Auth::user()->name }}</span></a>
                    <div class="dropdown-menu">
                     <form method="POST" action="{{ route('logout') }}"><button type="submit" class="dropdown-item btn btn-danger">@csrf Log Out <i class="fa fa-sign-out"></i></button></form>
                    </div>
                 </li>
              </ul>
           </div>
        </div>
     </div>
  </nav>
</div>