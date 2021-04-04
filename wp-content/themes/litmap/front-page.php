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
                <div class="region-map__frame" id="map-frame" style="width: 100%; height: 500px;"></div>
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

</main>

<?php get_footer(); ?>
