
<?php
include('connection/config.php');?>
		
		<!-------------------------sidebar------------>

		
		<!--------page-content---------------->
		
		
		   
		   <!--top--navbar----design--------->
<?php include('inc/top-header.php');?>		   
		   
		   <!--------main-content------------->
		

       <div class="container-fluid  bg-dark">

<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM student WHERE id='$id'";
  $result = mysqli_query($conn, $query);
  // To get only one row data
  $data = $result->fetch_assoc();
  // $title=$data_row['title'];
}
?>
<div class="card bg-dark">
  <h1 class="text-center bg-dark p-3 mw-100"> <span class="text-danger font-weight-bold h1">A RIDE AS </span>
    <span class="text-white font-weight-bold h1"> PHP DATABASE</span>
  </h1>
  <div class="card-header bg-primary ">
    <h3 class="card-title text-white font-weight-bold ml-5 ">Edit operators</h3>
  </div>
  <?php
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $address = $_POST['address'];
    if ($name != ""  && $roll != "" && $address!="") {
      $query = "UPDATE student SET name='$name', roll='$roll', address='$address' WHERE id='$id'";
      $result = mysqli_query($conn, $query);
      // echo"$result";
      if ($result)
  ?>
      <meta http-equiv="refresh" content=" 0 ; url = manage.php" />
  <?php
  } else {
    echo "Update Failed.";
  }
}
  ?>
  <form action="#" method="POST" enctype="multipart/form-data ">
    <div class="card-body bg-secondary">
      <div class="row ">
        <div class="form-group col-md-6">
          <label for="exampleInputEmail1">Name:</label>
          <input type="text" class="form-control" placeholder="Enter name" name="name" value="<?php echo $data['roll']; ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="exampleInputPassword1">Roll</label>
          <input type="text" class="form-control" placeholder="roll" name="roll" value="<?php echo $data['roll']; ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="exampleInputPassword1">Address</label>
          <input type="text" class="form-control" placeholder="address" name="address" value="<?php echo $data['address']; ?>">
        </div>

      </div>
    </div>
</div>
<div class="card-footer">
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</div>
</form>

</div>
		  

  
		   
			 
			 <!---footer---->
<?php include('inc/footer.php');?>			 
			 
	