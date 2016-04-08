
<p>root on your Nexus and what to do with it. How to get root (not a custom ROM, just more control over your device), what trics you can do with it and how to update your device.</p>

[TOC]

## Rooting a Nexus device

<div class="updatedat">updated @ 2016-04-08</div>

XDA has [an excellent write-up about how to root the Nexus 6P](http://forum.xda-developers.com/nexus-6p/general/guides-how-to-guides-beginners-t3206928).


<pre><code class="bash">
fastboot oem unlock

# or, on for example the 6P and likely some other new devices:

fastboot flashing unlock
</code></pre>

*Be carefull*: this will factory-reset your device, wiping it completely clean, so be sure to copy your images and such to your pc/NAS/cloud before doing this.


## Updating a rooted device with changes on /system partition

<div class="updatedat">updated @ 2016-04-08</div>

SuperSU systemless root tries to keep your OTA's (Over-The-Air updates) working. As those check whether changes took place on your device that they don't expect, you may not be able to install an OTA update if you changed something on your `system` partition, for example a `hosts` file (adblocking), or by removing apps.


## No navigation bar

<div class="updatedat">updated @ 2016-04-08</div>

1. Add `qemu.hw.mainkeys=1` to the end of your build prop. This permanently hides the Nav Bar
2. Install [Swipe Navigation](https://play.google.com/store/apps/details?id=com.suphi.swipenavigation). This will make it so you navigate by swiping where the Nav Bar used to be. It's totally invisible and utterly intuitive, you literally just swipe up from the edge, no buttons, no timing to trigger something, no worrying about how far or fast you swiped... it just works.

@@@androidapp=com.suphi.swipenavigation@@@

[source](http://forum.xda-developers.com/showpost.php?p=66234315&postcount=3544) / [Swipe navigation forum thread](http://forum.xda-developers.com/android/apps-games/app-swipe-navigation-navigation-bar-t3272478)


## How to fix Secure Settings on Android devices with SuperSU systemless root

<div class="updatedat">updated @ 2016-04-08</div>

[Taken from my weblog](http://dammit.nl/p/962)

[Secure Settings](http://securesettings.intangibleobject.com/) ([Google Play](https://play.google.com/store/apps/details?id=com.intangibleobject.securesettings.plugin&hl=en)) is a really helpful app to help [Tasker](http://tasker.dinglisch.net/) ([Google Play](https://play.google.com/store/apps/details?id=net.dinglisch.android.taskerm&hl=en)) do things automatically on your Android device.

However, it has not been updated for quite a while (January 2015 at the time of this writing) and since then SuperSU has changed its way of installing the `su` binary to your device, by preferring not to install this on the `system` partition.

As some older apps hardcode the complete path of this binary in their checks, and Secure Settings is one of these, it thinks it can not get root access.

On my quest of a fix for this problem, I [found this post on XDA](http://forum.xda-developers.com/showpost.php?p=66190182&postcount=2707) where a [comment on Reddit](https://www.reddit.com/r/tasker/comments/3uf5bn/secure_settings_doesnt_recognize_root_even_though/cxtvflb) was referenced, stating the following fix, running the commands from a command line (terminal) on your machine, having `adb` installed:

<pre><code class="bash">
adb shell
su
mount -o remount,rw /system
touch /sbin/su /system/bin/su /system/xbin/su
mount -o remount,ro /system
exit
reboot
</code></pre>

[source](https://www.reddit.com/r/tasker/comments/3uf5bn/secure_settings_doesnt_recognize_root_even_though/cxtvflb)

This creates some empty files in locations that older (incorrect) apps check for the `su` binary, so Secure Settings (and likely other applications) are made to believe they can get root (which they actually can, as you can not make those files without being root through `su` anyway).

You can also do this on your device by just omitting the first line and starting with `su` in a Terminal app (or for example [JuiceSSH](https://play.google.com/store/apps/details?id=com.sonelli.juicessh&hl=en) in a local session).

I hope this helps other people looking for a solution too.
