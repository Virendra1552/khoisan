<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<style>
    body {
        color: black;
        margin: 0;
        padding: 0;
    }

    .block1 {
        width: 20.3%;
        height: 910px;
        background-color: #ffc527;

    }

    .block2 {
        width: auto;
        height: 100px;
        margin-left: 0px;
        background-color: black;

    }

    img {
        padding-top: 25px;
        margin-left: 45px;
        height: 85px;
    }

    .bg {
        background-color: black;
        height: 100px;
        width: 300px;
        margin-left: 450px;


    }


    .block3 {
        margin-left: 280px;
        margin-top: -930px;
        background-color: white;
   

    }

    .sub-block {
        color: block;
        padding: 10px;
        text-align: center;
        padding-top: 40px;
    }

    tr,
    th {
        color: black;
    }

    td {
        font-size: larger;
        /* font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
    }

    tr {
        font-size: larger;
        color: black;
        font-size: 15px;
        font-family: californiyafb;

    }

    .report_heading {
        color: black;
        text-align: center;
        margin-top: 20px;


    }

    .cardlayout {
        margin-left: 250px;
        margin-top: 50px;
        width: 500px;

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

<div>
    <div class="block1">
        <div class="sub-block">
            <h1>Admin Pannel</h1>


            <button type="button" class="btn btn-warning mt-5" style="border:1px solid black" onclick="recordShow()"
                id="recbutton">Records</button>&nbsp;&nbsp;
            <button type="button" class="btn btn-warning mt-5" style="border:1px solid black"
                onclick="profileShow()">User
                Profile</button>


        </div>
    </div>

    <div class="block3">
        <div class="block2">
            <div class="bg"><img src="images/logo.png" alt="logo"></div>

        </div>

        <!-- demo card  -->
        <div class="cardlayout" id="part1">
            <div class="card mb-3" style="border: solid 2px black;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="images/khoisan-meta-image.jpg" class="img-fluid rounded-start" alt="profile image" style="margin-top: 20px;" >
                    </div>
                    <div class="col-md-8" style="padding-left: 50px; margin-top: -7px;" >
                        <div class="card-body" style="margin: 10px;">
                            Username:<br /> <input type="Text"><br />
                            Email: <br /><input type="Email"><br />
                            Phone: <br /><input type="mobile"><br />

                        </div>
                    </div>
                </div>
            </div>
        </div>

       <div id="part2">
            <h2 class="report_heading">User Managements</h2>
            <table id="example" class="display" style="width:100%; border-color:black;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
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
    </div>


</div>
<script>
    document.getElementById("part2").style.display = "none";

    // record show function 
    function recordShow() {
        document.getElementById("part2").style.display = "block";
        document.getElementById("part1").style.display = "none";
    }

    // profile show function 
    function profileShow() {
        document.getElementById("part1").style.display = "block";
        document.getElementById("part2").style.display = "none";
    }



</script>
<