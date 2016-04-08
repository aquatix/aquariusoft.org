
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
