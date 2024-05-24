@extends('pages.layout')
@push('homestyle')
    <link rel="stylesheet" href="{{ asset('css/itempage.css') }}">
@endpush
@section('content')


    {{-- <div class="bread-crumb container-fluid">
        <a href="{{url('/')}}">Home</a> /
        <a href="{{url('/')}}/{{$subcategory['category']['name']}}">{{$subcategory['category']['name']}}</a> /
        {{$subcategory['name']}}
    </div> --}}

    <div id="addtocart" class="container-fluid row d-flex d-lg-none bg-white p-1">
        <div class="col-2 text-center">
            <div>Qty</div>
            <div>1</div>
        </div>
        <div class="col-10 p-0 m-0"><a href="" class="btn btn-primary w-100 p-2">Add to Cart</a></div>
    </div>

    <div class="container-fluid row">
        <div class="image-section col-lg-5 row d-lg-flex d-none">
            <div class="small-images col-lg-2">
                <div><img class="img-fluid border border-2 rounded-2 border-primary p-2 my-3" src="../images/12.jpg" alt=""></div>
                <div><img class="img-fluid border border-2 rounded-2 p-2 my-3" src="../images/12.jpg" alt=""></div>
                <div><img class="img-fluid border border-2 rounded-2 p-2 my-3" src="../images/12.jpg" alt=""></div>
                <div><img class="img-fluid border border-2 rounded-2 p-2 my-3" src="../images/12.jpg" alt=""></div>
            </div>
            <div class="main-image col-lg-10">
                <div><img class="img-fluid w-75" src="../images/12.jpg" alt=""></div>
            </div>
        </div>
        <div class="detail-section col-lg-4">
            <div class="container-fluid p-2" id="item-brand">Brand</div>
            <div class="container-fluid p-2" id="item-name">Name of Mobile</div>
            <div class="main-image d-lg-none d-block">
                <div><img class="img-fluid w-75" src="../images/12.jpg" alt=""></div>
            </div>
            <div class="d-flex container-fluid p-2">
                <div class="d-flex" id="item-model">
                    <div>Model Number : </div>
                    <div class="fw-bold"></div>
                </div>
                <div class="px-3"> | </div>
                <div class="d-flex" id="item-rating">
                    <div class="px-1 fw-bold">Rating</div>
                    <div class="px-1"><i class="fa-solid fa-star"></i></div>
                    <div class="px-1">(number)</div>
                </div>
            </div>
            <div class="container-fluid d-flex p-2">
                <div class="font-14 color404553">Was :</div>
                <div class="text-decoration-line-through font-14 color7e859b"></div>
            </div>
            <div class="container-fluid d-flex p-2">
                <div class="color404553 me-2 font-14 align-content-end">Now :</div>
                <div class="color404553 fs-5 fw-bold">AED 3300</div>
                <div class="ms-2 font-14 align-content-end">Inclusive of Vat</div>
            </div>
            <div class="container-fluid d-flex p-2">
                <div class="font-14 color404553 me-2">Saving : </div>
                <div class="font-14 color404553">Price</div>
                <div class="font-14 ms-2">11% off</div>
            </div>
            <div class="container-fluid d-flex p-2">
                <div id="item-megadeal" class="px-3 py-2">Megadeal</div>
                <div id="item-free-delivery" class="px-3 py-2">Free Delivery</div>
            </div>
            <div class="container-fluid d-flex p-2 text-center">
                <div class="card w-25 rounded-0">
                    <div class="card-img p-3 w-100"><i class="fa-solid fa-truck"></i></div>
                    <div class="card-title font-14">Delivery on megabuy</div>
                </div>
                <div class="card w-25 rounded-0">
                    <div class="card-img p-3 w-100"><i class="fa-regular fa-star-half-stroke"></i></div>
                    <div class="card-title font-14">High Rated Seller</div>
                </div>
                <div class="card w-25 rounded-0">
                    <div class="card-img p-3 w-100"><i class="fa-solid fa-sack-dollar"></i></div>
                    <div class="card-title font-14">Cash on delivery</div>
                </div>
                <div class="card w-25 rounded-0">
                    <div class="card-img p-3 w-100"><i class="fa-solid fa-shield-halved"></i></div>
                    <div class="card-title font-14">Secure Transaction</div>
                </div>
            </div>
            <div class="container-fluid p-2 d-lg-block d-none">
                <div>Quantity</div>
                <div class="row">
                    <div class="col-lg-3 col-3">
                        <div class="dropdown ">
                            <button class="btn border border-2 border-primary dropdown-toggle px-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                1
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item border border-0 px-3 py-1 m-0" href="#">1</a></li>
                                <li><a class="dropdown-item border border-0 px-3 py-1 m-0" href="#">2</a></li>
                                <li><a class="dropdown-item border border-0 px-3 py-1 m-0" href="#">3</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
                        <a href="" class="btn btn-primary w-100">Add to Cart</a>
                    </div>
                    <div class="col-lg-2 col-2">
                        <a href="" class="btn btn-primary">
                            <i class="fa-regular fa-heart"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-2">
                <div class="d-flex">
                    <div>Color Name : </div>
                    <div>Black</div>
                </div>
                <div class="d-flex w-50">
                    <div class="card w-25 h-25 m-2">
                        <img src="../images/12.jpg" class="card-img img-fluid" alt="">
                    </div>
                    <div class="card w-25 h-25 m-2">
                        <img src="../images/12.jpg" class="card-img img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="price-section col-lg-3 d-lg-block d-none">
            <div class="container-fluid d-flex p-2">
                <div><i class="fa-solid fa-medal px-2"></i></div>
                <div class="font-14 color404553">1 year Warranty</div>
                <div class="font-14 color404553 px-2"><a href="">Learn More</a></div>
            </div>
            <div class="container-fluid p-2">
                <div class="font-14 color404553"><i class="fa-solid fa-calculator px-2"></i>Free delivery on Lockers & Pickup Points</div>
                <div class="font-14 color404553 px-2"><a href="">Learn More</a></div>
            </div>
            <div class="container-fluid p-2">
                <div class="font-14 color404553"><i class="fa-solid fa-rotate-left px-2"></i>Enjoy hassle free returns with this offer.</div>
                <div class="font-14 color404553 px-2"><a href="">Learn More</a></div>
            </div>
            <div class="container-fluid d-flex p-2">
                <div><i class="fa-solid fa-rotate-left px-2"></i></div>
                <div>
                    <div class="font-12 color404553">Free Returns</div>
                    <div class="font-14 color404553">Get free returns on eligible items</div>
                </div>
            </div>
            <div class="container-fluid d-flex p-2">
                <div><i class="fa-solid fa-truck px-2"></i></div>
                <div>
                    <div class="font-12 color404553">Trusted Shipping</div>
                    <div class="font-14 color404553">Free shipping when you spend AED 100 and above on express items</div>
                </div>
            </div>
            <div class="container-fluid d-flex">
                <div><i class="fa-solid fa-truck-ramp-box px-2"></i></div>
                <div>
                    <div class="font-12 color404553">Contactless Delivery</div>
                    <div class="font-14 color404553">Your delivery will be left at your door, valid on prepaid orders only.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid card mx-2 overflow-y-scroll" id="item-overview">
        <div class="font-24 fw-bold color404553">Overview</div>
        <hr>
        <div class="row p-2">
            <div class="col-lg-6">
                <div class="font-15 fw-bold color404553 p-2">Highlights</div>
                <div class="list-group">
                    <div class="list-group-item list-style-type-disc border border-0"></div>
                    <div class="list-group-item list-style-type-disc border border-0"></div>
                    <div class="list-group-item list-style-type-disc border border-0"></div>
                    <div class="list-group-item list-style-type-disc border border-0"></div>
                    <div class="list-group-item list-style-type-disc border border-0"></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="font-15 fw-bold color404553 p-2">Specifications</div>
                <div>
                    <table class="table table-striped font-14 color404553">
                        <tr>
                            <th>Charging type</th>
                            <td>type c</td>
                        </tr>
                        <tr>
                            <th>brand</th>
                            <td>samsung</td>
                        </tr>
                        <tr>
                            <th>model</th>
                            <td>f3</td>
                        </tr>
                        <tr>
                            <th>battery</th>
                            <td>4000</td>
                        </tr>
                      </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid card d-none">
        <div></div>
        <hr>
        <div>
            <div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div>
                    <div><i></i></div>
                    <div></div>
                </div>
                <div>
                    <div><i></i></div>
                    <div></div>
                </div>
            </div>
            <div>
                <div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div></div>
            </div>
        </div>
    </div>

    <div class="container-fluid overflow-hidden d-lg-none d-block">
        <div class="font-24 fw-bold">Limited Time deals</div>
        <div id="hidden-recommended-cards" class="overflow-x-scroll d-flex">

            <div class="hidden-recommended-card">
                <div class="card mx-2">
                    <div class="card-img">
                        <img class="img-fluid" src="../images/12.jpg" alt="">
                    </div>
                    <div class="card-like bg-white rounded-2"><i class="fa-regular fa-heart fs-4 ps-2 pt-2"></i></div>
                    <div class="card-rating d-flex justify-content-between">
                        <div>4.6</div>
                        <div><i class="fa-solid fa-star"></i></div>
                        <div>(11.5k)</div>
                    </div>
                    <div class="card-cart bg-white rounded-2"><i class="fa-solid fa-cart-arrow-down fs-4 ps-2 pt-2"></i></div>
                    <div class="card-body bg-danger-subtle m-0 p-0">
                        <div class="card-title font-14 m-1 p-1">14 Dual SIM Black 12GB RAM 512GB 5G - Global Version</div>
                        <div class="d-flex w-75 m-0">
                            <div class="mx-1 mt-0 font-11 align-content-center">AED</div>
                            <div class="fs-5 mx-1 mt-0 font-15">4000</div>
                            <div class="text-decoration-line-through mx-1 mt-0 font-11 align-content-center">6000</div>
                            <div class="mx-1 mt-0 font-11 align-content-center">11%</div>
                        </div>
                        <div class="font-11 p-1">free delivery</div>
                        <div class="bg-danger font-11 w-50 m-1 rounded-3">market</div>
                    </div>
                </div>
            </div>

            <div class="hidden-recommended-card">
                <div class="card mx-2">
                    <div class="card-img">
                        <img class="img-fluid" src="../images/12.jpg" alt="">
                    </div>
                    <div class="card-like bg-white rounded-2"><i class="fa-regular fa-heart fs-4 ps-2 pt-2"></i></div>
                    <div class="card-rating d-flex justify-content-between">
                        <div>4.6</div>
                        <div><i class="fa-solid fa-star"></i></div>
                        <div>(11.5k)</div>
                    </div>
                    <div class="card-cart bg-white rounded-2"><i class="fa-solid fa-cart-arrow-down fs-4 ps-2 pt-2"></i></div>
                    <div class="card-body bg-danger-subtle m-0 p-0">
                        <div class="card-title font-14 m-1 p-1">14 Dual SIM Black 12GB RAM 512GB 5G - Global Version</div>
                        <div class="d-flex w-75 m-0">
                            <div class="mx-1 mt-0 font-11 align-content-center">AED</div>
                            <div class="fs-5 mx-1 mt-0 font-15">4000</div>
                            <div class="text-decoration-line-through mx-1 mt-0 font-11 align-content-center">6000</div>
                            <div class="mx-1 mt-0 font-11 align-content-center">11%</div>
                        </div>
                        <div class="font-11 p-1">free delivery</div>
                        <div class="bg-danger font-11 w-50 m-1 rounded-3">market</div>
                    </div>
                </div>
            </div>

            <div class="hidden-recommended-card">
                <div class="card mx-2">
                    <div class="card-img">
                        <img class="img-fluid" src="../images/12.jpg" alt="">
                    </div>
                    <div class="card-like bg-white rounded-2"><i class="fa-regular fa-heart fs-4 ps-2 pt-2"></i></div>
                    <div class="card-rating d-flex justify-content-between">
                        <div>4.6</div>
                        <div><i class="fa-solid fa-star"></i></div>
                        <div>(11.5k)</div>
                    </div>
                    <div class="card-cart bg-white rounded-2"><i class="fa-solid fa-cart-arrow-down fs-4 ps-2 pt-2"></i></div>
                    <div class="card-body bg-danger-subtle m-0 p-0">
                        <div class="card-title font-14 m-1 p-1">14 Dual SIM Black 12GB RAM 512GB 5G - Global Version</div>
                        <div class="d-flex w-75 m-0">
                            <div class="mx-1 mt-0 font-11 align-content-center">AED</div>
                            <div class="fs-5 mx-1 mt-0 font-15">4000</div>
                            <div class="text-decoration-line-through mx-1 mt-0 font-11 align-content-center">6000</div>
                            <div class="mx-1 mt-0 font-11 align-content-center">11%</div>
                        </div>
                        <div class="font-11 p-1">free delivery</div>
                        <div class="bg-danger font-11 w-50 m-1 rounded-3">market</div>
                    </div>
                </div>
            </div>

            <div class="hidden-recommended-card">
                <div class="card mx-2">
                    <div class="card-img">
                        <img class="img-fluid" src="../images/12.jpg" alt="">
                    </div>
                    <div class="card-like bg-white rounded-2"><i class="fa-regular fa-heart fs-4 ps-2 pt-2"></i></div>
                    <div class="card-rating d-flex justify-content-between">
                        <div>4.6</div>
                        <div><i class="fa-solid fa-star"></i></div>
                        <div>(11.5k)</div>
                    </div>
                    <div class="card-cart bg-white rounded-2"><i class="fa-solid fa-cart-arrow-down fs-4 ps-2 pt-2"></i></div>
                    <div class="card-body bg-danger-subtle m-0 p-0">
                        <div class="card-title font-14 m-1 p-1">14 Dual SIM Black 12GB RAM 512GB 5G - Global Version</div>
                        <div class="d-flex w-75 m-0">
                            <div class="mx-1 mt-0 font-11 align-content-center">AED</div>
                            <div class="fs-5 mx-1 mt-0 font-15">4000</div>
                            <div class="text-decoration-line-through mx-1 mt-0 font-11 align-content-center">6000</div>
                            <div class="mx-1 mt-0 font-11 align-content-center">11%</div>
                        </div>
                        <div class="font-11 p-1">free delivery</div>
                        <div class="bg-danger font-11 w-50 m-1 rounded-3">market</div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="card container-fluid border border-0 d-lg-block d-none pt-3">
        <div class="card-title font-24 fw-bold">Limited time deals <a href="" class="btn border border-dark float-end font-18 text-uppercase">See All</a></div>
        <div class="card-body">
            <div id="carouselExample3" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">

                    <div class="card recommended-card mx-2 float-start">
                        <div class="card-img">
                            <img class="img-fluid" src="../images/12.jpg" alt="">
                        </div>
                        <div class="card-like bg-white rounded-2"><i class="fa-regular fa-heart fs-4 ps-2 pt-2"></i></div>
                        <div class="card-rating d-flex justify-content-between">
                            <div>4.6</div>
                            <div><i class="fa-solid fa-star"></i></div>
                            <div>(11.5k)</div>
                        </div>
                        <div class="card-cart bg-white rounded-2"><i class="fa-solid fa-cart-arrow-down fs-4 ps-2 pt-2"></i></div>
                        <div class="card-body bg-danger-subtle m-0 p-0">
                            <div class="card-title font-14 m-1 p-1">14 Dual SIM Black 12GB RAM 512GB 5G - Global Version</div>
                            <div class="d-flex w-75 m-0">
                                <div class="mx-1 mt-0 font-11 align-content-center">AED</div>
                                <div class="fs-5 mx-1 mt-0 font-15">4000</div>
                                <div class="text-decoration-line-through mx-1 mt-0 font-11 align-content-center">6000</div>
                                <div class="mx-1 mt-0 font-11 align-content-center">11%</div>
                            </div>
                            <div class="font-11 p-1">free delivery</div>
                            <div class="bg-danger font-11 w-50 m-1 rounded-3">market</div>
                        </div>
                    </div>

                    <div class="card recommended-card mx-2 float-start">
                        <div class="card-img">
                            <img class="img-fluid" src="../images/12.jpg" alt="">
                        </div>
                        <div class="card-like bg-white rounded-2"><i class="fa-regular fa-heart fs-4 ps-2 pt-2"></i></div>
                        <div class="card-rating d-flex justify-content-between">
                            <div>4.6</div>
                            <div><i class="fa-solid fa-star"></i></div>
                            <div>(11.5k)</div>
                        </div>
                        <div class="card-cart bg-white rounded-2"><i class="fa-solid fa-cart-arrow-down fs-4 ps-2 pt-2"></i></div>
                        <div class="card-body bg-danger-subtle m-0 p-0">
                            <div class="card-title font-14 m-1 p-1">14 Dual SIM Black 12GB RAM 512GB 5G - Global Version</div>
                            <div class="d-flex w-75 m-0">
                                <div class="mx-1 mt-0 font-11 align-content-center">AED</div>
                                <div class="fs-5 mx-1 mt-0 font-15">4000</div>
                                <div class="text-decoration-line-through mx-1 mt-0 font-11 align-content-center">6000</div>
                                <div class="mx-1 mt-0 font-11 align-content-center">11%</div>
                            </div>
                            <div class="font-11 p-1">free delivery</div>
                            <div class="bg-danger font-11 w-50 m-1 rounded-3">market</div>
                        </div>
                    </div>

                    <div class="card recommended-card mx-2 float-start">
                        <div class="card-img">
                            <img class="img-fluid" src="../images/12.jpg" alt="">
                        </div>
                        <div class="card-like bg-white rounded-2"><i class="fa-regular fa-heart fs-4 ps-2 pt-2"></i></div>
                        <div class="card-rating d-flex justify-content-between">
                            <div>4.6</div>
                            <div><i class="fa-solid fa-star"></i></div>
                            <div>(11.5k)</div>
                        </div>
                        <div class="card-cart bg-white rounded-2"><i class="fa-solid fa-cart-arrow-down fs-4 ps-2 pt-2"></i></div>
                        <div class="card-body bg-danger-subtle m-0 p-0">
                            <div class="card-title font-14 m-1 p-1">14 Dual SIM Black 12GB RAM 512GB 5G - Global Version</div>
                            <div class="d-flex w-75 m-0">
                                <div class="mx-1 mt-0 font-11 align-content-center">AED</div>
                                <div class="fs-5 mx-1 mt-0 font-15">4000</div>
                                <div class="text-decoration-line-through mx-1 mt-0 font-11 align-content-center">6000</div>
                                <div class="mx-1 mt-0 font-11 align-content-center">11%</div>
                            </div>
                            <div class="font-11 p-1">free delivery</div>
                            <div class="bg-danger font-11 w-50 m-1 rounded-3">market</div>
                        </div>
                    </div>

                    <div class="card recommended-card mx-2 float-start">
                        <div class="card-img">
                            <img class="img-fluid" src="../images/12.jpg" alt="">
                        </div>
                        <div class="card-like bg-white rounded-2"><i class="fa-regular fa-heart fs-4 ps-2 pt-2"></i></div>
                        <div class="card-rating d-flex justify-content-between">
                            <div>4.6</div>
                            <div><i class="fa-solid fa-star"></i></div>
                            <div>(11.5k)</div>
                        </div>
                        <div class="card-cart bg-white rounded-2"><i class="fa-solid fa-cart-arrow-down fs-4 ps-2 pt-2"></i></div>
                        <div class="card-body bg-danger-subtle m-0 p-0">
                            <div class="card-title font-14 m-1 p-1">14 Dual SIM Black 12GB RAM 512GB 5G - Global Version</div>
                            <div class="d-flex w-75 m-0">
                                <div class="mx-1 mt-0 font-11 align-content-center">AED</div>
                                <div class="fs-5 mx-1 mt-0 font-15">4000</div>
                                <div class="text-decoration-line-through mx-1 mt-0 font-11 align-content-center">6000</div>
                                <div class="mx-1 mt-0 font-11 align-content-center">11%</div>
                            </div>
                            <div class="font-11 p-1">free delivery</div>
                            <div class="bg-danger font-11 w-50 m-1 rounded-3">market</div>
                        </div>
                    </div>

                    <div class="card recommended-card mx-2 float-start">
                        <div class="card-img">
                            <img class="img-fluid" src="../images/12.jpg" alt="">
                        </div>
                        <div class="card-like bg-white rounded-2"><i class="fa-regular fa-heart fs-4 ps-2 pt-2"></i></div>
                        <div class="card-rating d-flex justify-content-between">
                            <div>4.6</div>
                            <div><i class="fa-solid fa-star"></i></div>
                            <div>(11.5k)</div>
                        </div>
                        <div class="card-cart bg-white rounded-2"><i class="fa-solid fa-cart-arrow-down fs-4 ps-2 pt-2"></i></div>
                        <div class="card-body bg-danger-subtle m-0 p-0">
                            <div class="card-title font-14 m-1 p-1">14 Dual SIM Black 12GB RAM 512GB 5G - Global Version</div>
                            <div class="d-flex w-75 m-0">
                                <div class="mx-1 mt-0 font-11 align-content-center">AED</div>
                                <div class="fs-5 mx-1 mt-0 font-15">4000</div>
                                <div class="text-decoration-line-through mx-1 mt-0 font-11 align-content-center">6000</div>
                                <div class="mx-1 mt-0 font-11 align-content-center">11%</div>
                            </div>
                            <div class="font-11 p-1">free delivery</div>
                            <div class="bg-danger font-11 w-50 m-1 rounded-3">market</div>
                        </div>
                    </div>

                    <div class="card recommended-card mx-2 float-start">
                        <div class="card-img">
                            <img class="img-fluid" src="../images/12.jpg" alt="">
                        </div>
                        <div class="card-like bg-white rounded-2"><i class="fa-regular fa-heart fs-4 ps-2 pt-2"></i></div>
                        <div class="card-rating d-flex justify-content-between">
                            <div>4.6</div>
                            <div><i class="fa-solid fa-star"></i></div>
                            <div>(11.5k)</div>
                        </div>
                        <div class="card-cart bg-white rounded-2"><i class="fa-solid fa-cart-arrow-down fs-4 ps-2 pt-2"></i></div>
                        <div class="card-body bg-danger-subtle m-0 p-0">
                            <div class="card-title font-14 m-1 p-1">14 Dual SIM Black 12GB RAM 512GB 5G - Global Version</div>
                            <div class="d-flex w-75 m-0">
                                <div class="mx-1 mt-0 font-11 align-content-center">AED</div>
                                <div class="fs-5 mx-1 mt-0 font-15">4000</div>
                                <div class="text-decoration-line-through mx-1 mt-0 font-11 align-content-center">6000</div>
                                <div class="mx-1 mt-0 font-11 align-content-center">11%</div>
                            </div>
                            <div class="font-11 p-1">free delivery</div>
                            <div class="bg-danger font-11 w-50 m-1 rounded-3">market</div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample3" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample3" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>

@endsection
