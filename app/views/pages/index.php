<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="jumbotron jumbo-fluid text-center">
    <div class="container">
        <h1 class="display-3"><?php echo $data['title']; ?></h1><p><?php echo date('Y'); ?></h1>
        <h3><?php echo $data['description']; ?></h3>
        <img src="<?php echo URLROOT ?>/img/download.jpg" alt="Card image cap">
    </div>

</div>

    <div class="album py-5 bg-light">
        <div class="container">
    <div class="row">
<?php foreach ($data['winkels'] as $winkels) :?>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="<?php echo URLROOT .'/img/'. $winkels->winkelImg;?>" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text"><?php echo $winkels->winkelName; ?></p>
                </div>
           </div>     
        </div>
<?php endforeach;?>
    </div> 
    </div>
    </div>
    <p style="text-md-left"  class="card-text"><?php echo $data['uitleg']; ?></p>
<?php require APPROOT . '/views/inc/footer.php'; ?>
