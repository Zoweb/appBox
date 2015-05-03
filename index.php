<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8" />
    <meta name="description" content="appBox: A jQuery Lightbox by Zoweb" />
    <style>
        body, html {
            margin:0;
            padding:0;
            background: #686868;
            font-family: 'Roboto Condensed','Source Sans Pro', 'Open Sans', Arial, Calibri;
            height:100%;
        }

        #page {
            background-color:white;
            width:85%;
            max-width:1200px;
            margin-left:auto;
            margin-right:auto;
            padding:10px;
            border-bottom-left-radius:5px;
            border-bottom-right-radius:5px;
        }

        a {
            cursor: hand;
        }

        .openapps {
            width:128px;
            height:128px;
            background-image:url('image.php?app=images&img=open');
            border:none;
            position:relative;
            top:-1px;
        }

        .button {
            width:128px;
            height:128px;
            border:none;
            transition:500ms ease-in-out;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-position: center;
            -webkit-transform: scale(0.9, 0.9);
            -moz-transform: scale(0.9, 0.9);
            -ms-transform: scale(0.9, 0.9);
            -o-transform: scale(0.9, 0.9);
            transform: scale(0.9, 0.9);
        }

        .button:hover {
            width:150px;
            height:150px;
            transition:500ms ease-in-out;
            -webkit-transform: scale(1, 1);
            -moz-transform: scale(1, 1);
            -ms-transform: scale(1, 1);
            -o-transform: scale(1, 1);
            transform: scale(1, 1);
        }

        #apps {
            width: 90%;
            max-width: 1200px;
            min-width: 200px;
            margin-left: auto;
            margin-right: auto;
            background-color: rgba(50, 50, 50, 0.75);
            height: 100%;
            position: relative;
            top: -132px;
            color: white;
            padding: 10px;
            min-height: 200px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        ::selection {
            text-shadow: none;
            background: #b3d4fc;
        }

        .separate {
            width:100%;
            height:1px;
            border:2px beige solid;
            margin-bottom:10px;
            margin-top:10px;
        }

        .side {
            position:absolute;
            width:50px;
            height:300px;
            right:0;
            top:50px;
            background-color:#8a8a8a;
            opacity:0;
            border-top-left-radius:5px;
            border-bottom-left-radius:5px;
            transition:500ms ease;
        }

        .side:hover {
            opacity:1;
            transition:500ms ease;
        }
    </style>
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <link rel="stylesheet" href="css/prism.css" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700|Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel='stylesheet' type='text/css'>
    <title>Zoweb Apps</title>
</head>
<body><!--style="-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;"-->
<script src="js/jquery.js"></script>
<script src="js/appBox.js"></script>
<script src="js/prism.js"></script>

<div id="page">
<h1>jQuery appBox</h1>
<div class="side"><div class="download"></div></div>
<p><a href="#" onclick="appBox('http://fnacpantherimage.toutlecine.com/photos/m/o/r/mort-au-large-1980-02-g.jpg', 1, 0);">Open Resized Large Image (no iFrame)</a><br>
<a href="#" onclick="appBox('http://www.biosurvey.ou.edu/okwild/misc/images/delphpic.jpg', 0, 1);">Open iFramed image</a><br>
<a href="#" onclick="appBox('http://example.org', 0, 1);">Open iFramed page</a></p>
<p>I'm sure you are wondering how to use it. Well, here's how:</p>
<p>To use it, all you need to do is use an <code class="language-html">onclick</code>, and trigger the function <code class="language-js">appBox('url', resizeImage, useIFrame)</code>. URL is the url of the image/page, resizeImage is 0 if no, 1 to make the image fit the whole appBox. useIFrame is 1 if you want to use a URL, not an image (where it is 0). resizeImage doesn't matter if 1 or 0 if this is 1. The <code class="language-html">a</code>'s <code class="language-html">href</code> tag, though, must have the value of <code class="language-html">#</code>.</p>
<p>Now all you need to do is include jQuery and appBox, and you are all set!</p>

<div class="separate"></div>

<a rel="license" href="#" onclick="appBox('http://creativecommons.org/licenses/by/4.0/', 0, 1)"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" href="#" onclick="appBox('http://purl.org/dc/dcmitype/Text', 0, 1)" property="dct:title" rel="dct:type">appBox</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="#" onclick="appBox('http://zoweb.me/', 0, 1)" property="cc:attributionName" rel="cc:attributionURL">Zoweb</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.
</div>

<script type='text/javascript'>
    window.onload=function(){function e(){var e=window.getSelection(),o="</p><p>This text was copied from Zoweb Apps. &copy; Zoweb 2015</p>",n=e+o,t=document.createElement("div");t.style.position="absolute",t.style.left="-99999px",document.body.appendChild(t),t.innerHTML=n,e.selectAllChildren(t),window.setTimeout(function(){document.body.removeChild(t)},100)}document.addEventListener("copy",e)};
</script>

</body>
</html>