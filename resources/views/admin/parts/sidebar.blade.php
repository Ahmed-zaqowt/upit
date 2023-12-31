
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header align-content-center">
        <div class="">
            <img src="{{asset('admin_assets/images/logo.png')}} " class="logo-icon" alt="logo icon">
        </div>

        <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
        </div>
    </div>

    <ul class="metismenu" id="menu">
        <li>

            <a href="{{ route('admin.dashboard') }}" >
                <div class="parent-icon"><i class="bi bi-grid-fill"></i></div>
                    <div class="menu-title">@lang('Dashboard')</div>
            </a>
        </li>

        <li class="menu-label">@lang('Edit website content')</li>
        @if(\Illuminate\Support\Facades\Auth::user()->status == 'editor' || \Illuminate\Support\Facades\Auth::user()->status == 'admin')

            <li>
                <a href="{{ route('admin.home.index') }}" >
                    <div class="parent-icon"><i class="bi bi-house-fill"></i></div>
                    <div class="menu-title">@lang('Index Page (Home)')</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.about.index') }}" >
                    <div class="parent-icon"><i class="fadeIn animated bx bx-news"></i></div>
                    <div class="menu-title">@lang('About Page')</div>
                </a>
            </li>
            <li>
                <a class="has-arrow">
                    <div class="parent-icon"><i class="lni lni-write"></i>
                    </div>
                    <div class="menu-title">@lang('Solutions')</div>
                </a>
                <ul>
                    @php
                        $solutions = \App\Models\Solution::all();
                    @endphp
                    <li> <a href="{{ route('admin.solution.index' )  }}"><i class="bi bi-circle"></i>@lang('Add Solution')</a>
                    </li>
                    @foreach($solutions as $i)
                        <li> <a href="{{ route('admin.solution.edit' , $i->id )  }}"><i class="bi bi-circle"></i>{{ $i->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </li>

            <li>
                <a href="{{ route('admin.contact.contact') }}" >
                    <div class="parent-icon"><i class="fadeIn animated bx bx-phone"></i></div>
                    <div class="menu-title">@lang('Contact Information')</div>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.news.index') }}" >
                    <div class="parent-icon"><i class="fadeIn animated bx bx-news"></i></div>
                    <div class="menu-title">@lang('News')</div>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.service.index') }}" >
                    <div class="parent-icon"><i class="lni lni-service"></i></div>
                    <div class="menu-title">@lang('Services')</div>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.store.index') }}" >
                    <div class="parent-icon"><i class="fadeIn animated bx bx-shopping-bag"></i></div>
                    <div class="menu-title">@lang('Stores')</div>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.career.index') }}" >
                    <div class="parent-icon"><i class="fadeIn animated bx bx-paperclip"></i></div>
                    <div class="menu-title">@lang('Careers')</div>
                </a>
            </li>

        @endif
        <li class="menu-label">@lang('Admin Tools')</li>
        @if(\Illuminate\Support\Facades\Auth::user()->status == 'admin')
            <li>
                <a href="{{ route('admin.client.index') }}" >
                    <div class="parent-icon"><i class="lni lni-users"></i></div>
                    <div class="menu-title">@lang('Clients')</div>
                </a>
            </li>


            <li>
                <a href="{{ route('admin.admin.index') }}" >
                    <div class="parent-icon"><i class="lni lni-users"></i></div>
                    <div class="menu-title">@lang('Admin')</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.partner.index') }}" >
                    <div class="parent-icon"><i class="fadeIn animated bx bx-user-plus"></i></div>
                    <div class="menu-title">@lang('Partners')</div>
                </a>
            </li>



        @endif
        <li class="menu-label">@lang('Receiving Requests')</li>
    @if(\Illuminate\Support\Facades\Auth::user()->status == 'future' || \Illuminate\Support\Facades\Auth::user()->status == 'admin')

            <li>
                <a href="{{ route('admin.contact.index') }}" >
                    <div class="parent-icon"><i class="fadeIn animated bx bx-message-detail"></i></div>
                    <div class="menu-title">@lang('Messages Contacts')</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.order.index') }}" >
                    <div class="parent-icon"><i class="lni lni-service"></i></div>
                    <div class="menu-title">@lang('Orders')</div>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.vacant.index') }}" >
                    <div class="parent-icon"><i class="bi bi-person-lines-fill"></i></div>
                    <div class="menu-title">@lang('Job Applicant')</div>
                </a>
            </li>
        @endif
        <li class="menu-label">@lang('Profile')</li>

        <li>
            <a href="{{ route('admin.profile.index') }}" >
                <div class="parent-icon"><i class="fadeIn animated bx bx-user-circle"></i></div>
                <div class="menu-title">@lang('Profile')</div>
            </a>
        </li>
        <li>
            <form  method="post" id="logout-form" action="{{ route('logout') }}">@csrf</form>
            <a href="{{ route('logout') }}"
               onclick=" confirm('Are you sure?!')  ; event.preventDefault(); document.getElementById('logout-form').submit();" >
                <div class="parent-icon"><i class="bi bi-lock-fill"></i></div>
                <div class="menu-title">@lang('Log Out')</div>
            </a>
        </li>
    </ul>

</aside>


