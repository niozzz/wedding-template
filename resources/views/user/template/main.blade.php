
<!DOCTYPE html>
<html lang="en">

<head>
    {{-- head --}}
    @include('user.template.head')
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset('template_dashboard') }}/assets/images/logo/logo.png" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                {{-- side bar --}}
                @include('user.template.sidebar')
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main" class='layout-navbar'>
            @include('user.template.navbar')
            
            {{-- main content --}}
            @yield('content')
            
        </div>
    </div>
    @include('user.template.script')
</body>

</html>