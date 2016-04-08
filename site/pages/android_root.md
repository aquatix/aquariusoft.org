
<p>root on your Nexus and what to do with it. How to get root (not a custom ROM, just more control over your device), what trics you can do with it and how to update your device.</p>

[TOC]

## Rooting a Nexus device

XDA has [an excellent write-up about how to root the Nexus 6P](http://forum.xda-developers.com/nexus-6p/general/guides-how-to-guides-beginners-t3206928).


<pre><code class="bash">
fastboot oem unlock

# or, on for example the 6P and likely some other new devices:

fastboot flashing unlock
</code></pre>

*Be carefull*: this will factory-reset your device, wiping it completely clean, so be sure to copy your images and such to your pc/NAS/cloud before doing this.


## Updating a rooted device with changes on /system partition

SuperSU systemless root tries to keep your OTA's (Over-The-Air updates) working. As those check whether changes took place on your device that they don't expect, you may not be able to install an OTA update if you changed something on your `system` partition, for example a `hosts` file (adblocking), or by removing apps.


## No navigation bar

1. Add `qemu.hw.mainkeys=1` to the end of your build prop. This permanently hides the Nav Bar
2. Install [Swipe Navigation](https://play.google.com/store/apps/details?id=com.suphi.swipenavigation). This will make it so you navigate by swiping where the Nav Bar used to be. It's totally invisible and utterly intuitive, you literally just swipe up from the edge, no buttons, no timing to trigger something, no worrying about how far or fast you swiped... it just works.

@@@androidapp=com.suphi.swipenavigation@@@

[source](http://forum.xda-developers.com/showpost.php?p=66234315&postcount=3544) / [Swipe navigation forum thread](http://forum.xda-developers.com/android/apps-games/app-swipe-navigation-navigation-bar-t3272478)
