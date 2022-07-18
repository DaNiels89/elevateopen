{{--
  Template Name: Home Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())

    <section class="hero">
      <div class="container">
        <h1>The Dutch longest drive championship.</h1>
        <a href="#course">
          <svg version="1.1" id="arrowDown" class="arrow-down" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 22.3 101.8" style="enable-background:new 0 0 22.3 101.8;" xml:space="preserve">
            <polygon points="19.5,89 12.1,97.5 12.1,0 10.1,0 10.1,97.7 2.6,89 -0.1,89 11.1,101.8 22.3,89 "/>
          </svg>
        </a>
      </div>
      <div class="light-bottom-box"></div>
    </section>

    <section id="course" class="course">
      <div class="container">
        <div class="course-left block-flow">
          <h2 class="course__title">Welcome to the course.</h2>
          <p class="course__text">A unique golf course designed by Colin Montgomerie. His mission? Bringing the Scottish experience to Dutch grounds. Originating from the brotherhood of the Made in Scotland team, the course opened in 2011. Discover the world of The Dutch.</p>
          <a href="https://www.youtube.com/watch?v=BQS_kFqLM-I" class="course__link">Take a drone tour</a>
        </div>
        <div class="course-right">
          <img src="@asset('images/img-course.png')" alt="The Dutch map">
        </div>
      </div>
    </section>

    <section id="timetable" class="timetable">
      <div class="container">
        <h2 class="timetable-main-title">Timetable</h2>
        
        <div class="timetable-left">
          <div class="">
            <time class="timetable__time">10 A.M.</time>
            <h3 class="timetable__title">Kick-off.</h3>
            <p class="timetable__text">We kick off the event with a cup of coffee and a variety of delicious pastries.</p>
          </div>
          
          <div class="">
            <time class="timetable__time">11 A.M.</time>
            <h3 class="timetable__title">Tee-time.</h3>
            <p class="timetable__text">The morning group enters the course and swings the first 9 holes.</p>
          </div>

          <div class="">
            <time class="timetable__time">1:30 P.M.</time>
            <h3 class="timetable__title">Lunch.</h3>
            <p class="timetable__text">Enjoy a varied lunch consisting of an assortment of flatbread, soup, sandwiches, salads, fruits and refreshments.</p>
          </div>

          <div class="">
            <time class="timetable__time">2:30 P.M.</time>
            <h3 class="timetable__title">Tee-time.</h3>
            <p class="timetable__text">The afternoon group enters the course and swings the last 9 holes.</p>
          </div>
        </div>

        <div class="timetable-right">
          <p>For the non-golfers, an alternate program will be available from 2:30 P.M. to 5 P.M.</p>

          <div class="">
            <time class="timetable__time">5 P.M.</time>
            <h3 class="timetable__title">Dinner.</h3>
            <p class="timetable__text">Dinner is served. Bars are up and running to deliver potatoes, salads, caprese, carpaccio, organic bread and desserts. The Dutch BBQ offers a wide range of meat, fish and vegan food.</p>
          </div>

          <div class="">
            <time class="timetable__time">6 P.M.</time>
            <h3 class="timetable__title">Longest drive</h3>
            <p class="timetable__text">Golf professionals are able to enter the prestigious Longest Drive Challenge and win prize money up to € 3,000.</p>
          </div>

          <div class="">
            <time class="timetable__time">7 P.M.</time>
            <h3 class="timetable__title">Party</h3>
            <p class="timetable__text">As the event comes to a close, music group Female Fusion and DJs bring in the beat to end the day on a spectacular note.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="tournament" class="tournament">
      <div class="container">
        <h2 class="timetable_main_title">Tournament</h2>

        <div class="tournamant-card">
          <h2 class="tournament-card__title">Golf.</h2>
          <p class="tournament-card__text">The golf tournament consists of two 9-hole shotguns-one in the morning, one in the afternoon-and a longest drive challenge in the evening. During the shotguns, golfers are able to traverse the Championship Course and participate in longest drive, neary, hole-in-one and beat-the-pro competitions.</p>
        </div>

        <div class="tournamant-card">
          <h2 class="tournament-card__title">Connect.</h2>
          <p class="tournament-card__text">During your time at the event, you're bound to bump into people who share a similar career story. Meet like-minded professionals in the digital marketing and e-commerce industry and take the opportunity to connect with entrepreneurs, industry leaders, innovators and creative athletes.</p>
        </div>

        <div class="tournamant-card">
          <h2 class="tournament-card__title">Win.</h2>
          <p class="tournament-card__text">Golf professionals have the ability to enter the prestigious Longest Drive Challenge and win prize money up to €3,000. An exceptional display of skill to behold, all while enjoying your drinks. Only PGA professionals will be able to participate in this competition—one of many to come.</p>
        </div>

        <div class="tournamant-card">
          <h2 class="tournament-card__title">Donate.</h2>
          <p class="tournament-card__text">All proceeds go to the Princess Máxima Center. With your contribution, you can help the center achieve their goal: to cure every child with cancer, with optimal quality of life.</p>
        </div>

        <div>100 spots</div>
        <div>25 flights</div>
        <div>25 tour players</div>
      </div>
    </section>

    <section id="charity" class="charity">
      <div class="container">
        <div class="charity-left">
          <h2 class="charity__title">Our mission: to cure every child with cancer, with optimal <span class="clr-orange">Quality of Life.</span></h2>
          <p class="charity__text">Around 600 children in the Netherlands get cancer every year, and one in four children who are diagnosed with cancer dies from this illness.</p>
          <p class="charity__text">Ten years ago, a group of parents and healthcare professionals started working toward one national children's cancer center that could accelerate advances in treatment. Those efforts led to the creation of the Princess Máxima Center for pediatric oncology: a unique center that brings together all the highly complex care and research for children with cancer in the Netherlands.</p>
        </div>

        <div class="charity-right">
          <img src="@asset('images/logo-princessmaximacenter.svg')" alt="Princess Maxima Center logo">
        </div>
      </div>
    </section>

    <section id="participate" class="participate">
      <div class="container">
        <div class="participate-left">
          <img src="@asset('images/img-participate.png')" alt="Man golfing">
        </div>

        <div class="participate-right">
          <h2 class="participate__title">Participate in Elevate Open.</h2>
          <p class="participate__text">There are still some spots left. Want to contribute in any way, such as by sponsoring a hole? Feel free to contact our organization.</p>
          <a href="#" class="participate__contribute">Yes, I want to contribute</a>
          <button class="participate__download">Or download info kit</button>
        </div>
      </div>
    </section>

    <section id="sponsors" class="sponsors">
      <div class="container">
        <h2 class="sponsors__title">Thanks to our sponsors.</h2>
        <div class="sponsors-logos">
          <div class="sponsor-logo">
            <a href="https://elevatedigital.nl" class="sponser-logo__link">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="0 0 500 70.6" style="enable-background:new 0 0 500 70.6;" xml:space="preserve">
                <style type="text/css">
                  .st0{fill:#010101;}
                </style>
                <g>
                  <path class="st0" d="M42.4,70.6C15.5,70.6,0,59.5,0,42.2C0,24.4,16.8,14,40.5,14c23.6,0,39.3,10.5,39.3,28.3V45H12.3
                    c1.5,10.6,12.1,16.2,30.2,16.2c13.6,0,23.2-3,33-9.7l0.4,0.2v10.8C65.9,67.8,55.9,70.6,42.4,70.6z M13,36.7h54.6
                    C64.8,27.7,54.6,23,40.6,23C26.1,23,16,28.1,13,36.7z"/>
                  <path class="st0" d="M91.6,69.5V0h11.7v69.5C103.4,69.5,91.6,69.5,91.6,69.5z"/>
                  <path class="st0" d="M157.7,70.6c-26.9,0-42.4-11.2-42.4-28.4c0-17.8,16.8-28.3,40.5-28.3c23.6,0,39.3,10.5,39.3,28.3V45h-67.4
                    c1.5,10.6,12.1,16.2,30.2,16.2c13.6,0,23.2-3,33-9.7l0.4,0.2v10.8C181.2,67.8,171.2,70.6,157.7,70.6z M128.3,36.7h54.6
                    c-2.7-9.1-13-13.8-26.9-13.8C141.4,23,131.3,28.1,128.3,36.7z"/>
                  <path class="st0" d="M199.4,15.4l0.2-0.3h12.8l29.1,45.3l29.1-45.3H283l0.2,0.3l-35.3,54h-13.2L199.4,15.4z"/>
                  <path class="st0" d="M351.8,58.7c-7.3,7.7-17.6,11.9-34,11.9c-19.8,0-30.4-6.1-30.4-17.3s10.8-16.2,36.9-17.4l27.4-1.3
                    c-0.1-7.5-7.8-11.6-23-11.6c-13.2,0-24.8,3-35.4,9.9l-0.3-0.2V22.2c11.3-5.7,23-8.3,36.1-8.3c21.7,0,33.8,7,33.8,21v34.5h-11.3
                    L351.8,58.7L351.8,58.7z M351.8,43.6v-1.1L321.9,44c-15.4,0.7-22.3,3.4-22.3,8.9c0,5.7,6.2,8.7,18.7,8.7
                    C338.5,61.5,351.8,54,351.8,43.6z"/>
                  <path class="st0" d="M409.3,70.6c-16.4,0-24.6-7.6-24.6-23.8v-23H372v-8.3h12.7V3.2h11.7v12.2h17.8v8.3h-17.8v22.1
                    c0,11.9,4.3,15.5,15.8,15.5h1.5l0.5,0.3v8.7C412.7,70.5,411,70.6,409.3,70.6z"/>
                  <path class="st0" d="M462.7,70.6c-26.9,0-42.4-11.2-42.4-28.4c0-17.8,16.8-28.3,40.5-28.3c23.6,0,39.3,10.5,39.3,28.3V45h-67.4
                    c1.5,10.6,12.1,16.2,30.2,16.2c13.6,0,23.2-3,33-9.7l0.4,0.2v10.8C486.2,67.8,476.2,70.6,462.7,70.6z M433.3,36.7h54.6
                    c-2.7-9.1-13-13.8-26.9-13.8C446.3,23,436.2,28.1,433.3,36.7z"/>
                </g>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>

  @endwhile
@endsection

