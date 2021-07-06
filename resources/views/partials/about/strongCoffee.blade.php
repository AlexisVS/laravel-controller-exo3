<section class="page-section abouts-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{asset("img/".$abouts[6]->text)}}" alt="">
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">{{$abouts[0]->text}}</span>
                            <span class="section-heading-lower">{{$abouts[1]->text}}</span>
                        </h2>
                        <p>{{$abouts[2]->text}}</p>
                        <p class="mb-0">{{$abouts[3]->text}}</p><em>{{$abouts[4]->text}}</em>{{$abouts[5]->text}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
