@yield('css')
<link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/css/metisMenu.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset("assets/css/app" . (App::getLocale() == 'ar' ? '-rtl' : '') . ".min.css") }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('node_modules/flag-icons/css/flag-icons.min.css') }}" rel="stylesheet" type="text/css" />
