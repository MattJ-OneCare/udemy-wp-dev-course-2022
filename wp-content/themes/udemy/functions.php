<?php

// Setup
define( 'JU_DEV_MODE', true );
define( 'THEMEPATH', get_template_directory() );

// Includes
include( THEMEPATH . "/includes/front/enqueue.php" );
include( THEMEPATH . "/includes/custom-nav-walker.php" );
include( THEMEPATH . "/includes/setup.php" );
include( THEMEPATH . "/includes/widgets.php" );

// Shortcodes
