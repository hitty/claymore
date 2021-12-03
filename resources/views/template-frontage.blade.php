{{--
  Template Name: Frontpage Template
--}}

@extends('layouts.app', ['class'=>'main'])

@section('content')
  @while (have_posts()) @php the_post() @endphp
  @php
    $post_id = get_the_ID();
  @endphp
  <header class="header">
    -- {!! wp_get_attachment_image( get_field('header_background', $post_id ), 'large', '', ['class'=>'header__background'] ) !!} --
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg">
          {!! wp_get_attachment_image(
                get_field('header_image', $post_id ),
                'large',
                '',
                ['class'=>'header__image']
              )
          !!}
        </div>
        <div class="col-12 col-lg">
          <h1 class="header__title">
          @if( get_field('header_title', $post_id ) ) {{the_field('header_title', $post_id )}}
          @else Quam eleifend metus commodo
          @endif
          </h1>

          @if( get_field('header_description', $post_id ) )
          <h4 class="header__subtitle">
            {{the_field('header_description', $post_id )}}
          </h4>

          @endif

          @if( have_rows('header_buttons', $post_id) )
            <div class="header__buttons">
            @php
              while( have_rows('header_buttons', $post_id) ): the_row();
              $index = get_row_index();
            @endphp
              <a href="{{ the_sub_field('link') }}" class="header__button button @if( $index % 2 == 1) button--primary @else button--blue @endif ">{{ the_sub_field('title') }}</a>
              <span class="header__button__divider">or</span>
            @endwhile
            </div>
          @endif


        </div>
      </div>
    </div>
  </header>

  <section class="about">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-12">
        </div>
        <div class="col-lg-8 col-12 order-lg-1 order-2 mt-4 mt-lg-0">
          @if( get_field('about_title', $post_id ) )
            <h3>{{the_field('about_title', $post_id )}}</h3>
          @endif
          @if( get_field('about_text', $post_id ) )
              {{ the_field('about_text', $post_id ) }}
          @endif
        </div>
        <div class="col-lg-4 col-12 ms-auto order-lg-2 order-1 mb-lg-0 mb-3">
          @if( get_field('about_image', $post_id ) )
          <div class="about__images">
            {!! wp_get_attachment_image(
                get_field('about_image', $post_id ),
                'large',
                '',
                [ 'class' => 'd-block']
              )
          !!}
          </div>
          @endif
        </div>
      </div>
    </div>
  </section>

  <section class="bg-light tgb">
    <div class="container">
      <div class="row">
        @if( have_rows('tgb_list', $post_id) )
            @php
              while( have_rows('tgb_list', $post_id) ): the_row();
              $index = get_row_index();
            @endphp
            <div class="col-lg-4 col-12 mb-lg-0 mb-5">
              <div class="tgb__card">
                {!! wp_get_attachment_image(
                      get_sub_field('image'),
                      'large',
                      '',
                      [ 'class' => 'tgb__img mx-auto']
                    )
                !!}
                <h3 class="tgb__title">{{the_sub_field( 'title')}}</h3>
                <p class="tgb__text">{{the_sub_field( 'text')}}</p>
              </div>
            </div>
            @endwhile
        @endif
      </div>
    </div>
  </section>


  <section class="carousel-bg">
    <div class="container">
      <div class="row">
        <div class="col">

          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <h3 class="carousel__title">Lorem ipsum dolor sit amet</h3>
                <p class="carousel__text">consectetur adipiscing elit. Maecenas facilisis ligula non ornare
                  vehicula.</p>
                <img src="@asset('images/carousel-img.svg')" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <h3 class="carousel__title">Lorem ipsum dolor sit amet</h3>
                <p class="carousel__text">consectetur adipiscing elit. Maecenas facilisis ligula non ornare
                  vehicula.</p>
                <img src="@asset('images/carousel-img.svg')" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <h3 class="carousel__title">Lorem ipsum dolor sit amet</h3>
                <p class="carousel__text">consectetur adipiscing elit. Maecenas facilisis ligula non ornare
                  vehicula.</p>
                <img src="@asset('images/carousel-img.svg')" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
              <img src="@asset('images/carousel-arrow-left.png')" class="carousel-control-prev-icon" aria-hidden="true">
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
              <img src="@asset('images/carousel-arrow-left.png')" class="carousel-control-next-icon" aria-hidden="true">
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        </div>
      </div>
    </div>
  </section>


  <section class="feedbacks">
    <div class="container">
      <h2 class="feedbacks__title">What People Say</h2>
      <div class="row">

        <div class="col-lg-6 col-12 mb-5">
          <div class="feedbacks__card">
            <img src="@asset('images/feedbacks-mask.png')" class="feedbacks__icon">
            <div class="feedbacks__content">
              <h3 class="feedbacks__content__title">Excepteur sint occaecat
              </h3>
              <p class="feedbacks__content__text">
                Sed non massa quis nisl tincidunt posuere sit
                amet vitae sem. Praesent sed convallis quam.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-12 mb-5 ">
          <div class="feedbacks__card">
            <img src="@asset('images/feedbacks-mask.png')" class="feedbacks__icon">
            <div class="feedbacks__content">
              <h3 class="feedbacks__content__title">Excepteur sint occaecat
              </h3>
              <p class="feedbacks__content__text">
                Sed non massa quis nisl tincidunt posuere sit
                amet vitae sem. Praesent sed convallis quam.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-12 mb-5">
          <div class="feedbacks__card">
            <img src="@asset('images/feedbacks-mask.png')" class="feedbacks__icon">
            <div class="feedbacks__content">
              <h3 class="feedbacks__content__title">Excepteur sint occaecat
              </h3>
              <p class="feedbacks__content__text">
                Sed non massa quis nisl tincidunt posuere sit
                amet vitae sem. Praesent sed convallis quam.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-12 mb-5">
          <div class="feedbacks__card">
            <img src="@asset('images/feedbacks-mask.png')" class="feedbacks__icon">
            <div class="feedbacks__content">
              <h3 class="feedbacks__content__title">Excepteur sint occaecat
              </h3>
              <p class="feedbacks__content__text">
                Sed non massa quis nisl tincidunt posuere sit
                amet vitae sem. Praesent sed convallis quam.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-12 mb-5">
          <div class="feedbacks__card">
            <img src="@asset('images/feedbacks-mask.png')" class="feedbacks__icon">
            <div class="feedbacks__content">
              <h3 class="feedbacks__content__title">Excepteur sint occaecat
              </h3>
              <p class="feedbacks__content__text">
                Sed non massa quis nisl tincidunt posuere sit
                amet vitae sem. Praesent sed convallis quam.
              </p>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-12 mb-5">
          <div class="feedbacks__card">
            <img src="@asset('images/feedbacks-mask.png')" class="feedbacks__icon">
            <div class="feedbacks__content">
              <h3 class="feedbacks__content__title">Excepteur sint occaecat
              </h3>
              <p class="feedbacks__content__text">
                Sed non massa quis nisl tincidunt posuere sit
                amet vitae sem. Praesent sed convallis quam.
              </p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <section class="bg-dark contacts">
    <div class="container">
      <div class="row">

        <div class="col-12 col-lg-6 mb-5 mb-lg-0">
          <h3 class="contacts__title">Curabitur ornare neque</h3>
          <p class="contacts__text">
            ID sagittis commodo. Vivamus rhoncus feugiat leo id dictum. Nulla
            fermentum nibh eu velit molestie ultricies. Curabitur non gravida urna,
            at varius tortor. Donec feugiat, nisl ultrices adipiscing pharetra, augue
            lorem pharetra tortor, non tincidunt urna diam in libero. Nam et neque
            ut nisi consectetur tempor. Maecenas gravida est eu nisi dignissim
            gravida. Proin mollis sodales ullamcorper.
          </p>
          <ul class="contacts__information">
            <li class="contacts__information__item">
              <img src="@asset('images/location-icon.png')" class="me-2 contacts__information__image">
              venenatis neque sit amet ante aliquam sollicitudin
            </li>
            <li class="contacts__information__item">
              <img src="@asset('images/phone-icon.png')" class="me-2 contacts__information__image">
              <a href="+0888-7738-21" class="contacts__link">0888-7738-21</a> / <a href="tel:+0977-333-222-111"
                                                                                   class="contacts__link">0977-333-222-111</a>
            </li>
            <li class="contacts__information__item">
              <img src="@asset('images/mail-icon.png')" class="me-2 contacts__information__image">
              <a href="mailto:parturient@montes.com" class="contacts__link">parturient@montes.com</a>
            </li>
          </ul>
        </div>

        <div class="col-12 col-lg-6">
          <form class="row g-3 align-items-center form" action="">
            <div class="col-12 col-lg-6">
              <input class="form__control" type="text" name="name" placeholder="your name">
            </div>
            <div class="col-12 col-lg-6">
              <input class="form__control" type="email" required="required" name="email" placeholder="your email">
            </div>
            <div class="col-12">
              <select name="subject" class="form__control form__select">
                <option value="">your subject</option>
                <option value="1">subject 1</option>
                <option value="2">subject 2</option>
              </select>
            </div>
            <div class="col-12">
              <textarea name="message" placeholder="your message" class="form__control"></textarea>
            </div>
            <div class="col-12 text-end">
              <button type="reset" value="Reset" class="form__button button button--primary">Reset</button>
              <button type="submit" value="Submit" class="form__button button button--blue ms-0 ms-lg-3 mt-3 mt-lg-0">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  @endwhile

@endsection


