<?php
/*------------------------------------------------------------------------
# author    Patrick Smits
# copyright © 2017 byAntoinette Communicatie All rights reserved.
# @license  http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website   https://www.byantoinettecommunicatie.nl
-------------------------------------------------------------------------*/
// no direct access

// Variables
$doc            = JFactory::getDocument(); // Connect with Joomla // define variable with document

defined('_JEXEC') or die;
// Set MetaData 
$doc->setMetaData('viewport', 'width=device-width, initial-scale=1.0' ); 
$doc->setMetadata('x-ua-compatible','IE=edge,chrome=1'); // force latest IE & chrome frame
$doc->setGenerator($sitename); // no Joomla in generator info
?>

<!DOCTYPE html>
<html>
<?php include 'includes/head.php'; ?>
<?php include 'framework/jifunza_template.php'; ?>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <header id="header" class="header hide-from-print" role="banner">
    </header>
<div id="wrap">
<div id="mobilemenu" class="<?php echo $this->params->get('mobilemenu'); ?>">
<?php  if($this->countModules('mobilemenu')) : ?>
<jdoc:include type="modules" name="mobilemenu" style="none" />
<?php  endif; ?>
</div>
 </div>      
<!--top-->
<div id="wrap">
<div class="row">
<div id="top" class="col-sm-2">
<?php  if($this->countModules('top')) : ?>
<jdoc:include type="modules" name="top" style="none" />
<?php  endif; ?>
</div>
<div id="top2" class="col-sm-9">
<?php  if($this->countModules('top2')) : ?>
<jdoc:include type="modules" name="top2" style="none" />
<?php  endif; ?>
</div>
</div>
</div>
<!--end top-->
   
<!--Navigation-->
<?php if($this->params->get('nav_shadow') == '1') : ?>
<div id="navigation">
<?php  endif; ?>
<?php if($this->params->get('nav_sep') == '1') : ?>
<div id="seperator">
<?php  endif; ?>
<!-- Navbar -->
<?php if($this->params->get('nav_shadow') == '1') : ?>
<?php  endif; ?>
<nav id="nav" class="navbar navbar-default" role="navigation" data-spy="affix" data-offset-top="100">
	<div id="main">
        <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-modules">
				    <span class="sr-only">Navigation</span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
                    </button>
                
                <div class="collapse navbar-collapse" id="navbar-modules">
                    <jdoc:include type="modules" name="navbar" />
                    <?php  if ($this->countModules('navigation')) : ?>
                        <div class="navigation" role="navigation">
                        <jdoc:include type="modules" name="navigation" style="none" />
                        <?php  endif; ?>
                        </div>
                    </div>
                    </div>
                </div>
</div>
</nav>
<!-- End Navbar -->
<!--Header-->
<div id="header" class="<?php echo $this->params->get('header'); ?>">
<?php  if($this->countModules('header')) : ?>
<jdoc:include type="modules" name="header" style="none" />
<?php  endif; ?>
</div>
<!--content above-->
<div id="wrap">
<div class="row">
<div id="content-above1" class="<?php echo $this->params->get('Above1'); ?>">
<?php  if($this->countModules('content-above1')) : ?>
<jdoc:include type="modules" name="content-above1" style="none" />
<?php  endif; ?>
</div>
<div id="content-above2" class="<?php echo $this->params->get('Above2'); ?>">
<?php  if($this->countModules('content-above2')) : ?>
<jdoc:include type="modules" name="content-above2" style="none" />
<?php  endif; ?>
</div>
<div id="content-above3" class="<?php echo $this->params->get('Above3'); ?>">
<?php  if($this->countModules('content-above3')) : ?>
<jdoc:include type="modules" name="content-above3" style="none" />
<?php  endif; ?>
</div>
<div id="content-above4" class="<?php echo $this->params->get('Above4'); ?>">
<?php  if($this->countModules('content-above4')) : ?>
<jdoc:include type="modules" name="content-above4" style="none" />
<?php  endif; ?>
</div>
</div>
</div>  
    
    
<!--end content above--> 
<!-- Content -->
<body>
<div id="main">
<div class="container-fluid">
    <div  class="row">
<!-- Left -->
<?php  if($this->countModules('left')) : ?>
<div id="left" class="<?php echo $this->params->get('leftColumnWidth'); ?>">
<jdoc:include type="modules" name="left"  style="block" />
</div>
<div class="container-fluid <?php echo $this->params->get('Content'); ?>">
    <div  class="row">
<!-- Content-top -->
<?php  endif; ?>
<?php  if($this->countModules('content-top')) : ?>
<div id="content-top">
<jdoc:include type="modules" name="content-top"  style="block" />
</div>
<?php  endif; ?>
<!-- Component -->
  <div id="container-fluid">
<?php if($this->params->get('message') == '1') : ?>
<jdoc:include type="message" />
      <?php  endif; ?>
      <div id="content-area" class="clearfix">
<jdoc:include type="component" />
          </div>
</div>
<!-- Content-bottom -->
<?php  if($this->countModules('content-bottom')) : ?>
<div id="content-bottom">
<jdoc:include type="modules" name="content-bottom"  style="block" />
</div>
<?php  endif; ?>
                  </div>
</div>
<!-- Right -->
<?php  if($this->countModules('right')) : ?>
<div id="right" class="<?php echo $this->params->get('rightColumnWidth'); ?>">
<jdoc:include type="modules" name="right"  style="block" />
</div>
<?php  endif; ?>
</div>
</div></div>
<!-- end right -->
<!--content above-->
<div id="wrap">
<div class="row">
<div id="content-below1" class="<?php echo $this->params->get('Below1'); ?>">
<?php  if($this->countModules('content-below1')) : ?>
<jdoc:include type="modules" name="content-below1" style="none" />
<?php  endif; ?>
</div>
<div id="content-below2" class="<?php echo $this->params->get('Below2'); ?>">
<?php  if($this->countModules('content-below2')) : ?>
<jdoc:include type="modules" name="content-below2" style="none" />
<?php  endif; ?>
</div>
<div id="content-below3" class="<?php echo $this->params->get('Below3'); ?>">
<?php  if($this->countModules('content-below3')) : ?>
<jdoc:include type="modules" name="content-below3" style="none" />
<?php  endif; ?>
</div>
<div id="content-below4" class="<?php echo $this->params->get('Below4'); ?>">
<?php  if($this->countModules('content-below4')) : ?>
<jdoc:include type="modules" name="content-below4" style="none" />
<?php  endif; ?>
</div>
</div>
</div>  
    
    
<!--end content above--> 
<!-- footer -->

<div id="footer">
    <div id="wrap">
                  <div class="row footer col-md-6">
                    <?php  if($this->countModules('footer')) : ?>
                    <jdoc:include type="modules" name="footer" style="none" />
                    <?php  endif; ?>
                    </div>
                  <div class="row footer col-md-6">
                    <?php  if($this->countModules('footer2')) : ?>
                    <jdoc:include type="modules" name="footer2" style="none" />
                    <?php  endif; ?>
                    </div>
    </div>
</div>
<!-- footer -->

<!-- JS voor dropdown menu  -->
<script type="text/javascript">
    (function($){
        $(document).ready(function(){
            // dropdown
            if ($('.parent').children('ul').length > 0) 
            {
                $('.parent').addClass('dropdown');
                $('.parent > a').addClass('dropdown-toggle');
                $('.parent > a').attr('data-toggle', 'dropdown');
                $('.parent > a').append('<b class="caret"></b>');
                $('.parent > ul').addClass('dropdown-menu');
            }
        });
    })(jQuery);
</script>

<script type="text/javascript">
    (function($){
        $('.dropdown input').click(function(e) {
        e.stopPropagation();
    });
    })(jQuery);
</script>

<script type="text/javascript"> 
    (function($){
        $('.dropdown-menu .dropdown-submenu a[data-toggle="dropdown-submenu"]').click(function (e)
        {                   
            e.stopPropagation();
        });
    })(jQuery);
</script>

<!-- JS -->
    </body>
</html>


