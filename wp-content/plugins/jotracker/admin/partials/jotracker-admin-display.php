<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/jojoalmost
 * @since      1.0.0
 *
 * @package    Jotracker
 * @subpackage Jotracker/admin/partials
 */

if (!current_user_can('manage_options')) {
    wp_die(__('You do not have sufficient permissions to access this page.'));
}
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->