@extends('layouts.app')

@section('content')
    <div role="main" class="main">

        @include('pages.welcomes.carousels')

        <div class="position-relative">
            <img src="assets/img/demos/architecture-2/backgrounds/arch-plan-1.jpg"
                class="img-fluid position-absolute top-0 right-0" alt="" />
        </div>

        <div class="custom-page-wrapper">

            <section class="section bg-transparent border-0 position-relative py-0 m-0">

                <div class="container container-xl-custom custom-container-style custom-margin-top">

                    @include('pages.welcomes.company')

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                    </div>
                    @include('pages.welcomes.steps')


                    <div class="container-fluid">
                        <div class="row pt-5">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                    </div>
                    @include('pages.welcomes.objectives')


                </div>

                <div class="container-fluid">
                    <div class="row pt-5">
                        <div class="col pt-4">
                            <hr>
                        </div>
                    </div>
                </div>

                {{-- @include('pages.welcomes.collaborators') --}}


                @include('pages.welcomes.stats')

            </section>

            {{-- @include('pages.welcomes.statistics') --}}

            {{-- @include('pages.welcomes.gallery') --}}

            {{-- @include('pages.welcomes.contact-us') --}}

            {{-- @include('pages.welcomes.faq') --}}

            {{-- @include('pages.welcomes.teams') --}}

            {{-- @include('pages.welcomes.news') --}}
        </div>

        <div class="position-relative" style="margin-top: 50px;">
            <img src="assets/img/demos/architecture-2/backgrounds/arch-plan-3.jpg"
                class="img-fluid position-absolute bottom-0 left-0" alt="" />
        </div>

    </div>



    </div>
@endsection
