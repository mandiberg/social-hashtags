# Social Hashtag

**Mandiberg et al. Updates, order of importance**

**Thomas, first steps**

* Change code to keep hashtag (save code that removes hashtag)
* ~~Expose all valuable data for each post (Username, Timestamp, Platform twi/insta, Permalink to original platform post, etc). Add these to The Loop, with WP API functions (e.g. the_title(); )~~
* Add Infinite Scroll (https://www.google.com/search?q=wordpress+infinite+scroll)


**Janice**

* Make a set of 3 to 5 design comps based off of the example we discussed
* Discuss and revise with Michael (Tuesday June 24?)
* Shadow Thomas' work with the WP API in The Loop in archive-social_hastag.php
* Finalize the design, then make HTML/CSS to overlay on The Loop.
* Make sure styling is kosher for cross-browser AND mobile

**Claire**

* Shadow Janice's design and CSS work
* Shadow Thomas' work with the WP API in The Loop in archive-social_hastag.php

**Thomas, second steps**

* Add functionality for Tumblr, Facebook...?
* Abstract custom API token as a parameter set in Settings
* Figure out the "Uknown Error" when running manually for Twitter
* Make keep hashtag or remove hashtag an option in settings
* Make pull request to reincorporate into original version

**Installation**

* Upload dntly folder to the `/wp-content/plugins/` directory
* Activate the plugin through the 'Plugins' menu in WordPress

**Usage**

* Add an API source & hashtag to pull from
* Run manually or set a cron schedule to run automatically

**Notes**

Duplicates can occur if you run it manually while it's running already.  If you get duplciates, you can delete either one, or delete both and re-run it manually - just make sure you empty the trash because it looks in the trash for existing posts as well.
