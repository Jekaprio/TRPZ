<?php
get_header();
?>

<main class="main">
    <section class="filters js-filters">

    </section>

    <section class="map-container">
        <section class="search"></section>
        <section class="map-container">
            <div class="map js-map">
                <div class="map__frame" id="map-frame"></div>
            </div>
        </section>
    </section>

    <section class="map-sidebar js-map-sidebar">
        <div class="map-sidebar__part js-sidebar-part-default">
            <div class="map-sidebar__title">Інструкція:</div>
            <p>
                Наведіть на мітку, щоб переглянути коротку інформацію.
            </p>
            <p>
                Натисніть на мітку, щоб переглянути інформацію повністю.
            </p>
        </div>
        <div class="map-sidebar__part map-sidebar__part_preview js-sidebar-part-preview">
            <div class="map-sidebar__title js-preview-title"></div>
            <p>
                <img src="" alt="" class="preview__image js-preview-image">
            </p>
            <p class="js-preview-excerpt"></p>
            <p>
                <b>Адреса:</b>
                <span class="js-preview-address"></span>
            </p>
        </div>
    </section>

    <section class="item-popup js-item-popup">
        <div class="item-popup__container">
            <div class="item-popup__title js-item-popup-title"></div>
            <div class="item-popup__content">
                <div class="item-popup__close js-item-popup-close">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path d="M437.019 74.98C388.667 26.628 324.379 0 256 0S123.333 26.628 74.981 74.981C26.629 123.333 0 187.62 0 256.001c0 68.38 26.628 132.668 74.98 181.02C123.332 485.371 187.619 512 255.999 512s132.668-26.628 181.02-74.98C485.371 388.667 512 324.38 512 256s-26.629-132.667-74.981-181.02zm-21.213 340.827C373.12 458.492 316.366 482 255.999 482s-117.121-23.508-159.806-66.193C53.507 373.121 30 316.368 30 256.001S53.509 138.88 96.194 96.194C138.88 53.508 195.633 30 256 30s117.12 23.508 159.807 66.193c88.115 88.118 88.115 231.496-.001 319.614z"/>
                        <path d="M368.854 347.642l-91.641-91.641 91.641-91.641c5.857-5.858 5.857-15.355-.001-21.212-5.857-5.858-15.355-5.858-21.213 0L256 234.788l-91.641-91.641c-5.857-5.858-15.355-5.858-21.213 0-5.858 5.858-5.858 15.355 0 21.213l91.641 91.641-91.641 91.641c-5.858 5.858-5.858 15.355 0 21.213 2.929 2.929 6.768 4.393 10.606 4.393 3.839 0 7.678-1.464 10.607-4.393L256 277.214l91.641 91.641c2.929 2.929 6.768 4.393 10.607 4.393s7.678-1.464 10.606-4.393c5.858-5.858 5.858-15.355 0-21.213z"/>
                    </svg>
                </div>
                <div class="item-popup__description js-item-popup-description"></div>
                <img class="item-popup__image js-item-popup-image" src="" alt="">
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
