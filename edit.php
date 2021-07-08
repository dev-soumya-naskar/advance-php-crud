<?php include_once('header.php'); ?>
<?php 
$id = $_GET['id'];
$sql = "select * from users where id='".$id."'";
$objDB->setQuery($sql);
$result = $objDB->selectOne();
//print_r($result);
?>
<center><h1> Edit User </h1></center>
<form action="save.php" method="post">
    <div class="container">
        <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
        <label>First Name : </label>
        <input type="text" placeholder="Enter First Name" name="first_name" value="<?php echo $result['first_name']; ?>" required>
        <label>Last Name : </label>
        <input type="text" placeholder="Enter Last Name" name="last_name" value="<?php echo $result['last_name']; ?>" required>
        <label>Email : </label>
        <input type="text" placeholder="Enter Email" name="email" value="<?php echo $result['email']; ?>" required>
        <label>Phone : </label>
        <input type="text" placeholder="Enter Phone" value="<?php echo $result['phone']; ?>" name="phone" required>
        <button type="submit" name="submit" value="submit">Save</button>
    </div>
</form>
</body>
</html>