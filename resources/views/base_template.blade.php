@extends("template")
@section("Content")

    <main class="main" id="top">
        @include("components.navbar")
        <section class="py-0" id="home">
            <div class="bg-holder" style="background-image:url({{ asset("assets/img/illustrations/hero-bg.png") }});background-position:bottom;background-size:cover;">
            </div>
            <!--/.bg-holder-->

            <div class="container position-relative">
                <div class="row align-items-center py-8">
                    <div class="col-md-5 col-lg-6 order-md-1 text-center text-md-end"><img class="img-fluid" src="{{ asset("assets/img/Life.png") }}" width="1700px" alt="" /></div>
                    <div class="col-md-7 col-lg-6 text-center text-md-start">
                        <h1 class="mb-4 display-3 fw-bold lh-sm">Donnez son sang <br class="d-block d-lg-none d-xl-block" />et votre moelle osseuse </h1>
                        <p class="mt-3 mb-4 fs-1">Grace aux dons du sang <br class="d-none d-lg-block" />1 MILLIONS de personnes sont sauvées par an</p><a class="btn btn-lg btn-primary rounded-pill hover-top" href="#" role="button">Prendre Rendez-vous</a><a class="btn btn-link ps-md-4" href="#centresdedons" role="button"> Voir les centres de don</a>
                        <br><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="" >
            <div class="container-lg">
                <div class="row align-items-center">
                    <p style="text-align: center;color: black; font-size: 4.5rem" class="" id="dondusang">Donner son sang</p>
                    <div class="counter-container">
                        <div class="counter">
                            <img src="{{ asset("assets/img/coeur.png") }}" style="height: 128px; width: 128px" alt="timer" srcset="" class="icon">
                            <h3 data-target="1000000" class="count">0</h3>
                            <p>De personnes sauvées en 2020</p>
                        </div>
                        <div class="counter">
                            <img src="{{ asset("assets/img/blood.png") }}"style="height: 128px; width: 128px" alt="Coffee" srcset="" class="icon">
                            <h3 data-target="10000" class="count">0</h3>
                            <p>dons de sang sont nécessaires / jour.</p>
                        </div>

                                </div>
                            <script>
                                const counters = document.querySelectorAll(".count");
                                const speed = 200;

                                counters.forEach((counter) => {
                                    const updateCount = () => {
                                        const target = parseInt(+counter.getAttribute("data-target"));
                                        const count = parseInt(+counter.innerText);
                                        const increment = Math.trunc(target / speed);
                                        console.log(increment);

                                        if (count < target) {
                                            counter.innerText = count + increment;
                                            setTimeout(updateCount, 1);
                                        } else {
                                            count.innerText = target;
                                        }
                                    };
                                    updateCount();
                                });

                            </script>

                    <div class="col-md-7 col-lg-6 px-sm-5 px-md-0">
                        <p style="font-size: 2.2rem" class="my-4">Avec <font size="10rem" color="red"> 1 </font>Don du sang, <br>vous sauvez <font size="10rem" color="red"> 3</font> Personnes  </p>

                        <div class="d-flex align-items-center mb-5">
                            <div class="px-4">
                                <h5 class="fw-bold text-danger">Don du sang</h5>
                                <p>Les personnes subissant des opérations chirurgicales, des traitements lourds (chimiothérapie), les victimes d’hémorragies, d’accidents, les femmes qui ont eu un accouchement difficile, sont sauvées grâce à vos globules rouges. Dans le cas de maladies du sang comme la drépanocytose, les patients reçoivent des transfusions de globules rouges très régulièrement. Toutes les 5 semaines, voire toutes les 2 ou 3 semaines.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="px-4">
                                <h5 class="fw-bold text-primary">Don des plaquettes</h5>
                                Les personnes atteintes de cancers (leucémies, lymphomes) sont soignées avec des plaquettes.
                                <p>La transfusion de ce produit sanguin est aussi nécessaire en cas d’hémorragie massive. Elle est alors associée aux transfusions de globules rouges et de plasma. </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="px-4">
                                <h5 class="fw-bold text-success">Don du plasma</h5>
                                <p>Les enfants et adultes atteints de déficits immunitaires, de maladies génétiques comme l’hémophilie par exemple, bénéficient de transfusions de plasma.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-6 order-md-0 text-center text-md-start"><img class="img-fluid"src="{{ asset("assets/img/sang.png") }}"/></div>
                </div>
            </div>
        </section>
        <section class="py-5" >
            <div class="container-lg">
                <div class="row align-items-center">
                    <div class="col-md-5 col-lg-6 order-md-0 text-center text-md-start"><img class="img-fluid" src="assets/img/Os.png" width="550" alt="" /></div>
                    <div class="col-md-7 col-lg-6 px-sm-5 px-md-0">
                        <h2 class="fw-bold fs-4 display-3 lh-sm" id="donmoelle">Donner sa <br />moelle osseuse</h2>
                        <p class="my-4"> La greffe de moelle osseuse représente un espoir de guérison pour de nombreuses personnes malades.

                        </p>
                        <div class="d-flex align-items-center mb-5">
                            <div class="px-4">
                                <h5 class="fw-bold text-danger">Sauvez des vies</h5>
                                <p>Elle permet de traiter 80% des maladies graves du sang, comme les cancers de type leucémies, lymphomes ou l’aplasie médullaire.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="px-4">
                                <h5 class="fw-bold text-primary">Les donneurs sont rares</h5>
                                <p>Compte tenu de la difficulté de trouver un donneur compatible en dehors de la famille, tout nouveau donneur inscrit sur le registre national apporte une chance supplémentaire de guérison à un patient.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="px-4">
                                <h5 class="fw-bold text-success">L’EFS et l’agence de biomédecine comptent sur vous !</h5>
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
                        <h4 class="fw-bold text-center">Don du sang</h4><span class="text-700 text-center d-block"></span>
                    </div>
                    <div class="card-body mx-auto">
                        <ul class="list-unstyled mb-4">
                            <li class="text-700 py-2 text-secondary" style="text-align: center">Sauvez des vies</li>
                            <li class="text-700 py-2 text-secondary" style="text-align: center">1 562 086 donneurs en 2020 </li>
                            <li class="text-700 py-2 text-secondary" style="text-align: center">18 ans minimum</li>
                            <li class="text-700 py-2 text-secondary"style="text-align: center">Carte d'identité obligatoire </li>
                        </ul>
                        <div class="d-flex flex-column"> <a class="btn btn-lg btn-primary rounded-pill mb-3" href="#">Prendre Rendez-vous</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card shadow-lg mb-4">
                    <div class="card-header border-bottom-0 pt-7 pb-5">
                        <div class="d-flex justify-content-center"></div>
                        <h4 class="fw-bold text-center">Don de la moelle osseuse</h4><span class="text-700 text-center d-block"></span>
                    </div>
                    <div class="card-body mx-auto">
                        <ul class="list-unstyled mb-4">
                            <li class="text-700 py-2 text-secondary"style="text-align: center">Sauvez des vies</li>
                            <li class="text-700 py-2 text-secondary"style="text-align: center">20 000 Donneurs par an</li>
                            <li class="text-700 py-2 text-secondary"style="text-align: center">18 ans minimum</li>
                            <li class="text-700 py-2 text-secondary"style="text-align: center">Carte d'identité obligatoire </li>
                        </ul>
                        <div class="d-flex flex-column"> <a class="btn btn-lg btn-primary rounded-pill mb-3" href="#">Prendre rendez-vous</a></div>
                    </div>
                </div>
            </div>

            <h6 class="fw-bold fs-4 display-3 lh-sm mb-3"id="centresdedons"style="text-align: center">Nos centres de don</h6>
            <iframe src="https://arcg.is/y5qze" style="width: 1100px; height: 500px" ></iframe>

        </div>
        </div>

        <section class="py-8" >
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 text-center mb-3">
                        <h6 class="fw-bold fs-4 display-3 lh-sm mb-3" id="faq">Foire aux questions</h6>
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
                                    <div class="accordion-body bg-100 " >La législation impose la présentation systématique d’une pièce d’identité pour chaque personne se présentant sur une collecte pour donner son sang. Le carnet de santé est facultatif.
                                        Pour les donneurs réguliers, la carte de donneur est acceptée, ainsi qu’une carte de transport ou une carte vitale.</div>
                                </div>
                                <div style="margin-bottom: 100px">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
            @include("components.footer")
    </main>




@endsection
