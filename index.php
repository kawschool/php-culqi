<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Culqui</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
	
	<div class="container">
		<div class="main">
			<form id="culqi-card-form">

					<div class="field">
				   
					 <div class="control has-icons-left">
						 <input name="amount" id="amount" class="input is-medium" type="text" placeholder="Total de la Compra" required="">
						 <span class="icon is-medium is-left">
							 <i class="fas fa-dollar-sign"></i>
						 </span>
					 </div>
				 </div>

				<div class="field">
				   
				  <div class="control has-icons-left">
				    <input data-culqi="card[email]" id="card[email]" name="email" class="input is-medium" type="email" placeholder="Corre electrónico" required="">
				    <span class="icon is-medium is-left">
				      <i class="fas fa-envelope"></i>
				    </span>
				  </div>
				</div>

				<div class="field">
				  
				  <div class="control has-icons-left">
				    <input data-culqi="card[number]" id="card[number]" name="card_number"  class="input is-medium" type="text" placeholder="Número de Tarjeta" required="">
				    <span class="icon is-medium is-left">
				      <i class="fas fa-credit-card"></i>
				    </span>
				  </div>
				</div>
	 			
	 			<div class="field is-grouped">
					<div class="columns">
						<div class="column">
								<div class="control">
									<input type="text" maxlength="2" data-culqi="card[exp_month]" id="card[exp_month]" name="exp_month"  class="input is-medium"  placeholder="MM" required="">
								</div>
						</div>
						<div class="column">
							<div class="control">
								<input type="text" maxlength="4" data-culqi="card[exp_year]" id="card[exp_year]" name="exp_year" class="input is-medium"  placeholder="YYYY">
							</div>
						</div>
						<div class="column">
							<div class="control">
								<input type="text" maxlength="4" data-culqi="card[cvv]" id="card[cvv]" name="cvv" class="input is-medium"  placeholder="CVV">
							</div>
						</div>
					</div>
				  
				  
				  
				</div>


				<div class="field is-grouped is-center">
				  <div class="control has-text-centered">
				    <button type="submit" class="button is-success is-large">
				    	 <span>COMPLETAR ORDEN</span>
					    <span class="icon is-small">
					      <i class="fas fa-check"></i>
					    </span>
				    </button>
				  </div>
				 
				</div>

				


			</form>	
			<hr>	
			<div class="notification ">
				
				</div>
		</div>
	

	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script src="https://checkout.culqi.com/v2"></script>
    <script type="text/javascript" src="./assets/culqi.js"></script>
</body>
</html>