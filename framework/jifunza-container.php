<?php defined( '_JEXEC' ) or die; ?>

<?php // Logo file or site title param  ?>

<?php
if ($this->params->get('logoFile'))
{
	$logo = '<img src="' . JUri::root() . $this->params->get('logoFile') . '" alt="' . $sitename . '" class="img-responsive"/>';
}
elseif ($this->params->get('sitetitle'))
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . htmlspecialchars($this->params->get('sitetitle')) . '</span>';
}
else
{
	$logo = '<span class="site-title" title="' . $sitename . '">' . $sitename . '</span>';
}
?>

<!-- Framework Containers inside divs -->

<?php if ($this->countModules('header')): ?>
<head id="header" class="clearfix">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" /> <!-- mobile viewport optimized -->
	<div class="container">
 			<div class="row">
			<jdoc:include type="modules" name="header" style="xhtml" />
			</div>
	</div>
</head>
<?php endif; ?>	

<!-- Navbar -->
<nav id="nav" class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
            <div class ="row">
            <!-- Insert logo navbar -->            
					<div class="logo"><?php echo $logo; ?>	
						<div class="payoff pull-left"><?php if ($this->params->get('sitedescription')) : ?>
							<?php echo '<div class="site-description">' . htmlspecialchars($this->params->get('sitedescription')) . '</div>'; ?></div>
						<?php endif; ?>
                </div>

            <!-- End logo navbar -->
            
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-modules">
				<span class="sr-only">Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="navbar-modules">
			<jdoc:include type="modules" name="navbar" />
		</div>
	</div>
    </div>
</nav>

<!-- End Navbar -->

<?php if ($this->countModules('top')): ?>
<div id="top" class="clearfix">
	<div class="container">
		<div class="row">
			<jdoc:include type="modules" name="top" style="xhtml" />
		</div>
	</div>
</div>
<?php endif; ?>

<!-- Mainbody -->
<div id="mainbody" class="clearfix">
	<div class="container">
      <div class="fixed_menu">
        <div class="row">
			<?php if ($this->countModules('left')): ?>
			<div id="left" class="sidebar-left col-md-3">
				<div class="row">
					<jdoc:include type="modules" name="left" style="xhtml" />
				</div>
			</div>		
          </div>	
          <?php endif; ?>

			<!-- Content Block -->
			<div id="content" class="<?php echo $contentcol;?>">
				<?php if (!empty($app->getMessageQueue)) : ?>
				<div id="message-component">
					<jdoc:include type="message" />
				</div>
				<?php endif ?>
				<?php if ($this->countModules('above-content')): ?>
				<div id="above-content" class="row">
					<jdoc:include type="modules" name="above-content" style="xhtml" />
				</div>
				<?php endif; ?>
				<div id="content-area" class="clearfix">
					<jdoc:include type="component" />
				</div>
				<?php if ($this->countModules('below-content')): ?>
				<div id="below-content" class="row">
					<jdoc:include type="modules" name="below-content" style="xhtml" />
				</div>
				<?php endif; ?>
			</div>
          </div>
        		</div>
		<!-- End Content Block -->

			<?php if ($this->countModules('right')) : ?>
			<div id="right" class="sidebar-right col-md-3">
				<div class="row">
					<jdoc:include type="modules" name="right" style="xhtml" />
				</div>
			</div>
			<?php endif; ?>	


	</div>
<!-- End Mainbody -->

<?php if ($this->countModules('bottom')): ?>
<div id="bottom" class="clearfix">
	<div class="container">
		<div class="row">
			<jdoc:include type="modules" name="bottom" style="xhtml" />
		</div>
	</div>
</div>
<?php endif; ?>

<?php if ($this->countModules('footer')): ?>	
<footer id="footer" class="clearfix">	
	<div class="container">
		<div class="row">
            			<jdoc:include type="modules" name="footer" style="xhtml" />
            <p>
				&copy; <?php echo date('Y'); ?> <?php echo $sitename; ?>
			</p>
		</div>
	</div>
</footer>
<?php endif; ?>	
