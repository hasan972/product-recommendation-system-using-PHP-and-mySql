<?php 
 
 if(isset($_GET['id']))
 {
     $_SESSION['id']=$id;
 }
include("header.php");
include("db.php");

$flag=0;

if (isset($_POST['submit']))
{
   $result= mysqli_query($con,"insert into users(username) values('$_POST[username]')");
   if($result)
   {
      $flag=1;
   }

}

?>


<div class="container">
<div class="panel panel-default">
    <div class="panel-heading">
        <h2>
        <a class="btn btn-success" href="add.php">Add Products</a>
        <a class="btn btn-info pull-right" href="index.php"> Back</a>
        </h2>
    </div>
<?php if($flag){ ?>
<dic class="btn alert-success">User successfully inserted in the database</div>

<?php } ?>
    

<div class="panel-body">
<form action="add_products.php" method="post">
    <div class="form-group">
        <label for="username" >Products Name</label>
        <input type="text" name="products_name" id="products_name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="username" >Previous Purchases / Product Looked</label>
        <input type="number" name="number" id="number" class="form-control" required>
    </div>
    <div class="form-group">
        <input  type="submit" name="submit" value="submit" class="btn btn-primary">
    </div>
</form>
</div>
</div>
</div>