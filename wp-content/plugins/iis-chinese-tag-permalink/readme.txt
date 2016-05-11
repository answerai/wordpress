=== IIS Chinese Tag Permalink  ===
Contributors: bossma
Donate link:http://blog.bossma.cn
Tags: chinese tag, iis
Requires at least: 3.1
Tested up to: 3.1
Stable tag: 1.2

== Description ==

In iis,if you use chinese tag and custom rewrite permalinks, it will get a 404 error.
Perhaps this is because the IIS to get the URL with the GBK encoding,but the wordpress with UTF8.

This plugin can solve the above problem. 

Also,you must install the "WordPress URL Rewrite" on IIS first.
You can get it from "http://www.binaryfortress.com/wordpress-url-rewrite".

== Installation ==

1. Upload `iis-chinese-tag-permalink` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Need to install iis rewrite component?  =

Yes.With WordPress URL Rewrite.

== Changelog ==
= 1.2 =
* Fix:the 'is_tag' coludn't identified by the WordPress 3.1.I have not tested in the previous version. 

= 1.1 =
* Resolved:Some chinese tag can not match correctly still.

= 1.0 =
* This is the first version.

== Upgrade Notice ==
= 1.2 =
Re-upload and cover,or online auto upgrade.

= 1.1 =
Re-upload and cover.

= 1.0 =
This is the first version.

== Screenshots ==
nothing