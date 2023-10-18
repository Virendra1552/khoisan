<!DOCTYPE html>
<html>

<head>

    <title>Userprofile | Khoisan</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">



    <meta charset="utf-8">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url()."images/Khoisan-fav.png"; ?>">



</head>

<style>

.body {
    margin: 0;
    padding: 0;
}

.block1 {
    margin-top: 0px;
    width: 100%;
    height: 80px;
    background-color: black;
    border: solid 2px black;

}

.block2 {
    height: 1000px;
    width: 300px;
    border: solid 2px black;
    background-color: #e2b12bd9;


}

.block3 {
    height: 500px;
    width: 900px;
    margin-left: 450px;
    margin-top: -950px;
}

.user {
    
    margin-top: 10px;
    color: #ffc527;
    font-size: 30px;
}

input {
    height: 30px;
    width: 300px;
}

</style>
<body>
    <div class="block1">
        <center><h1 class="user"><img src="images/logo.png" class="img-fluid rounded-start" alt="..." height="150px" width="150px">
</h1></center>
        <div class="bg"></div>
    </div>
    <div class="block2"> </div>
    <div class="block3">
        <div class="card mb-3" style="border: solid 2px black;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="images/khoisan-meta-image.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        Username:<br/> <input type="Text"><br />
                        Email: <br/><input type="Email"><br />
                        Phone: <br/><input type="mobile"><br />

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
</body>
</html>