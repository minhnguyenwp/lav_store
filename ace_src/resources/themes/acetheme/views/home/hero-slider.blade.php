@push('headerstyles')
    <link href="{{ asset('themes/acetheme/assets/css/hero_slider.css') }}" rel="stylesheet" />
@endpush
<div class="hero-slider block-slideshow block-slideshow--layout--with-departments block">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 d-none d-lg-block"></div>
            <div class="col-12 col-lg-9">
                <div class="block-slideshow__body">
                    <div class="owl-carousel">

                        @if (! empty($sliderData))
                            @foreach ($sliderData as $index => $slider)
                                @php
                                    $textContent = str_replace("\r\n", '', $slider['content']);
                                @endphp
                                <a class="block-slideshow__slide" 
                                    @if($slider['slider_path']) href="{{ $slider['slider_path'] }}" @endif>
                                    <div 
                                        class="block-slideshow__slide-image block-slideshow__slide-image--desktop" 
                                        style="background-image: url('{{ url()->to('/') . '/storage/' . $slider['path'] }}')"></div>
                                    <div 
                                        class="block-slideshow__slide-image block-slideshow__slide-image--mobile" 
                                        style="background-image: url('{{ url()->to('/') . '/storage/' . $slider['path'] }}')"></div>
                                    <div class="block-slideshow__slide-content">
                                        <div class="block-slideshow__slide-title">{{$slider['title']}}</div>
                                        @if($textContent)
                                        <div class="block-slideshow__slide-text" 
                                            v-html="'{{ $textContent }}'"></div>
                                        @endif
                                        <div class="block-slideshow__slide-button">
                                            <span class="btn btn-primary btn-lg">Mua ngay</span>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        @else
                            <div class="block-slideshow__slide">
                                <div 
                                    class="block-slideshow__slide-image block-slideshow__slide-image--desktop" 
                                    style="background-image: url('{{ asset('/themes/acetheme/assets/images/slides/slide-2.jpg') }}')"></div>
                                <div 
                                    class="block-slideshow__slide-image block-slideshow__slide-image--mobile" 
                                    style="background-image: url('{{ asset('/themes/acetheme/assets/images/slides/slide-2.jpg') }}')"></div>
                                <div class="block-slideshow__slide-content">
                                    <div class="block-slideshow__slide-title">Big choice of<br>Plumbing products</div>
                                    
                                    <div class="block-slideshow__slide-button">
                                        <span class="btn btn-primary btn-lg">Mua ngay</span>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

