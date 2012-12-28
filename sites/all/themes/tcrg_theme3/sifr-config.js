/*****************************************************************************
It is adviced to place the sIFR JavaScript calls in this file, keeping it
separate from the `sifr.js` file. That way, you can easily swap the `sifr.js`
file for a new version, while keeping the configuration.

You must load this file *after* loading `sifr.js`.

That said, you're of course free to merge the JavaScript files. Just make sure
the copyright statement in `sifr.js` is kept intact.
*****************************************************************************/

// Make an object pointing to the location of the Flash movie on your web server.
// Try using the font name as the variable name, makes it easy to remember which
// object you're using. As an example in this file, we'll use Futura.

// var futura = { src: '/path/to/futura.swf' };
var hotel_coral_essex = { src: 'http://www.terminalcityrollergirls.com/sites/all/themes/tcrg_theme2/hotel_coral_essex.swf' };
var whitney = { src: 'http://www.terminalcityrollergirls.com/sites/all/themes/tcrg_theme2/whitney.swf' };

// Now you can set some configuration settings.
// See also <http://wiki.novemberborn.net/sifr3/JavaScript+Configuration>.
// One setting you probably want to use is `sIFR.useStyleCheck`. Before you do that,
// read <http://wiki.novemberborn.net/sifr3/DetectingCSSLoad>.

// sIFR.useStyleCheck = true;

// Next, activate sIFR:
sIFR.activate(hotel_coral_essex, whitney);

// If you want, you can use multiple movies, like so:
//
//    var futura = { src: '/path/to/futura.swf' };
//    var garamond = { src '/path/to/garamond.swf' };
//    var rockwell = { src: '/path/to/rockwell.swf' };
//    
//    sIFR.activate(futura, garamond, rockwell);
//
// Remember, there must be *only one* `sIFR.activate()`!

// Now we can do the replacements. You can do as many as you like, but just
// as an example, we'll replace all `<h1>` elements with the Futura movie.
// 
// The first argument to `sIFR.replace` is the `futura` object we created earlier.
// The second argument is another object, on which you can specify a number of
// parameters or "keyword arguemnts". For the full list, see "Keyword arguments"
// under `replace(kwargs, mergeKwargs)` at 
// <http://wiki.novemberborn.net/sifr3/JavaScript+Methods>.
// 
// The first argument you see here is `selector`, which is a normal CSS selector.
// That means you can also do things like '#content h1' or 'h1.title'.
//
// The second argument determines what the Flash text looks like. The main text
// is styled via the `.sIFR-root` class. Here we've specified `background-color`
// of the entire Flash movie to be a light grey, and the `color` of the text to
// be red. Read more about styling at <http://wiki.novemberborn.net/sifr3/Styling>.
sIFR.replace(hotel_coral_essex, {
  selector: 'h1',
  css: '.sIFR-root { color:#b5111a; display:block; letter-spacing:1 }',
	wmode: 'transparent'
});
sIFR.replace(hotel_coral_essex, {
  selector: 'h2, .view-League-Info .views-field-title',
  css: '.sIFR-root { color:#171f26; word-spacing:-5; letter-spacing:1; font-size:22px } a:link { color:#171f26; text-decoration:none } a:visited { color:#171f26; text-decoration:none } a:hover { color:#9b1b21 } a:active {}',
	wmode: 'transparent'
});
sIFR.replace(hotel_coral_essex, {
  selector: '.sidebar h3',
  css: '.sIFR-root { color:#171f26; letter-spacing:1; font-size:18px }',
	wmode: 'transparent'
});
sIFR.replace(whitney, {
  selector: '#header h3, #search-block-form label',
  css: '.sIFR-root { color:#ffffff; letter-spacing:-1; font-size:20px }',
	wmode: 'transparent'
});
