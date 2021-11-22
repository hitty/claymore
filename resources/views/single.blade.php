@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
  <section>
    <div class="container">
      <div class="row">
        <div class="col">
          @include('partials.content-single-'.get_post_type())
        </div>
      </div>
    </div>
  </section>
  @endwhile
@endsection
