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
        <div class="map-sidebar__part map-sidebar__view-default">
            <div class="map-sidebar__title">Інструкція:</div>
        </div>
        <div class="map-sidebar__part map-sidebar__view-preview">
            <div class="map-sidebar__title"></div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
