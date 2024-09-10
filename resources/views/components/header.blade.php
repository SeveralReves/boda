@php
    $title = 'Gracias por ser testigos de nuestra unión con Dios.';
    $date = '02 11 2024';
    $logo = [
        'url' => asset('images/Logo_VC.png'),
        'alt' => 'Logo Victor Darlenys',
    ];
    $image_bg = [
        'url' => asset('images/Header.jpg'),
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
        @endif
    </div>
    @if (isset($image_bg) && !empty($image_bg))
        <picture class="header__picture">
            <img src="{{ $image_bg['url'] }}" alt="{{ $image_bg['alt'] }}" class="header__bg">
        </picture>
    @endif
</div>
