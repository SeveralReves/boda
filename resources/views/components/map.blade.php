@php
    $map =
        'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.6432390554937!2d-67.9389394!3d10.290302299999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e8045000e09f3e1%3A0xb093e6a09983bb0f!2zU2Fsw7NuIExhIE1vbnRlcsOtYSBKYXJkw61u!5e0!3m2!1ses-419!2sus!4v1726539701701!5m2!1ses-419!2sus';
    $title = 'Mapa';
@endphp

<div class="map">
    <div class="container centered">
        <div class="map__header">
            <svg width="38" height="35" viewBox="0 0 38 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M33.434 33.0555H4.3185C2.22173 33.0555 1.33605 32.1596 3.02132 30.91L8.67439 26.7138C9.04953 26.4353 9.50434 26.2849 9.97157 26.2849H27.5642C28.0179 26.2852 28.46 26.4272 28.829 26.6911L34.6995 30.8873C36.4214 32.1177 35.5508 33.0555 33.434 33.0555Z"
                    fill="#1C3941" />
                <path
                    d="M18.3391 1.94458C14.3245 1.94458 11.0702 5.19885 11.0702 9.21345C11.0702 13.2281 16.0071 23.8735 18.3391 23.8735C20.671 23.8735 25.6079 13.2273 25.6079 9.21383C25.6079 5.20036 22.3537 1.94458 18.3391 1.94458ZM18.3391 11.8048C17.8024 11.8048 17.2777 11.6456 16.8314 11.3475C16.3852 11.0493 16.0374 10.6255 15.832 10.1296C15.6266 9.63375 15.5728 9.08813 15.6776 8.56173C15.7823 8.03533 16.0407 7.5518 16.4202 7.17229C16.7997 6.79278 17.2833 6.53433 17.8097 6.42963C18.3361 6.32492 18.8817 6.37866 19.3775 6.58405C19.8734 6.78944 20.2972 7.13725 20.5954 7.58351C20.8936 8.02977 21.0527 8.55443 21.0527 9.09114C21.0527 9.81084 20.7668 10.5011 20.2579 11.01C19.749 11.5189 19.0588 11.8048 18.3391 11.8048Z"
                    fill="#1C3941" />
            </svg>
    
            <h2 class="map__title title">{{ $title }}</h2>
        </div>
        <iframe class="map__iframe" src="{{ $map }}" width="100%" height="450" style="border:0;"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
