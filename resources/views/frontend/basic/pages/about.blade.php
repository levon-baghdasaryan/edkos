@extends('frontend/basic/main')

@section('title', 'About')
@section('bodyClass', 'about')

@section('extra-styles')
    <link href="{{ asset('css/plans-pricing.css') }}" rel="stylesheet">
    <link href="{{ asset('css/help-center.css') }}" rel="stylesheet">
@endsection

@section('content')
<section class="plans-first-section">
    <div class="plans-first-content">
        <h1>The EDKOS Story</h1>
    </div>
</section>

<section class="about-info">
    <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer viverra mi molestie lacus faucibus dignissim.
        Sed porta condimentum quam, sit amet ullamcorper metus varius eu. Cras nec sem ipsum. Ut fermentum nibh a ex congue volutpat.
        Etiam fermentum laoreet pharetra.Acquiring a GW COIN token is a perfect answer to the need of a tourist,
        enchanted with the site that they visited.
    </p>
</section>
<section class="fifth-section">
    <div>
        <div class="content">
            <img src="{{ asset('assets/img/about_1.png') }}">
            <div class="self-employ">
                <div class="btn-position">
                    <div class="people">
                        <img src="{{ asset('assets/img/calendar.png') }}">
                        <div>
                            <h3>When Begins Our Story ?</h3>
                            <div class="line"></div>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer viverra mi molestie lacus faucibus dignissim.
                        Sed porta condimentum quam, sit amet ullamcorper metus varius eu. Cras nec sem ipsum. Ut fermentum nibh a ex congue volutpat
                        Etiam fermentum laoreet pharetra.Acquiring a GW COIN token is a perfect answer to the need of a tourist, enchanted with the site that they visited.
                    </p>
                </div>
                <div class="learn-more-block"></div>
            </div>
        </div>
        <div class="second-content">
            <div class="self-employ">
                <div class="btn-position">
                    <div class="people">
                        <img src="{{ asset('assets/img/location.png') }}">
                        <div>
                            <h3>Where Begins Our Story ?</h3>
                            <div class="line"></div>
                        </div>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer viverra mi molestie lacus faucibus dignissim.
                        Sed porta condimentum quam, sit amet ullamcorper metus varius eu. Cras nec sem ipsum. Ut fermentum nibh a ex congue volutpat
                        Etiam fermentum laoreet pharetra.Acquiring a GW COIN token is a perfect answer to the need of a tourist, enchanted with the site that they visited.
                    </p>
                </div>
            </div>
            <div class="learn-more-block"></div>
            <img src="{{ asset('assets/img/about_2.png') }}">
        </div>
    </div>
</section>
<section class="meet-team">
    <h4>MEET THE BEST TEAM</h4>
    <div class="meet-people">
        <div class="meet-block">
            <div class="meet-images">
                <img src="{{ asset('assets/img/people_1.png') }}">
            </div>
            <h5>David Smith</h5>
            <h6>CEO (Co-Founder)</h6>
        </div>
        <div class="meet-block">
            <div class="meet-images">
                <img src="{{ asset('assets/img/people_2.png') }}">
            </div>
            <h5>linda Fisher</h5>
            <h6>Chief Commercial Officer</h6>
        </div>
        <div class="meet-block">
            <div class="meet-images">
                <img src="{{ asset('assets/img/people_3.png') }}">
            </div>
            <h5>linda Fisher</h5>
            <h6>VP, Marketing</h6>
        </div>
        <div class="meet-block">
            <div class="meet-images">
                <img src="{{ asset('assets/img/people_4.png') }}">
            </div>
            <h5>David Smith</h5>
            <h6>CEO (Co-Founder)</h6>
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