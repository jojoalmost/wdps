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
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<div class="wrap">
    <h1 class="wp-heading-inline">Flow</h1>
    <a href="<?= admin_url('admin.php?page=sinetiks_schools_create') ?>" class="page-title-action">Add New</a>
    <hr class="wp-header-end">
    <ul class="subsubsub">
        <li class="all"><a href="edit.php?post_type=post" class="current" aria-current="page">All <span class="count">(1)</span></a>
            |
        </li>
        <li class="publish">
            <a href="edit.php?post_status=publish&amp;post_type=post">Published
                <span class="count">(1)</span>
            </a>
        </li>
    </ul>
    <h2 class="screen-reader-text">Posts list</h2>
    <table class="wp-list-table widefat fixed striped posts datatable">
        <thead>
        <tr>
            <th>No</th>
            <th>Pelanggan</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>2</td>
        </tr>
        </tbody>
    </table>
</div>
<script>
    $(function () {
        $('.datatable').DataTable();
    })
</script>