<!DOCTYPE html>
<html lang="de">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>OIMS - Anmelden</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center mg-b-20"><img src="../img/logo-black.png"></div>
        <div class="tx-center mg-b-20">CompanyNameHERE</div>


		<!-- log in -->
		<div id="login" style="display: block;">
			<div class="form-group">
			  <input type="text" class="form-control" placeholder="E-Mail">
			</div><!-- form-group -->
			<div class="form-group">
			  <input type="password" class="form-control" placeholder="Passwort">
			  <a href="#" onclick="ShowPassRecovery()" class="tx-info tx-12 d-block mg-t-10">Passwort vergessen?</a>
			</div><!-- form-group -->
			<button type="submit" class="btn btn-info btn-block">Anmelden</button>
			<div class="mg-t-20 tx-center">Noch kein Mitglied? <a href="/#pricing" class="tx-info">Konto erstellen</a></div>
		</div>
		<!-- log in -->
		
		<!-- Passwort vergessen -->
		<div id="Passwort_vergessen" style="display: none;">
			<div class="form-group">
			  <input type="text" class="form-control" placeholder="Firmenname">
			</div><!-- form-group -->
			<div class="form-group">
			  <input type="text" class="form-control" placeholder="E-Mail">
			  <a href="#" onclick="ShowLogIn()" class="tx-info tx-12 d-block mg-t-10">Ich kenne das Passwort</a>
			</div><!-- form-group -->
			<button type="submit" class="btn btn-info btn-block">Bestätigen</button>
		</div>
		<!-- Passwort vergessen -->
		
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->
	
	<script>
		function ShowLogIn() {
			document.getElementById("login").style.display = "block"; 					// show login
			document.getElementById("Passwort_vergessen").style.display = "none"; 		// hide Passwort vergessen
		}
		function ShowPassRecovery() {
			document.getElementById("login").style.display = "none"; 					// hide login
			document.getElementById("Passwort_vergessen").style.display = "block"; 		// show Passwort vergessen
		}
	</script>
  </body>
</html>
