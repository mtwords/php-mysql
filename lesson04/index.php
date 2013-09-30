<!DOCTYPE html>
<html>
<head>
	<title>Submit us your Bug!</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
	<script type="text/javascript">
		  // ref: http://diveintohtml5.org/detect.html
	  function supports_input_placeholder()
	  {
	    var i = document.createElement('input');
	    return 'placeholder' in i;
	  }

	  if(!supports_input_placeholder()) {
	    var fields = document.getElementsByTagName('INPUT');
	    for(var i=0; i < fields.length; i++) {
	      if(fields[i].hasAttribute('placeholder')) {
	        fields[i].defaultValue = fields[i].getAttribute('placeholder');
	        fields[i].onfocus = function() { if(this.value == this.defaultValue) this.value = ''; }
	        fields[i].onblur = function() { if(this.value == '') this.value = this.defaultValue; }
	      }
	    }
	  }
</script>
</head>
<body>

	<h2>Bitte melde deinen Bug mit diesem Formular</h2>
	
	<form class="form" action="filebug.php" method="POST">
		
		<p class="name">
			<input type="text" name="name" id="name" placeholder="John Doe"/>
			<label for="name">Name</label>
		</p>
		
		<p class="password">
			<input type="password" name="password" placeholder="password" />
			<label for="password">Passwort</label>
		</p>
		<p class="email">
			<input type="text" name="email" id="email" placeholder="mail@example.com" />
			<label for="email">Email</label>
		</p>
		
		<p class="web">
			<input type="text" name="web" id="web" placeholder="www.example.com" />
			<label for="web">Betreffende Website</label>
		</p>		
	
		<p class="prio">
			<input type="range" min="1" max="5" />
			<label for="range">Priorität</label>
		</p>		
	
		<p class="bugtype">
			<select name="bugtype">
				<option>Kosmetik</option>
				<option>Fehler</option>
				<option>Erweiterung</option>
			</select>
			<label for="bugtype">Fehler-Typ</label>
		</p>
		
		<p class="rueckruf">
			<input type="checkbox" name="callback" />
			<label for="callback">Rückruf erforderlich?</label>
		</p>
		<p class="reproducable">
			<input type="radio" name="reproducable" value="Ja" />
			<input type="radio" name="reproducable" value="Nein" />
			<label for="reproducable">Reproduzierbar</label>
		</p>
	
		<p class="text">
			<textarea name="text" placeholder="Fehlerreport"></textarea>
		</p>
		
		<?php
			require_once('includes/recaptcha/recaptchalib.php');
			$publickey = "6LfWLugSAAAAAN8bNFn07Dy4QZDM4MCTGcT5jdo0";
			echo recaptcha_get_html($publickey);
		?>
		
		<p class="submit">
			<input type="submit" value="Senden" />
		</p>
	</form>

</body>
</html>