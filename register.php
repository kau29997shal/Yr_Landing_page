<?php 
include"head.php";
 ?>
 <br>
<section id="Register" class="Register">
      <div class="container">
<center><h1>Registration Form</h1></center>
<div class="row">
<!-- <div class="col-"></div> -->
<div class="col-12 col-lg-7">
<div class="container-fluid">
      <div class="instructions">
            <center><h3>Instructions</h3></center>
            <!-- <div class="row">
            </div>
            <div class="row">
            </div>
            <div class="row">
            </div>
            <div class="row">
            </div>
            <div class="row">
            </div>
            <div class="row">
            </div>
            <div class="row">
            </div> -->
            <div class="">
                  <div class="row"><div class="col-1" style="padding-right: 5px;"><img src="star.png" style="width: 20px;"></div><div class="col-11">Take your time to fill all the fields of the form
                  </div>
                  </div>
                  <div class="row"><div class="col-1" style="padding-right: 5px;"><img src="star.png" style="width: 20px;"></div><div class="col-11">Your NAME is not shown anywhere in the public website.
                  </div>
                  </div>
                  <div class="row"><div class="col-1" style="padding-right: 5px;"><img src="star.png" style="width: 20px;"></div><div class="col-11">You are always denoted by the PROFILE ID.
                  </div>
                  </div>
                  <div class="row"><div class="col-1" style="padding-right: 5px;"><img src="star.png" style="width: 20px;"></div><div class="col-11">Your email or profile ID will serve as the LOGIN ID
                  </div>
                  </div>
                  <div class="row"><div class="col-1" style="padding-right: 5px;"><img src="star.png" style="width: 20px;"></div><div class="col-11">Upload your latest photos.
                  </div>
                  </div>
                  <div class="row"><div class="col-1" style="padding-right: 5px;"><img src="star.png" style="width: 20px;"></div><div class="col-11">Upload your biodata.
                  </div>
                  </div>
                  <div class="row"><div class="col-1" style="padding-right: 5px;"><img src="star.png" style="width: 20px;"></div><div class="col-11">Providing maximum details will help us maintain the quality of the profiles
                  </div>
                  </div>
            </div>
      </div>      
</div>
</div>
<div class="col-12 col-lg-5">
      <div class="container-fluid">
            <form>
                  <center><h3>Register Now!</h3></center>
            <div class="row">
                  <label>First Name</label>
                  <input type="text" name="fname">
            </div>
            <div class="row">
                  <label>Middle Name</label>
                  <input type="text" name="mname">
            </div>
            <div class="row">
                  <label>Last Name</label>
                  <input type="text" name="lname">
            </div>
            <div class="row">
                  <label>Email</label>
                  <input type="email" name="e_mail">
            </div>
            <div class="row">
                  <label>Mobile No.</label>
                  <input type="number" name="mon_no">
            </div>
            <div class="row">
                  <label>Gender</label>
                  <input type="radio" name="male" value="male"> Male
                  <input type="radio" name="female" value="female"> Female 
            </div>
            <div class="row">
                  <label>Date Of Birth</label>
                  <input type="date" name="dob">
            </div>
            <div class="row">
                  <label>Religion</label>
                  <select>
                        <option>--select--</option>
                        <option>Hindu</option>
                        <option>--select--</option>
                  </select>
            </div>
            <div class="row">
                  <label>Caste</label>
                  <select>
                        <option>--select--</option>
                        <option>--select--</option>
                        <option>--select--</option>
                  </select>
            </div>
            <div class="row">
                  <label>Country</label>
                  <select>
                        <option>--select--</option>
                        <option>--select--</option>
                        <option>--select--</option>
                  </select>
            </div>
            <div class="row">
                  <label>State</label>
                  <select>
                        <option>--select--</option>
                        <option>--select--</option>
                        <option>--select--</option>
                  </select>
            </div>
            <div class="row">
                  <label>City</label>
                  <select>
                        <option>--select--</option>
                        <option>--select--</option>
                        <option>--select--</option>
                  </select>
            </div>
            <div class="row">
                  <label>Upload Document</label>
                  <input type="file" name="u_doc">
            </div>
            <div class="row">
                  <label>Upload Photo</label>
                  <input type="file" name="u_photo">
            </div>
            <div class="row">
                  <span><input type="checkbox" name="accept_con">I Accept all Terms and Condition</span>
            </div>
            <div class="row">
                  <input type="submit" name="register" value="Register" style="background-color: #eb5d1e; color: #fff;border-style: hidden;">
            </div>
            
            </form>
      </div>

</div>

<!-- <div class="col-1"></div> -->
</div>
</div>
</section>


 <?php 
include"foot.php";
 ?>