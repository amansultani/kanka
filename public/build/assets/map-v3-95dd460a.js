import{d as P}from"./delete-confirm-63bc2c61.js";let w,v,c,M,m,x,u,r,l,t,d,a,g,C,k;const y=window.matchMedia("only screen and (max-width: 760px)");$(document).ready(function(){window.map.invalidateSize(),window.map.on("popupopen",function(e){P()}),$('a[href="#marker-pin"]').click(function(e){$('input[name="shape_id"]').val(1),$("#map-marker-bg-colour").show(),p()}),$('a[href="#marker-label"]').click(function(e){$('input[name="shape_id"]').val(2),$("#map-marker-bg-colour").hide(),p()}),$('a[href="#marker-circle"]').click(function(e){$('input[name="shape_id"]').val(3),$("#map-marker-bg-colour").show(),p()}),$('a[href="#marker-poly"]').click(function(e){$('input[name="shape_id"]').val(5),$("#map-marker-bg-colour").show(),p()}),$('a[href="#presets"]').click(function(e){J($(this).data("presets"))}),$('a[href="#form-markers"]').click(function(e){window.map.invalidateSize()}),j(),U(),B(),G(),W()});function j(){w=$("#map-body"),w.length!==0&&(v=$("#sidebar-map"),c=$("#sidebar-marker"),M=$("#map-marker-modal"),x=$("#map-marker-modal-title"),m=$("#map-marker-modal-content"),window.markerDetails=function(e){H(),y.matches&&(e=e+"?mobile=1"),$.ajax({url:e,type:"GET",async:!0,success:function(n){n&&(y.matches?(x.html(n.name),m.find(".content").html(n.body).show(),m.find(".spinner").hide()):(c.html(n.body).show().parent().find(".spinner").hide(),O(),w.addClass("sidebar-open")),P())}})},z(),_())}function U(){$('select[name="size_id"]').change(function(n){this.value==6?($(".map-marker-circle-helper").hide(),$(".map-marker-circle-radius").show()):($(".map-marker-circle-radius").hide(),$(".map-marker-circle-helper").show())});let e=$("#map-marker-form");$("#entity-form").length===0&&$(".map-marker-edit-form").length===0||(e.unbind("submit").on("submit",function(){window.entityFormHasUnsavedChanges=!1}),_())}function H(){if(y.matches){m.find(".spinner").show(),m.find(".content").hide(),M.modal("toggle");return}w.removeClass("sidebar-collapse").addClass("sidebar-open"),v.hide(),c.html("").show(),c.parent().find(".spinner").show(),N()}function O(){$(".marker-close").click(function(e){c.hide(),v.show()})}const z=()=>{let e=$("#ticker-config");g=e.data("timeout"),C=e.data("url"),k=e.data("ts"),$(document).ready(function(){setTimeout(T,g)})},T=()=>{$.ajax(C+"?ts="+k).done(function(e){if(e){k=e.ts;for(let n in e.markers){let o=e.markers[n];window["marker"+o.id].setLatLng({lon:o.longitude,lat:o.latitude}).update()}setTimeout(T,g)}})},_=()=>{$(".map-legend-marker").click(function(e){e.preventDefault(),window.map.panTo(L.latLng($(this).data("lat"),$(this).data("lng"))),window[$(this).data("id")].openPopup()}),$("a.sidebar-toggle").click(function(){N()})};function N(){setTimeout(()=>{window.map.invalidateSize()},500)}function B(){$(".map-marker-entry-click").click(function(e){e.preventDefault(),$(this).parent().hide(),$(".map-marker-entry-entry").show()})}function W(){$(".btn-mode-enable").click(function(e){e.preventDefault(),window.exploreEditMode=!0,$("body").addClass("map-edit-mode")}),$(".btn-mode-disable").click(function(e){e.preventDefault(),window.exploreEditMode=!1,$("body").removeClass("map-edit-mode"),window.polygon&&window.map.removeLayer(window.polygon)}),$(".btn-mode-drawing").click(function(e){e.preventDefault(),D()})}function D(){window.drawingPolygon=!1,$("body").removeClass("map-drawing-mode"),$("#marker-modal").modal("show")}function G(){$("#start-drawing-polygon").on("click",function(e){e.preventDefault(),window.exploreEditMode=!1,window.startNewPolygon(),window.showToast($(this).data("toast")),$("body").addClass("map-drawing-mode"),$("#marker-modal").modal("hide")}),u=$("#reset-polygon"),u.click(function(e){e.preventDefault(),window.polygon&&window.map.removeLayer(window.polygon),$('textarea[name="custom_shape"]').val(""),u.hide(),window.startNewPolygon()}),window.map.on("editable:editing",function(e){E()&&(S(),e.layer.setStyle({weight:r,color:l,opacity:t,fillColor:d,fillOpacity:a}))})}window.startNewPolygon=function(){window.polygon=window.map.editTools.startPolygon();let e=!0;window.polygon.on("editable:dragend",window.markerUpdateHandler),window.polygon.on("editable:vertex:new",window.markerUpdateHandler),window.polygon.on("editable:vertex:dragend",window.markerUpdateHandler),window.polygon.on("editable:vertex:dragend",window.markerUpdateHandler),window.polygon.on("editable:drawing:end",function(n){e=!1}),window.polygon.on("click",function(n){e||D()})};window.setPolygonPosition=function(e){$('textarea[name="custom_shape"]').val(e)};window.markerUpdateHandler=function(e){E()?q(e):I()&&A(e)};const q=e=>{let n=e.target.getLatLngs();if(n.length===0)return;let o=[];n[0].forEach(i=>{o.push(i.lat.toFixed(3)+","+i.lng.toFixed(3))}),window.setPolygonPosition(o.join(" "))},A=e=>{let n=e.target._latlng;n&&($("#marker-latitude").val(n.lat.toFixed(3)),$("#marker-longitude").val(n.lng.toFixed(3)))},E=()=>{let e=document.getElementsByName("shape_id");return Number(e[0].value)===5},I=()=>{let e=document.getElementsByName("shape_id");return Number(e[0].value)===2};window.addPolygonPosition=function(e,n){let o=$('textarea[name="custom_shape"]'),i=o.val();i.length>0&&(i+=" "),o.val(i+e+","+n);let s=o.val().trim(" ").split(" "),h=[];s.forEach(F=>{let b=F.split(",");h.push([b[0],b[1]])},h),window.polygon&&window.map.removeLayer(window.polygon),S(),window.polygon=L.polygon(h,{weight:r,color:l,opacity:t,fillColor:d,fillOpacity:a,linecap:"round",linejoin:"round"}),window.polygon.addTo(window.map),u.show()};function S(){l=$('input[name="polygon_style[stroke]"]').val(),(!l||l.length<7)&&(l="red"),t=$('input[name="polygon_style[stroke-opacity]"]').val(),isNaN(t)||!t?t=1:t=t/100,d=$('input[name="colour"]').val(),(!d||d.length<7)&&(d="red"),a=$('input[name="opacity"]').val(),isNaN(a)?a=.5:a=a/100,r=$('input[name="polygon_style[stroke-width]"]').val(),(isNaN(r)||!r)&&(r=1)}function p(){$("#marker-main-fields").show(),$("#marker-footer").show()}function J(e){$("#marker-main-fields").hide(),$("#marker-footer").hide(),$(".marker-preset-list .fa-spinner").length!==0&&$.ajax({url:e}).done(function(n){$(".marker-preset-list").html(n),K()})}function K(){$(".preset-use").on("click",function(e){e.preventDefault();let n=$(this).data("url");$(this).find(".fa-spin").show(),$.ajax({url:n,context:this}).done(function(o){$(this).find(".fa-spin").hide(),Object.keys(o.preset).forEach(i=>{let f=o.preset[i],s=$('[name="'+i+'"]');s.length!==0&&(i.endsWith("colour")?s.spectrum("set",f):s.val(f))}),$('a[href="#marker-pin"]').click()})})}
