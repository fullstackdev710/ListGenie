<!-- Main Wrapper -->
<div class="main-container">
    <?php echo $sidebar; ?>
    <form class="content-section shadow-box mb-5">
        <h5 class="p-3" style="border-bottom: solid 1px #F5F5F5;">
            Search
        </h5>
        <div class="accordion shadow-box m-3" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Available Search Fields
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="container">
                            <div class="row">
                                <?php $check_array = [
                                    'first_name' => 'First Name',
                                    'last_name' => 'Last Name',
                                    'address' => 'Address',
                                    'city' => 'City',
                                    'state' => 'State',
                                    'zip' => 'Zip',
                                    'cell_phone' => 'Cell Phone',
                                    'npx_carrier' => 'Npx Carrier',
                                    'email' => 'Email',
                                    'dob' => 'Dob',
                                    'gender' => 'Gender',
                                    'home_owner_flag' => 'Home Owner Flag',
                                    'home_value' => 'Home Value',
                                    'residence_length' => 'Length of Residence',
                                    'credit_rating' => 'Credit Rating',
                                    'year' => 'Year',
                                    'make' => 'Make',
                                    'model' => 'Model',
                                    'vin' => 'Vin',
                                    'dnc_flag' => 'DNC Flag',
                                ];
                                foreach ($check_array as $key => $value) { ?>
                                    <div class="col-sm-6">
                                        <div class="checkbox">
                                            <label for="<?php echo $key; ?>">
                                                <input type="checkbox" name="<?php echo $key; ?>" id="<?php echo $key; ?>" value="<?php echo $value; ?>" />
                                                <?php echo $value; ?>
                                            </label>
                                        </div>
                                    </div>
                                <?php }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container p-3">
            <div class="row">
                <div class="col-sm-4">
                    <input class="form-control search-field" type="text" id="area_code_field" placeholder="Area Code" aria-label="Area Code">
                </div>
                <?php $check_array = [
                    'first_name' => 'First Name',
                    'last_name' => 'Last Name',
                    'address' => 'Address',
                    'city' => 'City',
                    'state' => 'State',
                    'zip' => 'Zip',
                    'cell_phone' => 'Cell Phone',
                    'npx_carrier' => 'Npx Carrier',
                    'email' => 'Email',
                    'dob' => 'Dob',
                    'gender' => 'Gender',
                    'home_owner_flag' => 'Home Owner Flag',
                    'home_value' => 'Home Value',
                    'residence_length' => 'Length of Residence',
                    'credit_rating' => 'Credit Rating',
                    'year' => 'Year',
                    'make' => 'Make',
                    'model' => 'Model',
                    'vin' => 'Vin',
                    'dnc_flag' => 'DNC Flag',
                ];
                foreach ($check_array as $key => $value) { ?>
                    <div class="col-sm-4" style="display: none;">
                        <input class="form-control search-field" type="text" id="<?php echo $key; ?>_field" placeholder="<?php echo $value; ?>" aria-label="<?php echo $value; ?>">
                    </div>
                <?php }
                ?>
            </div>
        </div>
        <div class="col-auto p-3">
            <button type="button" class="btn btn-primary mb-3 search-btn">Submit</button>
        </div>
        <div class="alert alert-primary search-result d-none" role="alert">

        </div>
    </form>
</div>
<script>
    const ajaxUrl = `<?php echo site_url(); ?>`;
</script>

<script src="<?php echo base_url('/assets/'); ?>js/search.js?ver=<?php echo time(); ?>"></script>