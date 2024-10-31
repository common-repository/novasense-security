=== NovaSense ===
Contributors: snaptofficial
Tags: security,firewall,novasense
Requires at least: 2.0
Tested up to: 5.5
Requires PHP: 5.5
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

NovaSense automatically blocks IP addresses associated with attacks, spam, abuse, DoS, and more, dramatically increasing the security of your site.

== Description ==

Pre-emptive security platform that prevents hackers, infected hosts, spammers, DoS hosts and more from reaching your site with NovaSense threat intelligence.

The NovaSense threat feeds are IP addresses that firewalls, ADCs, and other systems can block to prevent attacks. These are made up of data collected from online, intelligence data from Nova WAFs, Aria WAFs, honeypots, and from Snapt threat lists. These feeds are then analysed, tested and augmented by the NovaSense threat engine to deliver intelligent threat feeds.


== Block Categories ==

*   Threats - Threats are hosts that have attempted to exploit, brute force, or execute a denial of service attack. These are often compromised hosts, and can generally be blocked.
*   Abusers - Confirmed spammers, comment spam, link spam, abusive crawlers and other miscellaneous abuses. Typically safe to block, but can have false positives.
*   Malware - Systems that are infected with or involved in spreading malware and ransomware. Typically blocked on incoming firewalls but also useful on WordPress.
*   Botnets - Known botnet and C&C servers, a smaller list of confirmed active botnet systems to be blocked at all times.

== Benefits ==

NovaSense adds an additional layer of security to your site by preventing known threats and attackers from sending requests to it, and reducing the amount of server load caused by spammer and DoS attacks.

Additionally, it cleans up a lot of comment spam from blocking known spammers and compromised hosts.

== Screenshots ==

1. The configuration page where you select what type of threats to block.
2. The block page that's shown to an attacker.

== Installation ==

To install this plugin:

1. Install the plugin through the WordPress admin interface, or upload the plugin folder to /wp-content/plugins/ using ftp.
2. Activate the plugin through the 'Plugins' screen in WordPress. On a Multisite you can either network activate it or let users activate it individually. 
3. Go to WordPress Admin > Settings > NovaSense

== External Service Information ==

In order to lookup IP addresses to block this plugin sends a DNS lookup for each IP address to IP.rbl.novasense-threats.com. This is known as a DNSBL or RBL service. This service is run by NovaSense (the developers of this plugin) and terms and conditions are available on the site at https://novasense-threats.com.

== Changelog ==

= 1.2 = 
* Date: 2020/08/15
* Updates to the readme, assets.

= 1.1 =
* Date: 2020/08/14
* Fixed an issue with the plugin hook name.

= 1.0 =
* Date: 2020/08/13
* First release of the plugin.