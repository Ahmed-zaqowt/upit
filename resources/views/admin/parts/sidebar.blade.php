<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('admin_assets/images/logo.png')}} " class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Snacked</h4>
        </div>
        <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>

            <a href="{{ route('admin.dashboard') }}" >
                <div class="parent-icon"><i class="bi bi-grid-fill"></i></div>
                    <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li class="menu-label">Oprations pages</li>
        <li>
            <a href="{{ route('admin.home.index') }}" >
                <div class="parent-icon"><i class="bi bi-house-fill"></i></div>
                <div class="menu-title">Index Page (Home)</div>
            </a>

        </li>
        <li>
            <a href="{{ route('admin.news.index') }}" >
                <div class="parent-icon"><i class="fadeIn animated bx bx-news"></i></div>
                <div class="menu-title">News</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.client.index') }}" >
                <div class="parent-icon"><i class="lni lni-users"></i></div>
                <div class="menu-title">Clients</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.partner.index') }}" >
                <div class="parent-icon"><i class="fadeIn animated bx bx-user-plus"></i></div>
                <div class="menu-title">Partners</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.solution.index') }}" >
                <div class="parent-icon"><i class="fadeIn animated bx bx-check-shield"></i></div>
                <div class="menu-title">Solutions</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.service.index') }}" >
                <div class="parent-icon"><i class="lni lni-service"></i></div>
                <div class="menu-title">Services</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.store.index') }}" >
                <div class="parent-icon"><i class="fadeIn animated bx bx-shopping-bag"></i></div>
                <div class="menu-title">Stores</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.contact.index') }}" >
                <div class="parent-icon"><i class="fadeIn animated bx bx-phone"></i></div>
                <div class="menu-title">Contacts</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.profile.index') }}" >
                <div class="parent-icon"><i class="bi bi-person-lines-fill"></i></div>
                <div class="menu-title">Profile</div>
            </a>
        </li>
        <li>
            <form  method="post" id="logout-form" action="{{ route('logout') }}">@csrf</form>
            <a href="{{ route('logout') }}"
               onclick=" confirm('Are you sure?!')  ; event.preventDefault(); document.getElementById('logout-form').submit();" >
                <div class="parent-icon"><i class="bi bi-lock-fill"></i></div>
                <div class="menu-title">Log Out</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</aside>
<!--end sidebar -->
