@php
    $image_bg = [
        'url' => asset('images/invitation.png'),
        'alt' => 'Invitacion Victor Darlenys',
    ];
    $init_hour = 'Hora de Inicio: 6:00PM';
    $text = 'Ser puntual, es la muestra perfecta de amor y respeto hacia los demas.';
@endphp

<section class="invitation">

    <div class="container centered">
        <div class="invitation__card">
            @if (isset($image_bg) && !empty($image_bg))
                <picture class="invitation__card--picture">
                    <img src="{{ $image_bg['url'] }}" alt="{{ $image_bg['alt'] }}" class="invitation__card--img">
                </picture>
            @endif
            <div class="invitation__card--container">
                <div class="invitation__card--header">
                    <svg width="65" height="65" viewBox="0 0 65 65" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M61 23.9311C59.5086 23.9325 58.0786 24.5348 57.024 25.6059C55.9694 26.677 55.3763 28.1293 55.375 29.644V38.5307C55.3771 39.9353 55.8877 41.29 56.8098 42.3367C57.7319 43.3835 59.0008 44.0492 60.375 44.2071V48.0522H50.273C49.7999 48.5291 49.2242 48.8879 48.5914 49.1004C47.9586 49.313 47.2858 49.3734 46.626 49.2771V61.3823C46.626 61.5506 46.6919 61.7121 46.8091 61.8311C46.9263 61.9502 47.0852 62.0171 47.251 62.0171C47.4168 62.0171 47.5757 61.9502 47.693 61.8311C47.8102 61.7121 47.876 61.5506 47.876 61.3823V54.3999H60.376V61.3823C60.376 61.5506 60.4419 61.7121 60.5591 61.8311C60.6763 61.9502 60.8352 62.0171 61.001 62.0171C61.1668 62.0171 61.3257 61.9502 61.443 61.8311C61.5602 61.7121 61.626 61.5506 61.626 61.3823V24.5659C61.6257 24.3974 61.5597 24.236 61.4423 24.117C61.3249 23.998 61.1659 23.9311 61 23.9311ZM33.06 12.9339C33.3018 12.924 33.5393 12.8656 33.7588 12.7621C33.9783 12.6586 34.1755 12.512 34.3391 12.3309C34.5026 12.1497 34.6293 11.9375 34.7118 11.7064C34.7943 11.4753 34.831 11.23 34.8198 10.9844C34.8085 10.7389 34.7497 10.4981 34.6465 10.2757C34.5433 10.0534 34.3978 9.85399 34.2185 9.68895C34.0392 9.52391 33.8295 9.39652 33.6015 9.31408C33.3735 9.23165 33.1317 9.19581 32.89 9.20862L32.202 9.24112L32.17 8.54339C32.1602 8.2978 32.1027 8.0566 32.0008 7.83366C31.8989 7.61072 31.7546 7.41045 31.5762 7.24435C31.3978 7.07825 31.1889 6.94961 30.9614 6.86583C30.7338 6.78204 30.4923 6.74477 30.2505 6.75615C30.0088 6.76753 29.7716 6.82734 29.5527 6.93213C29.3338 7.03693 29.1374 7.18465 28.9749 7.36679C28.8124 7.54894 28.687 7.76191 28.6058 7.99347C28.5247 8.22502 28.4894 8.47059 28.502 8.71605L28.704 13.1391L33.06 12.9339Z"
                            fill="white" />
                        <path
                            d="M39.75 8.03467C40.4404 8.03467 41 7.46628 41 6.76514C41 6.06399 40.4404 5.49561 39.75 5.49561C39.0596 5.49561 38.5 6.06399 38.5 6.76514C38.5 7.46628 39.0596 8.03467 39.75 8.03467Z"
                            fill="white" />
                        <path
                            d="M29.75 20.7573C30.4404 20.7573 31 20.1889 31 19.4878C31 18.7867 30.4404 18.2183 29.75 18.2183C29.0596 18.2183 28.5 18.7867 28.5 19.4878C28.5 20.1889 29.0596 20.7573 29.75 20.7573Z"
                            fill="white" />
                        <path
                            d="M24.75 5.52295C25.4404 5.52295 26 4.95456 26 4.25342C26 3.55228 25.4404 2.98389 24.75 2.98389C24.0596 2.98389 23.5 3.55228 23.5 4.25342C23.5 4.95456 24.0596 5.52295 24.75 5.52295Z"
                            fill="white" />
                        <path
                            d="M17.124 49.3197C16.0353 49.2843 15.0002 48.8314 14.227 48.0522H4.125V44.2071C5.49917 44.0493 6.76815 43.3835 7.69021 42.3368C8.61226 41.29 9.12296 39.9353 9.125 38.5308V29.644C9.12368 28.1293 8.53062 26.677 7.47601 25.6059C6.42141 24.5348 4.99144 23.9325 3.5 23.9312C3.33424 23.9312 3.17527 23.998 3.05806 24.1171C2.94085 24.2361 2.875 24.3976 2.875 24.5659V61.3823C2.875 61.5507 2.94085 61.7121 3.05806 61.8312C3.17527 61.9502 3.33424 62.0171 3.5 62.0171C3.66576 62.0171 3.82473 61.9502 3.94194 61.8312C4.05915 61.7121 4.125 61.5507 4.125 61.3823V54.3999H16.625V61.3823C16.625 61.5507 16.6908 61.7121 16.8081 61.8312C16.9253 61.9502 17.0842 62.0171 17.25 62.0171C17.4158 62.0171 17.5747 61.9502 17.6919 61.8312C17.8092 61.7121 17.875 61.5507 17.875 61.3823V49.2771C17.671 49.3068 17.4651 49.3217 17.259 49.3218L17.124 49.3197Z"
                            fill="white" />
                        <path
                            d="M47.338 48.0503C49.012 48.0035 50.375 46.5451 50.375 44.7982V30.4688C50.3734 29.0718 49.8263 27.7326 48.8537 26.7448C47.8811 25.757 46.5625 25.2013 45.187 25.1997H43.5V20.0678C44.3732 19.9166 45.1657 19.4569 45.7375 18.7699C46.3093 18.0828 46.6237 17.2126 46.625 16.313V11.8696C46.625 11.7013 46.5592 11.5398 46.4419 11.4208C46.3247 11.3017 46.1658 11.2349 46 11.2349H39.75C39.5842 11.2349 39.4253 11.3017 39.3081 11.4208C39.1908 11.5398 39.125 11.7013 39.125 11.8696V16.313C39.1263 17.2126 39.4407 18.0828 40.0125 18.7699C40.5843 19.4569 41.3768 19.9166 42.25 20.0678V25.1997H21V20.0678C21.8732 19.9166 22.6657 19.4569 23.2375 18.7699C23.8093 18.0828 24.1237 17.2126 24.125 16.313V11.8696C24.125 11.7013 24.0592 11.5398 23.9419 11.4208C23.8247 11.3017 23.6658 11.2349 23.5 11.2349H17.25C17.0842 11.2349 16.9253 11.3017 16.8081 11.4208C16.6908 11.5398 16.625 11.7013 16.625 11.8696V16.313C16.6263 17.2126 16.9407 18.0828 17.5125 18.7699C18.0843 19.4569 18.8768 19.9166 19.75 20.0678V25.1997H19.312C17.9366 25.2013 16.6181 25.757 15.6456 26.7448C14.6732 27.7326 14.1263 29.0719 14.125 30.4688V44.7982C14.125 46.5441 15.487 48.0035 17.162 48.0503C17.58 48.064 17.9964 47.9916 18.3861 47.8373C18.7757 47.683 19.1305 47.45 19.429 47.1524C20.039 46.5492 20.375 45.7417 20.375 44.8774V33.4517C20.375 33.2833 20.4408 33.1219 20.5581 33.0028C20.6753 32.8838 20.8342 32.8169 21 32.8169C21.1658 32.8169 21.3247 32.8838 21.4419 33.0028C21.5592 33.1219 21.625 33.2833 21.625 33.4517V44.8774C21.625 46.6274 23.027 48.0513 24.75 48.0513C26.473 48.0513 27.875 46.6274 27.875 44.8774V29.6431C27.875 29.4747 27.9408 29.3133 28.0581 29.1942C28.1753 29.0752 28.3342 29.0083 28.5 29.0083C28.6658 29.0083 28.8247 29.0752 28.9419 29.1942C29.0592 29.3133 29.125 29.4747 29.125 29.6431V44.8774C29.125 46.6274 30.527 48.0513 32.25 48.0513C33.973 48.0513 35.375 46.6274 35.375 44.8774V39.7993C35.375 39.631 35.4408 39.4695 35.5581 39.3505C35.6753 39.2314 35.8342 39.1646 36 39.1646C36.1658 39.1646 36.3247 39.2314 36.4419 39.3505C36.5592 39.4695 36.625 39.631 36.625 39.7993V44.8774C36.625 46.6274 38.027 48.0513 39.75 48.0513C41.473 48.0513 42.875 46.6274 42.875 44.8774V32.1821C42.875 32.0138 42.9408 31.8523 43.0581 31.7333C43.1753 31.6142 43.3342 31.5474 43.5 31.5474C43.6658 31.5474 43.8247 31.6142 43.9419 31.7333C44.0592 31.8523 44.125 32.0138 44.125 32.1821V44.8774C44.125 45.7417 44.461 46.5492 45.071 47.1524C45.681 47.7557 46.485 48.0756 47.338 48.0503ZM38.5 60.7476H34.125V48.8912C33.556 49.1664 32.921 49.3208 32.25 49.3208C31.579 49.3208 30.944 49.1664 30.375 48.8912V60.7466H26C25.8342 60.7466 25.6753 60.8135 25.5581 60.9325C25.4408 61.0515 25.375 61.213 25.375 61.3813C25.375 61.5497 25.4408 61.7112 25.5581 61.8302C25.6753 61.9492 25.8342 62.0161 26 62.0161H38.5C38.6613 62.0096 38.8139 61.9399 38.9257 61.8216C39.0375 61.7034 39.1 61.5458 39.1 61.3819C39.1 61.2179 39.0375 61.0603 38.9257 60.9421C38.8139 60.8238 38.6613 60.7542 38.5 60.7476Z"
                            fill="white" />
                    </svg>
                    <h2 class="invitation__card--title">Wedding Party</h2>
                </div>
                <div class="invitation__card--content">
                    <p class="invitation__card--hour">{{ $init_hour }}</p>
                </div>
                <div class="invitation__card--footer">
                    <p class="invitation__card--text">{{ $text }}</p>
                </div>

            </div>

        </div>
    </div>
</section>
