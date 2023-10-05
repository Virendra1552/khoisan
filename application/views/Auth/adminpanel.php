<!DOCTYPE html>
<html>

<head>

    <title>User Management</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">

</head>

<style>
     body{
        color: white;
        margin: 0;
        padding: 0;
    }
     .block1{
       
        width: 20.3%;
        height: 910px;
        margin-right:20% ;
        background-color: black;
        
     
    }
    .block2{
        margin-left: 20.5%;
        margin-top: -930px;
        background-color: #ba9626;
        
    }
   
    tr,th{
        color: white;
    }
    td{
        font-size: larger;
        /* font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
    }
    tr{
        font-size: larger;
        color:black;
        font-size: 15px;
        font-family: californiyafb;

    }
    .admin{
        margin-left: 25px;
        padding-top: 25px;

    }
    .report_heading{
        color:black;
        margin-left: 490px;;
        padding:10px;

    }
    .bg
    {
        background-image:url("upload/khoisan-bg.jpg");
        height:200px;
        width: 200px;
        border:solid white;
        background-image:cover;

    }

</style>
<?php
$con = mysqli_connect("localhost", "root", "", "khoisan");
if ($con) {
    // echo 'success';                                                  //short connection file
} else {
    echo 'failed';
}
?>

<body>
    <div class="block1" >
        <h1 class="admin">Admin Control</h1>
           <div class="bg"></div>
    </div>
    <div class="block2">
    <h2 class="report_heading">User Managements</h2>
    <table id="example" class="display" style="width:100%; border-color:black;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>

            <?php
            // include('includes/dbconnection.php');
            $showemps = "SELECT * FROM `register`";
            $showempsrun = mysqli_query($con, $showemps);
            while ($row = mysqli_fetch_array($showempsrun)) {
                ?>
                <tr>
                    <td>
                        <?php echo $row['sr_id']; ?>
                    </td>
                    <td>
                        <?php echo $row['username']; ?>
                    </td>
                    <td>
                        <?php echo $row['password']; ?>
                    </td>
                    <td>
                        <?php echo $row['email']; ?>
                    </td>
                    <td>
                        <?php echo $row['phone']; ?>
                    </td>
                    <td>
                        <?php echo $row['date']; ?>
                    </td>
                </tr>
            <?php } ?>

        </tbody>

    </table>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            });
        });
    </script>
    </div>
    
    


    
</body>

</html>