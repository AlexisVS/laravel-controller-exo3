<section class="page-section clearfix">
    <div class="container">
        <div class="intro">
            <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{asset('img/intro.jpg')}}" alt="">
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                <h2 class="section-heading mb-4">
                    <span class="section-heading-upper">{{$home->titleA}}</span>
                    <span class="section-heading-lower">{{$home->titleB}}</span>
                </h2>
                <p class="mb-3">{{$home->textA}}</p>
                <div class="intro-button mx-auto">
                    <a class="btn btn-primary btn-xl" href="#">{{$home->textB}}</a>
                </div>
            </div>
        </div>
    </div>
</section>
