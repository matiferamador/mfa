=== Disable Gutenberg ===

Plugin Name: Disable Gutenberg
Plugin URI: https://perishablepress.com/disable-gutenberg/
Description: Disables Gutenberg Block Editor and restores the Classic Editor and original Edit Post screen. Provides options to enable on specific post types, user roles, and more.
Tags: editor, classic editor, block editor, gutenberg
Author: Jeff Starr
Author URI: https://plugin-planet.com/
Donate link: https://monzillamedia.com/donate.html
Contributors: specialk
Requires at least: 4.9
Tested up to: 6.4
Stable tag: 3.1
Version: 3.1
Requires PHP: 5.6.20
Text Domain: disable-gutenberg
Domain Path: /languages
License: GPL v2 or later

Disable Gutenberg Block Editor and restore the Classic Editor and original Edit Post screen (TinyMCE, meta boxes, etc.). Selectively disable for posts, pages, roles, post types, and theme templates. Hide the Gutenberg nag, menu item, and more.



== Description ==

This plugin disables the new Gutenberg Editor (aka Block Editor) and replaces it with the Classic Editor. You can disable Gutenberg completely, or selectively disable for posts, pages, roles, post types, and theme templates. Plus you can hide the Gutenberg nag, menu item, and more!

> The all-in-one, COMPLETE solution for handling Gutenberg.
> Hide ALL traces of Gutenberg and replace with Classic Editor.
> Restores original Edit Post screen (TinyMCE, meta boxes, etc.).

The Disable Gutenberg plugin restores the classic (original) WordPress editor and the "Edit Post" screen. So you can continue using plugins and theme functions that extend the Classic Editor. Supports awesome features like Meta Boxes, Quicktags, Custom Fields, and everything else the Classic Editor can do.

> Does not "expire" in 2022! :)


**Easy to Use**

Just activate and done! The default plugin settings are configured to hide all traces of the Gutenberg Block Editor, and fully restore the original Classic Editor. Further options for customizing when/where Gutenberg is enabled are available in the plugin settings.

> NEW! Disable Block Widgets and restore Classic Widgets :)


**Options**

* Disable Gutenberg completely (all post types)
* Disable Gutenberg for any post type
* Disable Gutenberg for any user role
* Disable Gutenberg for any theme template
* Disable Gutenberg for any post/page IDs
* Disable Gutenberg admin notice (nag)
* Option to restore Classic Widgets
* Option to hide the plugin menu item
* Option to hide the Gutenberg plugin menu item (settings link)
* Adds "Classic Editor" link to each post on the Posts screen
* Adds item to the WP sidebar menu: "Add New (Classic)"
* Option to enable Custom Fields Meta Box for ACF
* Choose which editor to use for each post
* Whitelist any post title, slug, or ID
* Option to enable/disable frontend Gutenberg stylesheet

> Works same as Classic Editor plugin, but can do a LOT more!
> Lightweight and super fast, built with WP APIs :)

Fully configurable, enable or disable Gutenberg and restore the Classic Editor wherever is necessary.

_Automatically replaces Gutenberg with the Classic Editor._


**Features**

* Super simple
* Clean, secure code
* Built with the WordPress API
* Lightweight, fast and flexible
* Regularly updated and "future proof"
* Works great with other WordPress plugins
* Plugin options configurable via settings screen
* Focused on flexibility, performance, and security
* One-click restore plugin default options
* Translation ready

> Works great with Google AMP and the WordPress [AMP plugin](https://wordpress.org/plugins/amp/).

Disable Gutenberg is developed and maintained by [Jeff Starr](https://twitter.com/perishable), 15-year [WordPress developer](https://plugin-planet.com/) and [book author](https://books.perishablepress.com/).

_Super light & fast plugin, super easy on server resources!_


**Why?**

Gutenberg is a useful editor but sometimes you want to disable it for specific posts, pages, user roles, post types, and/or theme templates. This plugin enables you to disable Gutenberg and replace it with the Classic Editor wherever you want. For example, lots of WordPress users already enjoy robust page-building functionality via one of the many great plugins like Composer or Elementor. So many options, no need to feel "locked in" to using Gutenberg!

_If you like Disable Gutenberg, please give it a [5-star rating](https://wordpress.org/support/plugin/disable-gutenberg/reviews/?rate=5#new-post), thank you!_


**Privacy**

This plugin does not collect or store any user data. It does not set any cookies, and it does not connect to any third-party locations. Thus, this plugin does not affect user privacy in any way.


**Support development**

I develop and maintain this free plugin with love for the WordPress community. To show support, you can [make a donation](https://monzillamedia.com/donate.html) or purchase one of my books:

* [The Tao of WordPress](https://wp-tao.com/)
* [Digging into WordPress](https://digwp.com/)
* [.htaccess made easy](https://htaccessbook.com/)
* [WordPress Themes In Depth](https://wp-tao.com/wordpress-themes-book/)
* [Wizard's SQL Recipes for WordPress](https://books.perishablepress.com/downloads/wizards-collection-sql-recipes-wordpress/)

And/or purchase one of my premium WordPress plugins:

* [BBQ Pro](https://plugin-planet.com/bbq-pro/) - Super fast WordPress firewall
* [Blackhole Pro](https://plugin-planet.com/blackhole-pro/) - Automatically block bad bots
* [Banhammer Pro](https://plugin-planet.com/banhammer-pro/) - Monitor traffic and ban the bad guys
* [GA Google Analytics Pro](https://plugin-planet.com/ga-google-analytics-pro/) - Connect WordPress to Google Analytics
* [Simple Ajax Chat Pro](https://plugin-planet.com/simple-ajax-chat-pro/) - Unlimited chat rooms
* [USP Pro](https://plugin-planet.com/usp-pro/) - Unlimited front-end forms

Links, tweets and likes also appreciated. Thanks! :)



== Screenshots ==

1. Plugin Settings screen (showing default options)
2. Plugin Settings screen (showing expanded options)



== Installation ==

**Installing the plugin**

1. Upload the plugin to your blog and activate
2. Configure the plugin settings as desired
3. Enable theme switcher via settings or shortcode

[More info on installing WP plugins](https://wordpress.org/support/article/managing-plugins/#installing-plugins)


**Settings**

Out of the box, Disable Gutenberg makes your WordPress 100% Gutenberg-free. If you visit the settings page, you will see that the "Complete Disable" option is enabled, and so is the "Disable Nag" option. This is all that is required to disable Gutenberg (and the nag) sitewide.

Now, if you want to customize things and, say, only disable Gutenberg on specific post types, you can uncheck that first "Complete Disable" option. When you uncheck the box, more options will be displayed. So you can choose exactly where Gutenberg should be disabled.


**Whitelist**

In some cases, you may want to disable Gutenberg everywhere, but enable only on certain posts. To do this, set the "Complete Disable" option to __enabled__. Then visit the "Whitelist" settings to specify which posts always should open in the Block Editor.


**Important**

Do not use Disable Gutenberg with other plugins (like the Classic Editor plugin) that also disable or replace Gutenberg. Why? Because it may cause loading of redundant scripts, which may in turn lead to unexpected/untested results.


**Hide Menu Option**

Disable Gutenberg provides a setting to disable the plugin's menu item. This is useful if you don't want your clients to get curious and start fiddling around.

If you enable the option to hide the plugin's menu item, you will need to access the plugin settings page directly. It is located at:

`/wp-admin/options-general.php?page=disable-gutenberg`

So if WordPress is installed at this URL:

`https://example.com/`

..then you would access the plugin settings at:

`https://example.com/wp-admin/options-general.php?page=disable-gutenberg`

Or, if WordPress is installed in a subdirectory, for example:

`https://example.com/wordpress/`

..then you would access the plugin settings at:

`https://example.com/wordpress/wp-admin/options-general.php?page=disable-gutenberg`

So if you hide the plugin's menu item, you always can access the settings directly.


**More Tools**

The settings include a "More Tools" link. Clicking it toggles open some advanced options:

* Classic Widgets - Restores Classic Widgets
* Disable Nag - Disables "Try Gutenberg" nag
* Enable Frontend - Enables frontend block stylesheet
* Whitelist Options - Displays the whitelist settings
* Plugin Menu Item - Hides the Disable Gutenberg menu item
* Gutenberg Menu Item - Hides the Gutenberg plugin menu item (for WP less than 5.0)
* Display Edit Links - Displays "Add New (Classic)" menu links and Classic/Block edit links
* ACF Support - Enables the Custom Fields Meta Box (ACF plugin disables by default)
* Reset Options - Restores the default plugin options

If there are any questions about these items or anything else, feel free to [contact me directly](https://plugin-planet.com/support/#contact) or post in the [WP Support Forums](https://wordpress.org/support/plugin/disable-gutenberg/).


**Uninstalling**

This plugin cleans up after itself. All plugin settings will be removed from your database when the plugin is uninstalled via the Plugins screen.


**Going Further**

For developers wanting to customize further, check out:

* [How to Disable Gutenberg: Complete Guide](https://digwp.com/2018/04/how-to-disable-gutenberg/)
* [How to Selectively Enable Gutenberg Block Editor](https://digwp.com/2018/12/enable-gutenberg-block-editor/)


**Show Support**

I strive to make this free plugin the very best possible. To show support, please take a moment to leave a [5-star review](https://wordpress.org/support/plugin/disable-gutenberg/reviews/?rate=5#new-post) at WordPress.org. Your generous feedback helps to further growth and development of Disable Gutenberg. Thank you!



== Upgrade Notice ==

To upgrade this plugin, remove the old version and replace with the new version. Or just click "Update" from the Plugins screen and let WordPress do it for you automatically.

Note: uninstalling the plugin from the WP Plugins screen results in the removal of all settings and data from the WP database. 



== Frequently Asked Questions ==

**Will this work without Gutenberg?**

Yes. When Gutenberg is active, the plugin disables it (depending on your selected options) and replaces with the Classic Editor. Otherwise, if Gutenberg is not active, the plugin does nothing. So it's totally fine to install before Gutenberg is added to WP core, so it will be ready when the time comes.


**What's the difference between Classic Editor plugin?**

Classic Editor plugin enables you to disable Gutenberg across the board, and replace it with the Classic Editor. The Disable Gutenberg plugin does the exact same thing, in the exact same way, BUT it also provides more granular control over when and where Gutenberg is replaced with the Classic Editor. Disable Gutenberg plugin makes it easy to replace Gutenberg everywhere, OR you can choose to replace only for specific post types, user roles, post IDs, theme template, and more. Check out the list of features and compare them to the alternatives. It's not even close! ;)

Bottom line: both Disable Gutenberg and Classic Editor plugins are lightweight and enable you to replace Gutenberg with the Classic Editor for the entire site. The difference is that Disable Gutenberg also gives you advanced configuration options including menu hiding and more.


**Can I activate Disable Gutenberg without Gutenberg?**

Yes, you can install and activate Disable Gutenberg on any supported WordPress version (see Docs/readme.txt for details). If installed on WP versions less than 5.0 without the Gutenberg plugin active, the Disable Gutenberg plugin simply won't do anything (but you can still configure settings, etc.).


**Can I use this plugin and Classic Editor at the same time?**

Yes, if both plugins are active at the same time, Disable Gutenberg gives priority to Classic Editor plugin. So if you want to use Disable Gutenberg, deactivate the Classic Editor plugin (you do not have to remove it, just deactivate via the Plugins screen).


**Classic Editor planned to expire in 2022, what about Disable Gutenberg?**

I can't make any promises, but I intend to develop with WordPress for the long-haul. Who knows what the future holds, but the plan is to keep Disable Gutenberg going for many years to come. Why? Because the original RTE/Visual Editor is awesome. I strongly feel it's one of the many reasons why WordPress has enjoyed its great success. I've been using the original/classic editor for over 10 years now and it's always been 100% smooth experience. I've tried Gutenberg, and yes it is much better now than in previous versions, but for me it's just not as comfortable or streamlined as the classic editor. So yeah, will do everything possible to keep Disable Gutenberg (and the Classic Editor) going well beyond 2022.


**Why does Classic Editor plugin have way more users?**

Because it is being promoted by the Gutenberg developers and the "official" plugin for replacing Gutenberg. That's fine, but understand that Disable Gutenberg functions the same way AND provides way more features and settings. FWIW, I use Disable Gutenberg on my own sites Perishable Press, DigWP.com, Plugin Planet, and many others. 100% solid.


**Template exclusions not working?**

In order for template exclusions to work, the template must be registered with the page itself. The only way to do this is via the "Edit Page" screen, in the "Page Attributes" meta box. There you will find an option to set the page template. Remember to save your changes.

After assigning some templates, they will be recognized by Disable Gutenberg. So to disable Gutenberg on any registered template, you can add them via the plugin setting, "Disable for Templates". Examples:

* Template name is `page-custom.php`, located in the root theme directory: enter `page-custom.php` in the Template Exclusion setting
* Template name is `page-custom.php`, located in a subdirectory named `templates`: enter `templates/page-custom.php`


**The shortcut links are mixed up?**

In previous versions the default was to show the Gutenberg Editor links. In 1.5.2, the default is to hide the extra editor links. So what I'm guessing happened in this case is that you had a previous version of DG and changed some settings. When you did that, it set the "show edit links" option to the then default, which is enabled. So now that you have upgraded, that saved "enabled" option still applies. Now to fix, you can do one of two things:

- Visit the More Tools and disable the option to "Display Edit Links"
- Or simply click to Restore the default plugin settings

Either route will get you there.


**How to disable default Gutenberg frontend styles?**

The default Gutenberg/Block styles are disabled by default when DG plugin is active. To enable/disable the styles, visit the plugin setting, "Enable Frontend".


**Does this work with full site editing and block themes?**

No, because block themes rely on blocks. [See Block themes article](https://wordpress.org/support/article/block-themes/) for more information.


**Got a question?**

Send any questions or feedback via my [contact form](https://plugin-planet.com/support/#contact)



== Changelog ==

Thank you to everyone for using Disable Gutenberg and for all the [awesome 5-star reviews](https://wordpress.org/support/plugin/disable-gutenberg/reviews/)!

If you have any feedback or suggestions to make this plugin the absolute best it can be, and/or would like to help with development, please reach me via the [contact form](https://plugin-planet.com/support/#contact) at Plugin Planet.


**3.1 (2023/10/20)**

* Fixes activation bug w/ WP CLI ([Thanks](https://wordpress.org/support/topic/fatal-error-when-installing-via-wp-cli/) [@deanhibbert](https://wordpress.org/support/users/deanhibbert/))
* Updates default translation template
* Updates custom banner notice
* Tests on WordPress 6.4 (beta)

**3.0 (2023/07/10)**

* Improves font-icon CSS styles
* Improves localization function
* Adds custom notice on settings page
* Updates default translation template
* Tests on WordPress 6.3 (beta)

**2.9 (2023/02/26)**

* Removes non-UI CPTs from CPT options
* Improves logic when calling `get_current_screen()`
* Tests on WordPress 6.1 + 6.2 (beta)
* Tests on PHP 8.1 and 8.2

**2.8.1 (2022/11/02)**

* Disables new `classic-theme-styles` stylesheet
* Tests on WordPress 6.1

**2.8 (2022/09/25)**

* Adds "Show Support" link to plugin settings
* Adds custom footer text to plugin settings
* Improves plugin documentation
* Updates translation template
* Tests on WordPress 6.1

**2.7 (2022/05/15)**

* Disable block widgets option now enabled by default
* Disables new global `theme.json` styles on front end
* Disables new hidden SVG block content on front end
* Fixes bug with `disable_gutenberg_disable_post_type()`
* Tests on WordPress 6.0

**2.6 (2022/01/10)**

* Improves loading of translations
* Improves clarity on settings page
* Removes Edit Links when Gutenberg is disabled
* Updates some links to external resources
* Generates new default translation template
* Tests on WordPress 5.9

**2.5.1 (2021/07/25)**

* Fixes bug with not remembering editor
* Tweaks details on plugin settings page
* Improves readme.txt/documentation
* Further tests on WordPress 5.8

**2.5 (2021/07/13)**

* Adds option to disable block widgets and use classic widgets
* Generates new default translation template
* Tests on WordPress 5.8

**2.4 (2021/02/08)**

* Tests on PHP 7.4 and 8.0
* Tests on WordPress 5.7

**2.3 (2020/11/09)**

* Updates plugin script to account for changes in jQuery UI
* Tests on PHP 7.4 and 8.0
* Tests on WordPress 5.6

**2.2 (2020/08/02)**

* Improves targeted loading of plugin scripts
* Refines plugin setting page styles
* Refines readme/documentation
* Tests on WordPress 5.5

**2.1 (2020/03/13)**

* Bumps version number
* Tests on WordPress 5.4

**2.0 (2019/10/26)**

* Updates styles for plugin settings page
* Fixes bug with front-end script loading
* Fixes bug with disable for page templates
* Generates new default translation template
* Tests on WordPress 5.3

**1.9 (2019/09/02)**

* Updates check for existing Gutenberg plugin
* Improves logic of `disable_gutenberg_remove()`
* Updates hooks in `disable_gutenberg_hooks()`
* Updates some links to https
* Tests on WordPress 5.3 (alpha)

**1.8.1 (2019/04/29)**

* Fixes PHP Notice: "Trying to get property ID of non-object"
* Tests on WordPress 5.2

**1.8 (2019/04/28)**

* Bumps [minimum PHP version](https://codex.wordpress.org/Template:Server_requirements) to 5.6.20
* Fixes bug with block stylesheets and whitelisted posts
* Updates default translation template
* Tests on WordPress 5.2

**1.7 (2019/03/06)**

* Fixes bug with empty titles reverting to Gutenberg
* Removes requirement for custom fields for post types
* Resolves error when using as mu-plugin (Thanks [Dave Lavoie](https://ep4.com/))
* Adds enable/disable support for `wp-block-library-theme`
* Tweaks plugin settings screen UI
* Generates new default translation template
* Tests on WordPress 5.1 and 5.2 (alpha)

**1.6 (2019/02/02)**

* Just a version bump for compat with WP 5.1
* Full update coming soon :)

**1.5.2 (2018/12/11)**

* Changes default option for the menu and edit links
* Adds option to disable frontend Gutenberg styles
* Updates default translation template

**1.5.1 (2018/12/10)**

* Fixes possible false negative with whitelist settings
* Tests on WordPress 5.0

**1.5 (2018/12/10)**

* Increases minimum required WP version to 4.9
* Increases minimum required PHP version to 5.2.4
* Adds whitelist options for post IDs, slugs, titles
* Adds filter hook `disable_gutenberg_submenu_types`
* Adds option to enable Custom Fields Meta Box for ACF
* Adds "Block Editor" link to each post on Posts screen
* Adds option to disable "Add New (Classic)" menu link and "Classic Editor" edit link
* Improves Privacy Policy admin notice (thanks to Classic Editor plugin for the idea)
* Hides "Edit (Classic)" on Posts screen for posts where Gutenberg is disabled
* Removes `$current_screen` global where not needed
* Improves logic of `page_row_actions`
* Removes `disable_gutenberg_replace()`
* Improves logic in `classic-editor.php`
* Removes `/classic-editor/` library
* Refactors settings JavaScript file
* Hides the "More Tools" options by default
* Fine-tunes verbiage on plugin settings page
* Adds homepage link to Plugins screen
* Updates default translation template
* Tests on WordPress 5.0

**1.4 (2018/11/09)**

* Refactored for changes in Gutenberg plugin
* Checks for Classic Editor plugin is active
* Restores "Edit Classic" feature for WP 5.0+
* Further tests on WP 4.9.8 and 5.0 beta

**1.3.1 (2018/10/29)**

* Rolls back new "Edit Classic" feature introduced in 1.3
* Further tests on WP 5.0 beta

**1.3 (2018/10/27)**

* Refactored for WordPress 5.0 (Gutenberg merged into core)
* Ensures functionality on pre-5.0 WP versions
* Adds WP menu item: "Add New (Classic)"
* Adds post link to "Edit (Classic)"
* Tests on WordPress 5.0 (beta)

**1.2 (2018/08/14)**

* Adds `rel="noopener noreferrer"` to all [blank-target links](https://perishablepress.com/wordpress-blank-target-vulnerability/)
* Adds options to disable Gutenberg for specific post templates and post IDs
* Adds option to hide/remove the Gutenberg plugin menu item
* Adds Classic Editor replacement for WP 5.0 (in progress)
* Fixes object-related PHP warning in enqueue script
* Updates GDPR blurb and donate link
* Tweaks CSS on plugin settings page
* Adds "rate this" link to settings page
* Generates default translation template
* Further tests on WP versions 4.9 and 5.0 (alpha)

**1.1 (2018/05/06)**

* Removes unused .otf font file
* Adds option to disable "Try Gutenberg" nag (admin notice)
* Adds option to hide the plugin's menu item
* Further testing on WP 5.0 (alpha)

**1.0 (2018/04/16)**

* Initial release
