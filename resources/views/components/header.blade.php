@php
    $title = 'Hemos dicho mutuamente... ¡SÍ! Así que esperamos que tú también lo hagas y nos acompañes a ser testigos de nuestra historia de amor';
    $date = '02-11-2024';
    $logo = [
        'url' => asset('images/Logo_VC.png'),
        'alt' => 'Logo Victor Darlenys',
    ];
    $image_bg = [
        'url' => asset('images/Header-1.jpg'),
        'alt' => 'Logo Victor Darlenys',
    ];
@endphp

<div class="header">
    <div class="header__container container ">
        @if (isset($title) && !empty($title))
            <h1 class="header__title">{{ $title }}</h1>
        @endif
        @if (isset($logo) && !empty($logo))
        <img src="{{ $logo['url'] }}" alt="{{ $logo['alt'] }}" class="header__logo">
        @endif
        @if (isset($date) && !empty($date))
            <p class="header__date">{{ $date }}</p>
            <img src="{{asset('/images/icon-header.png')}}" alt="icon header">
        @endif
    </div>
    @if (isset($image_bg) && !empty($image_bg))
        <picture class="header__picture">
            <img src="{{ $image_bg['url'] }}" alt="{{ $image_bg['alt'] }}" class="header__bg">
        </picture>
    @endif
</div>
