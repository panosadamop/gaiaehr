<?php
if(!defined('_GaiaEXEC')) die('No direct access allowed.');
// *****************************************************************************************
// Main Screen Application
// Description: Installation screen procedure
// version 0.0.1
// revision: N/A
// author: Ernesto J Rodriguez - GaiaEHR
// *****************************************************************************************
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>GaiaEHR :: New Site Setup</title>
	<script type="text/javascript" src="lib/extjs-4.1.1a/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="resources/css/ext-all.css">
	<link rel="stylesheet" type="text/css" href="resources/css/style_newui.css">
	<link rel="stylesheet" type="text/css" href="resources/css/custom_app.css">
	<script src="data/api.php"></script>
	<script type="text/javascript">
		var app, i18n = {};
		function say(a){
			console.log(a);
		}
        Ext.Loader.setConfig({
            enabled       : true,
            disableCaching: false,
            paths         : {
                'App'       : 'app'
            }
        });
	</script>
	<script type="text/javascript">
		Ext.require('App.view.sitesetup.SiteSetup');
        Ext.onReady(function() {
        	Ext.direct.Manager.addProvider(App.data.REMOTING_API);
			// localization remoting procedures.
			// ie: i18n['dashboard'] = Dashboard (en_US)
			// ie: i18n['dashboard'] = Tablero (es_PR)
			i18nRouter.getTranslation(function(provider, response)
			{
				i18n = response.result;
			});
			app = Ext.create('App.view.sitesetup.SiteSetup').show();
        });
	</script>
</head>
<body id="login">
<div id="bg_logo"></div>
<div id="copyright">GaiaEHR | <a href="javascript:void(0)" onClick="app.winCopyright.show();">Copyright Notice</a></div>
</body>
</html>
