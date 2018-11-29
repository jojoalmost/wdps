<?php

/**
 * Fired during plugin activation
 *
 * @link       https://github.com/jojoalmost
 * @since      1.0.0
 *
 * @package    Jotracker
 * @subpackage Jotracker/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Jotracker
 * @subpackage Jotracker/includes
 * @author     Yosua <Risandy>
 */
class Jotracker_Activator
{

    /**
     * Short Description. (use period)
     *
     * Long Description.
     *
     * @since    1.0.0
     */
    public static function activate()
    {
        self::migrate();
    }

    public static function migrate()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'liveshoutbox';

        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE $table_name (
		id mediumint(9) NOT NULL AUTO_INCREMENT,
		time datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
		name tinytext NOT NULL,
		text text NOT NULL,
		url varchar(55) DEFAULT '' NOT NULL,
		PRIMARY KEY  (id)
	) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);

        add_option('jal_db_version', $jal_db_version);
    }

}
