@extends('/templates.master')
@section('content')


<div class="content-home">
    <div class="content-infor">
        <div class="container-fuild content-container">
            <div class="row">
                <div class="col-12 engkids-mean">
                    <h2 class="mb-4">
                        What is EngKids?
                    </h2>
                </div>
                <div class="col-6 engkids-mean-left">
                    <img src="{{asset('asset/image/logo2.png')}}" alt="">
                </div>
                <div class="col-6 engkids-mean-right">
                    <div class="engkids-mean-right-set-width">
                        <h4 class="mt-5">Engkids is an English learning application </h4>
                        <p class="my-3 decription-small">#Vietnamese apps / TCP</p>
                        <p class="decription">
                            Engkids is an English learning application, the idea of ​​Vietnamese people. The application was established and operated in 2021 to serve the needs of people to learn English. Vocabulary problems will be solved through typing search words, identifying
                            objects around you. The idea of object recognition is to overcome forgetting vocabulary, making it easier for users.
                        </p>
                    </div>
                </div>

                <div class="col-12 mt-5 pt-5">
                    <h5>EngKids' contributions</h5>
                </div>
                <div class="col-6 contributions-left">
                    <div class="contributions-left-img">
                        <img src="{{asset('asset/image/vocabulary.jpg')}}" alt="">
                        <div class="overlay">
                            <div class="text">
                                <img src="{{asset('asset/image/vocabulary.png')}}" alt="">
                                <p>EngKids has a vocabulary of up to 100000 words
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 contributions-left">
                    <div class="contributions-left-img">
                        <img src="{{asset('asset/image/detection.jpg')}}" alt="">
                        <div class="overlay">
                            <div class="text">
                                <img src="{{asset('asset/image/detection.png')}}" alt="">
                                <p>99% probability object recognition </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5 pt-5">
                    <h5>Engkids' object recognition</h5>
                </div>
                <div class="col-4 detection-decription-left">
                    <div class="image-detection">
                        <img src="{{asset('asset/image/detection.png')}}" alt="">
                    </div>
                </div>

                <div class="col-4 detection-decription-center">
                    <div class="blue-btn">
                        <a class="first-link" href="">
                            Get Started
                        </a>
                        <a href="">
                            Try now
                        </a>
                    </div>
                </div>
                <div class="col-4 detection-decription-right">
                    <div class="image-decription">
                        <img src="{{asset('asset/image/detection-decription1.png')}}" alt="">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection