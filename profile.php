<?php
require 'includes/header.php';
require 'includes/dbhandler.php'
?>

<main>
    <link rel="stylesheet" href="styles/profile.css">

    <script>
    function txtBox(input) {
        document.getElementById(input).className = "show";
    }

    function triggered() {
        document.querySelector("#prof-image").click();
    }

    function preview(e) {
        if (e.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.querySelector('#prof-display').setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(e.files[0]);
        }
    }
    </script>

    <?php
if(isset($_SESSION['uid'])){
    //username after login
    $prof_user = $_SESSION['uname'];
    $sqlpro = "SELECT * FROM profiles WHERE uname='$prof_user';";
    $res = mysqli_query($conn, $sqlpro);
    $row = mysqli_fetch_array($res);
    $photo = $row['profpic']; //path to the profile picture
    $email = $_SESSION['email'];


 ?>





    <div class="card1">
        <h3 style="font-size: 50px;">My Profile</h3>
        <h3 style="font-size: 15px; padding-bottom: 30px;">View and edit your profile information</h3>
        <div class="display">
            <form action="includes/profile-helper.php" method="POST" enctype="multipart/form-data">
                <div class="photo-class">
                    <h1 class="profTitle"> Profile Photo</h1>
                    <img src="<?php echo $photo;?>" alt="profile pic" onclick="triggered()" id="prof-display">

                    <input type="file" name="prof-image" id="prof-image" onchange="preview(this)" class="form-control"
                        style="display: none;">
                </div>

                <h1 class="tbelow">Click on profile picture to update photo</h1>


                <div class="form-group">
                    <button type="submit" name="prof-submit" class="btn btn-outline-success btn-sm btn-block">upload
                        photo</button>
                </div>
            </form>
        </div>

    </div>

    <div class="card2">
        <h1 style="font-size: 30px; padding-bottom: 30px; color: #326273;"> Profile Information</h1>
        <div class="uname" style="padding-bottom: 5px;">Profile Username:
            <label for="prof-uname" id="uname-style"><?php echo $prof_user?> </label>
        </div>


        <div class="email" style="padding-bottom: 5px;">Email: <label for="email-dis"
                id="email-style"><?php echo $row['email']?></label>
            <script>
            var input = "email-update";
            </script>
            <form action="includes/profile-helper.php" method="POST">
                <input type="button" name="show-btn" value="Change" onclick="txtBox(input)" />
                <input class="hide" type="text" name="email-update" id="email-update" value="enter new email" />
                <input type="submit" name="submite">
            </form>
        </div>
        <div class="fname" style="padding-bottom: 5px;">First Name: <label for="fname-dis" id="fname-style">
                <?php echo $row['fname']?></label>
            <form action="includes/profile-helper.php" method="POST">
            <script>
            var input = "fname-update";
            </script>    
            <input type="button" name="show-btn" value="Change" onclick="txtBox(input)" />
                <input class="hide2" type="text" name="fname-update" id="fname-update" value="enter new first name" />
                <input type="submit" name="submitfname">
            </form>
        </div>
        <div class="lname" style="padding-bottom: 5px;">Last Name: <label for="lname-dis" id="lname-style">
                <?php echo $row['lname']?></label>
                <form action="includes/profile-helper.php" method="POST">
            <script>
            var input = "lname-update";
            </script>    
            <input type="button" name="show-btn" value="Change" onclick="txtBox(input)" />
                <input class="hide3" type="text" name="lname-update" id="lname-update" value="enter new last name" />
                <input type="submit" name="submitlname">
            </form>
            
        </div>
        <div class="phnum" style="padding-bottom: 5px;">Phone number: <label for="phnum-dis" id="phnum-style">
                <?php echo $row['phnum']?></label>
                <form action="includes/profile-helper.php" method="POST">
            <script>
            var input = "phnum-update";
            </script>    
            <input type="button" name="show-btn" value="Change" onclick="txtBox(input)" />
                <input class="hide3" type="text" name="phnum-update" id="phnum-update" value="ex. 999-999-9999" />
                <input type="submit" name="submitphnum">
            </form>
            
            
            </div>
    </div>



    <?php



}




?>

</main>