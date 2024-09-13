@php
    $title = 'Nuestra Historia';
    $husband = [
        'name' => 'Victor Lozada',
        'text' =>
            "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
    ];
    $wife = [
        'name' => 'Darlenys Muttach',
        'text' =>
            'Mi corazón te pertenece desde el día que vi a Cristo obrar a través de ti. ¡Sí, soy doblemente afortunada! decidí amarte todos los días porque puedo estar segura en tu brazos, confiada de ser yo misma y feliz de vivir una vida a tu lado. ¡Gracias por ser el hombre que ama mis defectos! ¡Caminar contigo de la mano siempre será mi mejor pasatiempo!',
    ];
    $image = [
        'url' => asset('images/&-1.png'), 
        'alt' => '&'
    ];
@endphp

<section class="history">
    <div class="container">
        <h2 class="history__title title">{{$title}}</h2>
        <div class="history__container ">
            <article class="history__card husband">
                <h3 class="history__card--title">{{ $husband['name'] }}</h3>
                <p class="history__card--text">{{ $husband['text'] }}</p>
            </article>
            <img src="{{ $image['url'] }}" alt="{{$image['alt']}}" class="history__card--image">
            <article class="history__card wife">
                <h3 class="history__card--title">{{ $wife['name'] }}</h3>
                <p class="history__card--text">{{ $wife['text'] }}</p>
            </article>
        </div>
    </div>
</section>
