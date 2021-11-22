
<main class="{{$class}}">
  @include('partials.nav')
  @yield('content')
</main>
@if( !is_404() && empty( $empty_footer ))
  @include('partials.footer')
@endif
