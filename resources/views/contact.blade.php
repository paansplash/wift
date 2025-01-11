@extends('layouts.app')

@section('content')
    <div role="main" class="main">

        <section
            class="custom-page-header-1 page-header page-header-modern page-header-lg bg-primary-100 border-0 z-index-1 my-0">
            <div class="custom-page-header-1-wrapper overflow-hidden">
                <div class="custom-bg-grey-1 py-5 appear-animation" data-appear-animation="maskUp"
                    data-appear-animation-delay="800">
                    <div class="container py-3 my-3">
                        <div class="row">
                            <div class="col-md-12 align-self-center p-static text-center">
                                <div class="overflow-hidden mb-2">
                                    <h1 class="font-weight-black text-12 mb-0 appear-animation"
                                        data-appear-animation="maskUp" data-appear-animation-delay="1200">Contact</h1>
                                </div>
                            </div>
                            <div class="col-md-12 align-self-center">
                                <div class="overflow-hidden">
                                    <ul class="custom-breadcrumb-style-1 breadcrumb breadcrumb-light custom-font-secondary d-block text-center custom-ls-1 text-5 appear-animation"
                                        data-appear-animation="maskUp" data-appear-animation-delay="1450">
                                        <li class="text-transform-none"><a href="demo-architecture-2.html"
                                                class="text-decoration-none">Home</a></li>
                                        <li class="text-transform-none active">Contact</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="custom-page-wrapper pt-5 pb-1">
            <div class="spacer py-4 my-5"></div>
            <div class="container container-xl-custom pb-5 mb-5">
                <div class="row pb-3">
                    <div class="col-lg-6 position-relative">
                        <div class="position-absolute z-index-0 appear-animation" data-appear-animation="fadeInRightShorter"
                            data-appear-animation-delay="3000" style="top: 110px; left: -206px;">
                            <h2
                                class="text-color-dark custom-stroke-text-effect-1 custom-big-font-size-1 font-weight-black opacity-1 mb-0">
                                YOUR PLACE</h2>
                        </div>
                        <div class="overflow-hidden mb-2">
                            <h2 class="text-color-default positive-ls-3 line-height-3 text-4 mb-0 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="1500">WE'RE HERE TO HELP</h2>
                        </div>
                        <div class="overflow-hidden mb-4">
                            <h3 class="text-transform-none text-color-dark font-weight-black text-10 line-height-2 mb-0 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="1700">Get Your Project Done</h3>
                        </div>
                        <img src="assets/img/demos/architecture-2/divider.jpg"
                            class="img-fluid opacity-5 mb-4 mt-2 appear-animation"
                            data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1900" alt="" />
                        <p class="custom-font-tertiary text-5 line-height-4 mb-4 mt-2 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2100">Lorem ipsum dolor sit
                            amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est
                            consectetur.</p>
                        <p class="text-3-5 pb-2 mb-5 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="2300">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <div class="row">
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="2500">
                                <h4 class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mb-0">
                                    Work Inquiries</h4>
                                <a href="tel:1234567890"
                                    class="text-decoration-none text-color-default text-color-hover-primary">(800)
                                    123-4567</a>
                                <h4
                                    class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mt-4 mb-0">
                                    Careers & Press</h4>
                                <a href="tel:1234567890"
                                    class="text-decoration-none text-color-default text-color-hover-primary">(800)
                                    123-4567</a>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="2700">
                                <h4
                                    class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mt-4 mt-lg-0 mb-0">
                                    Address</h4>
                                <p class="mb-0">12345 Porto Blvd.<br>Suite 1500<br>Los Angeles, California 90000</p>
                                <h4
                                    class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mt-4 mb-0">
                                    Email</h4>
                                <a href="mailto:mail@example.com"
                                    class="text-decoration-none text-color-default text-color-hover-primary">mail@example.com</a>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="2900">
                                <h4
                                    class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mt-4 mt-lg-0 mb-0">
                                    Business Hours</h4>
                                <p class="mb-0">Mon - Sat 9:00am - 6:00pm<br>Sunday - CLOSED</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="overflow-hidden mb-4 mt-4">
                            <h3 class="text-transform-none text-color-dark font-weight-black text-7 line-height-2 mb-0 pt-3 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="2600">Send a Message</h3>
                        </div>
                        <form class="contact-form custom-form-style-1 appear-animation" action="php/contact-form.php"
                            method="POST" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2800">
                            <div class="contact-form-success alert alert-success d-none mt-4">
                                <strong>Success!</strong> Your message has been sent to us.
                            </div>

                            <div class="contact-form-error alert alert-danger d-none mt-4">
                                <strong>Error!</strong> There was an error sending your message.
                                <span class="mail-error-message text-1 d-block"></span>
                            </div>

                            <div class="row">
                                <div class="form-group col mb-3">
                                    <input type="text" value="" data-msg-required="Please enter your name."
                                        maxlength="100" class="form-control border-radius-0" name="name" id="name"
                                        required placeholder="Name *">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col mb-3">
                                    <input type="email" value=""
                                        data-msg-required="Please enter your email address."
                                        data-msg-email="Please enter a valid email address." maxlength="100"
                                        class="form-control border-radius-0" name="email" id="email" required
                                        placeholder="E-mail *">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col mb-3">
                                    <input type="text" value=""
                                        data-msg-required="Please enter your phone number." maxlength="100"
                                        class="form-control border-radius-0" name="phone" id="phone" required
                                        placeholder="Phone *">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col mb-4">
                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5"
                                        class="form-control border-radius-0" name="message" id="message" required placeholder="Message *"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col mb-0">
                                    <button type="submit"
                                        class="btn btn-primary custom-btn-style-1 font-weight-bold text-3 px-5 py-3"
                                        data-loading-text="Loading...">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
        <div id="googlemaps" class="google-map h-100 m-0" style="min-height: 500px;"></div>

    </div>

    @push('scripts')
        <script>
            /* 
            			Map Markers:
            			- Get an API Key: https://developers.google.com/maps/documentation/javascript/get-api-key
            			- Generate Map Id: https://console.cloud.google.com/google/maps-apis/studio/maps
            			- Use https://www.latlong.net/convert-address-to-lat-long.html to get Latitude and Longitude of a specific address
            			*/
            (g => {
                var h, a, k, p = "The Google Maps JavaScript API",
                    c = "google",
                    l = "importLibrary",
                    q = "__ib__",
                    m = document,
                    b = window;
                b = b[c] || (b[c] = {});
                var d = b.maps || (b.maps = {}),
                    r = new Set,
                    e = new URLSearchParams,
                    u = () => h || (h = new Promise(async (f, n) => {
                        await (a = m.createElement("script"));
                        e.set("libraries", [...r] + "");
                        for (k in g) e.set(k.replace(/[A-Z]/g, t => "_" + t[0].toLowerCase()), g[k]);
                        e.set("callback", c + ".maps." + q);
                        a.src = `https://maps.${c}apis.com/maps/api/js?` + e;
                        d[q] = f;
                        a.onerror = () => h = n(Error(p + " could not load."));
                        a.nonce = m.querySelector("script[nonce]")?.nonce || "";
                        m.head.append(a)
                    }));
                d[l] ? console.warn(p + " only loads once. Ignoring:", g) : d[l] = (f, ...n) => r.add(f) && u().then(() =>
                    d[l](f, ...n))
            })
            ({
                key: "YOUR_API_KEY",
                v: "weekly"
            });

            async function initMap() {
                const {
                    Map,
                    InfoWindow
                } = await google.maps.importLibrary("maps");
                const {
                    AdvancedMarkerElement,
                    PinElement
                } = await google.maps.importLibrary(
                    "marker",
                );
                const map = new Map(document.getElementById("googlemaps"), {
                    zoom: 14,
                    center: {
                        lat: -37.817240,
                        lng: 144.955820
                    },
                    mapId: "YOUR_MAP_API_ID",
                });
                const markers = [{
                    position: {
                        lat: -37.817240,
                        lng: 144.955820
                    },
                    title: "Office 1<br>Melbourne, 121 King St, Australia<br>Phone: 123-456-1234",
                }];

                const infoWindow = new InfoWindow();

                markers.forEach(({
                    position,
                    title
                }, i) => {
                    const pin = new PinElement({
                        background: "#e36159",
                        borderColor: "#e36159",
                        glyphColor: "#FFF",
                    });
                    const marker = new AdvancedMarkerElement({
                        position,
                        map,
                        title: `${title}`,
                        content: pin.element,
                    });

                    marker.addListener("click", ({
                        domEvent,
                        latLng
                    }) => {
                        const {
                            target
                        } = domEvent;

                        infoWindow.close();
                        infoWindow.setContent(marker.title);
                        infoWindow.open(marker.map, marker);
                    });
                });

            }

            initMap();
        </script>
    @endpush
@endsection
