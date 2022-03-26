<?php include 'includes/db.inc.php' ?>
<?php include 'includes/user.inc.php' ?>
<?php include 'includes/viewuser.inc.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"> 
     
</head>
<body>
    <div class="container">
        <center>
            <div class="row w-100">
                <div class="col">
                    <h1>Show all data from database using <br >Boostrap Datatable</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="table-wrap">
                        <?php
                            $users = new ViewUser();
                            $users->showAllUsers();                            
                        ?>
                    </div>
                </div>
            </div>
        </center>
    </div>    


<script src="js/jquery-3.3.1.min.js"></script>    
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script  src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/dataTable-script.js"></script>



</body>
</html>
