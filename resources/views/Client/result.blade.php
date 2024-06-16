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
                        <h1>Results</h1>
                        <ul>
                            <li><a href="index.php">Home <span>//</span></a></li>
                            <li>Results</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog__area pt-90 pb-60 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="blog__wrap">
                        <div class="row xs-mt-20">
                            <!-- Start Single BLog -->

                            <div class=" col-md-12 col-12">
                                <div class="blog bg-cat-2 mb-30 blog-res">
                                    <div class="blog__details links-card">
                                        <div class="card-heading">
                                            <h2>Results</h2>
                                        </div>
                                        <div class="links">
                                            <div class="link">

                                                <a href="">RSMSSB Hostel Superintendent Qualifying Candidates for Mains Exam

                                                </a>
                                            </div>
                                            <div class="link">

                                                <a href="">SSC GD Result 2024 Live Update
                                                </a>
                                            </div>
                                            <div class="link">

                                                <a href="">CUET UG Result 2024 – Coming Soon

                                                </a>
                                            </div>
                                            <div class="link">

                                                <a href="">NTA NEET UG Result 2024 – Coming Soon

                                                </a>
                                            </div>
                                            <div class="link">

                                                <a href="">Rajasthan Board Class 5th , 8th Result 2024 – हुआ जारी

                                                </a>
                                            </div>
                                            <div class="link">

                                                <a href="">Army Agniveer CEE Exam Result 2024 (Out For UP, Delhi & Uttarakhand)


                                                </a>
                                            </div>
                                            <div class="link">

                                                <a href="">Rajasthan Board Class 10th Result 2024 – हुआ जारी


                                                </a>
                                            </div>
                                            <div class="link">

                                                <a href="">Bihar Board Class 10th / 12th Special Compartmental Result 2024


                                                </a>
                                            </div>
                                            <div class="link">

                                                <a href="">West Bengal WBJEE Result 2024
                                                </a>
                                            </div>
                                            <div class="link">

                                                <a href="">Jharkhand Board JAC Class 8th Result 2024

                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single BLog -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(".index").removeClass("active");
    $(".results").addClass("active");
</script>
@endsection