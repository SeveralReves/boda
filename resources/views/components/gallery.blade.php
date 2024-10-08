@php
    $title = 'Galería';
    $text =
        'No me pidas que te deje; ni me ruegues que te abandone. Adonde tú vayas iré, y donde tú vivas viviré. Tu pueblo será mi pueblo y tu Dios será mi Dios. <br> Rut 1:16-17 DHH';
    $images = [
        [
            'url' => asset('images/1.png'),
            'alt' => 'gallery 1',
        ],
        [
            'url' => asset('images/7.png'),
            'alt' => 'gallery 3',
        ],
        [
            'url' => asset('images/5.png'),
            'alt' => 'gallery 5',
        ],
        [
            'url' => asset('images/8.png'),
            'alt' => 'gallery 4',
        ],
        [
            'url' => asset('images/6.png'),
            'alt' => 'gallery 6',
        ],
        [
            'url' => asset('images/4.png'),
            'alt' => 'gallery 6',
        ],
    ];
@endphp

<div class="gallery">

    <div class="container">
        <h2 class="gallery__title title">
            {{ $title }}
        </h2>
        <div class="gallery__grid">
            @foreach ($images as $item)
                <img src="{{ $item['url'] }}" alt="{{ $item['alt'] }}"
                    class="gallery__grid--image image--{{ $loop->index }}">
            @endforeach
        </div>
        <p class="gallery__text">
            {!! $text !!}
        </p>
    </div>
</div>
