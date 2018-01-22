    <?php require APPROOT . '/views/inc/header.php'; ?>
    <a href="<?php echo URLROOT; ?>/products" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
    <div class="mt-5"><?php flash('post_message'); ?></div>
    <div class="card card-body bg-light mt-5">
        <h2>Edit User Account</h2>
        <p>Edit your credentials using this from below </p>
        <form enctype="multipart/form-data" action="<?php echo URLROOT; ?>/accounts/index/ <?php echo $_SESSION['user_id']; ?>" method="post">
        <div class="form-group">
            <label for="name">Naam: <sup>*</sup></label>
            <input type="text" name="name" class="form-control form-control-lg
            <?php echo(!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
            <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
        </div>
        <div class="form-group">
            <label for="email">E-mail: <sup>*</sup></label>
            <input type="email" name="email" class="form-control form-control-lg
            <?php echo(!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
            <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
        </div>
                <div class="form-group">
            <label for="voorletters">Voorletter: <sup>*</sup></label>
            <input type="text" name="voorletters" class="form-control form-control-lg
            <?php echo(!empty($data['voorletters_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['voorletters']; ?>">
            <span class="invalid-feedback"><?php echo $data['voorletters_err']; ?></span>
        </div>
        <div class="form-group">
            <label for="tussenvoegsel">Tussenvoegsel: <sup>*</sup></label>
            <input type="text" name="tussenvoegsel" class="form-control form-control-lg
            <?php echo(!empty($data['tussenvoegsel_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['tussenvoegsel']; ?>">
            <span class="invalid-feedback"><?php echo $data['tussenvoegsel_err']; ?></span>
        </div>
        <div class="form-group">
            <label for="achternaam">Achternaam: <sup>*</sup></label>
            <input type="text" name="achternaam" class="form-control form-control-lg
            <?php echo(!empty($data['achternaam_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['achternaam']; ?>">
            <span class="invalid-feedback"><?php echo $data['achternaam_err']; ?></span>
        </div>
        <div class="form-group">
            <label for="adres">Adres: <sup>*</sup></label>
            <input type="text" name="adres" class="form-control form-control-lg
            <?php echo(!empty($data['adres_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['adres']; ?>">
            <span class="invalid-feedback"><?php echo $data['adres_err']; ?></span>
        </div>
        <div class="form-group">
            <label for="postcode">Postcode: <sup>*</sup></label>
            <input type="text" name="postcode" class="form-control form-control-lg
            <?php echo(!empty($data['postcode_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['postcode']; ?>">
            <span class="invalid-feedback"><?php echo $data['postcode_err']; ?></span>
        </div>
        <div class="form-group">
            <label for="woonplaats">Woonplaats: <sup>*</sup></label>
            <input type="text" name="woonplaats" class="form-control form-control-lg
            <?php echo(!empty($data['woonplaats_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['woonplaats']; ?>">
            <span class="invalid-feedback"><?php echo $data['woonplaats_err']; ?></span>
        </div>
        <div class="form-group row">
        <label for="example-date-input" class="col-2 col-form-label">Geboortedatum</label>
        <div class="col-10">
            <input class="form-control" type="date" value="<?php echo $data['geboortedatum']; ?>" id="example-date-input">
        </div>
        </div>

        <input type="submit" class="btn btn-success" value="Submit">
        </form>
    </div>
    <?php require APPROOT . '/views/inc/footer.php'; ?>