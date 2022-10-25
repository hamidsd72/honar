
@if (Auth::user() && Auth::user()->first_name && Auth::user()->last_name)

    <div id="footer-bar" class="footer-bar-1" >
        <a href="{{ route('user.contact.show') }}" class="{{ \Request::route()->getName() == 'user.contact.show' ? 'active-nav' : '' }}">
            {{-- <i class="fa fa-info-circle"></i> --}}
            <img src="{{ asset('pic/info.png') }}" alt="info">
            <span>درباره ما</span></a>
        <a href="{{ route('user.packages') }}" class="{{ \Request::route()->getName() == 'user.packages' ? 'active-nav' : '' }}">
            {{-- <i class="fa fa-users"></i> --}}
            <img src="{{ asset('pic/comedy.png') }}" alt="comedy">
            <span>کارگاه ها</span></a>
        <a href="{{ route('user.index') }}" class="{{ \Request::route()->getName() == 'user.index' ? 'active-nav' : '' }}">
            <div class="home_route">
                {{-- <i class="fa fa-home" style="font-size: 24px;"></i> --}}
                <img class="home" src="{{ asset('pic/home.png') }}" alt="home">
                <span style="font-size: 14px;">خانه</span>
            </div>
        </a>
        {{-- <a href="{{ route('user.services') }}" class="{{ \Request::route()->getName() == 'user.services' ? 'active-nav' : '' }}"><i class="fa fa-list-alt"></i><span>خدمات</span></a> --}}
        <a href="{{ route('user.tickets') }}" class="{{ \Request::route()->getName() == 'user.tickets' ? 'active-nav' : '' }}">
            {{-- <i class="fa fa-list-alt"></i> --}}
            <img src="{{ asset('pic/ticket.png') }}" alt="ticket">
            <span>تیکت</span>
        </a>
        @if(auth()->check())
            <a href="{{ route('admin.profile.show') }}" class="{{ \Request::route()->getName() == 'admin.profile.show' ? 'active-nav' : '' }}" data-menu="menu-settings">
                {{-- <i class="fa fa-user"></i> --}}
                <img src="{{ asset('pic/user.png') }}" alt="user">
                <span>پروفایل</span></a>
        @else
            <a href="{{ route('login') }}" class="{{ \Request::route()->getName() == 'login' ? 'active-nav' : '' }}" data-menu="menu-settings">
                {{-- <i class="fa fa-lock"></i> --}}
                <img src="{{ asset('pic/user.png') }}" alt="user">
                <span>ورود</span></a>
        @endif
    </div>

@endif
