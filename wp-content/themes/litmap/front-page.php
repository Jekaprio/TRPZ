<?php
get_header();
?>

<main>
    <div class="col"></div>
    <div class="col">
        <section class="search"></section>
        <section class="map-container">
            <div class="map-container__row">
                <div class="map" data-map>
                    <div class="region-map__frame" id="map-frame" style="width: 100%; height: 500px;"></div>
                </div>
                <div class="map-sidebar" data-map-sidebar>
                    <div class="map-sidebar__part map-sidebar__view-default">
                        <div class="map-sidebar__title">Інструкція:</div>
                    </div>
                    <div class="map-sidebar__part map-sidebar__view-preview">
                        <div class="map-sidebar__title"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="col"></div>

</main>

<?php get_footer(); ?>
