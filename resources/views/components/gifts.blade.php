@php
    $title = 'Regalos';
    $text =
        'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Diam, ipsum erat pretium, tempus. Molestie ornare amet, placerat aliquet orci arcu pretium. Donec sit mauris tortor tortor tempus urna. Amet blandit tincidunt cras magna in nisl lacus. Duis sem nec viverra risus et at lacinia. Tortor sit.';
    $accounts = [
        'binance' => 'Open map',
        'bank' => [
            'title' => 'Pago movil',
            'id' => '28.138.928',
            'phone' => '0412 068 48 44',
            'bank' => 'Mercantil',
        ],
    ];
@endphp

<section class="gifts">
    <span id="tooltip" class="tooltip">Copiado!</span>

    <div class="container centered">
        <h2 class="gifts__title title">{{ $title }}</h2>
        <p class="gifts__text subtitle">
            {{ $text }}
        </p>
        <div class="gifts__grid">
            <article class="gifts__card">
                <h3 class="gifts__card--title">{{ $accounts['bank']['title'] }}</h3>
                <div class="gifts__card--item"><span>C.I. {{ $accounts['bank']['id'] }}</span>
                    <button onclick="copiarTexto({{ json_encode($accounts['bank']['id']) }})">
                        <img src="{{ asset('/images/fi_copy.png') }}" alt="">
                    </button>
                </div>
                <div class="gifts__card--item"><span>Número: {{ $accounts['bank']['phone'] }}</span>
                    <button onclick="copiarTexto({{ json_encode($accounts['bank']['phone']) }})">
                        <img src="{{ asset('/images/fi_copy.png') }}" alt="">
                    </button>
                </div>
                <div class="gifts__card--item"><span>Banco: {{ $accounts['bank']['bank'] }}</span>
                    <button onclick="copiarTexto({{ json_encode($accounts['bank']['bank']) }})">
                        <img src="{{ asset('/images/fi_copy.png') }}" alt="">
                    </button>
                </div>
            </article>
            <article class="gifts__card">
                <h3 class="gifts__card--title">Binance</h3>
                <div class="gifts__card--span">
                    <img src="{{ asset('/images/coins.png') }}" alt="binance">
                    <div class="gifts__card--item">
                        <span>{{ $accounts['binance'] }}</span>
                        <button onclick="copiarTexto({{ json_encode($accounts['binance']) }})">
                            <img src="{{ asset('/images/fi_copy.png') }}" alt="">
                        </button>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<script>
    function copiarTexto(texto) {
        navigator.clipboard.writeText(texto).then(function() {
            console.log('copiado el texto: ', texto);
            mostrarTooltip();
        }).catch(function(error) {
            console.error('Error al copiar el texto: ', error);
        });
    }

    function mostrarTooltip() {
        const tooltip = document.getElementById('tooltip');
        tooltip.classList.add('show-tooltip');

        setTimeout(function() {
            console.log('removido')
            tooltip.classList.remove('show-tooltip');
        }, 1000); // El tooltip se mostrará durante 2 segundos
    }
</script>
