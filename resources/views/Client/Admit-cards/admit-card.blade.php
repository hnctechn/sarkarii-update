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
                        <h1>Admit Card</h1>
                        <ul>
                            <li><a href="{{ url('/') }}">Home <span>//</span></a></li>
                            <li>Admit Card</li>
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
                                            <h2>Admit Card</h2>
                                        </div>
                                        <div class="links">
                                            @if(!empty($admit_card) && $admit_card->count() > 0)
                                            @foreach($admit_card as $admit_card)
                                            <div class="link">
                                                <a href="{{ url('answer-key/'.$admit_card->slug_url) }}">{{ !empty($admit_card->title) ? $admit_card->title : '' }}</a>
                                            </div>
                                            @endforeach
                                            @endif
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
    $(".admit-card").addClass("active");
</script>
@endsection