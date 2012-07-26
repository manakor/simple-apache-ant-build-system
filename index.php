<?php require_once($_SERVER['DOCUMENT_ROOT'] . '/core.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <title>Apache Ant deploys builder</title>
    
    <meta name="description" content="Build script, which builds packaged project version ready for production environment." />
    
    <meta name="author" content="Nik Sumeiko, http://manakor.org" />

	<link rel="stylesheet" href="<?php echo ASSETS . '/styles/styles' . (DEVELOPMENT ? '.css?v=' . VERSION : '-min-' . VERSION . '.css'); ?>" />
    
    <meta property="og:title" content="Apache Ant deploys builder" />
	<meta property="og:description" content="Build script, which builds packaged project version ready for production environment." />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo DOMAINURI; ?>" />
	
	<meta property="og:site_name" content="Apache Ant deploys builder" />
	<meta property="fb:admins" content="100000163871210" />
	
	<!--[if lt IE 9]>
	<script src="<?php echo ASSETS . '/scripts/_html5shiv-printshiv.js'; ?>"></script>
	<![endif]-->
</head>
<body>

	<h1>Apache Ant deploys builder</h1>
	<p>Build script, which builds packaged project version ready for production environment.</p>
	<cite id="author"></cite>


<?php
	if (DEVELOPMENT) {
	// If DEVELOPMENT is set to 'true', normal working JavaScript file loaded.
	// IMPORANT: Take in mind that filename has to be the same as project name
	// in build script defined here: 'assets/development/build/build.xml'
?>
<script src="<?php echo ASSETS . '/scripts/manakor.js?v=' . VERSION; ?>"></script>
    
<?php
	} else {
	// Here's what is loaded when in production. It's just a compressed version.
?>
<script src="<?php echo ASSETS . '/scripts/manakor-min-' . VERSION . '.js'; ?>"></script>

<?php
	}
?>
</body>
</html>