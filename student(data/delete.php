
<?php
include('connection/config.php');?>
		
		<!-------------------------sidebar------------>

		
		<!--------page-content---------------->
		
		
		   
		   <!--top--navbar----design--------->
<?php include('inc/top-header.php');?>		   
		   
		   <!--------main-content------------->
		

		  	 
			
       <?php
if(isset($_GET['id'])) {
  $id=$_GET['id'];
        
  $query="DELETE FROM student WHERE id='$id'";
  $result=mysqli_query($conn,$query);

  if($result)
  {
    ?>
    <meta http-equiv = "refresh" content = " 0 ; url = manage.php"/>
    <?php
  }
  else
  {
    ?>
     <meta http-equiv = "refresh" content = " 0 ; url = manage.php"/>
    <?php
  }
}

 ?>  
		  

  
		   
			 
			 <!---footer---->
<?php include('inc/footer.php');?>			 
			 
	