@extends('pages.layout')

@push('homestyle')
    <link rel="stylesheet" href="{{ asset('css/categorypage.css') }}">
@endpush

@section('content')

    {{-- <div class="bread-crumb container-fluid">
        <a href="{{url('/')}}">Home</a> /
        <a href="{{url('/')}}/{{$subcategory['category']['name']}}">{{$subcategory['category']['name']}}</a> /
        {{$subcategory['name']}}
    </div> --}}




    <div class="main-section">
        <div class="sidebar bg-white" id="sidebar">
            <div class="btn btn-primary container-fluid d-lg-none d-block">Apply filters</div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div id="price-meter">
                                <div id="currency">
                                    <div id="currency-section">&#x20b9;</div>
                                    <span id="rangeValue">0</span>
                                </div>
                                <form action="{{url('/')}}/pricecategory">
                                    <Input class="range" type="range" name="pricemeter" value="0" min="0" max="100000" onChange="rangeSlide(this.value)" onmousemove="rangeSlide(this.value)"></Input>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Brands
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body list-group px-3">
                            <div class="list-group-item border border-0 py-2">
                                <input type="checkbox" name="brands" id="brands1"><label for="brands1">Samsung</label>
                            </div>
                            <div class="list-group-item border border-0 py-2">
                                <input type="checkbox" name="brands" id="brands2"><label for="brands2">Apple</label>
                            </div>
                            <div class="list-group-item border border-0 py-2">
                                <input type="checkbox" name="brands" id="brands3"><label for="brands3">Intex</label>
                            </div>
                            <div class="list-group-item border border-0 py-2">
                                <input type="checkbox" name="brands" id="brands4"><label for="brands4">Lenovo</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-section">
            <div class="d-lg-flex d-block justify-content-between p-2">
                <div class="d-flex py-2">
                    <div class="font-16 px-1">number</div>
                    <div class="font-16 px-1">Results for</div>
                    <div class="font-16 px-1">"Smartphones"</div>
                </div>
                <div class="d-lg-flex d-block float-lg-end">
                    <div class="d-flex">
                        <div class="font-14 px-2 align-content-center">Sort By</div>
                        <div class="px-2">
                            <div class="dropdown">
                                <button class="btn btn-light border border-2 border-dark rounded-0 dropdown-toggle font-14" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  PRICE: LOW TO HIGH
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                              </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="font-14 ps-2 pe-3 align-content-center">Display</div>
                        <div>
                            <div class="dropdown">
                                <button class="btn btn-light border border-2 border-dark rounded-0 dropdown-toggle font-14" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  50 PER PAGE
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Another action</a></li>
                                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filters w-50"><button onclick="filters()" class="btn btn-primary w-100">filters</button></div>
            <div class=" product-section">
                <div class="card m-2 items-card float-start">
                    <div class="card-img">
                        <img class="img-fluid" src="../images/12.jpg" alt="">
                    </div>
                    <div class="items-card-like bg-white rounded-2"><i class="fa-regular fa-heart fs-4 ps-2 pt-2"></i></div>
                    <div class="items-card-rating d-flex justify-content-between">
                        <div>4.6</div>
                        <div><i class="fa-solid fa-star"></i></div>
                        <div>(11.5k)</div>
                    </div>
                    <div class="items-card-cart bg-white rounded-2"><i class="fa-solid fa-cart-arrow-down fs-4 ps-2 pt-2"></i></div>
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

                <div class="card m-2 items-card float-start">
                    <div class="card-img">
                        <img class="img-fluid" src="../images/12.jpg" alt="">
                    </div>
                    <div class="items-card-like bg-white rounded-2"><i class="fa-regular fa-heart fs-4 ps-2 pt-2"></i></div>
                    <div class="items-card-rating d-flex justify-content-between">
                        <div>4.6</div>
                        <div><i class="fa-solid fa-star"></i></div>
                        <div>(11.5k)</div>
                    </div>
                    <div class="items-card-cart bg-white rounded-2"><i class="fa-solid fa-cart-arrow-down fs-4 ps-2 pt-2"></i></div>
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

                <div class="card m-2 items-card float-start">
                    <div class="card-img">
                        <img class="img-fluid" src="../images/12.jpg" alt="">
                    </div>
                    <div class="items-card-like bg-white rounded-2"><i class="fa-regular fa-heart fs-4 ps-2 pt-2"></i></div>
                    <div class="items-card-rating d-flex justify-content-between">
                        <div>4.6</div>
                        <div><i class="fa-solid fa-star"></i></div>
                        <div>(11.5k)</div>
                    </div>
                    <div class="items-card-cart bg-white rounded-2"><i class="fa-solid fa-cart-arrow-down fs-4 ps-2 pt-2"></i></div>
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

                <div class="card m-2 items-card float-start">
                    <div class="card-img">
                        <img class="img-fluid" src="../images/12.jpg" alt="">
                    </div>
                    <div class="items-card-like bg-white rounded-2"><i class="fa-regular fa-heart fs-4 ps-2 pt-2"></i></div>
                    <div class="items-card-rating d-flex justify-content-between">
                        <div>4.6</div>
                        <div><i class="fa-solid fa-star"></i></div>
                        <div>(11.5k)</div>
                    </div>
                    <div class="items-card-cart bg-white rounded-2"><i class="fa-solid fa-cart-arrow-down fs-4 ps-2 pt-2"></i></div>
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

                <div class="card m-2 items-card float-start">
                    <div class="card-img">
                        <img class="img-fluid" src="../images/12.jpg" alt="">
                    </div>
                    <div class="items-card-like bg-white rounded-2"><i class="fa-regular fa-heart fs-4 ps-2 pt-2"></i></div>
                    <div class="items-card-rating d-flex justify-content-between">
                        <div>4.6</div>
                        <div><i class="fa-solid fa-star"></i></div>
                        <div>(11.5k)</div>
                    </div>
                    <div class="items-card-cart bg-white rounded-2"><i class="fa-solid fa-cart-arrow-down fs-4 ps-2 pt-2"></i></div>
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

                <div class="card m-2 items-card float-start">
                    <div class="card-img">
                        <img class="img-fluid" src="../images/12.jpg" alt="">
                    </div>
                    <div class="items-card-like bg-white rounded-2"><i class="fa-regular fa-heart fs-4 ps-2 pt-2"></i></div>
                    <div class="items-card-rating d-flex justify-content-between">
                        <div>4.6</div>
                        <div><i class="fa-solid fa-star"></i></div>
                        <div>(11.5k)</div>
                    </div>
                    <div class="items-card-cart bg-white rounded-2"><i class="fa-solid fa-cart-arrow-down fs-4 ps-2 pt-2"></i></div>
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

            <div class="pagination container-fluid justify-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                  </nav>
            </div>
        </div>
    </div>

<script>
    function rangeSlide(value) {
        document.getElementById('rangeValue').innerHTML = value;
    }

    function filters(){
        var element = document.getElementById("sidebar");
        element.classList.toggle("mystyle");
    }
</script>

@endsection
