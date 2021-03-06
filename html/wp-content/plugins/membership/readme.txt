=== Membership 2 ===
Contributors: WPMUDEV
Tags: Membership, Membership 2, Subscription, Registration, Content Protection, Control Access, Paid Membership, Pay Wall, Paying Users, Restrict Content, WordPress Membership, Multisite Membership, WPMU DEV
Requires at least: 3.7
Tested up to: 4.2.4
Stable tag: trunk

Membership 2 transforms your WordPress website into a fully functional membership site.

== Description ==

<strong>Harder, Better, Stronger, Faster</strong><br />
The best membership plugin for WordPress just got even better – meet Membership 2. We completely rewrote Membership from the ground up to create a completely new, faster, more intuitive membership system.

Transform WordPress into a fully functional membership site. Provide access to downloads, online content, videos, forums, support and more through a flexible membership system. It’s simpler to use and more flexible than ever.

<strong>Simpler, More Powerful Controls</strong><br />
With Membership 2 there’s no guesswork and no messing around with confusing settings. Our setup wizard will guide you through configuring your membership site for the best results.

Choose one from one of four base membership options, then configure the perfect system to fit your site’s goals.

<ul>
<li>Standard Membership</li>
<li>Dripped Content Membership</li>
<li>Guest Membership</li>
<li>Default Membership</li>
</ul>

Use Membership 2 to protect all things WordPress – pages, posts, comments, content below the “read more” tag, categories, menus, URLs, special pages, content by user role, media files, forums, downloads, videos, support...you name it

<strong>Put Your Content Behind a Paywall</strong><br />
Get paid with PayPal, Stripe, Authorize.net, or good old fashioned manual payments. And, use automated processing and you can get paid without doing a thing.

Membership 2 even includes 25 currency options out-of-the-box so you can take payments from just about anywhere in the world.

<strong>Membership 2 Pro</strong><br />
Need even more? Upgrade to <a href="http://premium.wpmudev.org/project/membership/">Membership 2 Pro</a> and get access to all the features available in Membership 2 plus these premium add-ons:
<ul>
<li><strong>Fully integrated coupon system</strong> – offer special promotions and attract new users</li>
<li><strong>Recurring payment options</strong> – set users up on an ongoing automated payment plan</li>
<li><strong>Admin-side protection rules</strong> – protect elements inside the WordPress Dashboard</li>
<li><strong>Custom post-type protection</strong> – protect post-types not native to WordPress core</li>
<li><strong>Advanced media protection rules</strong> – more control when protecting media</li>
<li><strong>Network Wide Protection</strong> – manage membership on your entire Multisite network from one place</li>
</ul>
<a href="http://premium.wpmudev.org/project/membership/">Upgrade to the full version now »</a>

Download Membership 2 today – the new standard in WordPress and Multisite membership systems.

== Installation ==

**To install**

1.  Download the plugin file
2.  Unzip the file into a folder on your hard drive

**Standard WP/WPMS (for blog by blog access)**

1.	Upload the membership folder and all it contents to /wp-content/plugins folder on your site
2.	The path to the main plugin file is wp-content/plugins/membership/membership.php

**To activate it on a blog by blog basis**

1.  Log into the blog dashboard that you want to set up membership on.
2.  Go to Plugins > Installed
3.  Click on Activate under Membership lite system

**Enabling your membership plugin**
By default, the membership plugin is disabled when first installed and when you go your Membership Dashboard you will see it says Disabled.

You need to leave this as disabled until you have at least:

1.	Set up your categories
2.	Created and activated a basic level to use for strangers
3.	Assigned the stranger level in Membership > Edit Options panel

If you are running a live site and enable the plugin in your Membership dashboard all content will be automatically protected until you have set up the stranger level.

**The Admin user**
The membership system can initially be administered by the admin user and is always disabled on the front end of your site for this user, you can add other users to the membership administration group by editing them in WordPress and ticking the Membership admin box at the bottom of the User Edit page.

= More Instructions on setup =
More instructions and screenshots on how to configure the Membership plugin can be found on the <a href='http://premium.wpmudev.org/project/membership/installation/'>WPMU DEV site</a>.

= Need help getting started? =
We provide comprehensive and guaranteed support on the <a href='http://premium.wpmudev.org/forums/tags/membership'>WPMU DEV forums</a> and <a href='http://premium.wpmudev.org/live-support/'>live chat</a>.

== Frequently Asked Questions ==

= How easy is it to set up? =
We have an indepth step by step guide to getting the plugin initially setup and configured <a href='http://premium.wpmudev.org/project/membership/installation/'>here</a>.

= Get Support =
We provide comprehensive and guaranteed support on the <a href='http://premium.wpmudev.org/forums/tags/membership'>WPMU DEV forums</a> and <a href='http://premium.wpmudev.org/live-support/'>live chat</a> only.

== Screenshots ==

1. The Membership admin menu
2. Membership dashboard and news stream
3. Attractive signup statistics
4. Bulk administer Membership Levels
5. Extendable content rules
6. Level edit screen makes it easy to protect content
7. Simply drag content rules to the relevant area to allow or prevent access
8. Define the subscription path a user passes through during their subscription
9. Drag and drop to add levels to a subscription or re-arrange the levels order.
10.	Allow paid or free subscriptions
11. Highly configurable with **a lot** of options and hooks / filters available.

== Changelog ==

= 4.0.0.5 =
* Fix an fatal error in membership editor screen
* Fix displayed payment method for subscriptions in Member editor screen
* Small improvements and fixed php notices

= 4.0.0.4 =
* Fix several fatal errors (last update did copy some wrong files, sorry for this!)

= 4.0.0.3 =
* Add a dedicated Edit Membership page with improved layout
* Add a new Add/Edit Member page where subscription details can be modified
* Improve caching and reduce SQL queries to make the plugin faster
* Improve HTML output of shortcodes to be compatible with most themes (remove line breaks inside HTML tags)
* Improve payment logs to display additional/better information for errors
* Improve the Billings list (status-indicator, overdue payments, quick-pay for manual payment gateway)
* Add a new Automated Email Response: User account created (i.e. welcome email)
* Add a warning when BuddyPress pages conflict with M2 Membership pages
* Add a warning when using a wrong value in the PayPal Standard settings
* Add an admin notice when no payment gateway is active but paid memberships exist
* Add an edit page to change the Membership Type at any time
* Add bulk actions to the Members admin page
* Add link to Members-List from the Membership list (click on the member-count value)
* Add logging for payment gateway transactions, can be viewed via "Billings > View Transaction logs"
* Add new functions to Payment Logs to manually handle invalid payments
* Add new option to customize which users are considered Admin users (details in the Help > Advanced page)
* Add new template tag function `ms_has_membership()`
* Add possibility to change payment options even when membership has active subscribers!
* Add template support so themes can define custom Membership pages (m2-account.php, m2-memberships.php, m2-protected-content.php, m2-register.php, m2-registration-complete.php, m2-invoice.php)
* Fix a caching issue that caused problems with Subscriptions when memcache was enabled
* Fix a critical bug that caused protection rules to be reset on plugin activation
* Fix a minor security hole in the data import module
* Fix a PHP error that occured when paying the first invoice of a member via manual gateway
* Fix a rare 403 error that happened when a user was accessing protected content
* Fix a typo in the PayPal Single gateway that caused M2 to ignore some payment information
* Fix a wrong action hook used in registration form that would display wrong fields when certain plugins are activated
* Fix a wrong parameters that limited search results of list tables to 5 items in some cases
* Fix Billings search logic to find all users that contain the search word (no exact username required anymore)
* Fix bug that did not activate Subscription when an invoice was paid via Manual Gateway
* Fix bug that prevented deleting invoices
* Fix bug that set the wrong expire date for "Finite Access" subscriptions
* Fix bug that would always add M2 menu items when a new membership is created
* Fix bug that would not give access to protected content while user is in trial period
* Fix bug that would send some emails even when the 'MS_STOP_EMAILS' flag was active
* Fix bugs that prevented removing protection from individual posts or pages
* Fix compatibility issue with WP Recaptcha during user registration
* Fix issue that did not display any "Page" rules in the Membership Overview screen
* Fix Mailchimp Add-on to fetch all lists from Mailchimp, not only 25
* Fix plugin logic to allow changing Protection Rules even when Content Protection is disabled
* Fix plugin translation using .mo files, added a readme file with instructions to /languages dir
* Fix possible memory issue that happened when updating the plugin
* Fix protection of the Private Message feature in the BuddyPress Add-on
* Fix rare error that happened when dripped content had no/invalid date settings
* Fix registration logic to honor domain limitation for signup email addresses
* Fix the bulk actions in the Protecion Rules page
* Fix the description text of the ms-protected-content shortcode for admin users
* Fix the search function on the Members page
* Fix two possible infinite loops that resulted in timeouts or rule values not being saved
* Fix wrong rounding-logic in Stripe gateway
* Fix wrong subscription logic that activated Subscriptions without payment in a few cases
* Fix wrong WordPress action that was called in the user-registration form
* Hide inactive memberships in the Members and Protection Rules pages
* Hide the Guest and Default memberships in the Members list, as they are useless there
* Remove condition that auto-injected missing M2 shortcodes on Membership pages
* Improve the BuddyPress Add-on to optionally use the M2 registration page
* Improve Transaction logs to also log inactice or invalid gateway calls
* Improved third party library by adding a class prefix to avoid class collisions (Stripe, Mailchimp, AuthorizeNet)
* Improved and added some API functions (see the API Docs link in the Help page)
* A lot of small improvements behind the scenes (cleanup, fix warnings, add new filters, etc.)

= 4.0.0.2 =
* Fix the import tool to import data from old Membership plugin correctly (recurring payments, subscription status and end date)
* Fix the i18n support, the plugin is translated correctly again
* Fix error message that was displayed when dates of dripped memberships were saved

= 4.0.0.1 =
* Fix fatal error that was displayed right after update
* Fix compatibility issues with PHP 5.2.4 - note that you still need PHP 5.3 to use the Stripe Gateways
* Fix a major bug in the automatic import wizard that prevented the plugin from importing old Membership data
* Fix wrong redirect during setup wizard that ended in "Not allowed to view page" errors
* Fix the protection rule for "Friendship Request" in the BuddyPress Add-on
* Fix a bug in the Coupons Add-on that discarded changes instead of saving them
* Fix some PHP notices and warnings that did happen during first setup
* Fix some typos in admin pages
* Rename page "Protected Content" to "Protection Rules"

= 4.0.0.0 =
* Plugin name changed from Protected Content to Membership 2 
* New official plugin API added (see Membership 2 > Help page) 
* New Payment gateway added: Stripe Subscriptions 
* New option in Membership Payment settings to disable individual payment gateways. 
* Improved payment settings page to use number-input fields instead of text-fields 
* Fix issue where Simulation (Test) mode added HTML code to all Ajax responses 
* Fix blank screen after submitting the password reset form 
* Minor improvements all over the place

= 3.4.4.3 =
* Fixed: Shortcodes now work on the Protected Content page.

= 3.4.4.2 =
* Modified: [subscriptionprice] shortcode now accepts new argument, level, to choose which price of the description to show.  E.g. [subscriptionprice subscription=“1” level=“1”]
* Fixed: Deleting a user now also drops the subscription. Also fixes incorrect membership counts.
* Fixed: Fixed deprecated database prepare code.
* Fixed: Deprecated PHP code.

= 2.0.7 =
* WP3.3 Styling Compatibility

= 2.0.6 =
* WP3.2 Compatibility

= 2.0.2 =
* Bug fixes

= 2.0 =
* Removes need for set admin usernames - now detects who activated plugin
* Added persistent configuration capability
* Added redirecting No Access page
* Added URL Groups settings and rules
* Added quick start steps
* Added Communications capability - automessage for membership
* Added Pings system
* Added integration with WP roles
* Added Account page setting and shortcode
* Added renewal and upgrade functionality and shortcode
* Added single payment paypal gateway
* Added upgrade and cancel capability to paypal gateways
* Fixed filtering problems with members admin page
* Fixed general bugs and other issues
* Added more hooks and filters for customisation
* Added define checks to completely override signup / subscription / renewal and account pages
* Added filters to override the register and account links for standard wordpress to now direct to membership pages.

= 1.0.2 =
* Allowed membership admin menu to be visible for all admin level users

= 1.0 =
* Initial release.