    <?php require APPROOT . '/views/inc/header.php'; ?>
    <a href="<?php echo URLROOT; ?>/products" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
    <div class="mt-5"><?php flash('post_message'); ?></div>
    <div class="card card-body bg-light mt-5">
        <h2>View Orders</h2>
    </div>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Winkel</th>
      <th scope="col">Artikel</th>
      <th scope="col">Aantal</th>
      <th scope="col">Naam klant</th>
      <th scope="col">Afgehandeld door</th>
      <th scope="col">Afgehaald</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data['orders'] as $order) :?>
    <tr>
      <th scope="row"><?php echo $order->orderId ?></th>
      <td><?php echo $order->userId ?></td>
      <td><?php echo $order->orderTime ?></td>
      <td>&euro; <?php   
      $details = $this->orderModel->getTotalPrice($order->orderId); 
      foreach($details as $row){
          $result = number_format($row->totalPaid, 2, ',', '');
      }
      echo $result;
      ?></td>
      <td>
      <a class="btn btn-dark pull-right" href="<?php echo URLROOT; ?>/orders/pdf/<?php echo $order->orderId ?>">View PDF<a/>
      <a class="btn btn-success " href="<?php echo URLROOT; ?>/orders/details/<?php echo $order->orderId ?>">View details<a/></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
<?php require APPROOT . '/views/inc/footer.php'; ?>