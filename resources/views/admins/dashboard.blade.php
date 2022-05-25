@extends('admins.dashboard_layout.header')
@section('title','Dashboard')


{{-- This yield for static navbar --}}
{{-- @yield('dashboard-navbar') --}}




{{-- This section becouse overright on section name content  --}}
@section('center-content')
  <div class="view-container">
      Dashboard
  </div>
@endsection

@extends('admins.dashboard_layout.footer')
