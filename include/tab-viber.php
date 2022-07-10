<?php
//
// WHATSAPP
//
if ($_CONFIG['viber'] == true) { ?>
    <div class="tab-pane fade<?php if ($getsection === "#viber") echo " show active"; ?>" id="viber">
        <h4>Viber</h4>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label><?php echo getString('country_code'); ?></label>

                    <?php
                    $output = '<select class="custom-select" name="viber_countrycode" required="required">';
                    foreach ($countries as $i => $row) {
                        if ($i == 189) {
                            $output .= '<option value="' . $row['code'] . '" label="' . $row['name'] . '" selected>' . $row['name'] . '</option>\n';
                        } else {
                            $output .= '<option value="' . $row['code'] . '" label="' . $row['name'] . '">' . $row['name'] . '</option>\n';
                        }
                    }
                    $output .= '</select>';
                    echo $output;
                    ?>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="form-group">
                    <label><?php echo getString('phone_number'); ?></label>
                    <input type="number" name="viber_number" placeholder="" class="form-control" required="required">
                </div>
            </div>

        </div>
    </div>
<?php
}
