@php
    $hakkimizda = App\Models\Hakkimizda::find(1);
@endphp

<section id="aboutSection" class="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <ul class="about__icons__wrap">
                    <li>
                        <img class="light" src="assets/img/icons/xd_light.png" alt="XD">
                        <img class="dark" src="assets/img/icons/xd.png" alt="XD">
                    </li>
                    <li>
                        <img class="light" src="assets/img/icons/skeatch_light.png" alt="Skeatch">
                        <img class="dark" src="assets/img/icons/skeatch.png" alt="Skeatch">
                    </li>
                    <li>
                        <img class="light" src="assets/img/icons/illustrator_light.png" alt="Illustrator">
                        <img class="dark" src="assets/img/icons/illustrator.png" alt="Illustrator">
                    </li>
                    <li>
                        <img class="light" src="assets/img/icons/hotjar_light.png" alt="Hotjar">
                        <img class="dark" src="assets/img/icons/hotjar.png" alt="Hotjar">
                    </li>
                    <li>
                        <img class="light" src="assets/img/icons/invision_light.png" alt="Invision">
                        <img class="dark" src="assets/img/icons/invision.png" alt="Invision">
                    </li>
                    <li>
                        <img class="light" src="assets/img/icons/photoshop_light.png" alt="Photoshop">
                        <img class="dark" src="assets/img/icons/photoshop.png" alt="Photoshop">
                    </li>
                    <li>
                        <img class="light" src="assets/img/icons/figma_light.png" alt="Figma">
                        <img class="dark" src="assets/img/icons/figma.png" alt="Figma">
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="about__content">
                    <div class="section__title">
                        <span class="sub-title">01 - Hakkimizda</span>

                        <h2 class="title">{{ $hakkimizda->baslik }}</h2>
                    </div>
                    <div class="about__exp">
                        <div class="about__exp__icon">
                            <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }}" alt="">
                        </div>
                        <div class="about__exp__content">
                            <p>{{ $hakkimizda->kisa_baslik }}</p>
                        </div>
                    </div>
                    <p class="desc">{{ $hakkimizda->kisa_aciklama }}</p>
                    <a href="about.html" class="btn">Download my resume</a>
                </div>
            </div>
        </div>
    </div>
</section>
