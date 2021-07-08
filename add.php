<?php include_once('header.php'); ?>
<center>
    <h1> Add User </h1>
</center>
<form action="save.php" method="post">
    <div class="container">
        <label>First Name : </label>
        <input type="text" placeholder="Enter First Name" name="first_name" required>
        <label>Last Name : </label>
        <input type="text" placeholder="Enter Last Name" name="last_name" required>
        <label>Email : </label>
        <input type="text" placeholder="Enter Email" name="email" required>
        <label>Phone : </label>
        <input type="text" placeholder="Enter Phone" name="phone" required>
        <button type="submit" name="submit" value="submit">Save</button>
    </div>
</form>
</body>

</html>