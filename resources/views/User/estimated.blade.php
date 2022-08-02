@extends('User.layout.main')
@section('usercontent')
<style>

  html{
	background: 
		linear-gradient(rgba(196, 102, 0, 0.6), rgba(155, 89, 182, 0.6));
}


/*form styles*/
#msform {

	margin: 50px auto;
	text-align: center;
	position: relative;
}
#msform fieldset {
	background: white;
	border: 0 none;
	border-radius: 3px;
	box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
	padding: 20px 30px;
	box-sizing: border-box;
	width: 80%;
	margin: 0 10%;
	
	/*stacking fieldsets above each other*/
	position: relative;
}
/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
	display: none;
}
/*inputs*/
#msform input, #msform textarea {
	padding: 15px;
	border: 1px solid #ccc;
	border-radius: 3px;
	margin-bottom: 10px;
	width: 100%;
	box-sizing: border-box;
	font-family: montserrat;
	color: #2C3E50;
	font-size: 13px;
}
/*buttons*/
#msform .action-button {
	width: 100px;
	background: #27AE60;
	font-weight: bold;
	color: white;
	border: 0 none;
	border-radius: 1px;
	cursor: pointer;
	padding: 10px 5px;
	margin: 10px 5px;
}
#msform .action-button:hover, #msform .action-button:focus {
	box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
	font-size: 15px;
	text-transform: uppercase;
	color: #2C3E50;
	margin-bottom: 10px;
}
.fs-subtitle {
	font-weight: normal;
	font-size: 13px;
	color: #666;
	margin-bottom: 20px;
}
/*progressbar*/
#progressbar {
	margin-bottom: 30px;
	overflow: hidden;
	/*CSS counters to number the steps*/
	counter-reset: step;
}
#progressbar li {
	list-style-type: none;
	color: white;
	text-transform: uppercase;
	font-size: 9px;
	width: 33.33%;
	float: left;
	position: relative;
}
#progressbar li:before {
	content: counter(step);
	counter-increment: step;
	width: 20px;
	line-height: 20px;
	display: block;
	font-size: 10px;
	color: #333;
	background: white;
	border-radius: 3px;
	margin: 0 auto 5px auto;
}
/*progressbar connectors*/
#progressbar li:after {
	content: '';
	width: 100%;
	height: 2px;
	background: white;
	position: absolute;
	left: -50%;
	top: 9px;
	z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
	/*connector not needed before the first step*/
	content: none; 
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before,  #progressbar li.active:after{
	background: #27AE60;
	color: white;
}

</style>
<section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 text-black">

          <form id="msform">
            <!-- fieldsets -->
            <fieldset>
              <h2 class="fs-title">LET'S GET STARTED</h2>
              <h3 class="fs-subtitle">STEP 1 OF 3</h3>
              <div class="row">
              <div class="col-sm-7">
				<div>Your floorplan</div>
				<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                 <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                 <label class="btn btn-outline-primary" for="btnradio1">1 BHK</label>

                 <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                 <label class="btn btn-outline-primary" for="btnradio2">2 BHK</label>

                 
				 <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                 <label class="btn btn-outline-primary" for="btnradio3">3 BHK</label>

				 <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                 <label class="btn btn-outline-primary" for="btnradio3">+3 BHK</label>
                 </div>
				
			    <div>Purpose</div>
				<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                 <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                 <label class="btn btn-outline-primary" for="btnradio1">Move In</label>

                 <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                 <label class="btn btn-outline-primary" for="btnradio2">Rent Out</label>

                 <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                 <label class="btn btn-outline-primary" for="btnradio3">Renovet</label>
                </div>
              <!-- <input type="text" name="email" placeholder="Email" />
              <input type="password" name="pass" placeholder="Password" />
              <input type="password" name="cpass" placeholder="Confirm Password" /> -->
              </div>
              <div class="col-sm-5">
                 <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                    style="width: 185px;" alt="logo">
              </div>
            </div>
              <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset>
              <h2 class="fs-title">TELL US WHAT YOU NEED</h2>
              <h3 class="fs-subtitle">STEP 2 OF 3</h3>
              <div class="row">
                <div class="col-sm-7">
              <input type="text" name="twitter" placeholder="Twitter" />
              <input type="text" name="facebook" placeholder="Facebook" />
              <input type="text" name="gplus" placeholder="Google Plus" />
            </div>
            <div class="col-sm-5">
               <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                  style="width: 185px;" alt="logo">
            </div>
          </div>
              <input type="button" name="previous" class="previous action-button" value="Previous" />
              <input type="button" name="next" class="next action-button" value="Next" />
            </fieldset>
            <fieldset>
              <h2 class="fs-title">Personal Details</h2>
              <h3 class="fs-subtitle">We will never sell it</h3>
              <div class="row">
                <div class="col-sm-7">
				<input type="text" name="email" placeholder="Email" />
              <input type="password" name="pass" placeholder="Password" />
              <input type="password" name="cpass" placeholder="Confirm Password" />		
              <input type="text" name="fname" placeholder="First Name" />
              <input type="text" name="lname" placeholder="Last Name" />
              <input type="text" name="phone" placeholder="Phone" />
              <textarea name="address" placeholder="Address"></textarea>
            </div>
            <div class="col-sm-5">
               <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                  style="width: 185px;" alt="logo">
            </div>
          </div>
              <input type="button" name="previous" class="previous action-button" value="Previous" />
              <input type="submit" name="submit" class="submit action-button" value="Submit" />
            </fieldset>
          </form>

    
      </div>
    </div>
  </div>
</section>

@endsection

