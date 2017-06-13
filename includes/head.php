<?php
 /*------------------------------------------------------------------------
# author    Patrick Smits
# Copyright © 2017 byAntoinette Communicatie. All rights reserved.
# @license  http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website   http://www.byantoinettecommunicatie.nl
-------------------------------------------------------------------------*/

// no direct access
defined('_JEXEC') or die;
JHtml::_('bootstrap.framework');

include 'params.php';


if ($params->get('compile_sass', '0') === '1')
{
	require_once "sass.php";
}
?>
<head>
	<jdoc:include type="head" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<link rel="apple-touch-icon-precomposed" href="<?php  echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php  echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php  echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php  echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">
    <link href="https://fonts.googleapis.com/css?family=<?php echo $this->params->get( 'google-font-1' ); ?>" rel="stylesheet" type="text/css">
	<!--[if lte IE 8]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<?php  if ($pie == 1) : ?>
			<style>
				{behavior:url(<?php  echo $tpath; ?>/js/PIE.htc);}
			</style>
		<?php  endif; ?>
	<![endif]-->
  <link  href="<?php echo $this->params->get('GoogleFont1');?>" rel="stylesheet" type="text/css"/>
  <link 
       href="<?php echo $this->params->get('GoogleFont2');?>"  rel="stylesheet" type="text/css"/> 
</head>

