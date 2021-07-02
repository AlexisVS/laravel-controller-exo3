<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">{{$store->titleA}}</span>
                        <span class="section-heading-lower">{{$store->titleB}}</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$store->ul1li1}}
                            <span class="ml-auto">{{$store->ul1li1A}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$store->ul1li2}}
                            <span class="ml-auto">{{$store->ul1li2A}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$store->ul1li3}}
                            <span class="ml-auto">{{$store->ul1li3A}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$store->ul1li4}}
                            <span class="ml-auto">{{$store->ul1li4A}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$store->ul1li5}}
                            <span class="ml-auto">{{$store->ul1li5A}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$store->ul1li6}}
                            <span class="ml-auto">{{$store->ul1li6A}}</span>
                        </li>
                        <li class="list-unstyled-item list-hours-item d-flex">
                            {{$store->ul1li7}}
                            <span class="ml-auto">{{$store->ul1li7A}}</span>
                        </li>
                    </ul>
                    <p class="address mb-5">
                        <em>
                            <strong>{{$store->adressA}}</strong>
                            <br>
                            {{$store->adressB}}
                        </em>
                    </p>
                    <p class="mb-0">
                        <small>
                            <em>{{$store->numA}}</em>
                        </small>
                        <br>
                        {{$store->numB}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
