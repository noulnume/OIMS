<?php
if (isset($_POST['a']) && $_POST['a'] == 'signup')
{
	// add data to database (create new database)
	echo "OK";
	
	exit();
}
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta -->
    <title>OIMS - Konto erstellen</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>


	<div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
	  <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
		<div class="signin-logo tx-center mg-b-20"><img src="../img/logo-black.png"></div>
		
		<!-- STEP 1 -->
		<div id="step1">
			<div class="signin-logo tx-center mg-b-20">Persönliche Informationen</div>
			<div class="form-group">
			  <input type="text" class="form-control" id="Vorname" name="Vorname" placeholder="Vorname">
			</div><!-- form-group -->
			
			<div class="form-group">
			  <input type="text" class="form-control" id="Nachname" name="Nachname" placeholder="Nachname">
			</div><!-- form-group -->

			<div class="form-group">
			  <input type="text" class="form-control" id="Telefon" name="Kontaktrufnummer" placeholder="Kontaktrufnummer">
			</div><!-- form-group -->
			
			<div class="form-group">
			  <input type="text" class="form-control" id="Email" name="Email" placeholder="E-Mail-Adresse">
			</div><!-- form-group -->

			<button class="btn btn-info btn-block" onclick="ShowStep(2)">Weiter</button>

			<div class="mg-t-20 tx-center">Bereits Kunde? <a href="/?anmelden" class="tx-info">Anmelden</a></div>
		</div>
		<!-- STEP 1 -->
		
		<!-- STEP 2 -->
		<div id="step2" style="display: none;">
			<div class="signin-logo tx-center mg-b-20">Rechnungsadresse</div>
			<div class="form-group">
			  <input type="text" class="form-control" id="Adresszeile1" name="Adresszeile1_Firmenname" placeholder="Adresszeile 1 (oder Firmenname)">
			</div><!-- form-group -->
			
			<div class="form-group">
			  <input type="text" class="form-control" id="StrHausNr" name="StrHausNr" placeholder="Straße und Hausnummer">
			</div><!-- form-group -->
			
			<div class="form-group">
			  <input type="text" class="form-control" id="Stadt" name="Stadt" placeholder="Stadt">
			</div><!-- form-group -->
			
			<div class="form-group">
			  <input type="text" class="form-control" id="Bundesland" name="Bundesland" placeholder="Bundesland">
			</div><!-- form-group -->
			
			<div class="form-group">
			  <input type="text" class="form-control" id="PLZ" name="Postleitzahl" placeholder="Postleitzahl">
			</div><!-- form-group -->

			<button class="btn btn-info btn-block" onclick="ShowStep(3)">Weiter</button>
		</div>
		<!-- STEP 2 -->

		<!-- STEP 3 -->
		<div id="step3" style="display: none;">
			<div class="signin-logo tx-center mg-b-20">Firmeninformation</div>
			<div class="form-group">
			  <input type="text" class="form-control" id="Firmenname" name="Firmenname" placeholder="Firmenname">
			</div><!-- form-group -->
			
			<div class="form-group">
			  <input type="text" class="form-control" id="FirmenID" name="FirmenID" placeholder="Gewünschte Firmen-ID">
			</div><!-- form-group -->

			<button class="btn btn-info btn-block" onclick="ShowStep(4)">Weiter</button>
		</div>
		<!-- STEP 3 -->
		
		<!-- STEP 4 -->
		<div id="step4" style="display: none;">
			<div class="signin-logo tx-center mg-b-20">Sicherheit</div>
			<div class="form-group">
			  <input type="password" class="form-control" id="Passwort1" placeholder="Passwort">
			</div><!-- form-group -->
			
			<div class="form-group">
			  <input type="password" class="form-control" id="Passwort2" name="Passwort" placeholder="Passwort wiederholen">
			</div><!-- form-group -->

			<div class="form-group tx-12">Durch Anklicken von „Registrieren“ akzeptieren Sie die Nutzungsbedingungen und Datenschutzbestimmungen.</div>
			<button class="btn btn-info btn-block" onclick="signup()">Registrieren</button>
		</div>
		<!-- STEP 4 -->
		
		<!-- STEP 5 -->
		<div id="step5" style="display: none;">
			<div class="alert alert-success" role="alert">
			  <div class="d-flex align-items-center justify-content-start">
				<span>Sie haben sich erfolgreich registriert!<br><br>
				<div id="ShowDaten"></div>
				</span>
			  </div><!-- d-flex -->
			</div><!-- alert -->
		
			<button class="btn btn-info btn-block" onclick="anmelden()">Anmelden</button>
		</div>
		<!-- STEP 5 -->
		
		<!-- STEP 0 -->
		<div id="loading" style="display: none;">
			<div class="alert alert-warning" role="alert">
			  <div class="d-flex align-items-center justify-content-start">
				<span>Bitte warten, Daten werden geladen..</span>
			  </div><!-- d-flex -->
			</div><!-- alert -->
		</div>
		<!-- STEP 0 -->
		
	  </div><!-- login-wrapper -->
	</div><!-- d-flex -->

	<script>
	function ShowStep(step) {
	  document.getElementById("step" + (step - 1)).style.display = "none"; // hide current step 
	  document.getElementById("step" + step).style.display = "block"; // show next step
	  
	  if (step = 5)
	  {
			document.getElementById("loading").style.display = "none"; // hide loading
			document.getElementById("ShowDaten").innerHTML = '<strong>Ihre E-Mail: </strong>'+document.getElementById("Email").value+'<br><strong>Ihre Passwort: </strong>zuvor eingegeben<br><strong>Ihre Firmen-ID: </strong>'+document.getElementById("FirmenID").value+'<br><br>Bitte merken Sie sich Ihre Firmen-ID!';
	  }
	}

	
	function signup() {
		
		document.getElementById("step4").style.display = "none"; // hide current step
		document.getElementById("loading").style.display = "block"; // show loading

		var Vorname 	= document.getElementById("Vorname").value;
		var Nachname 	= document.getElementById("Nachname").value;
		var Telefon 	= document.getElementById("Telefon").value;
		var Email 		= document.getElementById("Email").value;
		var Adresszeile1 = document.getElementById("Adresszeile1").value;
		var StrHausNr 	= document.getElementById("StrHausNr").value;
		var Stadt 		= document.getElementById("Stadt").value;
		var Bundesland 	= document.getElementById("Bundesland").value;
		var PLZ 		= document.getElementById("PLZ").value;
		var Firmenname 	= document.getElementById("Firmenname").value;
		var FirmenID 	= document.getElementById("FirmenID").value;
		var Pass 		= document.getElementById("Passwort2").value;
	 
		// OK, make POST req.
		var xhttp = new XMLHttpRequest();
		xhttp.open("POST", "/dashboard/signup.php", false); 
		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xhttp.send("a=signup&"+"&Vorname="+Vorname+"&Nachname="+Nachname+"&Telefon="+Telefon+"&Email="+Email+"&Adresszeile1="+Adresszeile1+"&StrHausNr="+StrHausNr+"&Stadt="+Stadt+"&Bundesland="+Bundesland+"&PLZ="+PLZ+"&Firmenname="+Firmenname+"&FirmenID="+FirmenID+"&Pass="+Pass);

		if (xhttp.responseText == "OK") {
			ShowStep(5); // show OK message
		} else
		{
			// error
		}
	}
	</script>
  </body>
</html>
