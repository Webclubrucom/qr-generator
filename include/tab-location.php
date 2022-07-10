<?php
//
// LOCATION
//
if ($_CONFIG['location'] == true) { ?>
    <div class="tab-pane fade <?php if ($getsection === "#location") echo "show active"; ?>" id="location">
        <h4><?php echo getString('location'); ?></h4>
    <?php
    if ($_CONFIG['google_api_key'] == '' || strlen($_CONFIG['google_api_key']) < 10) { ?>
    <p class="lead">Пожалуйста, обратитесь к администратору для установки <strong>Google Api Key</strong> в настройках сайта.<br></p>
<?php 
    } else { ?>
<script src="https://maps.googleapis.com/maps/api/js?key=<?php echo $_CONFIG['google_api_key']; ?>&libraries=places"></script>
        <div style="min-height:350px">
            <div id="latlong">
                <input id="pac-input" class="controls" type="text" placeholder="<?php echo getString('search'); ?>">
                <input type="text" id="latbox" placeholder="<?php echo getString('latitude'); ?>" class="controls" name="lat" readonly>
                <input type="text" id="lngbox" placeholder="<?php echo getString('longitude'); ?>" class="controls" name="lng" readonly>
            </div>
            <div id="map-canvas"></div>
        </div>
<?php 
    } ?>
    </div>
<?php
}
