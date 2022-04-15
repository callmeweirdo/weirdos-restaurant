<section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of cakes with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12" style="position: relative;">
                <div class="owl-menu-item owl-carousel">

                    @foreach ($foods as $food )
                    <form action="{{ url('/addtocart') }}" method="POST">
                        @csrf
                        <div class="item">
                            <div class='card  ' style="background-image: url('foodimages/{{ $food->image }}');                  background-repeat:no-repeat; background-size:cover; " >
                                <div class="price"><h6>{{ $food->price }}</h6></div>
                                <div class='info'>
                                    <h1 class='title'>{{ $food->title }}</h1>
                                    <p class='description'>{{ $food->description }}</p>
                                    <div class="main-text-button">
                                        <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                                    </div>
                                </div>
                                <div class="row" style="position: absolute;bottom:0;">
                                    <input type="number" class="col-md-6 form-control"  >
                                    <input type="submit" value="Add to Cart" class="col-md-6 form-control btn text-white " style="background: #fb5849;">
                                </div>
                            </div>
                        </div>
                    </form>

                    @endforeach

                </div>
            </div>
        </div>
    </section>
