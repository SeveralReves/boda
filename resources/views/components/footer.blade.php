@php
    $logo = [
        'url' => asset('images/Logo_VC.png'),
        'alt' => 'Logo Victor Darlenys',
    ];
    $image_bg = [
        'url' => asset('images/footer.jpg'),
        'alt' => 'Logo Victor Darlenys',
    ];
@endphp

<footer class="footer">
    <div class="footer__container container ">
        @if (isset($logo) && !empty($logo))
            <img src="{{ $logo['url'] }}" alt="{{ $logo['alt'] }}" class="footer__logo">
        @endif
    </div>
    @if (isset($image_bg) && !empty($image_bg))
        <picture class="footer__picture">
            <img src="{{ $image_bg['url'] }}" alt="{{ $image_bg['alt'] }}" class="footer__bg">
        </picture>
    @endif
</footer>
