<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Capture Photo</title>
    <?php include 'includes/header.php'?>
    <?php include 'includes/script.php'?>
    <script src="../assets/webcam.js"></script>
    <style type="text/css">
        #results { padding:20px; border:1px solid; background:#ccc; }
        .container {margin-top: 10%; }
    </style>
</head>
<body>

<div class="wrapper">
    <section class="container" >
        <form>
            <div class="row">
                <div class="col-md-6 align-content-center">
                    <div id="my_camera"></div><br>
                    <input type="button" class="btn btn-info" value="Take Photo" onClick="return take_snapshot()">
                    <input type="hidden" name="image" class="image-tag">
                    <?php if(isset($_GET['stud'])){?>
                    <input type="text" name="stud" value="yes" hidden>
                    <input type="text" name="emp" value="no" hidden>
                    <input type="text" name="id_stud" value="<?php echo $_GET['id']; ?>" hidden>
                    <input type="text" name="id_emp" value="<?php echo $_GET['id_2']; ?>" hidden>
                    <?php }elseif(isset($_GET['emp'])){?>
                    <input type="text" name="id_emp" value="<?php echo $_GET['id']; ?>" hidden>
                    <input type="text" name="emp" value="yes" hidden>
                    <input type="text" name="stud" value="no" hidden>
                    <?php } ?>
                </div>
                <div class="col-md-6 align-content-center">
                    <br>
                    <div id="results"></div><br>
                    <input type="button" class="btn btn-info" value="Upload" >
                </div>
            </div>
        </form>
    </section>
<?php include 'includes/footer.php'?>
</div>



<script language="JavaScript">

    Webcam.set({

        width: 400,

        height: 300,

        image_format: 'jpeg',

        jpeg_quality: 90

    });

  

    Webcam.attach( '#my_camera' );

  

    function take_snapshot() {

        Webcam.snap( function(data_uri) {

            $(".image-tag").val(data_uri);

            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';

        } );

    }

</script>
</body>
</html>