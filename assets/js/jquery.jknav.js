/*
 jknav
 @name      jquery.jknav.js
 @author    Yu-Jie Lin http://j.mp/Google-livibetter
 @version   0.5.0.1
 @date      05-24-2011
 @copyright (c) 2010, 2011 Yu-Jie Lin <livibetter@gmail.com>
 @license   BSD License
 @homepage  http://code.google.com/p/lilbtn/wiki/JsJqueryJknav
 @example   http://lilbtn.googlecode.com/hg/src/static/js/jquery/jquery.jknav.demo.html
*/
(function(a){function h(d){var b=window.console;a.jknav.DEBUG&&b&&b.log&&b.log("jknav: "+d)}function j(d,b){var c=a.jknav.index[b.name];h("Calculating index for "+b.name+", current index = "+c);if(c==null){var f=a(a.jknav.TARGET).scrollTop();h(a.jknav.TARGET+" top = "+f);a.each(a.jknav.items[b.name],function(e,g){var k=Math.floor(a(g).offset().top);if(f>=k)c=e});if(c==null)c=d>0?0:a.jknav.items[b.name].length-1;else if(d>0&&++c>=a.jknav.items[b.name].length)c=0;else if(d<0&&f==Math.floor(a(a.jknav.items[b.name][c]).offset().top)&&
--c<0)c=a.jknav.items[b.name].length-1}else{if(!b.circular&&(c==0&&d==-1||c==a.jknav.items[b.name].length-1&&d==1))return c;c+=d;if(c>=a.jknav.items[b.name].length)c=0;if(c<0)c=a.jknav.items[b.name].length-1}h("new index = "+c);return a.jknav.index[b.name]=c}function i(d,b){if(d.target.tagName.toLowerCase()=="input"||d.target.tagName.toLowerCase()=="button"||d.target.tagName.toLowerCase()=="select"||d.target.tagName.toLowerCase()=="textarea")h("keyup: "+d.target.tagName+", target is INPUT ignored.");
else{var c=String.fromCharCode(d.keyCode).toLowerCase();h("keyup: "+d.target.tagName+", key: "+c);if(c==b.up.toLowerCase()||c==b.down.toLowerCase()){if(b.reevaluate)a.jknav.index[b.name]=null;var f=j(c==b.down.toLowerCase()?1:-1,b);c=a(a.jknav.items[b.name][f][0]);a(a.jknav.TARGET).animate({scrollLeft:Math.floor(c.offset().left),scrollTop:Math.floor(c.offset().top)},b.speed,b.easing,function(){var e=a.jknav.items[b.name][f][1];e&&e(a.jknav.items[b.name][f][0])})}}}a.fn.jknav=function(d,b){if(b==null)b=
"default";if(a.jknav.items[b]==null)a.jknav.items[b]=[];return this.each(function(){a.jknav.items[b].push([this,d]);a.jknav.items[b].sort(function(c,f){var e=a(c[0]).offset().top,g=a(f[0]).offset().top;if(e<g)return-1;if(e>g)return 1;if(e==g){e=a(c[0]).offset().left;g=a(f[0]).offset().left;if(e<g)return-1;if(e>g)return 1;return 0}})})};a.jknav={index:{},items:{},opts:{},default_options:{up:"k",down:"j",name:"default",easing:"swing",speed:"normal",circular:true,reevaluate:false},DEBUG:false,TARGET_KEYUP:"html",
TARGET:!a.browser.webkit?"html":"body",init:function(d){var b=a.extend(a.extend({},a.jknav.default_options),d);a.jknav.index[b.name]=null;a.jknav.opts[b.name]=b;a(a.jknav.TARGET_KEYUP).keyup(function(c){i(c,b)});h('new set "'+b.name+'" initialzed.')},up:function(d){d=a.jknav.opts[d||"default"];i({target:{tagName:""},keyCode:d.up.charCodeAt(0)},d)},down:function(d){d=a.jknav.opts[d||"default"];i({target:{tagName:""},keyCode:d.down.charCodeAt(0)},d)}}})(jQuery);