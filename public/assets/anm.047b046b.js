var x=(r,o)=>()=>(o||r((o={exports:{}}).exports,o),o.exports);var M=x((b,c)=>{(function(){var r=document.body.getAttribute("data-anm");if(!r){console.log("Anm: data-anm attribute is not defined");return}var o=/MSIE.\d+\./gi.test(navigator.userAgent)&&+navigator.userAgent.replace(/.*MSIE.(\d+)\..*/gi,"$1")<9,w="ontouchstart"in window||"onmsgesturechange"in window?"touchmove":"mousemove",i,l=["x","y","scale","opacity","rotate"],s={webkitTransform:"translate3d",MozTransform:"translate3d",msTransform:"translate3d",OTransform:"translate",transform:"translate3d"};function a(){}var y=a.elements=document.querySelectorAll(r);a.on=function(){i=!1},a.off=function(){i=!0},a.toggle=function(){i=!i};function h(e){var t={};return t.x=e.clientX-window.innerWidth/2||0,t.y=e.clientY-window.innerHeight/2||0,t.fi=Math.atan(t.x===0?1/0:-t.y/t.x)+(t.x<0?Math.PI:-t.y<0?2*Math.PI:0),t.s=45*Math.sin(2*t.fi)/100,t.x/=100,t.y/=100,t.r=Math.sqrt(Math.pow(t.x,2)+Math.pow(t.y,2))/Math.sqrt(Math.pow(window.innerWidth,2)+Math.pow(window.innerHeight,2))*2,t}function v(e){for(var t={},n=0;n<l.length;n++)t[l[n]]=+e.getAttribute("data-speed-"+l[n])||0;return t}function m(e,t){var n={};return n.x=e.x*t.x+"px",n.y=e.y*t.y+"px",n.scale=1+e.r*t.scale,n.opacity=1-e.r*Math.abs(t.opacity),n.rotate=-e.s*e.r*100*t.rotate+"deg",n}function g(e,t){if(o)e.style.marginLeft=t.x,e.style.marginTop=t.y;else{for(var n in s)s.hasOwnProperty(n)&&(e.style[n]=[s[n],"(",t.x+","+t.y,s[n]==="translate"?"":",0",") scale(",t.scale,") rotate(",t.rotate,")"].join(""));e.style.opacity=t.opacity,e.style.MozOpacity=t.opacity}}function d(e){if(!i){e=e.type==="touchmove"?e.changedTouches[0]:e;for(var t,n,p=h(e),u=0,f;u<y.length;u++)f=y[u],t=v(f),n=m(p,t),g(f,n)}}d({}),window.addEventListener?window.addEventListener(w,d,!1):window.attachEvent("onmousemove",function(){d.call(window,window.event)}),typeof define=="function"&&define.amd?define([],function(){return a}):typeof c<"u"&&c.exports?(console.log("module.exports"),c.exports=a):this.anm=a}).call(globalThis)});export default M();
