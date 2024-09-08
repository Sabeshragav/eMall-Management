<?php
include("server.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dress Manager</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="/project_EMall/src/access.css">
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-12">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table id="tableHeadings" class="table table-bordered">
       <thead><tr><th>Customer ID</th>

         <th>Customer Name</th>
         <th>Mobile Number</th>
         <th>Item Purchased</th>
         <th>MRP (in Rs.)</th>
         <th>Quantity</th>
         <th>Total Price (in Rs.)</th>
    </thead>
    <tbody>
  <?php
      if(is_array($dressFetchData)){      
      $sn=1;
      foreach($dressFetchData as $data){
    ?>
      <tr>
      <td><?php echo $data['customer_id']??''; ?></td>
      <td><?php echo $data['customer_name']??''; ?></td>
      <td><?php echo $data['mobile_number']??''; ?></td>
      <td><?php echo $data['item_purchased']??''; ?></td>
      <td><?php echo $data['MRP']??''; ?></td>
      <td><?php echo $data['quantity']??''; ?></td>
      <td><?php echo $data['total_price']??''; ?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $dressFetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>


<!-- remove button section -->
   
   <div class="removeBox">   
<form action="dress_admin_access.php" method="post">
    <div>
      <h1>Remove</h1>
    </div>
    <div>
    <input type="number" placeholder="Customer ID" name="dressToRemove">
    <input type="submit" class="removeBtn" name="dressRemoveCustomer" value="remove">
    </div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>