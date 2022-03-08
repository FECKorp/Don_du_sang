@extends("template")
@section("Content")

    <main class="main" id="top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
            <div class="container"><a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="index.html">
                    <div class="text-warning">App</div>
                    <div class="text-1000">Lab</div>
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
                        <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium active" aria-current="page" href="#home">Home</a></li>
                        <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium" href="#features">Key Features</a></li>
                        <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium" href="#pricing">Pricing</a></li>
                        <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium" href="#testimonial">Testimonial</a></li>
                        <li class="nav-item" data-anchor="data-anchor"><a class="nav-link fw-medium" href="#faq">FAQ</a></li>
                    </ul>
                    <form class="ps-lg-5">
                        <button class="btn btn-lg btn-primary rounded-pill order-0" type="submit">Try for free</button>
                    </form>
                </div>
            </div>
        </nav>
        <section class="py-0" id="home">
            <div class="bg-holder" style="background-image:url(assets/img/illustrations/hero-bg.png);background-position:bottom;background-size:cover;">
            </div>
            <!--/.bg-holder-->

            <div class="container position-relative">
                <div class="row align-items-center py-8">
                    <div class="col-md-5 col-lg-6 order-md-1 text-center text-md-end"><img class="img-fluid" src="assets/img/illustrations/mobile.png" width="350" alt="" /></div>
                    <div class="col-md-7 col-lg-6 text-center text-md-start"><span class="badge bg-light rounded-pill text-dark align-items-center d-flex flex-row-reverse justify-content-end mx-auto mx-md-0 ps-0 w-75 w-sm-50 w-md-75 w-xl-50 mb-3">#1 Editiors Choice App of 2020<img class="img-fluid float-start me-3" src="assets/img/illustrations/arrow-right.png" alt=""/></span>
                        <h1 class="mb-4 display-3 fw-bold lh-sm">Best app for your <br class="d-block d-lg-none d-xl-block" />modern lifestyle</h1>
                        <p class="mt-3 mb-4 fs-1">Increase productivity with a simple to-do app. app for <br class="d-none d-lg-block" />managing your personal budgets.</p><a class="btn btn-lg btn-primary rounded-pill hover-top" href="#" role="button">Try for free</a><a class="btn btn-link ps-md-4" href="#" role="button"> Watch demo video</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5" id="features">
            <div class="container-lg">
                <div class="row align-items-center">
                    <div class="col-md-7 col-lg-6 px-sm-5 px-md-0">
                        <h6 class="fw-bold fs-4 display-3 lh-sm">Donner son <br />sang</h6>
                        <p class="my-4">Increase productivity with a simple to-do app. app for <br class="d-none d-xl-block" />managing your personal budgets.</p>
                        <div class="d-flex align-items-center mb-5">
                            <div><img class="img-fluid" src="assets/img/illustrations/fast-performance.png" width="90" alt="" /></div>
                            <div class="px-4">
                                <h5 class="fw-bold text-danger">Fast performance</h5>
                                <p>Get your blood tests delivered at <br class="d-none d-xl-block"> home collect a sample from the <br class="d-none d-xl-block"> news your blood tests</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div><img class="img-fluid" src="assets/img/illustrations/prototype.png" width="90" alt="" /></div>
                            <div class="px-4">
                                <h5 class="fw-bold text-primary">Prototyping</h5>
                                <p>Get your blood tests delivered at <br class="d-none d-xl-block"> home collect a sample from the <br class="d-none d-xl-block"> news your blood tests</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div><img class="img-fluid" src="assets/img/illustrations/vector.png" width="90" alt="" /></div>
                            <div class="px-4">
                                <h5 class="fw-bold text-success">Vector Editing</h5>
                                <p>Get your blood tests delivered at <br class="d-none d-xl-block"> home collect a sample from the <br class="d-none d-xl-block"> news your blood tests</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-6 order-md-0 text-center text-md-start"><img class="img-fluid" src="assets/img/illustrations/feature-bg.png" width="550" alt="" /></div>
                </div>
            </div>
        </section>
        <section class="py-5" id="features">
            <div class="container-lg">
                <div class="row align-items-center">
                    <div class="col-md-5 col-lg-6 order-md-0 text-center text-md-start"><img class="img-fluid" src="assets/img/illustrations/feature-bg.png" width="550" alt="" /></div>
                    <div class="col-md-7 col-lg-6 px-sm-5 px-md-0">
                        <h6 class="fw-bold fs-4 display-3 lh-sm">Donner sa <br />moelle osseuse</h6>
                        <p class="my-4">Increase productivity with a simple to-do app. app for <br class="d-none d-xl-block" />managing your personal budgets.</p>
                        <div class="d-flex align-items-center mb-5">
                            <div><img class="img-fluid" src="assets/img/illustrations/fast-performance.png" width="90" alt="" /></div>
                            <div class="px-4">
                                <h5 class="fw-bold text-danger">Fast performance</h5>
                                <p>Get your blood tests delivered at <br class="d-none d-xl-block"> home collect a sample from the <br class="d-none d-xl-block"> news your blood tests</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div><img class="img-fluid" src="assets/img/illustrations/prototype.png" width="90" alt="" /></div>
                            <div class="px-4">
                                <h5 class="fw-bold text-primary">Prototyping</h5>
                                <p>Get your blood tests delivered at <br class="d-none d-xl-block"> home collect a sample from the <br class="d-none d-xl-block"> news your blood tests</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div><img class="img-fluid" src="assets/img/illustrations/vector.png" width="90" alt="" /></div>
                            <div class="px-4">
                                <h5 class="fw-bold text-success">Vector Editing</h5>
                                <p>Get your blood tests delivered at <br class="d-none d-xl-block"> home collect a sample from the <br class="d-none d-xl-block"> news your blood tests</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="row flex-center">
            <div class="col-lg-4">
                <div class="card shadow-lg mb-4">
                    <div class="card-header border-bottom-0 pt-7 pb-5">
                        <div class="d-flex justify-content-center">
                        </div>
                        <h4 class="fw-bold text-center">Don du sang</h4><span class="text-700 text-center d-block">p</span>
                    </div>
                    <div class="card-body mx-auto">
                        <ul class="list-unstyled mb-4">
                            <li class="text-700 py-2 text-secondary" style="text-align: center">Darg &amp; Drop Builder</li>
                            <li class="text-700 py-2 text-secondary" style="text-align: center">1,000's of Templates</li>
                            <li class="text-700 py-2 text-secondary" style="text-align: center">Blog Support Tools</li>
                            <li class="text-700 py-2 text-secondary"style="text-align: center">eCommerce Store </li>
                        </ul>
                        <div class="d-flex flex-column"> <a class="btn btn-lg btn-primary rounded-pill mb-3" href="#">Prendre Rendez-vous</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-lg mb-4">
                    <div class="card-header border-bottom-0 pt-7 pb-5">
                        <div class="d-flex justify-content-center"></div>
                        <h4 class="fw-bold text-center">Don de la moelle osseuse</h4><span class="text-700 text-center d-block">p</span>
                    </div>
                    <div class="card-body mx-auto">
                        <ul class="list-unstyled mb-4">
                            <li class="text-700 py-2 text-secondary"style="text-align: center">Darg &amp; Drop Builder</li>
                            <li class="text-700 py-2 text-secondary"style="text-align: center">1,000's of Templates</li>
                            <li class="text-700 py-2 text-secondary"style="text-align: center">Blog Support Tools</li>
                            <li class="text-700 py-2 text-secondary"style="text-align: center">eCommerce Store </li>
                        </ul>
                        <div class="d-flex flex-column"> <a class="btn btn-lg btn-primary rounded-pill mb-3" href="#">Prendre rendez-vous</a></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <iframe src="https://arcg.is/y5qze" width="1000" height="450" style="border:0" allowfullscreen></iframe>

        <section class="py-8" id="faq">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 text-center mb-3">
                        <h6 class="fw-bold fs-4 display-3 lh-sm mb-3">Foire aux questions</h6>
                        <p class="mb-5">Petit tour d’horizon des questions pratiques les plus fréquentes.</p>
                    </div>
                </div>
                <div class="row flex-center">
                    <div class="col-lg-9">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="heading1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1"><span class="mb-0 fw-bold text-start fs-1 text-1000">Quelles conditions dois-je respecter pour donner mon sang ?</span></button>
                                </h2>
                                <div class="accordion-collapse collapse show" id="collapse1" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                    <div class="accordion-body bg-100">Toute personne en bonne santé âgée, de 18 à 70 ans et pesant au moins 50 kilos, peut donner son sang. Néanmoins, il existe des contre-indications qui, pour la plupart, sont temporaires. Leur but : garantir la sécurité du donneur comme du receveur.</div>
                                </div>
                            </div>
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="heading2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2"><span class="mb-0 fw-bold text-start fs-1 text-1000">Le don de sang va-t-il me fatiguer ?</span></button>
                                </h2>
                                <div class="accordion-collapse collapse" id="collapse2" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                    <div class="accordion-body bg-100">Chez une personne en bonne santé, le don n’entraîne la plupart du temps aucun effet secondaire. L'organisme reconstitue rapidement le volume sanguin prélevé.
                                        Il est néanmoins conseillé de ne pas pratiquer d’activités fatigantes ou à risques (conduite prolongée, marche ou station debout prolongée, sports…) dans les heures qui suivent le don. Il est également très important de boire beaucoup (eau ou jus).</div>
                                </div>
                            </div>
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="heading3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3"><span class="mb-0 fw-bold text-start fs-1 text-1000">Combien de temps dure un don de sang ?</span></button>
                                </h2>
                                <div class="accordion-collapse collapse" id="collapse3" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                    <div class="accordion-body bg-100">Le prélèvement en lui-même ne dure que 8 à 10 minutes. Si l'on ajoute à cela le temps nécessaire à l'entretien préalable avec l’infirmier(e) ou le médecin, ainsi que le repos suivant le prélèvement, un don de sang prend environ 45 minutes.</div>
                                </div>
                            </div>
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="heading4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4"><span class="mb-0 fw-bold text-start fs-1 text-1000">Est-ce que donner son sang fait mal ?</span></button>
                                </h2>
                                <div class="accordion-collapse collapse" id="collapse4" aria-labelledby="heading4" data-bs-parent="#accordionExample">
                                    <div class="accordion-body bg-100">Personne n’aime les piqûres mais le don de sang ne fait pas plus mal qu’une prise de sang réalisée en laboratoire. Le prélèvement est réalisé par un personnel qualifié, spécialement formé et qui veille à votre bien-être.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-2">
                                <h2 class="accordion-header" id="heading5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5"><span class="mb-0 fw-bold text-start fs-1 text-1000">Quels documents dois-je apporter pour effectuer un don de sang ?</span></button>
                                </h2>
                                <div class="accordion-collapse collapse" id="collapse5" aria-labelledby="heading5" data-bs-parent="#accordionExample">
                                    <div class="accordion-body bg-100">La législation impose la présentation systématique d’une pièce d’identité pour chaque personne se présentant sur une collecte pour donner son sang. Le carnet de santé est facultatif.
                                        Pour les donneurs réguliers, la carte de donneur est acceptée, ainsi qu’une carte de transport ou une carte vitale.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>

        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-5">

            <div class="container">
                <div class="row align-items-center mb-6">
                    <div class="col-md-5 col-lg-4 offset-lg-1">
                        <h1 class="fw-bold lh-base">Smart jackpots that you may love this anytime &amp; anywhere</h1>
                    </div>
                    <div class="col-md-6 col-lg-5 offset-lg-1 border-start py-5 ps-5">
                        <p class="mb-0">The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-3 offset-lg-1 mb-4">
                        <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/automatic.png" width="90" alt="" /></div>
                        <h5 class="fw-bold text-danger">Fast performance</h5>
                        <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                    </div>
                    <div class="col-md-4 col-lg-3 offset-lg-1 mb-4">
                        <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/network.png" width="90" alt="" /></div>
                        <h5 class="fw-bold text-primary">Prototyping</h5>
                        <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                    </div>
                    <div class="col-md-4 col-lg-3 offset-lg-1 mb-4">
                        <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/rewards.png" width="90" alt="" /></div>
                        <h5 class="fw-bold text-success">Vector Editing</h5>
                        <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <section class="py-6">

            <div class="container">
                <div class="row justify-content-center mb-6">
                    <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
                        <h6 class="fw-bold fs-4 display-3 lh-sm">Why you should choose <br />our app </h6>
                        <p class="mb-0">The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-6">
                        <div class="text-center px-lg-3"><img class="img-fluid mb-3" src="assets/img/illustrations/app.png" width="90" alt="" />
                            <h5 class="fw-bold">App Development</h5>
                            <p class="mb-md-0">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-6">
                        <div class="text-center px-lg-3"><img class="img-fluid mb-3" src="assets/img/illustrations/time-award.png" width="90" alt="" />
                            <h5 class="fw-bold">10 Times Award</h5>
                            <p class="mb-md-0">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-6">
                        <div class="text-center px-lg-3"><img class="img-fluid mb-3" src="assets/img/illustrations/cloud.png" width="90" alt="" />
                            <h5 class="fw-bold">Cloud Storage</h5>
                            <p class="mb-md-0">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-6">
                        <div class="text-center px-lg-3"><img class="img-fluid mb-3" src="assets/img/illustrations/customization.png" width="90" alt="" />
                            <h5 class="fw-bold">Customization</h5>
                            <p class="mb-md-0">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-6">
                        <div class="text-center px-lg-3"><img class="img-fluid mb-3" src="assets/img/illustrations/ux.png" width="90" alt="" />
                            <h5 class="fw-bold">UX Planning</h5>
                            <p class="mb-md-0">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-6">
                        <div class="text-center px-lg-3"><img class="img-fluid mb-3" src="assets/img/illustrations/support.png" width="90" alt="" />
                            <h5 class="fw-bold">Customer Support</h5>
                            <p class="mb-md-0">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-6">

            <div class="container">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-5 order-md-1 text-center text-md-start"><img class="img-fluid mb-4" src="assets/img/illustrations/ultimate-feature.png" alt="" /></div>
                        <div class="col-md-6 text-center text-md-start">
                            <h6 class="fw-bold fs-4 display-3 lh-sm">Ultimate features<br />that we built</h6>
                            <p class="my-4 pe-xl-5"> The rise of mobile devices transforms the way we consume information entirely.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/app.png" width="90" alt="" /></div>
                                        <h5 class="fw-bold text-undefined">App Development</h5>
                                        <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/ux.png" width="90" alt="" /></div>
                                        <h5 class="fw-bold text-undefined">UX Planning</h5>
                                        <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/cloud.png" width="90" alt="" /></div>
                                        <h5 class="fw-bold text-undefined">Cloud Storage</h5>
                                        <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <div class="py-4"><img class="img-fluid" src="assets/img/illustrations/support.png" width="90" alt="" /></div>
                                        <h5 class="fw-bold text-undefined">Customer support</h5>
                                        <p class="mt-2 mb-0">Get your blood tests delivered at home collect a sample from the news your blood tests.</p>
                                    </div>
                                </div>
                            </div><a class="btn btn-lg btn-primary rounded-pill hover-top" href="#" role="button">See all</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->




        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-8" id="pricing">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xxl-5 text-center mb-3">
                        <h6 class="fw-bold fs-4 display-3 lh-sm mb-3">Get awesome features, without extra charges</h6>
                        <p class="mb-4">The rise of mobile devices transforms the way we consume information entirely and the world's most elevant channels such as Facebook.</p>
                    </div>
                </div>

            <!-- end of .container-->

        </section>
        <section class="py-8 bg-1000">

            <div class="container">
                <div class="row flex-center">
                    <div class="col-auto mb-5"><a class="pe-2 d-flex align-items-center text-decoration-none fw-bold fs-3" href="#">
                            <div class="text-warning">App</div>
                            <div class="text-white">Lab</div>
                        </a></div>
                </div>
                <div class="row flex-center">
                    <div class="col-auto mb-5">
                        <ul class="list-unstyled list-inline mb-0">
                            <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none" href="#!">Home</a></li>
                            <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none" href="#!">Key Features</a></li>
                            <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none" href="#!">Pricing</a></li>
                            <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none" href="#!">Testimonial</a></li>
                            <li class="list-inline-item me3 me-sm-4"><a class="text-light text-decoration-none" href="#!">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row flex-center">
                    <div class="col-auto mb-5">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item me-3"><a class="text-decoration-none" href="#!">
                                    <svg class="bi bi-facebook" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#7D7987" viewBox="0 0 16 16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                    </svg></a></li>
                            <li class="list-inline-item me-3"><a href="#!">
                                    <svg class="bi bi-twitter" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#7D7987" viewBox="0 0 16 16">
                                        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                    </svg></a></li>
                            <li class="list-inline-item me-3"><a href="#!">
                                    <svg class="bi bi-hash" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" viewBox="0 0 16 16">
                                        <path d="M8.39 12.648a1.32 1.32 0 0 0-.015.18c0 .305.21.508.5.508.266 0 .492-.172.555-.477l.554-2.703h1.204c.421 0 .617-.234.617-.547 0-.312-.188-.53-.617-.53h-.985l.516-2.524h1.265c.43 0 .618-.227.618-.547 0-.313-.188-.524-.618-.524h-1.046l.476-2.304a1.06 1.06 0 0 0 .016-.164.51.51 0 0 0-.516-.516.54.54 0 0 0-.539.43l-.523 2.554H7.617l.477-2.304c.008-.04.015-.118.015-.164a.512.512 0 0 0-.523-.516.539.539 0 0 0-.531.43L6.53 5.484H5.414c-.43 0-.617.22-.617.532 0 .312.187.539.617.539h.906l-.515 2.523H4.609c-.421 0-.609.219-.609.531 0 .313.188.547.61.547h.976l-.516 2.492c-.008.04-.015.125-.015.18 0 .305.21.508.5.508.265 0 .492-.172.554-.477l.555-2.703h2.242l-.515 2.492zm-1-6.109h2.266l-.515 2.563H6.859l.532-2.563z"></path>
                                    </svg></a></li>
                            <li class="list-inline-item me-3"><a href="#!">
                                    <svg class="bi bi-instagram" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#7D7987" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"> </path>
                                    </svg></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row flex-center">
                    <div class="col-auto">
                        <p class="mb-0 fs--1 text-700">&copy; This template is made with&nbsp;
                            <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffffff" viewBox="0 0 16 16">
                                <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                            </svg>&nbsp;by&nbsp;<a class="text-700" href="https://themewagon.com/" target="_blank">ThemeWagon </a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->





@endsection
