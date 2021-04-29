<?php
require 'includes/header.php';
require 'includes/dbhandler.php'
?>

<main >
    <div class = "outer-cover">   
    <link rel="stylesheet" href="styles/profile.css">
    
    <script>
    //this function makes the text boxes used for editing visible to the user.
    function txtBox(input,sbm) {
        document.getElementById(input).className = "show";
        document.getElementById(sbm).className = "sbmshow";
    }
    //allows for profile pic to be changed on click
    function triggered() {
        document.querySelector("#prof-image").click();
    }
    //shows preview of potential profile picture change
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
    //acces database to get profile information
    $sqlpro = "SELECT * FROM profiles WHERE uname='$prof_user';";
    $res = mysqli_query($conn, $sqlpro);
    $row = mysqli_fetch_array($res);
    $photo = $row['profpic']; //path to the profile picture
    $email = $_SESSION['email'];

 ?>
    <div class="inner">
        <div class="card1">
        <div class = uppercard>   
        <h3 style="font-size: 50px;">My Profile</h3>
            <h3 style="font-size: 15px; padding-bottom: 30px;">View and edit your profile information</h3>
            </div> 
            <div class="display">

                <form action="includes/profile-helper.php" method="POST" enctype="multipart/form-data">
                    <div class="photo-class">
                        <h1 class="profTitle"> Profile Photo</h1>
                        <h1 class="tbelow">Click on profile picture to update photo</h1>
                        <img src="<?php echo $photo;?>" alt="profile pic" onclick="triggered()" id="prof-display">

                        <input type="file" name="prof-image" id="prof-image" onchange="preview(this)"
                            class="form-control" style="display: none;">
                    </div>
                    <div>
                        <button type="submit" name="prof-submit" class="show-btn">upload
                            photo</button>
                    </div>
                </form>
            </div>

        </div>

        <div class="profinfo">
            <h1 style="font-size: 30px; padding-bottom: 10px; color: #326273;"> Profile Information</h1>
            <p style="font-size: 15px; color: #326273;"> To update your information: click the update box, <br>type in
                your new information and then click <br> the submit buttom</p>
        </div>
        
        <div class = "display-info">   
            <div class="uname" style="padding-bottom: 5px;font-weight: 400; font-size: 20px">Profile Username:
                <label for="prof-uname" id="uname-style" style=" padding-left: 20px;  font-weight: normal; color: #326273;"><?php echo $prof_user?> </label>
            </div>
            
            <div class="email" style="padding-bottom: 5px;font-weight: 400; font-size: 20px">Email: <label for="email-dis"
                    id="email-style" style=" padding-left: 20px;  font-weight: normal; color: #326273;"><?php echo $row['email']?></label>

                <script>
                //name of classes that the txtBox function will make visible
                var input = "email-update";
                var sbm = "submit"
                </script>

                <form action="includes/profile-helper.php" method="POST">
                    <input class = "show-btn" type="button" name="show-btn" value="Change Email" onclick="txtBox(input,sbm)" />
                    <input class="hide" type="text" name="email-update" id="email-update" value="enter new email" />
                    <input class = "sbm" type="submit" name="submit" id="submit">
                </form>
            </div>
            
            <div class="fname" style="padding-bottom: 5px;font-weight: 400; font-size: 20px">First Name: <label for="fname-dis" id="fname-style" style=" padding-left: 20px;  font-weight: normal; color: #326273;">
                    <?php echo $row['fname']?></label>
                <form action="includes/profile-helper.php" method="POST">

                    <script>
                     //name of classes that the txtBox function will make visible
                    var input2 = "fname-update";
                    var sbm2 = "submitfname"
                    </script>

                    <input class = "show-btn" type="button" name="show-btn" value="Change First Name" onclick="txtBox(input2,sbm2)" />
                    <input class="hide2" type="text" name="fname-update" id="fname-update"
                        value="enter new first name" />
                    <input class = "sbm2" type="submit" name="submitfname" id= "submitfname">
                </form>
                
            </div>
            
           
            <div class="lname" style="padding-bottom: 5px; font-weight: 400; font-size: 20px;">Last Name: <label for="lname-dis" id="lname-style" style=" padding-left: 20px;  font-weight: normal; color: #326273;">
                    <?php echo $row['lname']?></label>
                <form action="includes/profile-helper.php" method="POST">

                    <script>
                     //name of classes that the txtBox function will make visible
                    var input3 = "lname-update";
                    var sbm3 = "submitlname"
                    </script>
                    
                    <input class = "show-btn" type="button" name="show-btn" value="Change Last Name" onclick="txtBox(input3,sbm3)" />
                    <input class="hide3" type="text" name="lname-update" id="lname-update"
                        value="enter new last name" />
                    <input class = "sbm3" type="submit" name="submitlname" id="submitlname">
                </form>

            </div>
            
            <div class="phnum" style="padding-bottom: 5px;font-weight: 400; font-size: 20px">Phone number: <label for="phnum-dis" id="phnum-style" style=" padding-left: 20px;  font-weight: normal; color: #326273;">
                    <?php echo $row['phnum']?></label>
                <form action="includes/profile-helper.php" method="POST">

                    <script>
                     //name of classes that the txtBox function will make visible
                    var input4 = "phnum-update";
                    var sbm4 = "submitphnum"
                    </script>

                    <input class = "show-btn" type="button" name="show-btn" value="Change Phone Number" onclick="txtBox(input4,sbm4)" />
                    <input class="hide4" type="text" name="phnum-update" id="phnum-update" value="ex. 999-999-9999" />
                    <input class = "sbm4" type="submit" name="submitphnum" id= "submitphnum">
                </form>


            </div>
            <div class = buffer>
                this is a buffer for the footer
            </div>
        </div>
    </div>
    </div> 
    
    <?php
    }

    ?>
    <div class="footer">
   
    </div>
</main>