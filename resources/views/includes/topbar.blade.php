<!-- top navigation -->
<div class="top_nav imonda">
    <div class="nav_menu imonda">
        <nav class="getty-nav-style-1 imonda " role="navigation" data-offcanvass-position="getty-offcanvas-left">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <div class="col-lg-7 text-center getty-link-wrap">
                <ul data-offcanvass="yes">
                  <li><a href="/prisonerview" class="call-to-action">View Prisoners</a></li>
                  <li><a href="/prisonercreate" class="call-to-action">Enroll New Prisoner</a></li>
                  <li><a href="" class="call-to-action">Release A Prisoner</a></li>
                  <li><a href="" class="call-to-action">update prisoners records</a></li>
                </ul>
              </div>

              <div class="col-lg-4 imon">

                <ul class="nav navbar-nav navbar-right">

                  <li>
                      <!-- <div class="pull-right"> -->
                        <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" >

                          <h3 class="imondwhite">
                            Getty<span class=" fa fa-angle-down"></span>

                          </h3>

                        </a>
                        <ul class="dropdown-menu dropdown-usermenu">
                          <a href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              Logout
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                        </ul>
                    </li>
                </ul>

              </div>
            </nav>

        </div>

</div>
<!-- /top navigation -->
