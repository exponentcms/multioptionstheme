<!DOCTYPE HTML>
<html>
<head>
    <?php 
    expTheme::head(array(
	    "xhtml"=>false,
        "normalize"=>true,
    	"css_core"=>array(
            "common"
        ),
    	"css_links"=>true,
    	"css_theme"=>true
        )
    );
    ?>
</head>
<body class="<?php echo MULTI_COLOR.' '.MULTI_SIZE.' '.MULTI_FONT; ?>">
	<div id="wrap">
		<div id="header">
			<div id="logo">
				<a href="<?php echo URL_FULL; ?>" title="<?php echo SITE_TITLE; ?>"><?php echo ORGANIZATION_NAME; ?></a> <sub><?php echo SITE_HEADER; ?></sub>
			</div>
			<?php expTheme::module(array("controller"=>"login","action"=>"showlogin","view"=>"showlogin_flyoutYUI")); ?>
            <?php expTheme::module(array("controller"=>"navigation","action"=>"showall","view"=>"showall_YUI Top Nav")); ?>
		</div>
		<div id="content-wrap">
			<div id="content">
				<?php expTheme::main(); ?>
			</div>
			<div id="sidebar">
                <?php expTheme::module(array("controller"=>"container","action"=>"showall","view"=>"showall","source"=>"@left","scope"=>"top-sectional")); ?>
			</div>
		</div>
	</div>
	<div id="footer">
		<?php expTheme::module(array("controller"=>"text","action"=>"showall","view"=>"showall_single","source"=>"@footer","chrome"=>1)) ?>
	</div>
    <?php expTheme::foot(); ?>
</body>
</html>
