@php
    $info = App\Models\MessageInfo::first();
@endphp
<section class="homeContact homeContact__style__two">
    <div class="container">
        <div class="homeContact__wrap">
            <div class="row">
                @if ($info)
                    <div class="col-lg-6">
                        <div class="section__title">
                            <span class="sub-title">07 - Say hello</span>
                            <h2 class="title">{{ $info->title }}</h2>
                        </div>
                        <div class="homeContact__content">
                            <p>{{ $info->description }}</p>
                            <h2 class="mail"><a href="#">{{ $info->email }}</a></h2>
                        </div>
                    </div>
                @endif
                <div class="col-lg-6">
                    <div class="homeContact__form">

                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <input type="text" name="name" placeholder="Enter name*">
                            <input type="email" name="email" placeholder="Enter your mail*">
                            <textarea name="message" id="message" placeholder="Massage*"></textarea>
                            <button type="submit" class="btn">send massage</button>
                        </form>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>