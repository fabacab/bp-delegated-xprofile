=== BP Delegated XProfile ===
Contributors: meitar
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=TJLPJYXHSRBEE&lc=US&item_name=BP%20Delegated%20XProfile&item_number=bp-delegated-xprofile&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donate_SM%2egif%3aNonHosted
Tags: BuddyPress, members, member type, administration, users, management, customization, extended profile
Requires at least: WordPress 4.4 / BuddyPress 2.8
Tested up to: 4.8
Stable tag: 0.1.1
License: GPL-3.0
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Enables delegating a user's Extended Profile for editing by other users.

== Description ==

Creates a simple, secure delegation system whereby a privileged user (such as an administrator) can assign other registered BuddyPress members to be "delegates" for a given user. A delegate has the capability to view and edit Extended Profile (XProfile) fields for the delegated user. This is useful on sites where certain relationships exist between one user and another, such as legal guardianship by an adult over a child. Using delegation reduces the need to share passwords or log in to shared accounts.

*Donations for this plugin make up a chunk of my income. If you continue to enjoy this plugin, please consider [making a donation](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=TJLPJYXHSRBEE&lc=US&item_name=BP%20Delegated%20XProfile&item_number=bp-delegated-xprofile&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donate_SM%2egif%3aNonHosted). :) Thank you for your support!*

**Roles and capabilities**

This plugin uses the built-in capabilities system as part of WordPress core, along with core BuddyPress hooks (`bp_current_user_can`) to check for appropriate permissions, making it both simple to customize and as secure as WP and BP core code. The custom capabilities are:

* `edit_user_delegates` - Users with this capability can assign delegates for users they can edit (determined by `edit_users`).

Additionally, the following core capabilities are required:

* `list_users` - The delegation options implicitly enumerate all registered users, so a user must also have the `list_users` capability to be granted access to the Delegation user interface.
* `edit_users` - If you cannot `edit_users`, you cannot `edit_user_delegates`, either.

On a default WordPress and BuddyPress installation, these capabilities are granted only to Administrator users. However, this can be changed using the built-in capability filter hooks.

== Installation ==

BP Delegated XProfile can be installed automatically from the WordPress plugin repository by searching for "BP Delegated XProfile" in the "Add new plugin" screen of your WordPress admin site and clicking the "Install now" button.

Minimum requirements:

* [BuddyPress](https://buddypress.org/)

The plugin will automatically de-activate itself, or certain features, if these requirements are not met. If you do not see a given feature, ensure your server (and your web hosting provider) meet the above requirements!

BP Delegated XProfile can also be installed manually by following these instructions:

1. [Download the latest plugin code](https://downloads.wordpress.org/plugin/bp-delegated-xprofile.zip) from the WordPress plugin repository.
1. Upload the unzipped `bp-delegated-xprofile` folder to the `/wp-content/plugins/` directory of your WordPress installation.
1. Activate the plugin through the "Plugins" menu in WordPress.

== Frequently Asked Questions ==

= A question asked often =

The answer to the question.

== Changelog ==

= 0.1.1 =
* Fix activation error on old versions of PHP.

= 0.1 =
* Initial public release.
