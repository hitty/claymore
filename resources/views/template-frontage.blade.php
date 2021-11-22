{{--
  Template Name: Frontpage Template
--}}

@extends('layouts.app', ['class'=>'main'])

@section('content')
  @php do_action('get_header') @endphp
  @include('partials.header')

  <section class="about">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-8 col-12 order-lg-1 order-2 mt-4 mt-lg-0">
          <h3>About us</h3>
          <p class="m-0 about__text">Sed non massa quis nisl tincidunt posuere sit amet vitae sem. Praesent
            sed convallis quam. Donec hendrerit neque sit amet tellus ornare et
            semper lorem lacinia. Suspendisse ac pellentesque odio. Nunc pharetra
            malesuada nisi ac condimentum. Curabitur porttitor pulvinar </p>
        </div>
        <div class="col-lg-4 col-12 ms-auto order-lg-2 order-1 mb-lg-0 mb-3">
          <div class="about__images">
            <img src="@asset('images/about-img-big.svg')" class="" width="">
            <img src="@asset('images/about-img-small.svg')" class="ms-2" width="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-light tgb">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12 mb-lg-0 mb-5">
          <div class="tgb__card">
            <img src="@asset('images/tgb-img-1.svg')" alt="" class="tgb__img mx-auto">
            <h3 class="tgb__title">Fully Baked up</h3>
            <p class="tgb__text">Curabitur tincidunt dapibus odio, eu gravida felis
              blandit vel. Vivamus feugiat auctor lorem non
              eleifend. Nam eu pellentesque est, vitae
              interdum nisi.</p>
          </div>
        </div>
        <div class="col-lg-4 col-12 mb-lg-0 mb-5">
          <div class="tgb__card">
            <img src="@asset('images/tgb-img-2.svg')" alt="" class="tgb__img mx-auto">
            <h3 class="tgb__title">Build With Love</h3>
            <p class="tgb__text">Nullam dignissim felis diam, sed ultricies nisl
              ultricies quis. Maecenas feugiat urna ante, et
              viverra tellus facilisis ut. In hac habitasse platea
              dictumst.</p>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="tgb__card">
            <img src="@asset('images/tgb-img-3.svg')" alt="" class="tgb__img mx-auto">
            <h3 class="tgb__title">Fully Responsive</h3>
            <p class="tgb__text">Aliquam mattis massa at urna tincidunt ultrices.
              Curabitur lobortis ante vulputate, imperdiet felis
              a, adipiscing odio aliquam pharetra molestie
              mauris</p>
          </div>
        </div>
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


@endsection


