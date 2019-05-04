<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<script src="https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js"></script>
<body>
<div id="container">
	<h1>Hello</h1>
	<div id="app">
		<router-view></router-view>
	</div>
</div>
</body>
<script type="text/javascript" src="<?php echo base_url(); ?>js/app.js"></script>
<script>
</script>
</html>