<?php include_once('header.php'); ?>
<?php 
$sql = "select * from users";
$objDB->setQuery($sql);
$result = $objDB->select();

?>
<div class="container">
<?php
if(isset($_SESSION['suss_msg']) && !empty($_SESSION['suss_msg'])){ ?>
    <h2 style="color:green"><?php echo $_SESSION['suss_msg']; ?></h2>
    <?php $_SESSION['suss_msg'] == "";
}
?>
  <table>
    <tr>
      <th>Sr No.</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Action</th>
    </tr>
    <?php 
    $i = 1;
    foreach ($result as $res){ 
        ?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $res['first_name'];?></td>
      <td><?php echo $res['last_name'];?></td>
      <td><?php echo $res['email'];?></td>
      <td><?php echo $res['phone'];?></td>
      <td><a href="edit.php?id=<?php echo $res['id']; ?>">Edit</a> | <a href="save.php?action=delete&id=<?php echo $res['id']; ?>">Delete</a></td>
    </tr>
    <?php $i++;} ?>
  </table>
</div>
</body>

</html>