!function(n,e){"use strict";function t(n){return e.lowercase(n.nodeName||n[0]&&n[0].nodeName)}function o(n,t){var o=!1,c=!1;this.ngClickOverrideEnabled=function(i){return e.isDefined(i)?(i&&!c&&(c=!0,r.$$moduleName="ngTouch",t.directive("ngClick",r),n.decorator("ngClickDirective",["$delegate",function(n){if(o)n.shift();else for(var e=n.length-1;e>=0;){if("ngTouch"===n[e].$$moduleName){n.splice(e,1);break}e--}return n}])),o=i,this):o},this.$get=function(){return{ngClickOverrideEnabled:function(){return o}}}}function c(n,t,o){i.directive(n,["$parse","$swipe",function(c,i){var r=75,u=.3,a=30;return function(s,l,h){function f(n){if(!d)return!1;var e=Math.abs(n.y-d.y),o=(n.x-d.x)*t;return v&&e<r&&o>0&&o>a&&e/o<u}var d,v,g=c(h[n]),p=["touch"];e.isDefined(h.ngSwipeDisableMouse)||p.push("mouse"),i.bind(l,{start:function(n,e){d=n,v=!0},cancel:function(n){v=!1},end:function(n,e){f(n)&&s.$apply(function(){l.triggerHandler(o),g(s,{$event:e})})}},p)}}])}var i=e.module("ngTouch",[]);i.provider("$touch",o),o.$inject=["$provide","$compileProvider"],i.factory("$swipe",[function(){function n(n){var e=n.originalEvent||n,t=e.touches&&e.touches.length?e.touches:[e],o=e.changedTouches&&e.changedTouches[0]||t[0];return{x:o.clientX,y:o.clientY}}function t(n,t){var c=[];return e.forEach(n,function(n){var e=o[n][t];e&&c.push(e)}),c.join(" ")}var o={mouse:{start:"mousedown",move:"mousemove",end:"mouseup"},touch:{start:"touchstart",move:"touchmove",end:"touchend",cancel:"touchcancel"}};return{bind:function(e,o,c){var i,r,u,a,s=!1;c=c||["mouse","touch"],e.on(t(c,"start"),function(e){u=n(e),s=!0,i=0,r=0,a=u,o.start&&o.start(u,e)});var l=t(c,"cancel");l&&e.on(l,function(n){s=!1,o.cancel&&o.cancel(n)}),e.on(t(c,"move"),function(e){if(s&&u){var t=n(e);if(i+=Math.abs(t.x-a.x),r+=Math.abs(t.y-a.y),a=t,!(i<10&&r<10))return r>i?(s=!1,void(o.cancel&&o.cancel(e))):(e.preventDefault(),void(o.move&&o.move(t,e)))}}),e.on(t(c,"end"),function(e){s&&(s=!1,o.end&&o.end(n(e),e))})}}}]);var r=["$parse","$timeout","$rootElement",function(n,o,c){function i(n,e,t,o){return Math.abs(n-t)<v&&Math.abs(e-o)<v}function r(n,e,t){for(var o=0;o<n.length;o+=2)if(i(n[o],n[o+1],e,t))return n.splice(o,o+2),!0;return!1}function u(n){if(!(Date.now()-l>d)){var e=n.touches&&n.touches.length?n.touches:[n],o=e[0].clientX,c=e[0].clientY;o<1&&c<1||f&&f[0]===o&&f[1]===c||(f&&(f=null),"label"===t(n.target)&&(f=[o,c]),r(h,o,c)||(n.stopPropagation(),n.preventDefault(),n.target&&n.target.blur&&n.target.blur()))}}function a(n){var e=n.touches&&n.touches.length?n.touches:[n],t=e[0].clientX,c=e[0].clientY;h.push(t,c),o(function(){for(var n=0;n<h.length;n+=2)if(h[n]==t&&h[n+1]==c)return void h.splice(n,n+2)},d,!1)}function s(n,e){h||(c[0].addEventListener("click",u,!0),c[0].addEventListener("touchstart",a,!0),h=[]),l=Date.now(),r(h,n,e)}var l,h,f,d=2500,v=25,g="ng-click-active";return function(t,o,c){function i(){f=!1,o.removeClass(g)}var r,u,a,l,h=n(c.ngClick),f=!1;o.on("touchstart",function(n){f=!0,3==(r=n.target?n.target:n.srcElement).nodeType&&(r=r.parentNode),o.addClass(g),u=Date.now();var e=n.originalEvent||n,t=(e.touches&&e.touches.length?e.touches:[e])[0];a=t.clientX,l=t.clientY}),o.on("touchcancel",function(n){i()}),o.on("touchend",function(n){var t=Date.now()-u,h=n.originalEvent||n,d=(h.changedTouches&&h.changedTouches.length?h.changedTouches:h.touches&&h.touches.length?h.touches:[h])[0],v=d.clientX,g=d.clientY,p=Math.sqrt(Math.pow(v-a,2)+Math.pow(g-l,2));f&&t<750&&p<12&&(s(v,g),r&&r.blur(),e.isDefined(c.disabled)&&!1!==c.disabled||o.triggerHandler("click",[n])),i()}),o.onclick=function(n){},o.on("click",function(n,e){t.$apply(function(){h(t,{$event:e||n})})}),o.on("mousedown",function(n){o.addClass(g)}),o.on("mousemove mouseup",function(n){o.removeClass(g)})}}];c("ngSwipeLeft",-1,"swipeleft"),c("ngSwipeRight",1,"swiperight")}(window,window.angular);