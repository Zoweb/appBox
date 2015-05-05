#jQuery appBox
### A Lightbox created by Zoweb
appBox allows for images and webpages without having to reload. Clone it to your desktop to have a look at how it works, or go ~~[here](http://zoweb.me/apps/appbox "jQuery appBox")~~ for the one on my website.
## How to use it
All you need to do is include appBox (`<script src="js/appbox.js"></script>`) and jQuery (`<script src="js/jquery.js></script>`). Then just use a link with a href of `#`  and an onclick of `appBox('location', resizeImage, useIFrame)` where `location` is the URL of the image/page, `resizeImage` being `1` (yes) to have the image fill the appBox, or `0` (no) to have it be the usual size (can overflow over the appBox). Set `useIFrame` to `1` to use an iFrame, or `0` to not. (`resizeImage` only changes anything if `useIFrame` is set to `0`). Make sure to set it to `1` if you are using a webpage, otherwise it will infinitely load. This is the same with having URLs that don't exist (like `google.com` or `http://doesnt.exist` - the problem with the first is that it would show `yourpage/google.com` not `http://google.com`).

#### ~~You can find an example at [my website](http://zoweb.me/apps/appbox "jQuery appBox")~~


----------


######(c) zoweb 2015
