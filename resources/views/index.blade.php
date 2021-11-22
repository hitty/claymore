@extends('layouts.app')
@section('content')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php the_post() @endphp
  <section><div class="container"><div class="row"><div class="col">
  @include('partials.content-'.get_post_type())
      </div></div></div></section>
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
