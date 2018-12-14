<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  @yield('title', Config::get('app.name'))
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="stylesheet" href="{{ asset('material-theme/css/font-awesome.min.css') }}">

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ asset('material-theme/css/material-dashboard.css') }}" rel="stylesheet" />
  <link href="{{ asset('material-theme/css/demo.css') }}" rel="stylesheet" />

</head>

<body class="dark-edition">
    <div class="wrapper ">
      <!--sidebar-->
      <div class="sidebar" data-color="purple" data-background-color="black" data-image="{{ asset('material-theme/img/sidebar-2.jpg') }}">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
        <!--logo-->
        <div class="logo">
          <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            {{ Config::get('app.name') }}
          </a>
        </div>
        <!--endlogo-->

        <!--sidebarnav-->
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="nav-item {{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}">
              <a class="nav-link" href="{{route('dashboard')}}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-item {{ Route::currentRouteNamed('members.index') ? 'active' : '' }}">
              <a class="nav-link" href="{{route('members.index')}}">
                <i class="material-icons">group</i>
                <p>Team Members</p>
              </a>
            </li>
            <li class="nav-item {{ Route::currentRouteNamed('jobs.index') ? 'active' : '' }}">
              <a class="nav-link" href="{{route('jobs.index')}}">
                <i class="material-icons">assignment_ind</i>
                <p>Jobs/Position</p>
              </a>
            </li>
            <li class="nav-item {{ Route::currentRouteNamed('roles.index') ? 'active' : '' }}">
              <a class="nav-link" href="{{route('roles.index')}}">
                <i class="material-icons">library_books</i>
                <p>User Roles</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="./icons.html">
                <i class="material-icons">bubble_chart</i>
                <p>Icons</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="./map.html">
                <i class="material-icons">location_ons</i>
                <p>Maps</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="./notifications.html">
                <i class="material-icons">notifications</i>
                <p>Notifications</p>
              </a>
            </li>
          </ul>
        </div>
        <!--endsidebarnav-->
      </div>
      <!--endsidebar-->

      <div class="main-panel">
        <!-- topnavbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
          <div class="container-fluid">
            <div class="navbar-wrapper">
              <a class="navbar-brand" href="javascript:void(0)">@yield('page-title', Config::get('app.name'))</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
              <span class="sr-only">Toggle navigation</span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
              <!-- <form class="navbar-form">
                <div class="input-group no-border">
                  <input type="text" value="" class="form-control" placeholder="Search...">
                  <button type="submit" class="btn btn-default btn-round btn-just-icon">
                    <i class="material-icons">search</i>
                    <div class="ripple-container"></div>
                  </button>
                </div>
              </form> -->
              <ul class="navbar-nav">

                <li class="nav-item dropdown">
                  <a class="nav-link text-info" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <!-- <i class="material-icons">account_circle</i> -->
                    <span style="text-transform:lowercase;margin-right:5px">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</span>
                    <img style="height:40px;border-radius:50%;" class="img-responsive img-circle" src="https://scontent.fmnl6-1.fna.fbcdn.net/v/t1.0-1/p160x160/11825953_1047734388583992_1727016485304329009_n.jpg?_nc_cat=110&_nc_ht=scontent.fmnl6-1.fna&oh=8e44b6fbdc7ca6fd2e84268f66913ae0&oe=5C6AC617" />
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="javascript:void(0)"><i class="material-icons">edit</i>&nbsp;&nbsp; Update Profiles</a>
                    <a class="dropdown-item" href="javascript:void(0)"><i class="material-icons">lock</i>&nbsp;&nbsp;Change Password</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i class="material-icons">power_settings_new</i>&nbsp;&nbsp; Logout</a>
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- endtopnavbar -->

        <!-- content -->
        <div class="content">
          <div class="container-fluid">
            @yield('content')
          </div>
        </div>
        <!-- endcontent -->

      <!-- footer -->
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-right" id="date">
            Roel Dingle
          </div>
        </div>
      </footer>
      <!-- endfooter -->
      <script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
  </div>
    <!-- jsfiles   -->
    <script src="{{ asset('material-theme/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('material-theme/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('material-theme/js/core/bootstrap-material-design.min.js') }}"></script>
    <script src="{{ asset('material-theme/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('material-theme/js/plugins/chartist.min.js') }}"></script>
    <script src="{{ asset('material-theme/js/plugins/bootstrap-notify.js') }}"></script>
    <script src="{{ asset('material-theme/js/material-dashboard.js') }}"></script>
    <script src="{{ asset('material-theme/js/demo.js') }}"></script>
    <script>
      $(document).ready(function() {
        $().ready(function() {
          $sidebar = $('.sidebar');

          $sidebar_img_container = $sidebar.find('.sidebar-background');

          $full_page = $('.full-page');

          $sidebar_responsive = $('body > .navbar-collapse');

          window_width = $(window).width();

          $('.fixed-plugin a').click(function(event) {
            // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
            if ($(this).hasClass('switch-trigger')) {
              if (event.stopPropagation) {
                event.stopPropagation();
              } else if (window.event) {
                window.event.cancelBubble = true;
              }
            }
          });

          $('.fixed-plugin .active-color span').click(function() {
            $full_page_background = $('.full-page-background');

            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('color');

            if ($sidebar.length != 0) {
              $sidebar.attr('data-color', new_color);
            }

            if ($full_page.length != 0) {
              $full_page.attr('filter-color', new_color);
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.attr('data-color', new_color);
            }
          });

          $('.fixed-plugin .background-color .badge').click(function() {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('background-color');

            if ($sidebar.length != 0) {
              $sidebar.attr('data-background-color', new_color);
            }
          });

          $('.fixed-plugin .img-holder').click(function() {
            $full_page_background = $('.full-page-background');

            $(this).parent('li').siblings().removeClass('active');
            $(this).parent('li').addClass('active');


            var new_image = $(this).find("img").attr('src');

            if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
              $sidebar_img_container.fadeOut('fast', function() {
                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                $sidebar_img_container.fadeIn('fast');
              });
            }

            if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
              var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

              $full_page_background.fadeOut('fast', function() {
                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                $full_page_background.fadeIn('fast');
              });
            }

            if ($('.switch-sidebar-image input:checked').length == 0) {
              var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
              var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
            }
          });

          $('.switch-sidebar-image input').change(function() {
            $full_page_background = $('.full-page-background');

            $input = $(this);

            if ($input.is(':checked')) {
              if ($sidebar_img_container.length != 0) {
                $sidebar_img_container.fadeIn('fast');
                $sidebar.attr('data-image', '#');
              }

              if ($full_page_background.length != 0) {
                $full_page_background.fadeIn('fast');
                $full_page.attr('data-image', '#');
              }

              background_image = true;
            } else {
              if ($sidebar_img_container.length != 0) {
                $sidebar.removeAttr('data-image');
                $sidebar_img_container.fadeOut('fast');
              }

              if ($full_page_background.length != 0) {
                $full_page.removeAttr('data-image', '#');
                $full_page_background.fadeOut('fast');
              }

              background_image = false;
            }
          });

          $('.switch-sidebar-mini input').change(function() {
            $body = $('body');

            $input = $(this);

            if (md.misc.sidebar_mini_active == true) {
              $('body').removeClass('sidebar-mini');
              md.misc.sidebar_mini_active = false;

              $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

            } else {

              $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

              setTimeout(function() {
                $('body').addClass('sidebar-mini');

                md.misc.sidebar_mini_active = true;
              }, 300);
            }

            // we simulate the window Resize so the charts will get updated in realtime.
            var simulateWindowResize = setInterval(function() {
              window.dispatchEvent(new Event('resize'));
            }, 180);

            // we stop the simulation of Window Resize after the animations are completed
            setTimeout(function() {
              clearInterval(simulateWindowResize);
            }, 1000);

          });
        });
      });
    </script>
    <!-- endjsfiles   -->
  </body>

  </html>
