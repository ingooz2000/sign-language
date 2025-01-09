<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=No">
    <meta name="description" content="Start your development with Rubic landing page.">
    <meta name="author" content="Devcrud">
    <title>Rubic Landing page | Free Bootstrap 4.1 landing page</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Rubic main styles -->
	<link rel="stylesheet" href="assets/css/rubic.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <nav id="scrollspy" class="navbar page-navbar navbar-dark navbar-expand-md fixed-top" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" href="#"><strong class="text-primary">RU</strong><span class="text-light">BIC</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-dark shadow-none ml-md-4" href="index.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
	
	<section class="section" id="contact">
        <div class="container text-center">
            <h6 class="display-4 has-line">Fake Job Detection </h6>

            <form method="POST" enctype="multipart/form-data">
                <textarea name="text" id="" cols="" rows="4" class="form-control" required placeholder="Description"></textarea>
                <br>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group pb-1">
                            <select name="telecommuting" class="form-control">
							  <option disabled selected value>Telecommuting</option>
							  <option>Yes</option>
							  <option>No</option>
						    </select>           
                        </div>
                        <div class="form-group pb-1">
                            <select  name="logo" class="form-control">
							  <option disabled selected value>Has Company Logo</option>
							  <option>Yes</option>
							  <option>No</option>
						    </select>            
                        </div>
                        <div class="form-group ">
                            <select name="qns" class="form-control">
							  <option disabled selected value>Has Questions</option>
							  <option>Yes</option>
							  <option>No</option>
						    </select> 
                        </div>
						<div class="form-group pb-1">
                            <select name="profile" class="form-control">
							  <option disabled selected value>Missing Company Profile</option>
							  <option>Yes</option>
							  <option>No</option>
						    </select>        
                        </div>
                        <div class="form-group pb-1">
                            <select name="salary" class="form-control">
							  <option disabled selected value>Missing Salary Range</option>
							  <option>Yes</option>
							  <option>No</option>
						    </select>          
                        </div>
                        <div class="form-group ">
                            <select name="title" class="form-control">
							  <option disabled selected value>Title Mention $</option>
							  <option>Yes</option>
							  <option>No</option>
						    </select> 
                        </div>
						<div class="form-group ">
                            <select name="email" class="form-control">
							  <option disabled selected value>Email Link</option>
							  <option>Yes</option>
							  <option>No</option>
						    </select> 
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group pb-1">
                            <select name="phone" class="form-control">
							  <option disabled selected value>Phone Link</option>
							  <option>Yes</option>
							  <option>No</option>
						    </select>          
                        </div>
                        <div class="form-group pb-1">
							<select name="location" class="form-control">
							  <option disabled selected value>Location New</option>
							  <option>US</option>
							  <option>NZ</option>
							  <option>DE</option>
							  <option>GB</option>
							  <option>AU</option>
							  <option>other</option>
							  <option>CA</option>
							  <option>IN</option>
							  <option>na</option>
							  <option>MY</option>
						    </select>         
                        </div>
                        <div class="form-group ">
                            <select name="employ" class="form-control">
							  <option disabled selected value>Employment Type New</option>
							  <option>Other</option>
							  <option>Full-time</option>
							  <option>na</option>
							  <option>Part-time</option>
							  <option>Contract</option>
							  <option>Temporary</option>
						    </select>
                        </div>
						<div class="form-group pb-1">
                            <select name="exp" class="form-control">
							  <option disabled selected value>Required Experience New</option>
							  <option>Internship</option>
							  <option>Not Applicable</option>
							  <option>na</option>
							  <option>Mid-Senior level</option>
							  <option>Associate</option>
							  <option>Entry level</option>
							  <option>Executive</option>
							  <option>Director</option>
						    </select>          
                        </div>
                        <div class="form-group pb-1">
                            <select name="educ" class="form-control">
							  <option disabled selected value>Required Education New</option>
							  <option>na</option>
							  <option>Bachelor's Degree</option>
							  <option>Master's Degree</option>
							  <option>High School or equivalent</option>
							  <option>Unspecified</option>
							  <option>Some College Coursework Completed</option>
							  <option>Vocational</option>
							  <option>Certification</option>
							  <option>Associate Degree</option>
							  <option>Professional</option>
							  <option>Doctorate</option>
							  <option>Some High School Coursework</option>
							  <option>Vocational - Degree</option>
							  <option>Vocational - HS Diploma</option>
						    </select>          
                        </div>
                        <div class="form-group ">
                            <select name="indus" class="form-control">
							  <option disabled selected value>Industry New</option>
							  <option>na</option>
							  <option>Marketing and Advertising</option>
							  <option>Computer Software</option>
							  <option>Hospital & Health Care</option>
							  <option>Online Media</option>
						    </select>
                        </div>
						<div class="form-group ">
                            <select name="func" class="form-control">
							  <option disabled selected value>Function New</option>
							  <option>Marketing</option>
							  <option>Customer Service</option>
							  <option>na</option>
							  <option>Sales</option>
							  <option>Health Care Provider</option>
						    </select>
                        </div>
                    </div>
                </div>
                <input type="submit" name="Submit" class="btn btn-primary btn-block" value="Predict">
            </form>
			
			<?php
			   if(isset($_POST['Submit']))
			   {
				    
					$text=$_POST['text'];
					$telecommuting=$_POST['telecommuting'];
					$logo=$_POST['logo'];
					$qns=$_POST['qns'];
					$profile=$_POST['profile'];
					$salary=$_POST['salary'];
					$title=$_POST['title'];
					$email=$_POST['email'];
					$phone=$_POST['phone'];
					$location=$_POST['location'];
					$employ=$_POST['employ'];
					$exp=$_POST['exp'];
					$educ=$_POST['educ'];
					$indus=$_POST['indus'];
					$func=$_POST['func'];
					
					
					$head="text,telecommuting,has_company_logo,has_questions,N,missing_salary_range,title_mention_$,email_link,phone_link,text_length,location_new,employment_type_new,required_experience_new,required_education_new,industry_new,function_new";
					$data="$text,$telecommuting,$logo,$qns,$profile,$salary,$title,$email,$phone,,$location,$employ,$exp,$educ,$indus,$func";
					echo $data;
					
				$myfile="test.csv";
				$fh=fopen($myfile,'w') or die('canot open file');
				$str="$head\n$data";
				fwrite($fh,$str);
				fclose($fh);



				echo "<h1>OUTPUT</h1><hr>";
				$python = `python test.py`;
				echo "<pre>".$python."</pre>";
					   
				}
				   
			   
			?>
			
        </div>
    </section>
    
	<?php
	include("footer.php");
	?>
	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Rubic js -->
    <script src="assets/js/rubic.js"></script>

</body>
</html>
