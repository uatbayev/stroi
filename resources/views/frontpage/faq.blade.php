@extends('front.frontp')
@section('title')
    Сұрақ-жауап
@endsection
@section('content')
    <!-- Page Content-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder">Жиі Қойылатын Сұрақтар</h1>
                <p class="lead fw-normal text-muted mb-0">Сізге қалай көмектесе аламыз?</p>
            </div>
            <div class="row gx-5">
                <div class="col-xl-8">
                    <!-- FAQ Accordion 1-->
                    <h2 class="fw-bolder mb-3">Бағдарламаның сипаттамасы</h2>
                    <div class="accordion mb-5" id="accordionExample">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Тұрмысы төмен отбасыларға кредит берудің шарттары</button></h3>
                            <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    «Тұрғын үй қатынастары туралы» Қазақстан Республикасының Заңына сәйкес тұрғын үйге мұқтаждар есебінде тұрған азаматтар:

                                    - «Алтын алқа», «Күміс алқа» алқаларымен марапатталған немесе бұрын «Батыр ана» атағын алған, сондай-ақ І және ІІ дәрежелі «Ана даңқы» ордендерімен марапатталған көп балалы аналар, көп балалы отбасылар;

                                    - толық емес отбасылар;

                                    - мүгедек балалары бар немесе оларды тәрбиелеп отырған отбасы санаттары бойынша Бағдарламаға қатысушылар бола алады.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Тұрмысы төмен отбасыларға кредит беру үшін менің іс-әрекеттер алгоритмім қандай?</button></h3>
                            <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Құжаттар мен өтініштер келесі талаптарға сай келетін Алматы қаласы бойынша коммуналдық тұрғын үй қорынан тұрғын үйге мұқтаждар есебінде «Алтын алқа», «Күміс алқа» алқаларымен марапатталған немесе бұрын «Батыр ана» атағын алған, сондай-ақ І және ІІ дәрежелі «Ана даңқы» ордендерімен марапатталған көп балалы аналар, көп балалы отбасылар», «толық емес отбасылар», «мүгедек балалары бар немесе оларды тәрбиелеп отырған отбасы санаттары бойынша Бағдарламаға қатысушылар бола алады» санаты бойынша тұратын азаматтардан қабылданады:
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Жеке кәсіпкердің төлем қабілетін растау кезінде</button></h3>
                            <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    1. Жеке кәсіпкер ретінде мемлекеттік тіркеу туралы куәлік *;<br>
                                    2. Борыш жоқтығы туралы салық органынан анықтама;<br>
                                    3. Соңғы есеп беру жылындағы табыс көрсетілген салық есебі (200 нысан, 240 нысан, 220 нысан):<br>
                                    4. Соңғы 12 айдағы декларацияланған табыс көрсетілген кәсіпкерлік қызмет патенті;<br>
                                    5. Салық органының белгісі бар декларация (911.00 нысан) *;<br>
                                    6. Соңғы есептік жылдың 12 айындағы шағын бизнес субъектілеріне арналған жеңілдетілген декларация (910.00 нысан);<br>
                                    7. Салық төлеушінің салық есебін бергені туралы хабарлама (растама);<br>
                                    8. Салық берешегінің жоқтығы туралы анықтама.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card border-0 bg-light mt-xl-5">
                        <div class="card-body p-4 py-lg-5">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    <div class="h6 fw-bolder">Қосымша сұрақтарыңыз бар ма?</div>
                                    <p class="text-muted mb-4">
                                        Байланыс:
                                        <br />
                                        87074445566
                                        <br />
                                        <a href="#!">support@auezov.edu.kz</a>
                                    </p>
                                    <div class="h6 fw-bolder">Біз әлеуметтік желідеміз</div>
                                    <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-twitter"></i></a>
                                    <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-facebook"></i></a>
                                    <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-linkedin"></i></a>
                                    <a class="fs-5 px-2 link-dark" href="#!"><i class="bi-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
