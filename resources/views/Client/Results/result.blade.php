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
                            <li><a href="{{ url('/') }}">Home <span>//</span></a></li>
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
                                            @if(!empty($results) && $results->count() > 0)
                                            @foreach($results as $result)
                                            <div class="link">
                                                <a href="{{ url('result/'.$result->slug_url) }}">{{ !empty($result->title) ? $result->title : '' }}</a>
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
    $(".results").addClass("active");
</script>
@endsection