<!DOCTYPE html>
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="calc.css">
		<title>CGPA CALCULATOR</title>
		<style>img[alt="www.000webhost.com"]{display:none;}</style>
	</head>
	<body class="calcbg">
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
	</script>
	<!--Header-->
	<div id="myModal" class="modal fade">
    <div class="modal-dialog" style="border-radius:30px">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="color:red">IMPORTANT INSTRUCTIONS</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" style="color:black">
                <form>
                    <div class="form-group" style="font-style:italic">
                        <label>1).CALCULATE the CGPA from sem 3 onwards for accurate results with iis.<br>
						<br>2).Consider the project phase-1 as a lab(2 credits).<br>
						<br>3).Arrear subjects need to be mentioned only once if they are cleared or else mention 0 in grade if backlog exist.<br>
						<br>4).The final attempt grade should be entered while calculating arrears.<br>
						<br>5).This is meant for educational purpose only.</label>
                    </div>
                    <div class="form-group">
						<label></label>
                    </div>
					<label onMouseOver="this.style.color='red'"onMouseOut="this.style.color='black'">Copyright @Poondi Harish/2021/CSE</label>
                </form>
            </div>
        </div>
    </div>
</div>
		<section class="container-fluid">
			<section class="row justify-content-center">
				<section class="col-12 col-sn-6 col-md-3">
					<form class="form-grade" action="grade.php" method="POST">
						<img src="peclogo.png" class="h_logo"></img>
						<h1>CGPA CALCULATOR</h1><br>
						<p>TOTAL SUBJECTS:</p>
							<input type="number" min="0" name="total_sub" placeholder='Enter the total subjects' Required><br>
						<p>TOTAL THEORY:</p>
							<input type="number" min="0" name="total_theory" placeholder='Enter total theory subjects'Required><br>
						<p>TOTAL LAB & PROJECTWORK (PHASE 1):</p>
							<input type="number" min="0" name="total_lab" placeholder='Enter total lab subjects and phase 1'Required><br>
						<p>TOTAL ONE CREDIT:</p>
							<input type="number" min="0" name="total_onecredit" placeholder='Enter total one credit subjects'Required><br>
						<p>PROJECTWORK (PHASE 2)</p>
							<input type="number" name="PP2" min="0" max="1" placeholder='Enter 1(if 8th sem)'Required>
							
						<input type="submit" name="submit" value="SUBMIT" Required><br>
						<p>Note: All the fields are required<br>So, Mention '0' if any field not applicable.</p>
					</form>
				</section>
			</section>
		</section>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>