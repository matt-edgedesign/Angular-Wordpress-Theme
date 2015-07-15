<!DOCTYPE html>
<html ng-app="app">
<head>
	<base href="<?php $url_info = parse_url( site_url() ); echo trailingslashit( $url_info['path'] ); ?>">
	<title>AngularJS Demo Theme</title>
	<?php wp_head(); ?>
</head>
<body>