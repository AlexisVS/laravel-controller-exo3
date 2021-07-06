<section class="page-section">
    <div class="container">
        <div class="product-item">
            <div class="product-item-title d-flex">
                <div class="bg-faded p-5 d-flex mr-auto rounded">
                    <h2 class="section-heading mb-0">
                        <span class="section-heading-upper">{{$products[3]->text}}</span>
                        <span class="section-heading-lower">{{$products[4]->text}}</span>
                    </h2>
                </div>
            </div>
            <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{asset("img/".$products[10]->text)}}"
                alt="">
            <div class="product-item-description d-flex ml-auto">
                <div class="bg-faded p-5 rounded">
                    <p class="mb-0">{{$products[5]->text}}</p>
                </div>
            </div>
        </div>
    </div>
</section>
