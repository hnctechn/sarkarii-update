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
                        <h1>Latest Jobs</h1>
                        <ul>
                            <li><a href="index.php">Home <span>//</span></a></li>
                            <li>Latest Jobs</li>
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
                            <div class=" col-md-12 col-12">
                                <div class="blog bg-cat-2 mb-30 blog-res">
                                    <div class="blog__details links-card">
                                        <div class="card-heading">
                                            <h2>Latest Jobs</h2>
                                        </div>
                                        <div class="links">
                                            <div class="link">

                                                <a href="">Patna High Court Translator Online Form 2024
                                                </a>
                                            </div>
                                            <div class="link">

                                                <a href="">BSF Water Wing Group B, C Online Form 2024 – Start
                                                </a>
                                            </div>
                                            <div class="link">

                                                <a href="">SSC MTS, Havaldar Recruitment 2024
                                                </a>
                                            </div>
                                            <div class="link">

                                                <a href="">Railway RRB Technician Re Upload Photo / Signature 2024
                                                </a>
                                            </div>
                                            <div class="link">

                                                <a href="">Railway RRB ALP Re Upload Photo / Signature 2024

                                                </a>
                                            </div>
                                            <div class="link">

                                                <a href="">
                                                    Indian Air Force AFCAT 2/2024 Online Form
                                                </a>
                                            </div>
                                            <div class="link">

                                                <a href="">

                                                    Railway ICF Apprentice Online Form 2024 (1010 Posts)
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
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
    $(".latest-jobs").addClass("active");
</script>
@endsection