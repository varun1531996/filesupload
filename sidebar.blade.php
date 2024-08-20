<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        {{--<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>--}}
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">

            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>

            <!-- Optionally, you can add icons to the links -->
            
            <li class="{{ Request::is(config('constants.admin_page')) ? 'active' : '' }}">
                <a href="{{ url(config('constants.admin_page')) }}">
                    <i class="fa fa-circle-o" aria-hidden="true"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="{{ Request::is(config('constants.admin_page').'/homepage-banner') ? 'active' : (Request::is(config('constants.admin_page').'/homepage-banner/*'))  ? 'active' : '' }}">
                <a href="{{ url(config('constants.admin_page').'/homepage-banner') }}">
                    <i class="fa fa-circle-o" aria-hidden="true"></i> <span>Homepage Banner</span>
                </a>
            </li>

            <li class="{{ Request::is(config('constants.admin_page').'/level-one-category') ? 'active' : (Request::is(config('constants.admin_page').'/level-one-category/*'))  ? 'active' : '' }}">
                <a href="{{ url(config('constants.admin_page').'/level-one-category') }}">
                    <i class="fa fa-circle-o" aria-hidden="true"></i> <span>Level One Category</span>
                </a>
            </li>

            <li class="{{ Request::is(config('constants.admin_page').'/level-two-category') ? 'active' : (Request::is(config('constants.admin_page').'/level-two-category/*'))  ? 'active' : '' }}">
                <a href="{{ url(config('constants.admin_page').'/level-two-category') }}">
                    <i class="fa fa-circle-o" aria-hidden="true"></i> <span>Level Two Category</span>
                </a>
            </li>

            <li class="{{ Request::is(config('constants.admin_page').'/level-three-category') ? 'active' : (Request::is(config('constants.admin_page').'/level-three-category/*'))  ? 'active' : '' }}">
                <a href="{{ url(config('constants.admin_page').'/level-three-category') }}">
                    <i class="fa fa-circle-o" aria-hidden="true"></i> <span>Level Three Category</span>
                </a>
            </li>

            <li class="{{ Request::is(config('constants.admin_page').'/cards') ? 'active' : (Request::is(config('constants.admin_page').'/cards/*'))  ? 'active' : '' }}">
                <a href="{{ url(config('constants.admin_page').'/cards') }}">
                    <i class="fa fa-circle-o" aria-hidden="true"></i> <span>Cards</span>
                </a>
            </li>
			
			 <li class="{{ Request::is(config('constants.admin_page').'/contact') ? 'active' : (Request::is(config('constants.admin_page').'/contact/*'))  ? 'active' : '' }}">
                <a href="{{ url(config('constants.admin_page').'/contact') }}">
                    <i class="fa fa-circle-o" aria-hidden="true"></i> <span>Contact Us</span>
                </a>
            </li>

            <li class="{{ Request::is(config('constants.admin_page').'/about') ? 'active' : (Request::is(config('constants.admin_page').'/about/*'))  ? 'active' : '' }}">
                <a href="{{ url(config('constants.admin_page').'/about') }}">
                    <i class="fa fa-circle-o" aria-hidden="true"></i> <span>About Us</span>
                </a>
            </li>

			{{--<li class="{{ Request::is(config('constants.admin_page').'/news') ? 'active' : (Request::is(config('constants.admin_page').'/news/*'))  ? 'active' : '' }}">
                <a href="{{ url(config('constants.admin_page').'/news') }}">
                    <i class="fa fa-circle-o" aria-hidden="true"></i> <span>News</span>
                </a>
            </li>--}}
			
			<li class="{{ Request::is(config('constants.admin_page').'/events') ? 'active' : (Request::is(config('constants.admin_page').'/events/*'))  ? 'active' : '' }}">
                <a href="{{ url(config('constants.admin_page').'/events') }}">
                    <i class="fa fa-circle-o" aria-hidden="true"></i> <span>Events</span>
                </a>
            </li>
			
			<li class="{{ Request::is(config('constants.admin_page').'/subscribe') ? 'active' : (Request::is(config('constants.admin_page').'/subscribe/*'))  ? 'active' : '' }}">
                <a href="{{ url(config('constants.admin_page').'/subscribe') }}">
                    <i class="fa fa-circle-o" aria-hidden="true"></i> <span>Subscribe</span>
                </a>
            </li>

			{{--<li class="{{ Request::is(config('constants.admin_page').'/testimonial') ? 'active' : (Request::is(config('constants.admin_page').'/testimonial/*'))  ? 'active' : '' }}">
                <a href="{{ url(config('constants.admin_page').'/testimonial') }}">
                    <i class="fa fa-circle-o" aria-hidden="true"></i> <span>Testimonial</span>
                </a>
            </li>--}}
			
			<li class="{{ Request::is(config('constants.admin_page').'/career') ? 'active' : (Request::is(config('constants.admin_page').'/career/*'))  ? 'active' : '' }}">
                <a href="{{ url(config('constants.admin_page').'/career') }}">
                    <i class="fa fa-circle-o" aria-hidden="true"></i> <span>Career</span>
                </a>
            </li>

			{{--<li class="{{ Request::is(config('constants.admin_page').'/partners') ? 'active' : (Request::is(config('constants.admin_page').'/partners/*'))  ? 'active' : '' }}">
                <a href="{{ url(config('constants.admin_page').'/partners') }}">
                    <i class="fa fa-circle-o" aria-hidden="true"></i> <span>Partners</span>
                </a>
            </li>--}}

            <li class="{{ Request::is(config('constants.admin_page').'/job-application') ? 'active' : (Request::is(config('constants.admin_page').'/job-application/*'))  ? 'active' : '' }}">
                <a href="{{ url(config('constants.admin_page').'/job-application') }}">
                    <i class="fa fa-circle-o" aria-hidden="true"></i> <span>Job Application</span>
                </a>
            </li>

            <li class="{{ Request::is(config('constants.admin_page').'/db-backup') ? 'active' : (Request::is(config('constants.admin_page').'/db-backup/*'))  ? 'active' : '' }}">
                <a href="{{ url(config('constants.admin_page').'/db-backup') }}">
                    <i class="fa fa-circle-o" aria-hidden="true"></i> <span>DB Backup</span>
                </a>
            </li>

            <li class="{{ Request::is(config('constants.admin_page').'/blogs') ? 'active' : (Request::is(config('constants.admin_page').'/blogs/*'))  ? 'active' : '' }}">
                <a href="{{ url(config('constants.admin_page').'/blogs') }}">
                    <i class="fa fa-circle-o" aria-hidden="true"></i> <span>Blogs</span>
                </a>
            </li>

            <li class="{{ Request::is(config('constants.admin_page').'/news-room') ? 'active' : (Request::is(config('constants.admin_page').'/news-room/*'))  ? 'active' : '' }}">
                <a href="{{ url(config('constants.admin_page').'/news-room') }}">
                    <i class="fa fa-circle-o" aria-hidden="true"></i> <span>News</span>
                </a>
            </li>

            <li class="{{ Request::is(config('constants.admin_page').'/webinar') ? 'active' : (Request::is(config('constants.admin_page').'/webinar/*'))  ? 'active' : '' }}">
                <a href="{{ url(config('constants.admin_page').'/webinar') }}">
                    <i class="fa fa-circle-o" aria-hidden="true"></i> <span>Webinar</span>
                </a>
            </li>



            <li class="{{ Request::is(config('constants.admin_page').'/industrial-main-category') ? 'active' : (Request::is(config('constants.admin_page').'/industrial-main-category/*'))  ? 'active' : '' }}">
                <a href="{{ url(config('constants.admin_page').'/industrial-main-category') }}">
                    <i class="fa fa-circle-o" aria-hidden="true"></i> <span>Industrial Main Category</span>
                </a>
            </li>

            {{-- Industrial Card --}}
			<li class="{{ Request::is(config('constants.admin_page').'/industrial-category') ? 'active' : (Request::is(config('constants.admin_page').'/industrial-category/*'))  ? 'active' : '' }}">
                <a href="{{ url(config('constants.admin_page').'/industrial-category') }}">
                    <i class="fa fa-circle-o" aria-hidden="true"></i> <span>Industrial Category</span>
                </a>
            </li>

            <li class="{{ Request::is(config('constants.admin_page').'/industrial-card') ? 'active' : (Request::is(config('constants.admin_page').'/industrial-card/*'))  ? 'active' : '' }}">
                <a href="{{ url(config('constants.admin_page').'/industrial-card') }}">
                    <i class="fa fa-circle-o" aria-hidden="true"></i> <span>Industrial Cards</span>
                </a>
            </li>
            
            <!-- End links -->

            <!-- Demo Links -->

            {{--<li><a href="/admin/link1"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.anotherlink') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.multilevel') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
            </li>--}}

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
