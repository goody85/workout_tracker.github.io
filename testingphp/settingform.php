<?php
	session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign-Up Form</title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/settings.css">
</head>

<body>
    <div class="form">
        <div class="tab-content">
            <div id="signup">
                <h1>User Settings</h1>

                <form action="setting.php" method="post">
                    <div class="top-row">
                        <div class="field-wrap">
                            <label>
                               New First Name<span class="req">*</span>
                            </label>
                            <input type="text" required autocomplete="off" name="firstname"/>
                        </div>
						
                        <div class="field-wrap">
                            <label>
                               New Last Name<span class="req">*</span>
                            </label>
                            <input type="text" required autocomplete="off" name="lastname"/>
                        </div>
                    </div>
					
					<br>
					<br>
                    <div class="field-wrap">
                        <label>
                          New  Email Address<span class="req">*</span>
                        </label>
                        <input type="email" required autocomplete="off" name="emailaddress"/>
                    </div>
					
					<br>
					<br>
                    <div class="field-wrap">
                        <label>
                           New Password<span class="req">*</span>
                        </label>
                        <input type="password" required autocomplete="off" name="password1"/>
                    </div>

					<br>
					<br>
                    <div class="field-wrap">
                        <label>
                            Confirm Password<span class="req">*</span>
                        </label>
                        <input type="password" required autocomplete="off" name="password2"/>
                    </div>

					<br>
					<br>
                    <div class="field-wrap">
                        <label>
                          New Gender<span class="req">*</span>
                        </label>
                        <input type="text" required autocomplete="off" name="gender"/>
                    </div>

					<br>
					<br>
                    <div class="mid-row">
                        <div class="field-wrap">
                            <label>
                              New Height: (Inches)<span class="req">*</span>
                            </label>
                            <input type="text" required autocomplete="off" name="height"/>
                        </div>

                        <div class="field-wrap">
                            <label>
                               New Age: (Years)<span class="req">*</span>
                            </label>
                            <input type="text" required autocomplete="off" name="age"/>
                        </div>

                        <div class="field-wrap">
                            <label>
                               New Weight: (Ibs)<span class="req">*</span>
                            </label>
                            <input type="text" required autocomplete="off" name="weight"/>

                        </div>

                    </div>


            </div>

            <!-- DO NOT DELETE MAY BE NEEDED LATER ON DEPENDING HOW THE DATA IS TRANSFERED OVER BY POST -->
            <!--button type="submit" class="button button-block" href="document.location.href='homepage.html';"/>Get Started</button-->
            <!--button type="submit" class="button button-block">Get Started</button-->

					<br>
					<br>
					 <button type="submit" href="document.location.href='homemenu.php'" class="button button-block">Submit</button>

            </form>
        </div>
    </div>
<div>
        <nav class="navbar bottom-nav">
            <table class="bottom-nav">                
                <tr>
                    <td class="bottom-menu" onClick="document.location.href='homemenu.php';"><img class="icons" src="images/profile_icon.PNG"></td>
                    <td class="bottom-menu" onClick="document.location.href='homemenu.php';"><img class="icons" src="images/history_icon.PNG"></td>
                    <td class="bottom-menu" onClick="document.location.href='homemenu.php';"><img class="icons" src="images/home_icon.PNG"></td>
                    <td class="bottom-menu" onClick="document.location.href='homemenu.php';"><img class="icons" src="images/data_icon.PNG"></td>
                    <td class="bottom-menu" onClick="document.location.href='homemenu.php';"><img class="icons" src="images/settings_icon.PNG"></td>
                </tr>
            </table>
        </nav>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
</body>
</html>
