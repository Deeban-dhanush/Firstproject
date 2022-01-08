<?php 
session_start(); 
?>  
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission form</title>
    <link rel="stylesheet" href="admission.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" ></script>
</head>
<body> 
    <nav>
        <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">SRM</label>
        <ul>
        <li><a href="homepage.html">Home</a></li> 
        <li><a href="about.html">About</a></li> 
        <li><a href="gallery.html">Gallery</a></li> 
        <li><a href="admission.php">Admission Form</a></li>
        <li><a href="contact.html">Contanct</a></li> 
        <li><a href="resources.html">Resources</a></li> 
        </ul>
    </nav>
    <div id="wrapper">
        <div id="align">    
            <h1 align="center">Admission Form</h1><br><br>
        </div> 
        <?php    
            if(isset($_SESSION['status'])) {
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hello!</strong> <?php echo $_SESSION['status']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
                unset($_SESSION['status']);
            }
        ?>  
        <div id="main">       
            <table border="0" cellspacing="0" id="table">
                <td id="td">
                <form name="admission" action="admission1.php" method="post">
                    <br><label> Name:</label>&emsp;<input type="text" name="fullname" id="input" required><br><br>
                    <label> Date of Birth:</label>&emsp;<input type="date" name="dob" id="input" required><br><br>
                    <label> Mail ID:</label>&emsp;<input type="email" name="email_id" id="input" required><br><br>
                    <label> Phone Number:</label>&emsp;<input type="number" name="phone_number" id="input" required><br><br>
                    <label> Address:</label>&emsp;<textarea name="address" cols="22" rows="5" id="input" required></textarea><br><br>
                    <label> PINCODE:</label>&emsp;<input type="text" name="pincode" id="input" required><br><br>
                    <label> Gender:</label>&emsp;<input type="radio" name="gender" value="male" required><span name="gender">&nbsp; Male</span>&nbsp;&nbsp;<input type="radio" name="gender" value="female" required><span name="gender">&nbsp; Female</span>&nbsp;&nbsp;<br><br>
                    <label> City:</label>&emsp;<input type="text" name="city" id="input" required><br><br>
                    <label> State:</label>&emsp;<input type="text" name="state" id="input" required><br><br>
                    <label> Country:</label>&emsp;<input type="text" name="country" id="input" required><br><br>
                    <label> Qualification:</label>  <br>
                    <table border="1" cellspacing="0" id="table1">
                        <tr>
                            <td align="center"><b>S.no.</b></td>
                            <td align="center"><b>Examination</b></td>
                            <td align="center"><b>Group</b></td>
                            <td align="center"><b>Percentage</b></td>
                            <td align="center"><b>Year Of Passing</b></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Class x</td>
                            <td align="center">-</td>
                            <td><input type="text" name="classx_percentage" required></td>
                            <td><input type="text" name="classx_passing" required></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Class xi</td>
                            <td>
                                <select name="group1" required>
                                    <option value="bio">Biology</option>
                                    <option value="comsci">Computer Science</option>
                                    <option value="comapp">Computer Application</option>
                                    <option value="busmath">Business Maths</option>
                                </select>
                            </td>
                            <td><input type="text" name="classxi_percentage" required></td>
                            <td><input type="text" name="classxi_passing" required></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Class xii</td>
                            <td>
                                <select name="group2" required>
                                    <option value="bio">Biology</option>
                                    <option value="comsci">Computer Science</option>
                                    <option value="comapp">Computer Application</option>
                                    <option value="busmath">Business Maths</option>
                                </select>
                            </td>
                            <td><input type="text" name="classxii_percentage" required></td>
                            <td><input type="text" name="classxii_passing" required></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Graduation</td>
                            <td>
                                <select name="group3" required>
                                    <option value="bsc">BSc</option>
                                    <option value="bca">BCA</option>
                                </select>
                            </td>
                            <td><input type="text" name="graduation_percentage" ></td>
                            <td><input type="text" name="graduation_passing" ></td>
                        </tr>
                    </table><br>
                    <label> Course Applying For :</label>&emsp;<input type="radio" name="course" value="bsc" required><span name="course">&nbsp;BSc</span>&nbsp;&nbsp;<input type="radio" name="course" value="bca"required><span name="course">&nbsp;BCA</span>&nbsp;&nbsp;<input type="radio" name="course" value="msc" required><span name="course">&nbsp;MSc</span>&nbsp;&nbsp;<input type="radio" name="course" value="mca" required><span name="course">&nbsp;MCA</span>&nbsp;&nbsp;<br><br>
                    <input type="submit" name="submit" value="Submit" id="sub"><br><br><input type="reset" value="Reset" id="sub"><br><br>
                </form>
                </td>
            </table>  
        </div><br>
        <hr><br>
        <p align="center">&copy; copyright @ 2021. www.deeban.com</p>
    </div>
</body>
</html>
