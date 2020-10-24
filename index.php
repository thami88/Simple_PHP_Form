<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

    <style>
        body {
            overflow-y: hidden;
            /* Hide vertical scrollbar */
            overflow-x: hidden;
            /* Hide horizontal scrollbar */
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col" style="background: linear-gradient(to right, #2471A3  0%, #7FB3D5  100%); height: 730px;">
                <div class="jumbotron mt-3" style="color:white; height: 600px; background: linear-gradient(to right,#2471A3  0%, #7FB3D5  100%);">
                    <h1 class="display-4"><b>PHP Basic Data Entry</b></h1>
                    <p class="lead"><b>A small example page to insert some data in to the MySQL database using PHP</b></p>
                    <hr class="my-4">
                </div>
            </div>

            <div class="col mt-5">
                <div class="container mt-5">
                    <form method="post" action="process.php" style="text-align: center; border: 1px;">
                        <div class="form-group">
                            <label for="Name"><i class="fas fa-user-tie"></i> &nbsp; <b>Name</b></label><br>
                            <input type="text" style="text-align:center;" name="user_name" placeholder="Enter Your Name" /><br />
                        </div>
                        <div class="form-group">
                            <label for="Email"><i class="fas fa-at"></i> &nbsp; <b>Email</b></label><br>
                            <input type="email" style="text-align:center;" name="user_email" placeholder="Enter Your Email" /><br />
                        </div>
                        <div class="form-group">
                            <label for="Telephone"><i class="fas fa-phone"></i> &nbsp; <b>Telephone</b></label><br>
                            <input type="text" style="text-align:center;" name="user_tele" placeholder="Enter Your Telephone" /><br />
                        </div>
                        <div class="form-group">
                            <label for="Message"><i class="fas fa-comments"></i> &nbsp; <b>Message</b></label><br>
                            <textarea name="user_text"></textarea><br />
                            <input type="submit" class="btn btn-primary btn-sm m-4" value="Submit" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</body>

</html>