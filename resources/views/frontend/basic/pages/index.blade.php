@extends('frontend.basic.main')

@section('title', 'Homepage')
@section('bodyClass', 'home')

@section('content')
<section class="home-first-section">
    <div class="home-first-content">
        <h1>The best choice for small business</h1>
        <h3>
            We record and organize the daily transactions of
            your business. It is the starting point of
            accounting.
        </h3>
        <div class="btn-block">
            <img src="{{ asset('assets/img/home/home_2.png') }}">
            <button class="save">Buy now and save</button>
            <button class="free">30 Days Free Trial</button>
        </div>
    </div>
</section>

<section class="home-second-section">
    <div class="plans">Know more about our Plans and Pricing</div>
    <div class="learn-more">Learn More</div>
</section>

<section class="home-third-section">
    <div  class="content show-mobile">
        <h2>Our Sevices</h2>
        <div class="line"></div>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer viverra mi molestie lacus faucibus dignissim.
            Sed porta condimentum quam, sit amet ullamcorper metus varius eu. Cras nec sem ipsum. Ut fermentum nibh a ex congue volutpat.
        </p>
    </div>
    <div class="block-1">
        <div  class="block-7 block border-bottom-0"  data-toggle="modal" data-target="#block-modal">
            <div class="home-7 add-remove"></div>
            <img src="{{ asset('assets/img/home/home_7.png') }}">
        </div>
        <div  class="content show-desktop">
            <h2>Our Sevices</h2>
            <div class="line"></div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer viverra mi molestie lacus faucibus dignissim.
                Sed porta condimentum quam, sit amet ullamcorper metus varius eu. Cras nec sem ipsum. Ut fermentum nibh a ex congue volutpat.
            </p>
        </div>
        <div  class="block-8 block border-bottom-0" data-toggle="modal" data-target="#block-modal">
            <div class="home-8"></div>
            <img src="{{ asset('assets/img/home/home_8.png') }}">
        </div>
    </div>

    <div class="block-2" data-toggle="modal" data-target="#block-modal">
        <div class="block-9 block border-right-0">
            <div class="home-9"></div>
            <img src="{{ asset('assets/img/home/home_9.png') }}">
        </div>
        <div class="block-10 block border-right-0" data-toggle="modal" data-target="#block-modal">
            <div class="home-10"></div>
            <img src="{{ asset('assets/img/home/home_10.png') }}">
        </div>
        <div class="block-11 block border-right-0" data-toggle="modal" data-target="#block-modal">
            <div class="home-11"></div>
            <img src="{{ asset('assets/img/home/home_11.png') }}">
        </div>
        <div class="block-12 block" data-toggle="modal" data-target="#block-modal">
            <div class="home-12"></div>
            <img src="{{ asset('assets/img/home/home_12.png') }}">
        </div>
    </div>

    <!-- Modal Start-->
    <div class="modal fade" id="block-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="text">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h1>Organize Expenses Effortlessly</h1>
                    <p>
                        Tracking your expenses in EDOX is ridiculously easy, which means you’ll be able to effortlessly keep an eye on your spending.
                    </p>
                </div>
                <div class="mdl-footer">
                    <button>Learn More<i class="fas fa-arrow-right"></i></button>
                    <img src="{{ asset('assets/img/home/home_17.png') }}">
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End-->

</section>
<section  class="home-fourth-section">
    <div class="home-fourth-section-blog">
        <div class="home-fourth-section-content">
            <img src="{{ asset('assets/img/home/home_3.png') }}">
        </div>
        <div class="home-fourth-section-text">
            <h3>
                run your business<br>
                from anywhere
            </h3>
            <p>
                Keep tabs on your business no matter where you are. With the FreshBooks mobile app, you can capture your expenses,
                send invoices and know the moment you get paid, all from the palm of your hand.
            </p>
            <div class="btn-app-play">
                <a><img src="{{ asset('assets/img/home/home_5.png') }}"></a>
                <a><img src="{{ asset('assets/img/home/home_6.png') }}"></a>
            </div>
        </div>
    </div>
</section>
<section class="fifth-section">
    <div>
        <div class="content">
            <div>
                <img  class="big-img" src="{{ asset('assets/img/home/home_13.png') }}">
            </div>
            <div class="self-employ">
                <div class="btn-position">
                    <div class="people">
                        <img src="{{ asset('assets/img/home/home_15.png') }}">
                        <div>
                            <h3>For Self-Employed</h3>
                            <div class="line"></div>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer viverra mi molestie lacus faucibus dignissim.
                        Sed porta condimentum quam, sit amet ullamcorper metus varius eu. Cras nec sem ipsum. Ut fermentum nibh a ex congue volutpat
                        Etiam fermentum laoreet pharetra.Acquiring a GW COIN token is a perfect answer to the need of a tourist, enchanted with the site that they visited.
                        <div class="learn-more-block">
                            <button>Learn More<i class="fas fa-arrow-right"></i></button>
                        </div>
                    </p>
                </div>
            </div>
        </div>
        <div class="second-content">
            <div class="self-employ">
                <div class="btn-position">
                    <div class="people">
                        <img src="{{ asset('assets/img/home/home_16.png') }}">
                        <div>
                            <h3>For Self-Employed</h3>
                            <div class="line"></div>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer viverra mi molestie lacus faucibus dignissim.
                        Sed porta condimentum quam, sit amet ullamcorper metus varius eu. Cras nec sem ipsum. Ut fermentum nibh a ex congue volutpat
                        Etiam fermentum laoreet pharetra.Acquiring a GW COIN token is a perfect answer to the need of a tourist, enchanted with the site that they visited.
                    </p>
                    <div class="learn-more-block-2">
                        <button>Learn More<i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            <div>
                <img class="big-img"  src="{{ asset('assets/img/home/home_14.png') }}">
            </div>
        </div>
    </div>
</section>

<section class="sixth-section">
    <div class="content">
        <div class="text-block">
            <p class="text-1">WE WORK WITH</p>
            <p class="text-2">2.640.057 </p>
            <p class="text-3">CUSTOMERS FROM ALL OVER THE WORLD</p>
        </div>
        <div class="sixth-block">
            <button class="save">Buy now and save</button>
            <button class="free">Start Free Trial</button>
            <div>By signing up, you agree to the Terms of Use
                and Privacy Policy.</div>
        </div>
    </div>
</section>
@endsection