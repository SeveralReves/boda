@php
    $quote = [
        'text' =>
            'La belleza del amor fiel al pacto entre Cristo y su Iglesia brilla en su máximo esplendor cuando solo Cristo la sustenta.',
        'name' => 'Jhon Pipper',
    ];
    $date = '02/11/2024'
@endphp

<section class="quote_date">
    <div class="container centered">
        <div class="quote_date__quote">
            <p class="quote_date__quote--text">{{$quote['text']}}</p>
            <p class="quote_date__quote--name">{{$quote['name']}}</p>
        </div>
        <div class="quote_date__date">
            <h2 class="quote_date__date--title">
                02 Noviembre 2024
            </h2>

            <div id="date-app">
                <date-component :date="{{ json_encode($date) }}"></date-component>
            </div>
        </div>
    </div>
</section>
