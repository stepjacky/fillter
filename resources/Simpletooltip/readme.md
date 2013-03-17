Simpletoolip
============

![Simpletooltip logo](http://codingsomething.files.wordpress.com/2011/01/simpletooltip-logo1.png?w=200&h=200)
> _...is a Jquery plugin, thought to insert short tooltips to any element of your website more easily_

Features
--------

* Jquery based
* Minimal configuration
* 12 functional positions
* no extra html structures, use "title" attribute
* cross-browser
* lightweight and fast download, less than 8Kb

## Installation

Download the plugin and decompress files, put the folder simpletooltip in your tree project files, would be nice create a folder that contains it, for example js (/js/simpletooltip).

In the header of your document attach the scripts style-simpletooltip-min.css and jquery-simpletooltip-min.js, of course, you will need load Jquery first:

`<link rel="stylesheet" href="..../jquery-simpletooltip/style-simpletooltip.css" media="screen" />`

`<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>`
`<script src="..../simpletooltip/jquery-simpletooltip.js"></script>`

Initialize the plugin, it will detect all tooltips marked in the page:

`<script>
    jQuery(document).ready(function($) {
        $.simpletooltip();
    });
</script>`


## Usage

You can use Simpletooltip in any element easily, first declare the class simpletooltip, and complete the attribute title, that will be the content of the tooltip, for example:

`<h1 class="simpletooltip" title="And this is his tooltip">_This is a page title</h1>`

Simpletooltip is thought for use small and descriptive texts replacing the original yellow tooltip that browsers offers when we complete the attribute title, Anyway, you can insert content more complex, like linebreaks, lists, images, etc...

`<h1 class="simpletooltip" title="list options:<br /><ul><li>first option</li><li>second option</li><li>third option</li></ul>">lists</h1>`


## Positioning

Simpletooltip has 12 funcional positions, by default is located on 'top' position, you can choose: top, top-left, left-top, left, left-bottom, bottom-left, bottom, bottom-right, right-bottom, right, right-top, top-right.

To add the desired position, add the position name class:

`<div class="simpletooltip right-top">right top</div>`


## Color Themes

Simpletooltip has 4 color themes, the default theme is seablue, you can choose: seablue, pastelblue, darkgray, lightgray.

To add the desired theme, add the theme name class:

`<img src="./images/themesample-seablue.png" class="simpletooltip darkgray" title="Seablue Theme" />`

## Download

You can download the plugin (zip format) [from here](https://github.com/not-only-code/Simpletooltip/zipball/master), anyway also you can access to GIT repo Contribute with your ideas, bugs, new features on [Git issues](https://github.com/not-only-code/Simpletooltip/issues). If this plugin helped you, also you can [donate](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=MRNNVK3SDEQKN), thank you very much.