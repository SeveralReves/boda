@php
    $title = 'Galería';
    $text =
        'El verdadero amor crece con las dificultades, el falso, se apaga. Por experiencia sabemos que, cuando soportamos pruebas difíciles por alguien a quien queremos, no se derrumba el amor, sino que crece.';
    $images = [
        [
            'url' => asset('images/gallery-1.png'),
            'alt' => 'gallery 1',
        ],
        [
            'url' => asset('images/gallery-3.png'),
            'alt' => 'gallery 3',
        ],
        [
            'url' => asset('images/gallery-5.png'),
            'alt' => 'gallery 5',
        ],
        [
            'url' => asset('images/gallery-4.png'),
            'alt' => 'gallery 4',
        ],
        [
            'url' => asset('images/gallery-6.png'),
            'alt' => 'gallery 6',
        ],
        [
            'url' => asset('images/gallery-2.png'),
            'alt' => 'gallery 6',
        ],
    ];
@endphp

<div class="gallery">
    <div class="container">
        <h2 class="gallery__title title">
            {{$title}}
        </h2>
        <div class="gallery__grid">
            @foreach ($images as $item)
                <img src="{{$item['url']}}" alt="{{$item['alt']}}" class="gallery__grid--image image--{{$loop->index}}">
            @endforeach
        </div>
        <p class="gallery__text">
            {{$text}}
        </p>
    </div>
</div>
