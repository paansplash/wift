@extends('layouts.user.app')

@section('content')
    <div role="main" class="main">

        @include('welcomes.carousels')

        <div class="position-relative">
            <img src="assets/img/demos/architecture-2/backgrounds/arch-plan-1.jpg"
                class="img-fluid position-absolute top-0 right-0" alt="" />
        </div>

        <div class="custom-page-wrapper">

            <section class="section bg-transparent border-0 position-relative py-0 m-0">

                <div class="container container-xl-custom custom-container-style custom-margin-top">

                    @include('welcomes.company')

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                    </div>
                    @include('welcomes.steps')


                    <div class="container-fluid">
                        <div class="row pt-5">
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                    </div>
                    @include('welcomes.objectives')


                </div>

                <div class="container-fluid">
                    <div class="row pt-5">
                        <div class="col pt-4">
                            <hr>
                        </div>
                    </div>
                </div>

                @include('welcomes.collaborators')


                {{-- @include('welcomes.stats') --}}

            </section>

            {{-- @include('welcomes.statistics') --}}

            {{-- @include('welcomes.gallery') --}}

            {{-- @include('welcomes.contact-us') --}}

            @include('welcomes.faq')

            {{-- @include('welcomes.teams') --}}

            {{-- @include('welcomes.news') --}}
        </div>
    </div>



    </div>
@endsection
