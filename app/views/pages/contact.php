<?php require APPROOT . '/views/inc/header.php'; ?>
<h1><?php echo $data['title'];  ?></h1>
<p><?php echo $data['description'];  ?></p>
<p>Website gemaakt door: <strong> <?php echo APPVERSION;  ?></strong> en Robin Giel  <?php echo date('Y'); ?></p>
<div class="album py-5 bg-light">
        <div class="container">
    <div class="row">
<?php foreach ($data['winkels'] as $winkels) :?>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?php echo URLROOT .'/img/'. $winkels->winkelImg;?>" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><?php echo $winkels->winkelAdres; ?></p>
                </div>
                <div class="card-body">
                  <p class="card-text"><?php echo $winkels->winkelPostcode; ?></p>
                </div>
                <div class="card-body">
                  <p class="card-text"><?php echo $winkels->winkelVesteging; ?></p>
                </div>
                <div class="card-body">
                  <p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i> +31<?php echo $winkels->winkelPhone; ?></p>
                </div>
           </div>     
        </div>
<?php endforeach;  ?>
    </div> 
    </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>