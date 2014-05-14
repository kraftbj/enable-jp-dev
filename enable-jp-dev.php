<?php
/*
Plugin Name: Enable Development Mode for Jetpack
Plugin URI: http://www.brandonkraft.com/
Description: Jetpack automatically enables a connection-free Development Mode under a few situations. Sometimes, you need Development Mode other times.
Version: 1.0
Author: Brandon Kraft
Author Email: public@brandonkraft.com
License: GPLv2 or later
*/

add_filter( 'jetpack_development_mode', '__return_true' );