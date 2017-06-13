<?php defined( '_JEXEC' ) or die;?>


<?php
    header("Content-type: text/css; charset: UTF-8");

?>
	<?php // Template color ?>
	<?php if ($this->params->get('templateColor')) ; ?>
	<style type="text/css">
		body
		{
			background-color: <?php echo $this->params->get('templateBackgroundColor'); ?>;
		}
 		a, p
		{
			color: <?php echo $this->params->get('p'); ?>;         
            font-size: <?php echo $this->params->get('FontSizeP'); ?>;
            margin: <?php echo $this->params->get('Para_margin'); ?>;
            font-family: <?php echo $this->params->get('ap_font'); ?> !important;
		}
        a:link, a:visited
        {
            color: <?php echo $this->params->get('Para_link'); ?>!imporant;
        }
       
        a:hover
        {
            color: <?php echo $this->params->get('Para_link-hover'); ?>;
        }

        h1 {
			color: <?php echo $this->params->get('ColorH1'); ?>;
            font-size: <?php echo $this->params->get('FontSizeH1'); ?>;
            font-family: <?php echo $this->params->get('h1_font'); ?> !important;
            margin: <?php echo $this->params->get('margin_h1'); ?> !important;
		}
        
        h2 {
			color: <?php echo $this->params->get('ColorH2'); ?>;
            font-size: <?php echo $this->params->get('FontSizeH2'); ?>;
            font-weight: <?php echo $this->params->get('h2_weight'); ?>;
            font-family: <?php echo $this->params->get('h2_font'); ?>;
            margin: <?php echo $this->params->get('margin_h2'); ?>;

		}
        h3 {
			color: <?php echo $this->params->get('ColorH3'); ?>;
            font-size: <?php echo $this->params->get('FontSizeH3'); ?>;
            font-weight: <?php echo $this->params->get('h3_weight'); ?>;
            font-family: <?php echo $this->params->get('h3_font'); ?>;
            margin: <?php echo $this->params->get('margin_h3'); ?>;

		}
        h4 {
			color: <?php echo $this->params->get('ColorH4'); ?>;
            font-size: <?php echo $this->params->get('FontSizeH4'); ?>;
            font-weight: <?php echo $this->params->get('h4_weight'); ?>;
            font-family: <?php echo $this->params->get('h4_font'); ?>;
            margin: <?php echo $this->params->get('margin_h4'); ?>;

		}
        h5 {
			color: <?php echo $this->params->get('ColorH5'); ?>;
            font-size: <?php echo $this->params->get('FontSizeH5'); ?>;
            font-weight: <?php echo $this->params->get('h5_weight'); ?>;
            font-family: <?php echo $this->params->get('h5_font'); ?>;
            margin: <?php echo $this->params->get('margin_h5'); ?>;

		}
         h6 {
			color: <?php echo $this->params->get('ColorH6'); ?>;
            font-size: <?php echo $this->params->get('FontSizeH6'); ?>;
            font-weight: <?php echo $this->params->get('h6_weight'); ?>;
            font-family: <?php echo $this->params->get('h6_font'); ?>;
            margin: <?php echo $this->params->get('margin_h6'); ?>;

        }
        
        #footer  {
            background-color: <?php echo $this->params->get('FooterColor'); ?>;
            height:<?php echo $this->params->get('FooterHeight'); ?>!important;
        } 
        
        #footer p {
			color: <?php echo $this->params->get('ColorFooterText'); ?>;
            font-size: <?php echo $this->params->get('FontSizeFooter'); ?>;
        }        
        
        .menu li a:focus , .menu li a:hover    {   
         color: <?php echo $this->params->get('FontColorHoverMenu'); ?>;
       background-color: <?php echo $this->params->get('BgColorHoverMenu'); ?>; }
       
        .menu .active  a
         {
              color: <?php echo $this->params->get('FontColorActiveMenu'); ?>;         
            background-color: <?php echo $this->params->get('BgColorActiveMenu'); ?>;
        }

        .menu .dropdown-menu a:focus, .menu .dropdown-menu a:hover {
            background-color: <?php echo $this->params->get('BgColorHoverMenu'); ?>;
        color: <?php echo $this->params->get('FontColorHoverMenu'); ?>;

}

        .nav-child {
        left: <?php echo $this->params->get('NavChildLeft'); ?>;
        top: <?php echo $this->params->get('NavChildTop'); ?>;
        z-index:100;
        }
        
                .menu .dropdown-menu .active  a
         {
             background-color: <?php echo $this->params->get('BgColorActiveMenu'); ?>;
        color: <?php echo $this->params->get('FontColorActiveMenu'); ?>;
        }
.menu .dropdown-menu a {
    background-color: <?php echo $this->params->get('BgColorMenu'); ?>;
       color: <?php echo $this->params->get('FontColorHoverMenu'); ?>; 
    width: <?php echo $this->params->get('DropDownWidth'); ?>;
    z-index:100;
}

        .nav .open > a, .nav .open > a:focus, .nav .open > a:hover {
   color: <?php echo $this->params->get('FontColorActiveMenu'); ?>;         
            background-color: <?php echo $this->params->get('BgColorActiveMenu'); ?>;
    border-color: none;
}
        
        .navbar-default  {background-color: <?php echo $this->params->get('BgColorMenu'); ?>; }
        
        .menu li a {
            font-size: <?php echo $this->params->get('NavFontSize'); ?>;
            font-weight: <?php echo $this->params->get('NavFontweight'); ?>;
            font-family: <?php echo $this->params->get('Navfont'); ?>!important;
            margin: <?php echo $this->params->get('Navmargin'); ?>;
            color: <?php echo $this->params->get('FontColorMenu'); ?>;
            background-color: <?php echo $this->params->get('BackgroundColorMenu'); ?>;

		}
        #wrap {width: <?php echo $this->params->get('Wrapper'); ?>;}
        #main {width: <?php echo $this->params->get('Main'); ?>; margin-left: auto; margin-right:auto; height:auto;}
        #nav {width: <?php echo $this->params->get('Navigation'); ?>; margin-left: auto; margin-right:auto; height:auto;} 
        #footer {width: <?php echo $this->params->get('Footer'); ?>; margin-left: auto; margin-right:auto; height:auto;}
	</style>
  