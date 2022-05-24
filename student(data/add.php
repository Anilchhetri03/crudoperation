
<?php
include('connection/config.php');?>
		
		<!-------------------------sidebar------------>

		
		<!--------page-content---------------->
		
		
		   
		   <!--top--navbar----design--------->
<?php include('inc/top-header.php');?>		   
		   
		   <!--------main-content------------->
		
		
		   <main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Add content</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="../index.php"><i class="fa fa-home"></i>Home</a></li>
               
            </ul>
        </div>

        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $roll = $_POST['roll'];            
            $address = $_POST['address'];            

            if( $name != ""){
                $query ="INSERT INTO student (name,roll,address) 
                VALUES ('$name','$roll','$address')";
                $result= mysqli_query($conn, $query);
                if($result){
                  ?>
                      <meta http-equiv = "refresh" content = " 0 ; url =manage.php"/>
            
                      <?php
    }
    else{
      echo ("data is not added");
    }
  }

  else{
    echo(" error");
  }
}
 

?>
      

        <div class="row">
            <!-- Your Profile Views Chart -->
            <div class="col-lg-8 m-b30 ">
                <div class="widget-box">
                    <div class="widget-inner">
                        <form class="edit-profile m-b30" form action="#" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-12">
                                    <div class="form-group col-md-12">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Roll</label>
                                        <input type="text" class="form-control" name="roll" id="" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Address</label>
                                        <input type="text" class="form-control" name="address" id="" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Your Profile Views Chart END-->
        </div>
    </div>
</main>	   
		 


  
		   
			 
			 <!---footer---->
<?php include('inc/footer.php');?>			 
			 
	