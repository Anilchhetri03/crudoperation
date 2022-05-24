
<?php
include('connection/config.php');?>
		
		<!-------------------------sidebar------------>

		
		<!--------page-content---------------->
		
		
		   
		   <!--top--navbar----design--------->
<?php include('inc/top-header.php');?>		   
		   
		   <!--------main-content------------->
		
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Files</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        if ($name == "dsuccess") {
    ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>File is deleted successfully.</strong>
            </div>

            <script>
                $(".alert").alert();
            </script>
        <?php
        }

        if ($msg == "derror") {
        ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>File is not deleted successfully.</strong>
            </div>

            <script>
                $(".alert").alert();
            </script>
    <?php
        }
    }
    ?>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <a name="" id="" class="btn btn-primary mb-2" href="add.php" role="button">Add  content</a>
            </div>
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.N.</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $select_query = "SELECT * FROM student";
                        $select_result = mysqli_query($conn, $select_query) or die(mysqli_error($con));
                        $i = 0;
                        while ($data_select = mysqli_fetch_array($select_result)) {
                        
                            $i++;
                        ?>
                            <tr>
                                <td scope="row"><?php echo $i; ?></td>
                                <td scope="row"><?php echo $data_select['name']; ?></td>
                                <td scope="row"><?php echo $data_select['roll']; ?></td>
                               <td scope="row"><?php echo $data_select['address']; ?></td>
                                <td>
                                <a name="" id="" class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $data_select['id']; ?>" role="button">Delete</a>
                                    <a name="" id="" class="btn btn-danger btn-sm" href="edit.php?id=<?php echo $data_select['id']; ?>" role="button">Edit</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

		  	 


  
		   
			 
			 <!---footer---->
<?php include('inc/footer.php');?>			 
			 
	