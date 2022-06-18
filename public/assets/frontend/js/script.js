/*! alertifyjs - v1.13.1 - Mohammad Younes <Mohammad@alertifyjs.com> (http://alertifyjs.com) */
!function(a){"use strict";function b(a,b){a.className+=" "+b}function c(a,b){for(var c=a.className.split(" "),d=b.split(" "),e=0;e<d.length;e+=1){var f=c.indexOf(d[e]);f>-1&&c.splice(f,1)}a.className=c.join(" ")}function d(){return"rtl"===a.getComputedStyle(document.body).direction}function e(){return document.documentElement&&document.documentElement.scrollTop||document.body.scrollTop}function f(){return document.documentElement&&document.documentElement.scrollLeft||document.body.scrollLeft}function g(a){for(;a.lastChild;)a.removeChild(a.lastChild)}function h(a){if(null===a)return a;var b;if(Array.isArray(a)){b=[];for(var c=0;c<a.length;c+=1)b.push(h(a[c]));return b}if(a instanceof Date)return new Date(a.getTime());if(a instanceof RegExp)return b=new RegExp(a.source),b.global=a.global,b.ignoreCase=a.ignoreCase,b.multiline=a.multiline,b.lastIndex=a.lastIndex,b;if("object"==typeof a){b={};for(var d in a)a.hasOwnProperty(d)&&(b[d]=h(a[d]));return b}return a}function i(a,b){if(a.elements){var c=a.elements.root;c.parentNode.removeChild(c),delete a.elements,a.settings=h(a.__settings),a.__init=b,delete a.__internal}}function j(a,b){return function(){if(arguments.length>0){for(var c=[],d=0;d<arguments.length;d+=1)c.push(arguments[d]);return c.push(a),b.apply(a,c)}return b.apply(a,[null,a])}}function k(a,b){return{index:a,button:b,cancel:!1}}function l(a,b){if("function"==typeof b.get(a))return b.get(a).call(b)}function m(){function a(a,b){for(var c in b)b.hasOwnProperty(c)&&(a[c]=b[c]);return a}function b(a){var b=d[a].dialog;return b&&"function"==typeof b.__init&&b.__init(b),b}function c(b,c,e,f){var g={dialog:null,factory:c};return void 0!==f&&(g.factory=function(){return a(new d[f].factory,new c)}),e||(g.dialog=a(new g.factory,w)),d[b]=g}var d={};return{defaults:p,dialog:function(d,e,f,g){if("function"!=typeof e)return b(d);if(this.hasOwnProperty(d))throw new Error("alertify.dialog: name already exists");var h=c(d,e,f,g);this[d]=f?function(){if(0===arguments.length)return h.dialog;var b=a(new h.factory,w);return b&&"function"==typeof b.__init&&b.__init(b),b.main.apply(b,arguments),b.show.apply(b)}:function(){if(h.dialog&&"function"==typeof h.dialog.__init&&h.dialog.__init(h.dialog),0===arguments.length)return h.dialog;var a=h.dialog;return a.main.apply(h.dialog,arguments),a.show.apply(h.dialog)}},closeAll:function(a){for(var b=q.slice(0),c=0;c<b.length;c+=1){var d=b[c];void 0!==a&&a===d||d.close()}},setting:function(a,c,d){if("notifier"===a)return x.setting(c,d);var e=b(a);return e?e.setting(c,d):void 0},set:function(a,b,c){return this.setting(a,b,c)},get:function(a,b){return this.setting(a,b)},notify:function(a,b,c,d){return x.create(b,d).push(a,c)},message:function(a,b,c){return x.create(null,c).push(a,b)},success:function(a,b,c){return x.create("success",c).push(a,b)},error:function(a,b,c){return x.create("error",c).push(a,b)},warning:function(a,b,c){return x.create("warning",c).push(a,b)},dismissAll:function(){x.dismissAll()}}}var n=":not(:disabled):not(.ajs-reset)",o={ENTER:13,ESC:27,F1:112,F12:123,LEFT:37,RIGHT:39,TAB:9},p={autoReset:!0,basic:!1,closable:!0,closableByDimmer:!0,invokeOnCloseOff:!1,frameless:!1,defaultFocusOff:!1,maintainFocus:!0,maximizable:!0,modal:!0,movable:!0,moveBounded:!1,overflow:!0,padding:!0,pinnable:!0,pinned:!0,preventBodyShift:!1,resizable:!0,startMaximized:!1,transition:"pulse",transitionOff:!1,tabbable:["button","[href]","input","select","textarea",'[tabindex]:not([tabindex^="-"])'+n].join(n+","),notifier:{delay:5,position:"bottom-right",closeButton:!1,classes:{base:"alertify-notifier",prefix:"ajs-",message:"ajs-message",top:"ajs-top",right:"ajs-right",bottom:"ajs-bottom",left:"ajs-left",center:"ajs-center",visible:"ajs-visible",hidden:"ajs-hidden",close:"ajs-close"}},glossary:{title:"AlertifyJS",ok:"OK",cancel:"Cancel",acccpt:"Accept",deny:"Deny",confirm:"Confirm",decline:"Decline",close:"Close",maximize:"Maximize",restore:"Restore"},theme:{input:"ajs-input",ok:"ajs-ok",cancel:"ajs-cancel"},hooks:{preinit:function(){},postinit:function(){}}},q=[],r=!1;try{var s=Object.defineProperty({},"passive",{get:function(){r=!0}});a.addEventListener("test",s,s),a.removeEventListener("test",s,s)}catch(z){}var t=function(a,b,c,d,e){a.addEventListener(b,c,r?{capture:d,passive:e}:!0===d)},u=function(a,b,c,d,e){a.removeEventListener(b,c,r?{capture:d,passive:e}:!0===d)},v=function(){var a,b,c=!1,d={animation:"animationend",OAnimation:"oAnimationEnd oanimationend",msAnimation:"MSAnimationEnd",MozAnimation:"animationend",WebkitAnimation:"webkitAnimationEnd"};for(a in d)if(void 0!==document.documentElement.style[a]){b=d[a],c=!0;break}return{type:b,supported:c}}(),w=function(){function m(a){if(!a.__internal){y.defaults.hooks.preinit(a),delete a.__init,a.__settings||(a.__settings=h(a.settings));var c;"function"==typeof a.setup?(c=a.setup(),c.options=c.options||{},c.focus=c.focus||{}):c={buttons:[],focus:{element:null,select:!1},options:{}},"object"!=typeof a.hooks&&(a.hooks={});var d=[];if(Array.isArray(c.buttons))for(var e=0;e<c.buttons.length;e+=1){var f=c.buttons[e],g={};for(var i in f)f.hasOwnProperty(i)&&(g[i]=f[i]);d.push(g)}var k=a.__internal={isOpen:!1,activeElement:document.body,timerIn:void 0,timerOut:void 0,buttons:d,focus:c.focus,options:{title:void 0,modal:void 0,basic:void 0,frameless:void 0,defaultFocusOff:void 0,pinned:void 0,movable:void 0,moveBounded:void 0,resizable:void 0,autoReset:void 0,closable:void 0,closableByDimmer:void 0,invokeOnCloseOff:void 0,maximizable:void 0,startMaximized:void 0,pinnable:void 0,transition:void 0,transitionOff:void 0,padding:void 0,overflow:void 0,onshow:void 0,onclosing:void 0,onclose:void 0,onfocus:void 0,onmove:void 0,onmoved:void 0,onresize:void 0,onresized:void 0,onmaximize:void 0,onmaximized:void 0,onrestore:void 0,onrestored:void 0},resetHandler:void 0,beginMoveHandler:void 0,beginResizeHandler:void 0,bringToFrontHandler:void 0,modalClickHandler:void 0,buttonsClickHandler:void 0,commandsClickHandler:void 0,transitionInHandler:void 0,transitionOutHandler:void 0,destroy:void 0},l={};l.root=document.createElement("div"),l.root.style.display="none",l.root.className=Ha.base+" "+Ha.hidden+" ",l.root.innerHTML=Ga.dimmer+Ga.modal,l.dimmer=l.root.firstChild,l.modal=l.root.lastChild,l.modal.innerHTML=Ga.dialog,l.dialog=l.modal.firstChild,l.dialog.innerHTML=Ga.reset+Ga.commands+Ga.header+Ga.body+Ga.footer+Ga.resizeHandle+Ga.reset,l.reset=[],l.reset.push(l.dialog.firstChild),l.reset.push(l.dialog.lastChild),l.commands={},l.commands.container=l.reset[0].nextSibling,l.commands.pin=l.commands.container.firstChild,l.commands.maximize=l.commands.pin.nextSibling,l.commands.close=l.commands.maximize.nextSibling,l.header=l.commands.container.nextSibling,l.body=l.header.nextSibling,l.body.innerHTML=Ga.content,l.content=l.body.firstChild,l.footer=l.body.nextSibling,l.footer.innerHTML=Ga.buttons.auxiliary+Ga.buttons.primary,l.resizeHandle=l.footer.nextSibling,l.buttons={},l.buttons.auxiliary=l.footer.firstChild,l.buttons.primary=l.buttons.auxiliary.nextSibling,l.buttons.primary.innerHTML=Ga.button,l.buttonTemplate=l.buttons.primary.firstChild,l.buttons.primary.removeChild(l.buttonTemplate);for(var m=0;m<a.__internal.buttons.length;m+=1){var n=a.__internal.buttons[m];Ca.indexOf(n.key)<0&&Ca.push(n.key),n.element=l.buttonTemplate.cloneNode(),n.element.innerHTML=n.text,"string"==typeof n.className&&""!==n.className&&b(n.element,n.className);for(var o in n.attrs)"className"!==o&&n.attrs.hasOwnProperty(o)&&n.element.setAttribute(o,n.attrs[o]);"auxiliary"===n.scope?l.buttons.auxiliary.appendChild(n.element):l.buttons.primary.appendChild(n.element)}a.elements=l,k.resetHandler=j(a,Z),k.beginMoveHandler=j(a,ea),k.beginResizeHandler=j(a,ka),k.bringToFrontHandler=j(a,D),k.modalClickHandler=j(a,T),k.buttonsClickHandler=j(a,V),k.commandsClickHandler=j(a,H),k.transitionInHandler=j(a,aa),k.transitionOutHandler=j(a,ba);for(var p in k.options)void 0!==c.options[p]?a.set(p,c.options[p]):y.defaults.hasOwnProperty(p)?a.set(p,y.defaults[p]):"title"===p&&a.set(p,y.defaults.glossary[p]);"function"==typeof a.build&&a.build(),y.defaults.hooks.postinit(a)}document.body.appendChild(a.elements.root)}function n(){Aa=f(),Ba=e()}function r(){a.scrollTo(Aa,Ba)}function s(){for(var a=0,d=0;d<q.length;d+=1){var e=q[d];(e.isModal()||e.isMaximized())&&(a+=1)}0===a&&document.body.className.indexOf(Ha.noOverflow)>=0?(c(document.body,Ha.noOverflow),w(!1)):a>0&&document.body.className.indexOf(Ha.noOverflow)<0&&(w(!0),b(document.body,Ha.noOverflow))}function w(d){y.defaults.preventBodyShift&&(d&&document.documentElement.scrollHeight>document.documentElement.clientHeight?(Ja=Ba,Ia=a.getComputedStyle(document.body).top,b(document.body,Ha.fixed),document.body.style.top=-Ba+"px"):d||(Ba=Ja,document.body.style.top=Ia,c(document.body,Ha.fixed),r()))}function x(a,d,e){"string"==typeof e&&c(a.elements.root,Ha.prefix+e),b(a.elements.root,Ha.prefix+d),Da=a.elements.root.offsetWidth}function z(a){a.get("transitionOff")?b(a.elements.root,Ha.noTransition):c(a.elements.root,Ha.noTransition)}function A(a){a.get("modal")?(c(a.elements.root,Ha.modeless),a.isOpen()&&(ta(a),P(a),s())):(b(a.elements.root,Ha.modeless),a.isOpen()&&(sa(a),P(a),s()))}function B(a){a.get("basic")?b(a.elements.root,Ha.basic):c(a.elements.root,Ha.basic)}function C(a){a.get("frameless")?b(a.elements.root,Ha.frameless):c(a.elements.root,Ha.frameless)}function D(a,b){for(var c=q.indexOf(b),d=c+1;d<q.length;d+=1)if(q[d].isModal())return;return document.body.lastChild!==b.elements.root&&(document.body.appendChild(b.elements.root),q.splice(q.indexOf(b),1),q.push(b),Y(b)),!1}function E(a,d,e,f){switch(d){case"title":a.setHeader(f);break;case"modal":A(a);break;case"basic":B(a);break;case"frameless":C(a);break;case"pinned":Q(a);break;case"closable":S(a);break;case"maximizable":R(a);break;case"pinnable":M(a);break;case"movable":ia(a);break;case"resizable":oa(a);break;case"padding":f?c(a.elements.root,Ha.noPadding):a.elements.root.className.indexOf(Ha.noPadding)<0&&b(a.elements.root,Ha.noPadding);break;case"overflow":f?c(a.elements.root,Ha.noOverflow):a.elements.root.className.indexOf(Ha.noOverflow)<0&&b(a.elements.root,Ha.noOverflow);break;case"transition":x(a,f,e);break;case"transitionOff":z(a)}"function"==typeof a.hooks.onupdate&&a.hooks.onupdate.call(a,d,e,f)}function F(a,b,c,d,e){var f={op:void 0,items:[]};if(void 0===e&&"string"==typeof d)f.op="get",b.hasOwnProperty(d)?(f.found=!0,f.value=b[d]):(f.found=!1,f.value=void 0);else{var g;if(f.op="set","object"==typeof d){var h=d;for(var i in h)b.hasOwnProperty(i)?(b[i]!==h[i]&&(g=b[i],b[i]=h[i],c.call(a,i,g,h[i])),f.items.push({key:i,value:h[i],found:!0})):f.items.push({key:i,value:h[i],found:!1})}else{if("string"!=typeof d)throw new Error("args must be a string or object");b.hasOwnProperty(d)?(b[d]!==e&&(g=b[d],b[d]=e,c.call(a,d,g,e)),f.items.push({key:d,value:e,found:!0})):f.items.push({key:d,value:e,found:!1})}}return f}function G(a){var b;U(a,function(c){return b=!0!==a.get("invokeOnCloseOff")&&!0===c.invokeOnClose}),!b&&a.isOpen()&&a.close()}function H(a,b){switch(a.srcElement||a.target){case b.elements.commands.pin:b.isPinned()?J(b):I(b);break;case b.elements.commands.maximize:b.isMaximized()?L(b):K(b);break;case b.elements.commands.close:G(b)}return!1}function I(a){a.set("pinned",!0)}function J(a){a.set("pinned",!1)}function K(a){l("onmaximize",a),b(a.elements.root,Ha.maximized),a.isOpen()&&s(),l("onmaximized",a)}function L(a){l("onrestore",a),c(a.elements.root,Ha.maximized),a.isOpen()&&s(),l("onrestored",a)}function M(a){a.get("pinnable")?b(a.elements.root,Ha.pinnable):c(a.elements.root,Ha.pinnable)}function N(a){var b=f();a.elements.modal.style.marginTop=e()+"px",a.elements.modal.style.marginLeft=b+"px",a.elements.modal.style.marginRight=-b+"px"}function O(a){var b=parseInt(a.elements.modal.style.marginTop,10),c=parseInt(a.elements.modal.style.marginLeft,10);if(a.elements.modal.style.marginTop="",a.elements.modal.style.marginLeft="",a.elements.modal.style.marginRight="",a.isOpen()){var d=0,g=0;""!==a.elements.dialog.style.top&&(d=parseInt(a.elements.dialog.style.top,10)),a.elements.dialog.style.top=d+(b-e())+"px",""!==a.elements.dialog.style.left&&(g=parseInt(a.elements.dialog.style.left,10)),a.elements.dialog.style.left=g+(c-f())+"px"}}function P(a){a.get("modal")||a.get("pinned")?O(a):N(a)}function Q(a){a.get("pinned")?(c(a.elements.root,Ha.unpinned),a.isOpen()&&O(a)):(b(a.elements.root,Ha.unpinned),a.isOpen()&&!a.isModal()&&N(a))}function R(a){a.get("maximizable")?b(a.elements.root,Ha.maximizable):c(a.elements.root,Ha.maximizable)}function S(a){a.get("closable")?(b(a.elements.root,Ha.closable),ya(a)):(c(a.elements.root,Ha.closable),za(a))}function T(a,b){if(a.timeStamp-La>200&&(La=a.timeStamp)&&!Ka){var c=a.srcElement||a.target;!0===b.get("closableByDimmer")&&c===b.elements.modal&&G(b)}Ka=!1}function U(a,b){if(Date.now()-Ma>200&&(Ma=Date.now()))for(var c=0;c<a.__internal.buttons.length;c+=1){var d=a.__internal.buttons[c];if(!d.element.disabled&&b(d)){var e=k(c,d);"function"==typeof a.callback&&a.callback.apply(a,[e]),!1===e.cancel&&a.close();break}}}function V(a,b){var c=a.srcElement||a.target;U(b,function(a){return a.element===c&&(Na=!0)})}function W(a){if(Na)return void(Na=!1);var b=q[q.length-1],c=a.keyCode;return 0===b.__internal.buttons.length&&c===o.ESC&&!0===b.get("closable")?(G(b),!1):Ca.indexOf(c)>-1?(U(b,function(a){return a.key===c}),!1):void 0}function X(a){var b=q[q.length-1],c=a.keyCode;if(c===o.LEFT||c===o.RIGHT){for(var d=b.__internal.buttons,e=0;e<d.length;e+=1)if(document.activeElement===d[e].element)switch(c){case o.LEFT:return void d[(e||d.length)-1].element.focus();case o.RIGHT:return void d[(e+1)%d.length].element.focus()}}else if(c<o.F12+1&&c>o.F1-1&&Ca.indexOf(c)>-1)return a.preventDefault(),a.stopPropagation(),U(b,function(a){return a.key===c}),!1}function Y(a,b){if(b)b.focus();else{var c=a.__internal.focus,d=c.element;switch(typeof c.element){case"number":a.__internal.buttons.length>c.element&&(d=!0===a.get("basic")?a.elements.reset[0]:a.__internal.buttons[c.element].element);break;case"string":d=a.elements.body.querySelector(c.element);break;case"function":d=c.element.call(a)}!0!==a.get("defaultFocusOff")&&(void 0!==d&&null!==d||0!==a.__internal.buttons.length)||(d=a.elements.reset[0]),d&&d.focus&&(d.focus(),c.select&&d.select&&d.select())}}function Z(a,b){if(!b)for(var c=q.length-1;c>-1;c-=1)if(q[c].isModal()){b=q[c];break}if(b&&b.isModal()){var d,e=b.elements.reset[0],f=b.elements.reset[1],g=a.relatedTarget,h=b.elements.root.contains(g),i=a.srcElement||a.target;if(i===e&&!h||i===f&&g===e)return;i===f||i===document.body?d=e:i===e&&g===f?d=$(b):i===e&&h&&(d=$(b,!0)),Y(b,d)}}function $(a,b){var c=[].slice.call(a.elements.dialog.querySelectorAll(p.tabbable));b&&c.reverse();for(var d=0;d<c.length;d+=1){var e=c[d];if(e.offsetParent||e.offsetWidth||e.offsetHeight||e.getClientRects().length)return e}}function _(a){var b=q[q.length-1];b&&a.shiftKey&&a.keyCode===o.TAB&&b.elements.reset[1].focus()}function aa(a,b){clearTimeout(b.__internal.timerIn),Y(b),Na=!1,l("onfocus",b),u(b.elements.dialog,v.type,b.__internal.transitionInHandler),c(b.elements.root,Ha.animationIn)}function ba(a,b){clearTimeout(b.__internal.timerOut),u(b.elements.dialog,v.type,b.__internal.transitionOutHandler),ha(b),na(b),b.isMaximized()&&!b.get("startMaximized")&&L(b),"function"==typeof b.__internal.destroy&&b.__internal.destroy.apply(b)}function ca(a,b){var c=a[Ra]-Pa,d=a[Sa]-Qa;Ua&&(d-=document.body.scrollTop),b.style.left=c+"px",b.style.top=d+"px"}function da(a,b){var c=a[Ra]-Pa,d=a[Sa]-Qa;Ua&&(d-=document.body.scrollTop),b.style.left=Math.min(Ta.maxLeft,Math.max(Ta.minLeft,c))+"px",b.style.top=Ua?Math.min(Ta.maxTop,Math.max(Ta.minTop,d))+"px":Math.max(Ta.minTop,d)+"px"}function ea(a,c){if(null===Wa&&!c.isMaximized()&&c.get("movable")){var d,e=0,f=0;if("touchstart"===a.type?(a.preventDefault(),d=a.targetTouches[0],Ra="clientX",Sa="clientY"):0===a.button&&(d=a),d){var g=c.elements.dialog;if(b(g,Ha.capture),g.style.left&&(e=parseInt(g.style.left,10)),g.style.top&&(f=parseInt(g.style.top,10)),Pa=d[Ra]-e,Qa=d[Sa]-f,c.isModal()?Qa+=c.elements.modal.scrollTop:c.isPinned()&&(Qa-=document.body.scrollTop),c.get("moveBounded")){var h=g,i=-e,j=-f;do{i+=h.offsetLeft,j+=h.offsetTop}while(h=h.offsetParent);Ta={maxLeft:i,minLeft:-i,maxTop:document.documentElement.clientHeight-g.clientHeight-j,minTop:-j},Va=da}else Ta=null,Va=ca;return l("onmove",c),Ua=!c.isModal()&&c.isPinned(),Oa=c,Va(d,g),b(document.body,Ha.noSelection),!1}}}function fa(a){if(Oa){var b;"touchmove"===a.type?(a.preventDefault(),b=a.targetTouches[0]):0===a.button&&(b=a),b&&Va(b,Oa.elements.dialog)}}function ga(){if(Oa){var a=Oa;Oa=Ta=null,c(document.body,Ha.noSelection),c(a.elements.dialog,Ha.capture),l("onmoved",a)}}function ha(a){Oa=null;var b=a.elements.dialog;b.style.left=b.style.top=""}function ia(a){a.get("movable")?(b(a.elements.root,Ha.movable),a.isOpen()&&ua(a)):(ha(a),c(a.elements.root,Ha.movable),a.isOpen()&&va(a))}function ja(a,b,c){var e=b,f=0,g=0;do{f+=e.offsetLeft,g+=e.offsetTop}while(e=e.offsetParent);var h,i;!0===c?(h=a.pageX,i=a.pageY):(h=a.clientX,i=a.clientY);var j=d();if(j&&(h=document.body.offsetWidth-h,isNaN(Xa)||(f=document.body.offsetWidth-f-b.offsetWidth)),b.style.height=i-g+$a+"px",b.style.width=h-f+$a+"px",!isNaN(Xa)){var k=.5*Math.abs(b.offsetWidth-Ya);j&&(k*=-1),b.offsetWidth>Ya?b.style.left=Xa+k+"px":b.offsetWidth>=Za&&(b.style.left=Xa-k+"px")}}function ka(a,c){if(!c.isMaximized()){var d;if("touchstart"===a.type?(a.preventDefault(),d=a.targetTouches[0]):0===a.button&&(d=a),d){l("onresize",c),Wa=c,$a=c.elements.resizeHandle.offsetHeight/2;var e=c.elements.dialog;return b(e,Ha.capture),Xa=parseInt(e.style.left,10),e.style.height=e.offsetHeight+"px",e.style.minHeight=c.elements.header.offsetHeight+c.elements.footer.offsetHeight+"px",e.style.width=(Ya=e.offsetWidth)+"px","none"!==e.style.maxWidth&&(e.style.minWidth=(Za=e.offsetWidth)+"px"),e.style.maxWidth="none",b(document.body,Ha.noSelection),!1}}}function la(a){if(Wa){var b;"touchmove"===a.type?(a.preventDefault(),b=a.targetTouches[0]):0===a.button&&(b=a),b&&ja(b,Wa.elements.dialog,!Wa.get("modal")&&!Wa.get("pinned"))}}function ma(){if(Wa){var a=Wa;Wa=null,c(document.body,Ha.noSelection),c(a.elements.dialog,Ha.capture),Ka=!0,l("onresized",a)}}function na(a){Wa=null;var b=a.elements.dialog;"none"===b.style.maxWidth&&(b.style.maxWidth=b.style.minWidth=b.style.width=b.style.height=b.style.minHeight=b.style.left="",Xa=Number.Nan,Ya=Za=$a=0)}function oa(a){a.get("resizable")?(b(a.elements.root,Ha.resizable),a.isOpen()&&wa(a)):(na(a),c(a.elements.root,Ha.resizable),a.isOpen()&&xa(a))}function pa(){for(var a=0;a<q.length;a+=1){var b=q[a];b.get("autoReset")&&(ha(b),na(b))}}function qa(b){1===q.length&&(t(a,"resize",pa),t(document.body,"keyup",W),t(document.body,"keydown",X),t(document.body,"focus",Z),t(document.documentElement,"mousemove",fa),t(document.documentElement,"touchmove",fa,!1,!1),t(document.documentElement,"mouseup",ga),t(document.documentElement,"touchend",ga),t(document.documentElement,"mousemove",la),t(document.documentElement,"touchmove",la,!1,!1),t(document.documentElement,"mouseup",ma),t(document.documentElement,"touchend",ma)),t(b.elements.commands.container,"click",b.__internal.commandsClickHandler),t(b.elements.footer,"click",b.__internal.buttonsClickHandler),t(b.elements.reset[0],"focusin",b.__internal.resetHandler),t(b.elements.reset[0],"keydown",_),t(b.elements.reset[1],"focusin",b.__internal.resetHandler),Na=!0,t(b.elements.dialog,v.type,b.__internal.transitionInHandler),b.get("modal")||sa(b),b.get("resizable")&&wa(b),b.get("movable")&&ua(b)}function ra(b){1===q.length&&(u(a,"resize",pa),u(document.body,"keyup",W),u(document.body,"keydown",X),u(document.body,"focus",Z),u(document.documentElement,"mousemove",fa),u(document.documentElement,"mouseup",ga),u(document.documentElement,"mousemove",la),u(document.documentElement,"mouseup",ma)),u(b.elements.commands.container,"click",b.__internal.commandsClickHandler),u(b.elements.footer,"click",b.__internal.buttonsClickHandler),u(b.elements.reset[0],"focusin",b.__internal.resetHandler),u(b.elements.reset[0],"keydown",_),u(b.elements.reset[1],"focusin",b.__internal.resetHandler),t(b.elements.dialog,v.type,b.__internal.transitionOutHandler),b.get("modal")||ta(b),b.get("movable")&&va(b),b.get("resizable")&&xa(b)}function sa(a){t(a.elements.dialog,"focus",a.__internal.bringToFrontHandler,!0)}function ta(a){u(a.elements.dialog,"focus",a.__internal.bringToFrontHandler,!0)}function ua(a){t(a.elements.header,"mousedown",a.__internal.beginMoveHandler),t(a.elements.header,"touchstart",a.__internal.beginMoveHandler,!1,!1)}function va(a){u(a.elements.header,"mousedown",a.__internal.beginMoveHandler),u(a.elements.header,"touchstart",a.__internal.beginMoveHandler,!1,!1)}function wa(a){t(a.elements.resizeHandle,"mousedown",a.__internal.beginResizeHandler),t(a.elements.resizeHandle,"touchstart",a.__internal.beginResizeHandler,!1,!1)}function xa(a){u(a.elements.resizeHandle,"mousedown",a.__internal.beginResizeHandler),u(a.elements.resizeHandle,"touchstart",a.__internal.beginResizeHandler,!1,!1)}function ya(a){t(a.elements.modal,"click",a.__internal.modalClickHandler)}function za(a){u(a.elements.modal,"click",a.__internal.modalClickHandler)}var Aa,Ba,Ca=[],Da=null,Ea=!1,Fa=a.navigator.userAgent.indexOf("Safari")>-1&&a.navigator.userAgent.indexOf("Chrome")<0,Ga={dimmer:'<div class="ajs-dimmer"></div>',modal:'<div class="ajs-modal" tabindex="0"></div>',dialog:'<div class="ajs-dialog" tabindex="0"></div>',reset:'<button class="ajs-reset"></button>',commands:'<div class="ajs-commands"><button class="ajs-pin"></button><button class="ajs-maximize"></button><button class="ajs-close"></button></div>',header:'<div class="ajs-header"></div>',body:'<div class="ajs-body"></div>',content:'<div class="ajs-content"></div>',footer:'<div class="ajs-footer"></div>',buttons:{primary:'<div class="ajs-primary ajs-buttons"></div>',auxiliary:'<div class="ajs-auxiliary ajs-buttons"></div>'},button:'<button class="ajs-button"></button>',resizeHandle:'<div class="ajs-handle"></div>'},Ha={animationIn:"ajs-in",animationOut:"ajs-out",base:"alertify",basic:"ajs-basic",capture:"ajs-capture",closable:"ajs-closable",fixed:"ajs-fixed",frameless:"ajs-frameless",hidden:"ajs-hidden",maximize:"ajs-maximize",maximized:"ajs-maximized",maximizable:"ajs-maximizable",modeless:"ajs-modeless",movable:"ajs-movable",noSelection:"ajs-no-selection",noOverflow:"ajs-no-overflow",noPadding:"ajs-no-padding",pin:"ajs-pin",pinnable:"ajs-pinnable",prefix:"ajs-",resizable:"ajs-resizable",restore:"ajs-restore",shake:"ajs-shake",unpinned:"ajs-unpinned",noTransition:"ajs-no-transition"},Ia="",Ja=0,Ka=!1,La=0,Ma=0,Na=!1,Oa=null,Pa=0,Qa=0,Ra="pageX",Sa="pageY",Ta=null,Ua=!1,Va=null,Wa=null,Xa=Number.Nan,Ya=0,Za=0,$a=0;return{__init:m,isOpen:function(){return this.__internal.isOpen},isModal:function(){return this.elements.root.className.indexOf(Ha.modeless)<0},isMaximized:function(){return this.elements.root.className.indexOf(Ha.maximized)>-1},isPinned:function(){return this.elements.root.className.indexOf(Ha.unpinned)<0},maximize:function(){return this.isMaximized()||K(this),this},restore:function(){return this.isMaximized()&&L(this),this},pin:function(){return this.isPinned()||I(this),this},unpin:function(){return this.isPinned()&&J(this),this},bringToFront:function(){return D(null,this),this},moveTo:function(a,b){if(!isNaN(a)&&!isNaN(b)){l("onmove",this);var c=this.elements.dialog,e=c,f=0,g=0;c.style.left&&(f-=parseInt(c.style.left,10)),c.style.top&&(g-=parseInt(c.style.top,10));do{f+=e.offsetLeft,g+=e.offsetTop}while(e=e.offsetParent);var h=a-f,i=b-g;d()&&(h*=-1),c.style.left=h+"px",c.style.top=i+"px",l("onmoved",this)}return this},resizeTo:function(a,b){var c=parseFloat(a),d=parseFloat(b),e=/(\d*\.\d+|\d+)%/;if(!isNaN(c)&&!isNaN(d)&&!0===this.get("resizable")){l("onresize",this),(""+a).match(e)&&(c=c/100*document.documentElement.clientWidth),(""+b).match(e)&&(d=d/100*document.documentElement.clientHeight);var f=this.elements.dialog;"none"!==f.style.maxWidth&&(f.style.minWidth=(Za=f.offsetWidth)+"px"),f.style.maxWidth="none",f.style.minHeight=this.elements.header.offsetHeight+this.elements.footer.offsetHeight+"px",f.style.width=c+"px",f.style.height=d+"px",l("onresized",this)}return this},setting:function(a,b){var c=this,d=F(this,this.__internal.options,function(a,b,d){E(c,a,b,d)},a,b);if("get"===d.op)return d.found?d.value:void 0!==this.settings?F(this,this.settings,this.settingUpdated||function(){},a,b).value:void 0;if("set"===d.op){if(d.items.length>0)for(var e=this.settingUpdated||function(){},f=0;f<d.items.length;f+=1){var g=d.items[f];g.found||void 0===this.settings||F(this,this.settings,e,g.key,g.value)}return this}},set:function(a,b){return this.setting(a,b),this},get:function(a){return this.setting(a)},setHeader:function(b){return"string"==typeof b?(g(this.elements.header),this.elements.header.innerHTML=b):b instanceof a.HTMLElement&&this.elements.header.firstChild!==b&&(g(this.elements.header),this.elements.header.appendChild(b)),this},setContent:function(b){return"string"==typeof b?(g(this.elements.content),this.elements.content.innerHTML=b):b instanceof a.HTMLElement&&this.elements.content.firstChild!==b&&(g(this.elements.content),this.elements.content.appendChild(b)),this},showModal:function(a){return this.show(!0,a)},show:function(a,d){if(m(this),this.__internal.isOpen){ha(this),na(this),b(this.elements.dialog,Ha.shake);var e=this;setTimeout(function(){c(e.elements.dialog,Ha.shake)},200)}else{if(this.__internal.isOpen=!0,q.push(this),y.defaults.maintainFocus&&(this.__internal.activeElement=document.activeElement),document.body.hasAttribute("tabindex")||document.body.setAttribute("tabindex",Ea="0"),"function"==typeof this.prepare&&this.prepare(),qa(this),void 0!==a&&this.set("modal",a),n(),s(),"string"==typeof d&&""!==d&&(this.__internal.className=d,b(this.elements.root,d)),this.get("startMaximized")?this.maximize():this.isMaximized()&&L(this),P(this),this.elements.root.removeAttribute("style"),c(this.elements.root,Ha.animationOut),b(this.elements.root,Ha.animationIn),clearTimeout(this.__internal.timerIn),this.__internal.timerIn=setTimeout(this.__internal.transitionInHandler,v.supported?1e3:100),Fa){var f=this.elements.root;f.style.display="none",setTimeout(function(){f.style.display="block"},0)}Da=this.elements.root.offsetWidth,c(this.elements.root,Ha.hidden),r(),"function"==typeof this.hooks.onshow&&this.hooks.onshow.call(this),l("onshow",this)}return this},close:function(){return this.__internal.isOpen&&!1!==l("onclosing",this)&&(ra(this),c(this.elements.root,Ha.animationIn),b(this.elements.root,Ha.animationOut),clearTimeout(this.__internal.timerOut),this.__internal.timerOut=setTimeout(this.__internal.transitionOutHandler,v.supported?1e3:100),b(this.elements.root,Ha.hidden),Da=this.elements.modal.offsetWidth,y.defaults.maintainFocus&&this.__internal.activeElement&&(this.__internal.activeElement.focus(),this.__internal.activeElement=null),void 0!==this.__internal.className&&""!==this.__internal.className&&c(this.elements.root,this.__internal.className),"function"==typeof this.hooks.onclose&&this.hooks.onclose.call(this),l("onclose",this),q.splice(q.indexOf(this),1),this.__internal.isOpen=!1,s()),q.length||"0"!==Ea||document.body.removeAttribute("tabindex"),this},closeOthers:function(){return y.closeAll(this),this},destroy:function(){return this.__internal&&(this.__internal.isOpen?(this.__internal.destroy=function(){i(this,m)},this.close()):this.__internal.destroy||i(this,m)),this}}}(),x=function(){function d(a){if(!a.__internal){a.__internal={position:y.defaults.notifier.position,delay:y.defaults.notifier.delay},l=document.createElement("DIV");("transitionOff"in p.notifier?p.notifier.transitionOff:p.transitionOff)&&(o=n.base+" ajs-no-transition"),h(a)}l.parentNode!==document.body&&document.body.appendChild(l)}function e(a){a.__internal.pushed=!0,m.push(a)}function f(a){m.splice(m.indexOf(a),1),a.__internal.pushed=!1}function h(a){switch(l.className=o,a.__internal.position){case"top-right":b(l,n.top+" "+n.right);break;case"top-left":b(l,n.top+" "+n.left);break;case"top-center":b(l,n.top+" "+n.center);break;case"bottom-left":b(l,n.bottom+" "+n.left);break;case"bottom-center":b(l,n.bottom+" "+n.center);break;default:case"bottom-right":b(l,n.bottom+" "+n.right)}}function i(d,h){function i(a,b){b.__internal.closeButton&&"true"!==a.target.getAttribute("data-close")||b.dismiss(!0)}function m(a,b){u(b.element,v.type,m),l.removeChild(b.element)}function o(a){return a.__internal||(a.__internal={pushed:!1,delay:void 0,timer:void 0,clickHandler:void 0,transitionEndHandler:void 0,transitionTimeout:void 0},a.__internal.clickHandler=j(a,i),a.__internal.transitionEndHandler=j(a,m)),a}function p(a){clearTimeout(a.__internal.timer),clearTimeout(a.__internal.transitionTimeout)}return o({element:d,push:function(a,c){if(!this.__internal.pushed){e(this),p(this);var d,f;switch(arguments.length){case 0:f=this.__internal.delay;break;case 1:"number"==typeof a?f=a:(d=a,f=this.__internal.delay);break;case 2:d=a,f=c}return this.__internal.closeButton=y.defaults.notifier.closeButton,void 0!==d&&this.setContent(d),x.__internal.position.indexOf("top")<0?l.appendChild(this.element):l.insertBefore(this.element,l.firstChild),k=this.element.offsetWidth,b(this.element,n.visible),t(this.element,"click",this.__internal.clickHandler),this.delay(f)}return this},ondismiss:function(){},callback:h,dismiss:function(a){return this.__internal.pushed&&(p(this),"function"==typeof this.ondismiss&&!1===this.ondismiss.call(this)||(u(this.element,"click",this.__internal.clickHandler),void 0!==this.element&&this.element.parentNode===l&&(this.__internal.transitionTimeout=setTimeout(this.__internal.transitionEndHandler,v.supported?1e3:100),c(this.element,n.visible),"function"==typeof this.callback&&this.callback.call(this,a)),f(this))),this},delay:function(a){if(p(this),this.__internal.delay=void 0===a||isNaN(+a)?x.__internal.delay:+a,this.__internal.delay>0){var b=this;this.__internal.timer=setTimeout(function(){b.dismiss()},1e3*this.__internal.delay)}return this},setContent:function(c){if("string"==typeof c?(g(this.element),this.element.innerHTML=c):c instanceof a.HTMLElement&&this.element.firstChild!==c&&(g(this.element),this.element.appendChild(c)),this.__internal.closeButton){var d=document.createElement("span");b(d,n.close),d.setAttribute("data-close",!0),this.element.appendChild(d)}return this},dismissOthers:function(){return x.dismissAll(this),this}})}var k,l,m=[],n=p.notifier.classes,o=n.base;return{setting:function(a,b){if(d(this),void 0===b)return this.__internal[a];switch(a){case"position":this.__internal.position=b,h(this);break;case"delay":this.__internal.delay=b}return this},set:function(a,b){return this.setting(a,b),this},get:function(a){return this.setting(a)},create:function(a,b){d(this);var c=document.createElement("div");return c.className=n.message+("string"==typeof a&&""!==a?" "+n.prefix+a:""),i(c,b)},dismissAll:function(a){for(var b=m.slice(0),c=0;c<b.length;c+=1){var d=b[c];void 0!==a&&a===d||d.dismiss()}}}}(),y=new m;y.dialog("alert",function(){return{main:function(a,b,c){var d,e,f;switch(arguments.length){case 1:e=a;break;case 2:"function"==typeof b?(e=a,f=b):(d=a,e=b);break;case 3:d=a,e=b,f=c}return this.set("title",d),this.set("message",e),this.set("onok",f),this},setup:function(){return{buttons:[{text:y.defaults.glossary.ok,key:o.ESC,invokeOnClose:!0,className:y.defaults.theme.ok}],focus:{element:0,select:!1},options:{maximizable:!1,resizable:!1}}},build:function(){},prepare:function(){},setMessage:function(a){this.setContent(a)},settings:{message:void 0,onok:void 0,label:void 0},settingUpdated:function(a,b,c){switch(a){case"message":this.setMessage(c);break;case"label":this.__internal.buttons[0].element&&(this.__internal.buttons[0].element.innerHTML=c)}},
callback:function(a){if("function"==typeof this.get("onok")){var b=this.get("onok").call(this,a);void 0!==b&&(a.cancel=!b)}}}}),y.dialog("confirm",function(){function a(a){null!==c.timer&&(clearInterval(c.timer),c.timer=null,a.__internal.buttons[c.index].element.innerHTML=c.text)}function b(b,d,e){a(b),c.duration=e,c.index=d,c.text=b.__internal.buttons[d].element.innerHTML,c.timer=setInterval(j(b,c.task),1e3),c.task(null,b)}var c={timer:null,index:null,text:null,duration:null,task:function(b,d){if(d.isOpen()){if(d.__internal.buttons[c.index].element.innerHTML=c.text+" (&#8207;"+c.duration+"&#8207;) ",c.duration-=1,-1===c.duration){a(d);var e=d.__internal.buttons[c.index],f=k(c.index,e);"function"==typeof d.callback&&d.callback.apply(d,[f]),!1!==f.close&&d.close()}}else a(d)}};return{main:function(a,b,c,d){var e,f,g,h;switch(arguments.length){case 1:f=a;break;case 2:f=a,g=b;break;case 3:f=a,g=b,h=c;break;case 4:e=a,f=b,g=c,h=d}return this.set("title",e),this.set("message",f),this.set("onok",g),this.set("oncancel",h),this},setup:function(){return{buttons:[{text:y.defaults.glossary.ok,key:o.ENTER,className:y.defaults.theme.ok},{text:y.defaults.glossary.cancel,key:o.ESC,invokeOnClose:!0,className:y.defaults.theme.cancel}],focus:{element:0,select:!1},options:{maximizable:!1,resizable:!1}}},build:function(){},prepare:function(){},setMessage:function(a){this.setContent(a)},settings:{message:null,labels:null,onok:null,oncancel:null,defaultFocus:null,reverseButtons:null},settingUpdated:function(a,b,c){switch(a){case"message":this.setMessage(c);break;case"labels":"ok"in c&&this.__internal.buttons[0].element&&(this.__internal.buttons[0].text=c.ok,this.__internal.buttons[0].element.innerHTML=c.ok),"cancel"in c&&this.__internal.buttons[1].element&&(this.__internal.buttons[1].text=c.cancel,this.__internal.buttons[1].element.innerHTML=c.cancel);break;case"reverseButtons":!0===c?this.elements.buttons.primary.appendChild(this.__internal.buttons[0].element):this.elements.buttons.primary.appendChild(this.__internal.buttons[1].element);break;case"defaultFocus":this.__internal.focus.element="ok"===c?0:1}},callback:function(b){a(this);var c;switch(b.index){case 0:"function"==typeof this.get("onok")&&void 0!==(c=this.get("onok").call(this,b))&&(b.cancel=!c);break;case 1:"function"==typeof this.get("oncancel")&&void 0!==(c=this.get("oncancel").call(this,b))&&(b.cancel=!c)}},autoOk:function(a){return b(this,0,a),this},autoCancel:function(a){return b(this,1,a),this}}}),y.dialog("prompt",function(){var b=document.createElement("INPUT"),c=document.createElement("P");return{main:function(a,b,c,d,e){var f,g,h,i,j;switch(arguments.length){case 1:g=a;break;case 2:g=a,h=b;break;case 3:g=a,h=b,i=c;break;case 4:g=a,h=b,i=c,j=d;break;case 5:f=a,g=b,h=c,i=d,j=e}return this.set("title",f),this.set("message",g),this.set("value",h),this.set("onok",i),this.set("oncancel",j),this},setup:function(){return{buttons:[{text:y.defaults.glossary.ok,key:o.ENTER,className:y.defaults.theme.ok},{text:y.defaults.glossary.cancel,key:o.ESC,invokeOnClose:!0,className:y.defaults.theme.cancel}],focus:{element:b,select:!0},options:{maximizable:!1,resizable:!1}}},build:function(){b.className=y.defaults.theme.input,b.setAttribute("type","text"),b.value=this.get("value"),this.elements.content.appendChild(c),this.elements.content.appendChild(b)},prepare:function(){},setMessage:function(b){"string"==typeof b?(g(c),c.innerHTML=b):b instanceof a.HTMLElement&&c.firstChild!==b&&(g(c),c.appendChild(b))},settings:{message:void 0,labels:void 0,onok:void 0,oncancel:void 0,value:"",type:"text",reverseButtons:void 0},settingUpdated:function(a,c,d){switch(a){case"message":this.setMessage(d);break;case"value":b.value=d;break;case"type":switch(d){case"text":case"color":case"date":case"datetime-local":case"email":case"month":case"number":case"password":case"search":case"tel":case"time":case"week":b.type=d;break;default:b.type="text"}break;case"labels":d.ok&&this.__internal.buttons[0].element&&(this.__internal.buttons[0].element.innerHTML=d.ok),d.cancel&&this.__internal.buttons[1].element&&(this.__internal.buttons[1].element.innerHTML=d.cancel);break;case"reverseButtons":!0===d?this.elements.buttons.primary.appendChild(this.__internal.buttons[0].element):this.elements.buttons.primary.appendChild(this.__internal.buttons[1].element)}},callback:function(a){var c;switch(a.index){case 0:this.settings.value=b.value,"function"==typeof this.get("onok")&&void 0!==(c=this.get("onok").call(this,a,this.settings.value))&&(a.cancel=!c);break;case 1:"function"==typeof this.get("oncancel")&&void 0!==(c=this.get("oncancel").call(this,a))&&(a.cancel=!c),a.cancel||(b.value=this.settings.value)}}}}),"object"==typeof module&&"object"==typeof module.exports?module.exports=y:"function"==typeof define&&define.amd?define([],function(){return y}):a.alertify||(a.alertify=y)}("undefined"!=typeof window?window:this);
(function ($) {
    "use strict";

    /*------ ScrollUp -------- */
    $.scrollUp({
        scrollText: '<i class="icon-arrow-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

    /*------ Wow Active ----*/
    new WOW().init();

    /*------ Hero slider active 1 ----*/
    $('.hero-slider-active-1').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        loop: true,
        autoplay: true,
        centerMode: false,
        dots: false,
        arrows: true,
        prevArrow: '<span class="slider-icon-1-prev"><i class="icon-arrow-left"></i></span>',
        nextArrow: '<span class="slider-icon-1-next"><i class="icon-arrow-right"></i></span>',
    });

    /*------ Hero slider active 2 ----*/
    $('.hero-slider-active-2').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        loop: true,
        dots: false,
        arrows: true,
        prevArrow: '<span class="slider-icon-1-prev"><i class="icon-arrow-left"></i></span>',
        nextArrow: '<span class="slider-icon-1-next"><i class="icon-arrow-right"></i></span>',
    });

    /*------ Hero slider active 3 ----*/
    $('.hero-slider-active-3').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        loop: true,
        dots: true,
        arrows: false,
    });

    /*------ Product slider active ----*/
    $('.product-slider-active').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        fade: false,
        loop: true,
        dots: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    /*------ Product slider active 2 ----*/
    $('.product-slider-active-2').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        fade: false,
        loop: true,
        dots: true,
        centerMode: false,
        rows: 2,
        arrows: false,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });


    /*------ Product slider active 3 ----*/
    $('.product-slider-active-3').slick({
        slidesToShow: 4,
        slidesToScroll: 2,
        fade: false,
        loop: true,
        dots: false,
        arrows: true,
        autoplay: true,
        centerMode: false,
        prevArrow: '<span class="pro-slider-icon-1-prev"><i class="icon-arrow-left"></i></span>',
        nextArrow: '<span class="pro-slider-icon-1-next"><i class="icon-arrow-right"></i></span>',
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]
    });

    /*------ Product slider active 4 ----*/
    $('.product-slider-active-4').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        fade: false,
        loop: true,
        dots: false,
        arrows: true,
        prevArrow: '<span class="pro-slider-icon-1-prev"><i class="icon-arrow-left"></i></span>',
        nextArrow: '<span class="pro-slider-icon-1-next"><i class="icon-arrow-right"></i></span>',
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    /*------ Product slider active 5 ----*/
    $('.product-slider-active-5').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        fade: false,
        loop: true,
        dots: false,
        arrows: false,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    /*------ product categories slider 1 ----*/
    $('.product-categories-slider-1').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        fade: false,
        loop: true,
        dots: false,
        arrows: true,
        prevArrow: '<span class="pro-slider-icon-1-prev"><i class="icon-arrow-left"></i></span>',
        nextArrow: '<span class="pro-slider-icon-1-next"><i class="icon-arrow-right"></i></span>',
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]
    });

    /*------ Product categories slider 3 ----*/
    $('.product-categories-slider-3').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        fade: false,
        loop: true,
        dots: false,
        arrows: true,
        rows: 2,
        prevArrow: '<span class="pro-slider-icon-1-prev"><i class="icon-arrow-left"></i></span>',
        nextArrow: '<span class="pro-slider-icon-1-next"><i class="icon-arrow-right"></i></span>',
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]
    });



    /*--------------------------------
        InstagramFeed active
    -----------------------------------*/

    $(window).on('load', function(){
        var instagramFeedSliderOne = function () {
            $.instagramFeed({
                username: "ecommerce.devitems",
                container: "#instagramFeedOne",
                display_profile: false,
                'display_biography': false,
                display_gallery: true,
                callback: null,
                styling: false,
                items: 8,
            });
        };
        instagramFeedSliderOne();
        $("#instagramFeedOne").on("DOMNodeInserted", function (e) {
            if (e.target.className === "instagram_gallery") {
                $(".instagram-carousel .instagram_gallery").slick({
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    autoplay: false,
                    dots: false,
                    arrows: false,
                    loop: true,
                    responsive: [
                        {
                            breakpoint: 767,
                            settings: {
                                slidesToShow: 3,
                            }
                        },
                        {
                            breakpoint: 575,
                            settings: {
                                slidesToShow: 2,
                            }
                        }
                    ]
                });
                $(".instagram-carousel-2 .instagram_gallery").slick({
                    slidesToShow: 8,
                    slidesToScroll: 1,
                    autoplay: false,
                    dots: false,
                    arrows: false,
                    loop: true,
                    responsive: [
                        {
                            breakpoint: 1199,
                            settings: {
                                slidesToShow: 6,
                            }
                        },
                        {
                            breakpoint: 991,
                            settings: {
                                slidesToShow: 5,
                            }
                        },
                        {
                            breakpoint: 767,
                            settings: {
                                slidesToShow: 3,
                            }
                        },
                        {
                            breakpoint: 575,
                            settings: {
                                slidesToShow: 2,
                            }
                        }
                    ]
                });
            }
        });

    });



    /*--- Language currency active ----*/
    $('.language-dropdown-active').on('click', function(e) {
        e.preventDefault();
        $('.language-dropdown').slideToggle(400);
    });
    $('.currency-dropdown-active').on('click', function(e) {
        e.preventDefault();
        $('.currency-dropdown').slideToggle(400);
    });

    /*--- Countdown timer active ----*/
    $('#timer-1-active , #timer-3-active').syotimer({
        year: 2020,
        month: 10,
        day: 22,
        hour: 8,
        minute: 48,
        layout: 'hms',
        periodic: false,
        periodUnit: 'm'
    });

    $('#timer-2-active').syotimer({
        year: 2020,
        month: 10,
        day: 22,
        hour: 8,
        minute: 48,
        layout: 'dhms',
        periodic: false,
        periodUnit: 'm'
    });

    /*====== SidebarCart ======*/
    function miniCart() {
        var navbarTrigger = $('.cart-active'),
            endTrigger = $('.cart-close'),
            container = $('.sidebar-cart-active'),
            wrapper = $('.main-wrapper');

        wrapper.prepend('<div class="body-overlay"></div>');

        navbarTrigger.on('click', function(e) {
            e.preventDefault();
            container.addClass('inside');
            wrapper.addClass('overlay-active');
        });

        endTrigger.on('click', function() {
            container.removeClass('inside');
            wrapper.removeClass('overlay-active');
        });

        $('.body-overlay').on('click', function() {
            container.removeClass('inside');
            wrapper.removeClass('overlay-active');
        });
    };
    miniCart();

    /*-------------------------------
	   Header Search Toggle
    -----------------------------------*/
    var searchToggle = $('.search-toggle');
    searchToggle.on('click', function(e){
        e.preventDefault();
        if($(this).hasClass('open')){
           $(this).removeClass('open');
           $(this).siblings('.search-wrap-1').removeClass('open');
        }else{
           $(this).addClass('open');
           $(this).siblings('.search-wrap-1').addClass('open');
        }
    })


    /* NiceSelect */
    $('.nice-select').niceSelect();


    /*-------------------------
      Category active
    --------------------------*/
    $('.categori-show').on('click', function(e) {
        e.preventDefault();
        $('.categori-hide , .categori-hide-2').slideToggle(900);
    });

    /*--------------------------------
        Deal slider active
    -----------------------------------*/
    $('.deal-slider-active').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: false,
        loop: true,
        dots: false,
        arrows: true,
        prevArrow: '<span class="slider-icon-1-prev"><i class="icon-arrow-left"></i></span>',
        nextArrow: '<span class="slider-icon-1-next"><i class="icon-arrow-right"></i></span>',
    });


    /*--------------------------------
        Sidebar product active
    -----------------------------------*/
    $('.sidebar-product-active').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: false,
        loop: true,
        dots: false,
        rows: 3,
        arrows: true,
        prevArrow: '<span class="sidebar-icon-prev"><i class="icon-arrow-left"></i></span>',
        nextArrow: '<span class="sidebar-icon-next"><i class="icon-arrow-right"></i></span>',
    });

    /*--------------------------------
        Sidebar blog active
    -----------------------------------*/
    $('.sidebar-blog-active').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: false,
        loop: true,
        dots: false,
        rows: 2,
        arrows: true,
        prevArrow: '<span class="sidebar-icon-prev"><i class="icon-arrow-left"></i></span>',
        nextArrow: '<span class="sidebar-icon-next"><i class="icon-arrow-right"></i></span>',
    });

    /*--------------------------------
        Product categories slider
    -----------------------------------*/
    $('.product-categories-slider-2').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        fade: false,
        loop: true,
        dots: false,
        arrows: true,
        prevArrow: '<span class="sidebar-icon-prev"><i class="icon-arrow-left"></i></span>',
        nextArrow: '<span class="sidebar-icon-next"><i class="icon-arrow-right"></i></span>',
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]
    });

    /*--------------------------------
        Testimonial active
    -----------------------------------*/
    $('.testimonial-active-1').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: false,
        loop: true,
        dots: true,
        arrows: false,
    });
    /*--------------------------------
        Testimonial active 2
    -----------------------------------*/
    $('.testimonial-active-2').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: false,
        loop: true,
        dots: false,
        arrows: false,
    });

    /*--------------------------------
        Product slider active 6
    -----------------------------------*/
    $('.product-slider-active-6').slick({
        slidesToShow: 2,
        slidesToScroll: 1,
        fade: false,
        loop: true,
        dots: true,
        rows: 2,
        arrows: false,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    /*--------------------------------
        Product slider active 7
    -----------------------------------*/
    $('.product-slider-active-7').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        fade: false,
        loop: true,
        dots: true,
        rows: 2,
        arrows: false,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    /*--------------------------------
        Product slider active 8
    -----------------------------------*/
    $('.product-slider-active-8').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        fade: false,
        loop: true,
        dots: true,
        arrows: true,
        prevArrow: '<span class="sidebar-icon-prev"><i class="icon-arrow-left"></i></span>',
        nextArrow: '<span class="sidebar-icon-next"><i class="icon-arrow-right"></i></span>',
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    /*--------------------------------
        Product slider active 9
    -----------------------------------*/
    $('.product-slider-active-9').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        fade: false,
        loop: true,
        dots: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    /*------- Color active -----*/
    $('.pro-details-color-content').on('click', 'a', function(e){
        e.preventDefault();
        $(this).addClass('active').parent().siblings().children('a').removeClass('active');
    });

    /*--------------------------------
        Social icon active
    -----------------------------------*/
    if ($('.pro-details-action').length) {
        var $body = $('body'),
            $cartWrap = $('.pro-details-action'),
            $cartContent = $cartWrap.find('.product-dec-social');
        $cartWrap.on('click', '.social', function(e) {
            e.preventDefault();
            var $this = $(this);
            if (!$this.parent().hasClass('show')) {
                $this.siblings('.product-dec-social').addClass('show').parent().addClass('show');
            } else {
                $this.siblings('.product-dec-social').removeClass('show').parent().removeClass('show');
            }
        });
        /*Close When Click Outside*/
        $body.on('click', function(e) {
            var $target = e.target;
            if (!$($target).is('.pro-details-action') && !$($target).parents().is('.pro-details-action') && $cartWrap.hasClass('show')) {
                $cartWrap.removeClass('show');
                $cartContent.removeClass('show');
            }
        });
    }

    /*---------------------
        Price range
    --------------------- */
    var sliderrange = $('#slider-range');
    var amountprice = $('#amount');
    $(function() {
        sliderrange.slider({
            range: true,
            min: 16,
            max: 400,
            values: [0, 300],
            slide: function(event, ui) {
                amountprice.val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        amountprice.val("$" + sliderrange.slider("values", 0) +
            " - $" + sliderrange.slider("values", 1));
    });

    /*----------------------------
    	Cart Plus Minus Button
    ------------------------------ */
    var CartPlusMinus = $('.cart-plus-minus');
    CartPlusMinus.prepend('<div class="dec qtybutton">-</div>');
    CartPlusMinus.append('<div class="inc qtybutton">+</div>');
    $(".qtybutton").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() === "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        $button.parent().find("input").val(newVal);
    });

    $('.modal-quickview').on('shown.bs.modal', function () {
        $('.quickview-slide-active').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            fade: false,
            loop: true,
            dots: false,
            arrows: true,
            prevArrow: '<span class="icon-prev"><i class="icon-arrow-left"></i></span>',
            nextArrow: '<span class="icon-next"><i class="icon-arrow-right"></i></span>',
            responsive: [
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 2,
                    }
                }
            ]
        });
        $('.quickview-slide-active a').on('click', function() {
            $('.quickview-slide-active a').removeClass('active');
        })
    })

     /*====== Sidebar menu Active ======*/
    function mobileHeaderActive() {
        var navbarTrigger = $('.mobile-header-button-active'),
            endTrigger = $('.sidebar-close'),
            container = $('.mobile-header-active'),
            wrapper4 = $('.main-wrapper');

        wrapper4.prepend('<div class="body-overlay-1"></div>');

        navbarTrigger.on('click', function(e) {
            e.preventDefault();
            container.addClass('sidebar-visible');
            wrapper4.addClass('overlay-active-1');
        });

        endTrigger.on('click', function() {
            container.removeClass('sidebar-visible');
            wrapper4.removeClass('overlay-active-1');
        });

        $('.body-overlay-1').on('click', function() {
            container.removeClass('sidebar-visible');
            wrapper4.removeClass('overlay-active-1');
        });
    };
    mobileHeaderActive();

    /*---------------------
        mobile-menu
    --------------------- */
    var $offCanvasNav = $('.mobile-menu , .category-menu-dropdown'),
        $offCanvasNavSubMenu = $offCanvasNav.find('.dropdown');

    /*Add Toggle Button With Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i></i></span>');

    /*Close Off Canvas Sub Menu*/
    $offCanvasNavSubMenu.slideUp();

    /*Category Sub Menu Toggle*/
    $offCanvasNav.on('click', 'li a, li .menu-expand', function(e) {
        var $this = $(this);
        if ( ($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('menu-expand')) ) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length){
                $this.parent('li').removeClass('active');
                $this.siblings('ul').slideUp();
            } else {
                $this.parent('li').addClass('active');
                $this.closest('li').siblings('li').removeClass('active').find('li').removeClass('active');
                $this.closest('li').siblings('li').find('ul:visible').slideUp();
                $this.siblings('ul').slideDown();
            }
        }
    });


    /*--- checkout toggle function ----*/
    $('.checkout-click1').on('click', function(e) {
        e.preventDefault();
        $('.checkout-login-info').slideToggle(900);
    });


    /*--- checkout toggle function ----*/
    $('.checkout-click3').on('click', function(e) {
        e.preventDefault();
        $('.checkout-login-info3').slideToggle(1000);
    });

    /*-------------------------
    Create an account toggle
    --------------------------*/
    $('.checkout-toggle2').on('click', function() {
        $('.open-toggle2').slideToggle(1000);
    });

    $('.checkout-toggle').on('click', function() {
        $('.open-toggle').slideToggle(1000);
    });

    /*-------------------------
    checkout one click toggle function
    --------------------------*/
    var checked = $( '.sin-payment input:checked' )
    if(checked){
        $(checked).siblings( '.payment-box' ).slideDown(900);
    };
	 $( '.sin-payment input' ).on('change', function() {
        $( '.payment-box' ).slideUp(900);
        $(this).siblings( '.payment-box' ).slideToggle(900);
    });


    // Instantiate EasyZoom instances

    /*-------------------------------------
        Product details big image slider
    ---------------------------------------*/
    $('.pro-dec-big-img-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        draggable: false,
        fade: false,
        asNavFor: '.product-dec-slider-small , .product-dec-slider-small-2',
    });

    /*---------------------------------------
        Product details small image slider
    -----------------------------------------*/
    $('.product-dec-slider-small').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.pro-dec-big-img-slider',
        dots: false,
        focusOnSelect: true,
        fade: false,
        prevArrow: '<span class="pro-dec-prev"><i class="icon-arrow-left"></i></span>',
        nextArrow: '<span class="pro-dec-next"><i class="icon-arrow-right"></i></span>',
        responsive: [{
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]
    });

    /*----------------------------------------
        Product details small image slider 2
    ------------------------------------------*/
    $('.product-dec-slider-small-2').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        vertical: true,
        asNavFor: '.pro-dec-big-img-slider',
        dots: false,
        focusOnSelect: true,
        fade: false,
        prevArrow: '<span class="pro-dec-prev"><i class="icon-arrow-up"></i></span>',
        nextArrow: '<span class="pro-dec-next"><i class="icon-arrow-down"></i></span>',
        responsive: [{
                breakpoint: 1365,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 4,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 2,
                }
            }
        ]
    });


    /*--
        Magnific Popup
    ------------------------*/
    $('.img-popup').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    $('.related-product-active').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        fade: false,
        loop: true,
        dots: false,
        arrows: false,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    /*------------------------
        Sidebar sticky active
    -------------------------- */
    $('.sidebar-active').stickySidebar({
        topSpacing: 0,
        bottomSpacing: 30,
        minWidth: 767,
    });

    /*--- language currency active ----*/
    $('.mobile-language-active').on('click', function(e) {
        e.preventDefault();
        $('.lang-dropdown-active').slideToggle(900);
    });
    $('.mobile-currency-active').on('click', function(e) {
        e.preventDefault();
        $('.curr-dropdown-active').slideToggle(900);
    });


})(jQuery);


const hostname =document.location.origin;
function addToCart(id) {
    var qty = $('#qty-' + id).val();
    var _token = $('input[name="_token"]').val();
    $.ajax({
        url: '/them-gio-hang/' + id,
        type: 'POST',
        data: {qty: qty, _token: _token},
    }).done(function (response) {
        // alert(response)
        $('#cart-item').empty();
        $('#cart_qty').empty();
        $('#qty-cart-mobile').empty();
        $('#cart_page').empty();
        $('#cart-item').html(response.cart_head);
        $('#cart_qty').html(response.cart_qty);
        $('#qty-cart-mobile').html(response.cart_qty);
        $('#cart_page').html(response.cart_page);
        $('#qty-' + id).val(1);
        alertify.success('Thêm Giỏ Hàng Thành Công');
    });
}
function removeCartItem(id) {
    $.ajax({
        url: 'delete-cart-item/' + id,
        type: 'GET',
    }).done(function (response) {
        // alert(response)
        $('#cart-item').empty();
        $('#cart_qty').empty();
        $('#qty-cart-mobile').empty();
        $('#cart_page').empty();
        $('#cart-item').html(response.cart_head);
        $('#cart_qty').html(response.cart_qty);
        $('#qty-cart-mobile').html(response.cart_qty);
        $('#cart_page').html(response.cart_page);
        alertify.warning('Đã xoá sản phẩm');
    });
}
function removeAllCart() {
    $.ajax({
        url: 'delete-all-cart',
        type: 'GET',
    }).done(function (response) {
        // alert(response)
        $('#cart-item').empty();
        $('#cart_qty').empty();
        $('#qty-cart-mobile').empty();
        $('#cart_page').empty();
        $('#cart-item').html(response.cart_head);
        $('#cart_qty').html(response.cart_qty);
        $('#qty-cart-mobile').html(response.cart_qty);
        $('#cart_page').html(response.cart_page);
        alertify.warning('Đã xoá tất cả sản phẩm trong giỏ hàng');
    });
}
function checkOut(){
    swal({
        title: "Thông Báo!",
        text: "Vui lòng liên hệ đến  <b class='font-weight-bold'> Nguyễn Văn Tuân </b> </br> SĐT:<b class='text-danger mt-1'>0934616287</b> </br> để được hỗ trợ",
        html:true,
        // imageUrl:hostname+"/assets/frontend/images/load.gif",
        showCancelButton: false,
        showConfirmButton: true
    });
    // var _token = $("input[name='_token']").val();
    // var fullName = $("input[name='fullName']#fullName").val();
    // var phoneNumber = $("input[name='phoneNumber']#phoneNumber").val();
    // var email = $("input[name='emailAddress']#emailAddress").val();
    // var address = $("input[name='Address']#Address").val();
    // var message = $("textarea[name='message']#noteCheckout").val();

    // $.ajax({
    //     url: "/checkout",
    //     type:'POST',
    //     data: {_token:_token, fullName:fullName, phoneNumber:phoneNumber, email:email, address:address,message:message},
    //     beforeSend: function() {
    //         swal({
    //             title: "Đang Tải...",
    //             text: "Xin Hãy Chờ!",
    //             imageUrl:hostname+"/assets/frontend/images/load.gif",
    //             showCancelButton: false,
    //             showConfirmButton: false
    //         });
    //     },
    //     success: function(data) {
    //         if($.isEmptyObject(data.error)){
    //             document.location.href="/xac-nhan";
    //         }else{
    //             sweetAlert("Lỗi...","Vui Lòng Nhập Đầy Đủ Thông Tin!","error")
    //             printErrorMsg(data.error);
    //         }
    //     },
    //     error:function (data){
    //         Swal.fire({
    //             icon: 'error',
    //             title: 'Oops...',
    //             text: 'Something went wrong!',
    //         })
    //     }
    // });
    // function printErrorMsg (msg) {
    //     $(".print-error-msg").find("ul").html('');
    //     $(".print-error-msg").css('display','block');
    //     $.each( msg, function( key, value ) {
    //         $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
    //     });
    // }
}
function functionAjax(){
    var search = "";
    var cate = $('#cate').val();
    if($('#search').val() === ""){
        search = $('#search-cate').val();
    }else {
        search = $('#search').val();
    }
    var display = $('#display-item').val();
    var sortBy = $('#sort-by').val();
    $.ajax({
        url: '/search-and-sort',
        type: 'GET',
        data: {p: search,display:display,sort:sortBy, cate: cate},
    }).done(function (response) {
        $('#product-res').empty();
        $('#product-res').html(response.products);
        if(response.search_key === null){
            $('#search-key').empty();
        }else {
            $('#search-key').empty();
            $('#search-key').html('<p><i class="icon_search"></i> Kết Quả Tìm Kiếm Cho Từ Khoá "<span class="text-danger">'+`${response.search_key}`+'</span>"</p>');
        }
    });
}
