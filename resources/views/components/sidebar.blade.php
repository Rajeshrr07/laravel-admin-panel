<div>
<span class="wrapper ">
    <div class="sidebar" data-color="orange">
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li >
            <a href="{{url('admin/dashboard')}}"  class="{{request()->is(('admin/dashboard')) ? 'active' : ''}}">
              <i class="now-ui-icons design_app"></i>
              <p class="dash">Dashboard</p>
            </a>
          </li>
          <li>
            <a href="{{url('admin/icons')}}"  class="{{request()->is(('admin/icons')) ? 'active' : ''}}">
              <i class="now-ui-icons education_atom"></i>
              <p class="icon">Icons</p>
            </a>
          </li>
          <li>
            <a href="{{url('admin/maps')}}"  class="{{request()->is(('admin/maps')) ? 'active' : ''}}">
              <i class="now-ui-icons location_map-big"></i>
              <p>Maps</p>
            </a>
          </li>
          <li>
            <a href="{{url('admin/notifications')}}"  class="{{request()->is(('admin/notifications')) ? 'active' : ''}}">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Notifications</p>
            </a>
          </li>
          <li>
            <a href="{{url('admin/user')}}"  class="{{request()->is(('admin/user')) ? 'active' : ''}}">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="{{url('admin/table')}}" class="{{request()->is(('admin/table')) ? 'active' : ''}}">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="{{url('admin/typography')}}"  class="{{request()->is(('admin/typography')) ? 'active' : ''}}">
              <i class="now-ui-icons text_caps-small"></i>
              <p>Typography</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="./upgrade.html"  class="{{request()->is ? 'active' : ''}}">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li>
        </ul>
      </div>
    </span>
    <style>
        .active,.active:hover{
            background-color:blue !important;
        }

    </style>    
</div>