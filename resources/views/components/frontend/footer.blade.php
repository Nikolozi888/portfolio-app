<footer class="footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4">
                @php
                    $info = App\Models\ContactInfo::first();
                    $addressInfo = App\Models\AddressInfo::first();
                    $socialInfo = App\Models\SocialInfo::first();
                @endphp

                @if ($info)
                    <div class="footer__widget">
                        <div class="fw-title">
                            <h5 class="sub-title">{{ $info->title }}</h5>
                            <h4 class="title">+{{ $info->number }}</h4>
                        </div>
                        <div class="footer__widget__text">
                            <p>{{ $info->description }}</p>
                        </div>
                    </div>
                @endif

            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                @if ($addressInfo)
                    <div class="footer__widget">
                        <div class="fw-title">
                            <h5 class="sub-title">{{ $addressInfo->title }}</h5>
                            <h4 class="title">{{ $addressInfo->country }}</h4>
                        </div>
                        <div class="footer__widget__address">
                            <p>{{ $addressInfo->description }}</p>
                            <a href="#" class="mail">{{ $addressInfo->email }}</a>
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">
                @if ($socialInfo)
                <div class="footer__widget">
                    <div class="fw-title">
                        <h5 class="sub-title">{{ $socialInfo->name }}</h5>
                        <h4 class="title">{{ $socialInfo->title }}</h4>
                    </div>
                    <div class="footer__widget__social">
                        <p>{{ $socialInfo->description }}</p>
                    </div>
                </div>
                @endif
            </div>
        </div>
        <div class="copyright__wrap">
            <div class="row">
                <div class="col-12">
                    <div class="copyright__text text-center">
                        <p>Copyright @ Theme_Pure 2021 All right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>