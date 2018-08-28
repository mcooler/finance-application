<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="/rangeslider.min.js"></script>



</head>
<body>






<div class="container" style="margin:auto; width:300px;">
	  

 


	<form oninput="fn_weeklypaymenty()">


		

		<table>
	    <thead>
	      <tr>

	        <th colspan="2"><p>Finance/Loan Calculator</p></th>

	      </tr>
	    </thead>

    <tbody>
      <tr>
        
        <td ><input type="input" id="vprice" placeholder="Vehicle Price"  class="form-control"></td>
        <td ><input type="input" id="cashdepo" placeholder="Cash Deposit / Trade in"  class="form-control"></td>
        
      </tr>

      <tr>
      	<td>
					<select id="loanterm" class="custom-select">
						<option value="6">Loan Term 6 Months</option>
						<option value="12">Loan Term 12 Months</option>
						<option value="24">Loan Term 24 Months</option>
						<option value="36" selected="selected">Loan Term 36 Months</option>
						<option value="48">Loan Term 48 Months</option>
						<option value="60">Loan Term 60 Months</option>
					</select>      		


      	</td>
      	<td>
      		<span>Interest Rate <output id="interest">11.5</output>%:</span><br>
      		<input class="custom-range"  type="range" value="11.5" step="0.1" min="9.5" max="18.5">
      	</td>
      </tr>

       <tr>
      		<td>
			<div>Weekly payment $</div>
			</td>
			<td><div id="Weekly"></div>
			</td>
		</tr>

		<tr>
			<td>
			<div>Monthly payment $</div>
			</td>
			<td>
			<div id="Monthly"></div>
			</td>
      	</tr>


      

      

    </tbody>
    <tfoot>
		
    </tfoot>
  </table>

	</form>
	<form action="https://www.udc.co.nz/car-loans/apply">
	    <input type="submit" value="Apply Finance Now!" / class="btn btn-primary">
	</form>


<script>

	function fn_weeklypaymenty(){

		//var vpricestring =document.getElementById('vprice');
		var vpricestring= document.getElementById("vprice").value;

		var inputloanterm = document.getElementById("loanterm").value;
		var intereststring = document.getElementById("interest").value;
		var cashdepostring = document.getElementById("cashdepo").value;
		

		var x= Number(vpricestring); //vehicle price
		var y= Number(inputloanterm);// loan term
		var z=Number(intereststring);// interesting
		var cd=Number(cashdepostring); //cash deposit

		var Monthlypayment=((x-cd)+(((x-cd)*z)/100))/y;
		Monthlypayment=Monthlypayment.toFixed(2);

		var weeklypaymenty=Monthlypayment*0.2307692307692308;
		weeklypaymenty=weeklypaymenty.toFixed(2);

		var Fortnightlypayment=weeklypaymenty*2;

		document.getElementById("Weekly").innerHTML=weeklypaymenty;
		document.getElementById("Monthly").innerHTML=Monthlypayment;
		
	}

	
    $(function() {
      var output = document.querySelectorAll('output')[0];
  
      $(document).on('input', 'input[type="range"]', function(e) {
        output.innerHTML = e.currentTarget.value;});
  
      $('input[type=range]').rangeslider({
        polyfill: false
        });
      });

</script>







                            <label class="control-label" for="input-quantity">{{ entry_qty }}</label>
							<div class="quantity-box">										
								<input type="text" name="quantity" value="{{ minimum }}" size="2" id="input-quantity" class="form-control" />					
								<input type="button" id="plus" value="&#43;" class="form-control"/>
								<input type="button" id="minus" value="-" class="form-control" />
							</div>
							<button type="button" id="button-cart" data-loading-text="{{ text_loading }}" class="btn"><i class="fa fa-shopping-cart"></i>{{ button_cart }}</button>




</body>
</html>