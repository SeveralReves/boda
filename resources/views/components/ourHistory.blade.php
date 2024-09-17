@php
    $title = 'Nuestra Historia';
    $husband = [
        'name' => 'Victor<br>Lozada',
        'text' =>
            "Al escribir este texto, siento que el tiempo vuela, que los momentos increíbles de esa primera mirada, esas primeras risas, y esa vez que me di cuenta que mi mejor amiga, era la mujer que deseaba que fuera mi compañera para toda la vida. En ocasiones, la vida nos sorprende y es algo especial pensar que a pesar de que nos separaba la distancia coincidimos en un momento y sólo eso necesitamos. Es emocionante no sólo pensar en compartir nuestras vidas, sino también nuestros sueños, luchas y alegrías hasta que la muerte nos separe. He sido bendecido con tener a una persona tan única y especial como ella, que me entiende y me valora.",
    ];
    $wife = [
        'name' => 'Darlenys<br>Muttach',
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
        <h2 class="history__title title">{{$title }}</h2>
        <div class="history__container ">
            <article class="history__card husband">
                <h3 class="history__card--title">{!! $husband['name'] !!}</h3>
                <p class="history__card--text">{{ $husband['text'] }}</p>
            </article>
            <img src="{{ $image['url'] }}" alt="{{$image['alt']}}" class="history__card--image">
            <article class="history__card wife">
                <h3 class="history__card--title">{!! $wife['name'] !!}</h3>
                <p class="history__card--text">{{ $wife['text'] }}</p>
            </article>
        </div>
    </div>
</section>
