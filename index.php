<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <?php 
    expTheme::head(array(
    	"xhtml"=>false,
	    "css_primer"=>array(
            YUI2_PATH."yui2-reset-fonts-grids/yui2-reset-fonts-grids.css"),
    	"css_core"=>array("common"),
    	"css_links"=>true,
    	"css_theme"=>true
        )
    );
    ?>
</head>
<body class="<?php echo MULTI_COLOR.' '.MULTI_SIZE.' '.MULTI_FONT; ?>">
	<div id="wrap">
		<div id="header">
			<h1 id="logo">
				<a href="<?php echo URL_FULL; ?>" title="<?php echo SITE_TITLE; ?>"><?php echo ORGANIZATION_NAME; ?></a> <sub><?php echo SITE_HEADER; ?></sub>
			</h1>
			<?php expTheme::showController(array("controller"=>"login","action"=>"showlogin","view"=>"showlogin_flyoutYUI")); ?>
			<?php expTheme::module(array("module"=>"navigation","view"=>"YUI Top Nav","source"=>"@top")); ?>
		</div>
		<div id="content-wrap">
			<div id="content">
				<?php expTheme::main(); ?>
			</div>
			<div id="sidebar">
				<?php expTheme::module(array("module"=>"container","view"=>"Default","source"=>"@left")); ?>
			</div>
		</div>
	</div>
	<div id="footer">
		<?php expTheme::showController(array("controller"=>"text","action"=>"showall","view"=>"single","source"=>"@footer","chrome"=>1)) ?>
	</div>
    <?php expTheme::foot(); ?>
</body>
</html>
