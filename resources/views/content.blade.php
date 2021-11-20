@extends('layouts.index')

@section('content')
<!-- header -->
    <div id="accueil" class="container-fluid header" style="margin-top: 75px">
        <div class="row" style="margin-right:0">
            <div class="col-md-6 wrapper_logo">
                <lottie-player src="{{asset('data.json')}}" background="transparent"  speed="1" loop autoplay></lottie-player>
                {{-- <img src="{{asset('img/logo_header.png')}}" alt="logo" width="200px"> --}}
            </div>
            <div class="col-md-6 mobile header-text">
                <h2 class="fc-white bold">&lt;Bienvenue chez Tanora Web/&gt;</h2>
                <h2 class="fc-white">Agence de developpement <br> d'application mobile <br> et de site internet</h2>
                <a href="#" class="btn" > voir nos projets</a>
            </div>
        </div>
    </div>
<!-- header -->

<!-- presentation -->
<div id="presentation" class="container-fluid" style=" background-color:#fff9f5;">
    <div class=" container presentation">
        <p>L'agence Tanora Web est spécialisée dans le developpement d'application mobile et de site
            internet sur-mesure. Nos développeurs porviennent d'écoles reconnues.
        </p>
        <p>Site,internet, application mobile nous travaillons sur des projets digitaux variés depuis 10ans.
            Cette expérience nous permet aujourd'hui une grande polyvalence, et notre équipe de developpeurs
            est en veille constante sur les derniers technologies.
        </p>
        <p>
            Adaptable et force de conseil, l'agence Tanora Web accompagne ses clients avec une approche agile et une vision start-up
        </p>

        <div class="row mt-5 mb-5">
            <div class="col-md-6">
                <div id="app" class="size">
                    <img src="{{asset('img/icon_api.png')}}" alt="api" width="150px" style="margin: 0 auto">
                    <p class="text-center text-uppercase fw-bold">développement <br>d'api</p>
                </div>
            </div>
            <div class="col-md-6">
                <div id="web" class="size">
                    <img src="{{asset('img/icon_web_app.png')}}" alt="api" width="150px" style="margin: 0 auto">
                    <p class="text-center text-uppercase fw-bold">création d'application mobile<br>et de site internet</p>
                </div>
            </div>
        </div>

        <p>Depuis l'essor des smartphones, le mobile est au centre des préoccupations techniques. Les utilisateurs
            souhaitent utiliser des services directement depuis leur telephone. Ces habitudes sont ancrées et doivent être écoutées.
        </p>
        <p>Chez Tanora Web nous choisissons d'apporter un soin particulier aux projets mobiles en développant des applications
            à la pointe des usages et technologies. Notre équipe est formée aux tendances et aux normes d'ergonomie UX(User Expérience)
            et de design UI (User Interface).
        </p>
        <p>Experts en react Native, une technologie developpée par Facebook et soutenue par les pls grands groupes, nous developpons
            vos applications de façon hybride sur les plateformes iOS et Android. Nos développeurs vous conseillerons
            pour mener à bien vos projets et vous orienteront vers des solutions évolutives et performantes.
        </p>

    </div>
</div>
<!-- presenteation -->

<!-- technologie -->
<div id="stack" class="container technologie">
    <h2 class="text-center fw-bold mb-3">Nos Technologies <br> et Languages de Développement</h2>
    <div class="trait mb-3"></div>
    <p class="text-center grey">Ici, nous recevons des expériences immersives, developpons des solutions sur-mesure, et donnons du sens à vos campagnes.</p>
</div>
<div class="container">
    <div class="row mt-5" >
        <div class="col-md-6" style="display: flex; flex-direction:column; justify-content:center">
            <img class="mobile-image" src="{{asset('img/techno.png')}}" alt="" style="max-width:100%; width:80%" >
        </div>
        <div class="col-md-6">
            <p>Depuis l'essor des smartphones, le mobile est au centre des préoccupations techniques. Les utilisateurs
                souhaitent utiliser des services directement depuis leur telephone. Ces habitudes sont ancrées et doivent être écoutées.
            </p>
            <p><span class="fw-bold">Chez Tanora Web</span> nous choisissons d'apporter un soin particulier aux projets mobiles en développant des applications
                à la pointe des usages et technologies. Notre équipe est formée aux tendances et aux<span class="fw-bold"> normes d'ergonomie UX</span>(User Expérience)
                et de design UI (User Interface).
            </p>
            <p><span class="fw-bold">Experts en react Native,</span> une technologie developpée par Facebook et soutenue par les pls grands groupes, nous developpons
                vos applications de façon <span class="fw-bold">hybride sur les plateformes iOS et Android.</span> Nos développeurs vous conseillerons
                pour mener à bien vos projets et vous orienteront vers des solutions évolutives et performantes.
            </p>
        </div>
    </div>

    <div class="grid">
        <img src="{{asset('img/logo_wordpress.png')}}" alt="" width="150px">
        <img src="{{asset('img/logo_symfony.png')}}" alt="" width="150px">
        <img src="{{asset('img/logo_prestashop.png')}}" alt="" width="150px">
        <img src="{{asset('img/logo_mysql.png')}}" alt="" width="150px">
        <img src="{{asset('img/logo_bootstrap.png')}}" alt="" width="150px">
        <img src="{{asset('img/logo_ovh.png')}}" alt="" width="150px">
        <img src="{{asset('img/logo_github.png')}}" alt="" width="150px">
        <img src="{{asset('img/logoshopify.png')}}" alt="" width="150px">
        <img src="{{asset('img/logo_cloudflare.png')}}" alt="" width="150px">
        <img src="{{asset('img/logo_amazon.png')}}" alt="" width="150px">
        <img src="{{asset('img/logo_html.png')}}" alt="" width="150px">
    </div>
</div>
<!-- technologie -->

<!-- contact -->
    <div id="contact" class=" gradient-contact d-flex justify-content-center">
        <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
            <p class="text-center" style="color: white">Nous sommes disponnible à répondre vos questions concernant vos projets digitaux. N'hésitez
                pas à nous contacter, une équipe de professionnelle sera en votre disposition.
            </p>
            <a  href="#contacts" class="btn-contact text-align-center" style=" color: white !important">  CONTACTEZ NOUS</a>
        </div>

        <div class="col-md-4 wrapper_logo">
            <lottie-player src="{{asset('70229-contact-us.json')}}" background="transparent"  speed="1" loop autoplay></lottie-player>
        </div>
    </div>
<!-- contact -->

<div id="service" class="container technologie">
    <h2 class="text-center fw-bold mb-3">Développement d'un projet en détails</h2>
    <div class="trait mb-3"></div>
    <p class="text-center grey">Les différentes étapes d'un developpement d'application mobile et site web.</p>
</div>

<div class="row" style="margin: 0">
    <div class="col-md-6 development"></div>
    <div class="col-md-6 py-3 mobile-padding"  style=" background-color:#fff9f5;">
        <div class="mobile-dev d-flex align-items-center mb-4">
            <svg class="mx-5" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#012f78" class="bi bi-laptop" viewBox="0 0 16 16">
                <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
            </svg>
            <div>
                <h4 class="text-uppercase fw-bold" style="color: #e532b2">stratégie <br>& planification</h4>
                <p>Nous établissonsensemble les grandes <br> lignes du projet sur les plans technques <br> et organisationnels.</p>
            </div>
        </div>

        <div class="mobile-dev d-flex align-items-center mb-4">
            <svg class="mx-5" width="50" height="50" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pager" class="svg-inline--fa fa-pager fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="#012f78" d="M448 64H64a64 64 0 0 0-64 64v256a64 64 0 0 0 64 64h384a64 64 0 0 0 64-64V128a64 64 0 0 0-64-64zM160 368H80a16 16 0 0 1-16-16v-16a16 16 0 0 1 16-16h80zm128-16a16 16 0 0 1-16 16h-80v-48h80a16 16 0 0 1 16 16zm160-128a32 32 0 0 1-32 32H96a32 32 0 0 1-32-32v-64a32 32 0 0 1 32-32h320a32 32 0 0 1 32 32z"></path>
            </svg>
            <div>
                <h4 class="text-uppercase fw-bold" style="color: #e532b2">design ui <br>& ergonomie ux</h4>
                <p>Notre équipe s'occupe de la partie créative <br> et ergonomique, elle dessine les pages <br> de l'application mobile ou site web.</p>
            </div>
        </div>

        <div class="mobile-dev d-flex align-items-center mb-4">
            <svg class="mx-5" width="50" height="50" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-alt" class="svg-inline--fa fa-file-alt fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                <path fill="#012f78" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm64 236c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-64c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12v8zm0-72v8c0 6.6-5.4 12-12 12H108c-6.6 0-12-5.4-12-12v-8c0-6.6 5.4-12 12-12h168c6.6 0 12 5.4 12 12zm96-114.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"></path>
            </svg>
            <div>
                <h4 class="text-uppercase fw-bold" style="color: #e532b2">developpement <br>technique du projet</h4>
                <p>Le travail technique débute, vous êtes <br> informé de l'avancée au cours du <br>développement, les échanges sont formalisés <br> avec nos chefs de projet.</p>
            </div>
        </div>
        <div class="mobile-dev d-flex align-items-center mb-4">
            <svg class="mx-5" width="50" height="50" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clock" class="svg-inline--fa fa-clock fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="#012f78" d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z"></path>
            </svg>
            <div>
                <h4 class="text-uppercase fw-bold" style="color: #e532b2">lancement <br>& monitoring</h4>
                <p>Votre projet est lancé sur les magasins <br> d'applications ou hebergé en ligne! <br>Nous suivons son lancement et nous <br> le peaufinons si besoin.</p>
            </div>
        </div>
    </div>
</div>

{{-- service --}}
<div class="container-fluid" style="background-color: black">
    <div class="service container">
        <h3 class="text-center fw-bold fc-white mb-3">Nos services</h3>
        <p class="text-center fc-white">Les différents services de l'agence Tanora Web</p>
        <div class="d-flex justify-content-evenly mt-5 grid" style="max-width: 1024px !important; margin-bottom:0 !important">
            <div class="d-flex flex-column" style="width: 290px; margin-bottom:75px">
                <svg style="margin: 0 auto; margin-bottom:20px" width='88px' xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 384 512"><!--! Font Awesome Free 6.0.0-beta2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M304 0h-224c-35.35 0-64 28.65-64 64v384c0 35.35 28.65 64 64 64h224c35.35 0 64-28.65 64-64V64C368 28.65 339.3 0 304 0zM192 480c-17.75 0-32-14.25-32-32s14.25-32 32-32s32 14.25 32 32S209.8 480 192 480zM304 64v320h-224V64H304z"/></svg>
                <small class="fc-white fw-bold text-center text-uppercase my-3" style="padding-top: 5px">création d'application mobile</small>
                <small class="text-center fc-white">Votre application mobile a le devoir de suivre les dernières tendances! Nous utilisons pour notre
                    developpement mobile la technologie React Native, utilisée par les plus grands groupes(Facebook, Instagramme, Airbnb,...)
                </small>
            </div>
            <div class="d-flex flex-column mx-5" style="width: 290px; margin-bottom:75px">
                <svg style="margin: 0 auto; margin-bottom:20px" width='145px' xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 640 512"><!--! Font Awesome Free 6.0.0-beta2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M128 96h384v256h64v-272c0-26.38-21.62-48-48-48h-416c-26.38 0-48 21.62-48 48V352h64V96zM624 383.1h-608c-8.75 0-16 7.25-16 16v16c0 35.25 28.75 64 64 64h512c35.25 0 64-28.75 64-64v-16C640 391.2 632.8 383.1 624 383.1z"/></svg>
                <small class="fc-white fw-bold text-center text-uppercase my-3" style="padding-top: 5px">création site internet</small>
                <small class="text-center fc-white">Nous proposons des solutions sur-mesure et optimisées pour la création de
                    votre site internet responsive, basées sur les dernières technologies: Symfony, React, NodeJS et Wordpress
                </del>
                </small>
            </div>
            <div class="d-flex flex-column" style="width: 290px; margin-bottom:75px">
                <svg style="margin: 0 auto; margin-bottom:20px" width='130px' xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 576 512"><!--! Font Awesome Free 6.0.0-beta2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) --><path d="M555.2 256.6L448 215.8V78.95c0-13.53-8.273-25.64-20.76-30.4l-116.8-44.42C303.2 1.377 295.6 0 288 0S272.8 1.377 265.5 4.135L148.8 48.56C136.3 53.31 128 65.42 128 78.95v136.8L20.76 256.6C8.273 261.3 0 273.5 0 287v146c0 13.53 8.273 25.65 20.76 30.4l116.8 44.42C144.8 510.6 152.4 512 160 512s15.23-1.379 22.47-4.135L288 467.7l105.5 40.15C400.8 510.6 408.4 512 416 512s15.23-1.379 22.47-4.135l116.8-44.42C567.7 458.7 576 446.6 576 433V287C576 273.5 567.7 261.3 555.2 256.6zM160 324.5L62.52 292L153.7 257.3l97.07 36.93L160 324.5zM264 425.5l-80 30.44V367.1l80-26.67V425.5zM190.5 84.03l92.08-35.03C284.3 48.34 286.2 48 288 48s3.662 .3359 5.404 .998l92.07 35.03L288 116.5L190.5 84.03zM400 129.8v80.55c-2.166 .5684-4.359 1.003-6.473 1.808L312 243.1V159.1L400 129.8zM416 324.5l-90.79-30.26l97.06-36.93l91.2 34.7L416 324.5zM528 422.4l-88 33.48V367.1l88-29.33V422.4z"/></svg>
                <small class="fc-white fw-bold text-center text-uppercase my-3" style="padding-top: 5px">web design ui, ux</small>
                <small class="text-center fc-white">Nous suivons les meilleures pratiques en terme d'interface et d'expérience utilisateur
                    pour la création du design responsive de votre site internet ou de votre application mobile
                </small>
            </div>
            <div class="d-flex flex-column" style="width: 290px; margin-bottom:75px">
                <svg style="margin: 0 auto;margin-bottom:20px" width='110px' fill="white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="svg-inline--fa fa-search fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path></svg>
                <small class="fc-white fw-bold text-center text-uppercase my-3" style="padding-top: 5px">référencement naturel seo</small>
                <small class="text-center fc-white">Optimisation SEO de votre site internet: référencement naturel et suivi
                    du positionnement sur les moteurs de recherches afin d'avoir une meilleure visibilité.
                </small>
            </div>
            <div class="d-flex flex-column" style="width: 290px; margin-bottom:75px">
                <svg style="margin: 0 auto; margin-bottom:20px" width='140px' fill="white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="mountain" class="svg-inline--fa fa-mountain fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M634.92 462.7l-288-448C341.03 5.54 330.89 0 320 0s-21.03 5.54-26.92 14.7l-288 448a32.001 32.001 0 0 0-1.17 32.64A32.004 32.004 0 0 0 32 512h576c11.71 0 22.48-6.39 28.09-16.67a31.983 31.983 0 0 0-1.17-32.63zM320 91.18L405.39 224H320l-64 64-38.06-38.06L320 91.18z"></path></svg>
                <small class="fc-white fw-bold text-center text-uppercase my-3" style="padding-top: 5px">référencement payant sea</small>
                <small class="text-center fc-white">Elaboration de campagne complète sur Google Ads pour améliorer l'impact
                    de votre business de façon structurelle: stratégie d'annonce, retargeting etc.
                </small>
            </div>
            <div class="d-flex flex-column" style="width: 290px; margin-bottom:75px">
                <svg style="margin: 0 auto; margin-bottom:20px" width='95px' fill="white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="share-alt" class="svg-inline--fa fa-share-alt fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M352 320c-22.608 0-43.387 7.819-59.79 20.895l-102.486-64.054a96.551 96.551 0 0 0 0-41.683l102.486-64.054C308.613 184.181 329.392 192 352 192c53.019 0 96-42.981 96-96S405.019 0 352 0s-96 42.981-96 96c0 7.158.79 14.13 2.276 20.841L155.79 180.895C139.387 167.819 118.608 160 96 160c-53.019 0-96 42.981-96 96s42.981 96 96 96c22.608 0 43.387-7.819 59.79-20.895l102.486 64.054A96.301 96.301 0 0 0 256 416c0 53.019 42.981 96 96 96s96-42.981 96-96-42.981-96-96-96z"></path></svg>
                <small class="fc-white fw-bold text-center text-uppercase my-3" style="padding-top: 5px">publicité social media</small>
                <small class="text-center fc-white">Création des publicité sur les réseaux sociaux Facebook et Instagram. Nous nous occupons également
                    du paramétrage technique.
                </small>
            </div>
            <div class="d-flex flex-column" style="width: 290px">
                <svg style="margin: 0 auto; margin-bottom:20px" width='80px' fill="white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="lightbulb" class="svg-inline--fa fa-lightbulb fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path  d="M96.06 454.35c.01 6.29 1.87 12.45 5.36 17.69l17.09 25.69a31.99 31.99 0 0 0 26.64 14.28h61.71a31.99 31.99 0 0 0 26.64-14.28l17.09-25.69a31.989 31.989 0 0 0 5.36-17.69l.04-38.35H96.01l.05 38.35zM0 176c0 44.37 16.45 84.85 43.56 115.78 16.52 18.85 42.36 58.23 52.21 91.45.04.26.07.52.11.78h160.24c.04-.26.07-.51.11-.78 9.85-33.22 35.69-72.6 52.21-91.45C335.55 260.85 352 220.37 352 176 352 78.61 272.91-.3 175.45 0 73.44.31 0 82.97 0 176zm176-80c-44.11 0-80 35.89-80 80 0 8.84-7.16 16-16 16s-16-7.16-16-16c0-61.76 50.24-112 112-112 8.84 0 16 7.16 16 16s-7.16 16-16 16z"></path></svg>
                <small class="fc-white fw-bold text-center text-uppercase my-3" style="padding-top: 5px">stratégie & conseil</small>
                <small class="text-center fc-white">Notre équipe vous oriete et vous conseille en amont dans votre stratégie
                    digitale ainsi que dans sa mise en oeuvre, tout au long de votre projet
                </small>
            </div>
        </div>
    </div>
</div>
{{-- service --}}

{{-- référence --}}
    <div id="par" class="container technologie">
        <h1 class="d-flex justify-content-center">Partenaire</h1>
        <div class="trait mb-3"></div>
        <p>Nous sommes en étroite collaboration avec l'agence trente douze.<p>
        <div class="d-flex flex-column align-items-center my-5">
            <img src="https://www.trente-douze.fr/wp-content/uploads/2019/02/agence-trente-douze-logo-rose-bleu.png" width="150px" alt="">
            <a class="mt-3 text-decoration-none" href="https://www.trente-douze.fr/">Visitez l'agence trente-douze</a>
        </div>
    </div>
{{-- référence --}}

{{-- footer --}}
<div id="contacts" style="background-image: linear-gradient(90deg,#2b1859,#e532b2); padding:20px 0">
    <p style="color: white; margin:0 !important" class="text-center mt-3">TanoraWeb@gmail.com</p>
    <p style="color: white ; margin:0 !important" class="text-center">2021 @ TanoraWeb - Tous droits reservés - CGU</p>
</div>
{{-- footer --}}

@endsection
