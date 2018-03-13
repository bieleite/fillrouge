
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<title><?php echo titles()?></title>
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link href="https://fonts.googleapis.com/css?family=Alice" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" type="text/css" href="css/menu-down.css" />
	<link rel="stylesheet" type="text/css" href="css/estilo.css" />
	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="js/modernizr.custom.js"></script>
	<link rel="shortcut icon" href="../favicon.ico">
</head>
<body>
	<header>
	
	<div class="linha topo">
		<div class="main clearfix coluna col13">
		<nav id="menu" class="nav">					
			<ul>
				<li>
					<a href="?p=home">
						<span class="icon">
							<i aria-hidden="true" class="icon-home"></i>
						</span>
						<span>Home</span>
					</a>
				</li>
				<li>
					<a href="?p=ateliers">
						<span class="icon"> 
							<i aria-hidden="true" class="icon-services"></i>
						</span>
						<span>Ateliers</span>
					</a>
				</li>
				<li>
					<a href="?p=services">
						<span class="icon">
							<i aria-hidden="true" class="icon-portfolio"></i>
						</span>
						<span>Services</span>
					</a>
				</li>
				<li>
					<a href="?p=apropos">
						<span class="icon">
							<i aria-hidden="true" class="icon-blog"></i>
						</span>
						<span>À propos du parc</span>
					</a>
				</li>
				<li>
					<a href="?p=contact">
						<span class="icon">
							<i aria-hidden="true" class="icon-team"></i>
						</span>
						<span>Contactez-nous</span>
					</a>
				</li>
				<li>
					<a href="?p=login">
						<span class="icon">
							<i aria-hidden="true" class="icon-contact"></i>
						</span>
						<span>Intranet</span>
					</a>
				</li>
			</ul>
		</nav>
		<script>
		//  The function to change the class
		var changeClass = function (r,className1,className2) {
			var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
			if( regex.test(r.className) ) {
				r.className = r.className.replace(regex,' '+className2+' ');
		    }
		    else{
				r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
		    }
		    return r.className;
		};	

		//  Creating our button in JS for smaller screens
		var menuElements = document.getElementById('menu');
		menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');

		//  Toggle the class on click to show / hide the menu
		document.getElementById('menutoggle').onclick = function() {
			changeClass(this, 'navtoogle active', 'navtoogle');
		}

		// http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
		document.onclick = function(e) {
			var mobileButton = document.getElementById('menutoggle'),
				buttonStyle =  mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;

			if(buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
				changeClass(mobileButton, 'navtoogle active', 'navtoogle');
			}
		}
	</script>
	</div>

