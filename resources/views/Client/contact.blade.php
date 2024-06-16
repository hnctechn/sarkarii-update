@section('meta_title') Sarkari Result | SarkariResult, Sarkari Job @endsection
@extends('Client.Layout.layout')
@section('style')
<style>
    .links-card .links .link:last-child {
        border-bottom: 0px !important;
        /* border-bottom:0px !important; */
    }
</style>
@endsection

@section('content')
<div class="page-content">
    <section class="breadcamb-area bg-breadcamb breadcamb-opacity pt-180 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bradcamb-content text-center text-white">
                        <h1>contact us</h1>
                        <ul>
                            <li><a href="index.php">home <span>//</span></a></li>
                            <li>contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="contact-area ptb-90">
        <div class="container map-contact">
            <div class="row">
                <div class="col-lg-7 col-12 text-center">
                    <div class="contact-from gray-bg">
                        <form id="contact-form" action="https://htmldemo.net/republic/republic/mail.php" method="post">
                            <input name="name" type="text" placeholder="Name">
                            <input name="email" type="text" placeholder="Email">
                            <textarea name="message" placeholder="Your message"></textarea>
                            <button class="submit" type="submit">
                                <span>SUBMIT</span>
                            </button>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="communication contact-from">
                        <div class="single-communication">
                            <div class="communication-icon">
                                <i class="zmdi zmdi-home"></i>
                            </div>
                            <div class="communication-text">
                                <h3>Address:</h3>
                                <p>Miata 309 S Main St,Stafford, KS 67578</p>
                            </div>
                        </div>
                        <div class="single-communication">
                            <div class="communication-icon">
                                <i class="zmdi zmdi-phone-in-talk"></i>
                            </div>
                            <div class="communication-text">
                                <h3>Phone:</h3>
                                <p>0123 456 789 - 15 2368 4597</p>
                            </div>
                        </div>
                        <div class="single-communication">
                            <div class="communication-icon">
                                <i class="zmdi zmdi-email-open"></i>
                            </div>
                            <div class="communication-text">
                                <h3>Fax:</h3>
                                <p>0123 456 789 - 15 2368 4597</p>
                            </div>
                        </div>
                        <div class="single-communication">
                            <div class="communication-icon">
                                <i class="zmdi zmdi-email"></i>
                            </div>
                            <div class="communication-text">
                                <h3>Email:</h3>
                                <p><a href="https://bootexperts.com/support/login.php">bootexperts.com/support/login.php</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-map d-flex">
        <iframe id="hastech" src="https://maps.google.com/maps?q=121%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(".index").removeClass("active");
    $(".contact").addClass("active");
</script>
@endsection