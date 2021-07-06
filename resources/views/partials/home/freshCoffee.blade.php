<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{asset('img/intro.jpg')}}" alt="">
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">{{$homes[0]->text}}</span>
                    <span class="section-heading-lower">{{$homes[1]->text}}</span>
                </h2>
                <p class="mb-3">{{$homes[2]->text}}</p>
                <div class="intro-button mx-auto">
                    <a class="btn btn-primary btn-xl" href="#">{{$homes[3]->text}}</a>
                </div>
            </div>
        </div>
    </div>
</section>
