=== Clyp ===
Contributors: clyp, ramiy
Tags: clyp, audio, oEmbed, embed, shortcode
Requires at least: 3.5
Tested up to: 4.9
Stable tag: 1.3
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Embed audio from clyp.it into your WordPress site.

== Description ==

Upload your audio files to [Clyp.it](https://clyp.it) and embed them to your WordPress site.

= About Clyp.it =

[Clyp](https://clyp.it) is a simple way to record, discover, and share the everyday sounds in your life with friends.

The platform enables anyone (no account required) to easily record and upload audio through a web browser, iPhone or Android device and share it with your existing social networks like Facebook, Twitter, Reddit and more.

Clyp provides every audio file with a short, unique link that makes sharing as easy as possible.

= Clyp WordPress Plugin =

Using this plugin you can embed your sounds from Clyp into your WordPress site using the audio URL or audio ID.

Choose any audio from Clyp, or create your own! Copy the audio URL and paste it to the post text editor. Then simply click over to the visual editor to confirm that it loads properly.

Alternatively, you can embed audio to your content using the `[clyp id=""]` shortcode and the audio ID.

= More Information =

For any questions or more information, please [support@clyp.it](mailto:support@clyp.it).

== Installation ==

= Installation =
1. In your WordPress Dashboard go to "Plugins" -> "Add Plugin".
2. Search for "Clyp".
3. Install the plugin by pressing the "Install" button.
4. Activate the plugin by pressing the "Activate" button.

= Minimum Requirements =
* WordPress version 3.5 or greater.
* PHP version 5.2.4 or greater.
* MySQL version 5.0 or greater.

= Recommended Requirements =
* The latest WordPress version.
* PHP version 7.0 or greater.
* MySQL version 5.6 or greater.

== Screenshots ==
1. Pasting the URL in the text-editor.
2. Pasting the URL in the visual-editor.

== Frequently Asked Questions ==

= How do I embed an audio from Clyp? =

With this plugin you can use the URL to embed an audio. Just paste the audio URL into your post editor:
`https://clyp.it/bbap3oir`

= How do I set custom dimensions to my audio? =

Since WordPress 4.2, you can double click the embedded item to set max width and max height. It will add the WordPress `[embed]` shortcode:
`[embed width="600" height="150"]https://clyp.it/bbap3oir[/embed]`

**Note:** Doing it the WordPress way, using the `[embed]` shortcode, is backwards and forward compatible, and it works with all the themes.

= How do I embed audio with auto width & height? =

You can use the Clyp shortcode to embed audio:

`[clyp id="bbap3oir"]`

== Changelog ==

= 1.5 (2016-04-04) =
* Add shortcode.
* Move plugin files to 'includes' directory.

= 1.2 (2015-11-30) =
* Add screenshots.
* Remove po/mo files from the plugin.
* Use [translate.wordpress.org](https://translate.wordpress.org/) to translate the plugin.

= 1.1 (2015-06-21) =
* Add i18n support.
* Add Hebrew (he_IL) translation.

= 1.0 (2015-05-22) =
* Initial release.
* Register oEmbed provider.
