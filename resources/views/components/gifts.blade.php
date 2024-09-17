@php
    $title = 'Regalos';
    $text =
        'Nuestro mejor regalo será su presencia, y si a pesar de todo desean tener un detalle con nosotros, aquí te dejamos nuestros datos:';
    $accounts = [
        'zelle' => [
            'mail' => 'Thencarlos29@gmail.com',
        ],
        'binance' => [
            'id' => '185687747',
            'mail' => 'Victorlozada411@gmail.com',
        ],
        'bank' => [
            'title' => 'Pago móvil',
            'id' => '28.138.928',
            'phone' => '0412 068 48 44',
            'bank' => 'Mercantil',
        ],
    ];
    $text_2 = 'Si envías tu regalo, envīanos el capture al ';
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
                        <span>{{ $accounts['binance']['id'] }}</span>
                        <button onclick="copiarTexto({{ json_encode($accounts['binance']['id']) }})">
                            <img src="{{ asset('/images/fi_copy.png') }}" alt="">
                        </button>
                    </div>
                </div>
                <div class="gifts__card--item">
                    <span>{{ $accounts['binance']['mail'] }}</span>
                    <button onclick="copiarTexto({{ json_encode($accounts['binance']['mail']) }})">
                        <img src="{{ asset('/images/fi_copy.png') }}" alt="">
                    </button>
                </div>
            </article>
            <article class="gifts__card">
                <h3 class="gifts__card--title">Zelle</h3>
                <div class="gifts__card--item">
                    <span>{{ $accounts['zelle']['mail'] }}</span>
                    <button onclick="copiarTexto({{ json_encode($accounts['zelle']['mail']) }})">
                        <img src="{{ asset('/images/fi_copy.png') }}" alt="">
                    </button>
                </div>
            </article>
        </div>
        <p class="gifts__text_2 subtitle">
            {{ $text_2 }} <a href="http://wa.me/+584120684844" target="_blank" rel="noopener noreferrer">0412-0684844</a>
        </p>
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
