<!DOCTYPE html>
<html>
<head>
	<title>finance application</title>
</head>

<link rel="stylesheet" type="text/css" href="css/fa.css">


<body>

<form id="regForm" action="">

	<h1>Apply For Finance Online</h1>
	<div class="tab">Name:
		<p><input placeholder="First name..." oninput="this.className = '' "></p>
		<p><input placeholder="Last name..." oninput="this.className = '' "></p>
	</div>

	<div class="tab">Name:
		<p><input placeholder="First name..." oninput="this.className = '' "></p>
		<p><input placeholder="Last name..." oninput="this.className = '' "></p>
	</div>

	<div class="tab">Name:
		<p><input placeholder="First name..." oninput="this.className = '' "></p>
		<p><input placeholder="Last name..." oninput="this.className = '' "></p>
	</div>

	<div class="tab">Name:
		<p><input placeholder="First name..." oninput="this.className = '' "></p>
		<p><input placeholder="Last name..." oninput="this.className = '' "></p>
	</div>

	<div style="overflow: auto;">
		<div style="float:right;">
			<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
			<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
		</div>
	</div>

	<div style="text-align: centre;margin-top: 40px;">
		<span class="step"></span>
		<span class="step"></span>
		<span class="step"></span>
		<span class="step"></span>
	</div>











	</form>
	
<script type="text/javascript" src="js/fa.js"></script>
</body>
</html>