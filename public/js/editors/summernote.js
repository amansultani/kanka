(()=>{var t,e=!1;function a(e,a){$.ajax({url:t.data("mention")+"?q="+e+"&new=1",type:"get",dataType:"json",async:!0}).done(a)}function n(t){var e=t.type?" ("+t.type+")":"";return t.image?'<div class="entity-hint">'+t.image+'<div class="entity-hint-name">'+t.fullname+e+"</div></div>":t.fullname+e}function r(a){if(a.id){var n="["+a.model_type+":"+a.id+a.fullname+"]",r="["+a.model_type+":"+a.id+a.advanced_mention+"]";return a.alias_id?(n="["+a.model_type+":"+a.id+"|alias:"+a.alias_id+a.advanced_mention+"]",$("<span>"+n+"</span>")[0]):t.data("advanced-mention")||e?$("<span>"+r+"</span>")[0]:$("<a />",{text:a.fullname,href:"#",class:"mention","data-name":a.fullname,"data-mention":"["+a.model_type+":"+a.id+"]"})[0]}return a.url?a.tooltip?$("<a />",{text:a.fullname,href:a.url,title:a.tooltip.replace(/["]/g,"'"),"data-toggle":"tooltip","data-html":"true"})[0]:$("<a />",{text:a.fullname,href:a.url})[0]:a.inject?a.inject:a.fullname}function o(t){return t?"he"==t?"he-IL":"ca"==t?"ca-ES":"el"==t?"el-GR":"en"==t?"en-US":t+"-"+t.toUpperCase():"en-US"}$(document).ready((function(){(t=$("#summernote-config")).length>0&&window.initSummernote()})),window.initSummernote=function(){var l=$(".html-editor").summernote({height:"300px",lang:o(t.data("locale")),hintSelect:"next",toolbar:[["style",["style"]],["font",["bold","italic","underline","strikethrough","clear"]],["color",["color"]],["aroba",["aroba"]],["para",["ul","ol","kanka-indent","kanka-outdent","paragraph"]],["table",["table","spoiler","tableofcontent"]],["insert",["link","picture","video","embed","hr"]],["view",["fullscreen","codeview","help"]],""!==t.data("gallery")?["extensions",["summernoteGallery"]]:null],popover:{table:[["add",["addRowDown","addRowUp","addColLeft","addColRight"]],["delete",["deleteRow","deleteCol","deleteTable"]],["custom",["tableHeaders"]],["custom",["tableStyles"]]]},callbacks:{onImageUpload:function(e){!function(e,a){if(!t.data("gallery-upload"))return $("#campaign-imageupload-error").modal(),void console.warn("Campaign isn't superboosted");formData=new FormData,formData.append("file",a),formData.append("_token",$('meta[name="csrf-token"]').attr("content")),$.ajax({url:t.data("gallery-upload"),data:formData,cache:!1,contentType:!1,processData:!1,type:"POST",success:function(t){e.summernote("insertImage",t,(function(e){e.attr("src",t)}))},error:function(t,e,a){$("#superboosted-error").text(function(t){var e="";for(var a in t)t.hasOwnProperty(a)&&(e+=t[a]+"\n");return e}(t.responseJSON.errors)),$("#campaign-imageupload-error").modal()}})}(l,e[0])},onChange:function(){window.entityFormHasUnsavedChanges=!0},onChangeCodeview:function(t,e){$(this).summernote("code",t)}},summernoteGallery:{source:{url:t.data("gallery"),responseDataKey:"data",nextPageKey:"links.next"},modal:{loadOnScroll:!0,maxHeight:350,title:t.data("gallery-title"),close_text:t.data("gallery-close"),ok_text:t.data("gallery-add"),selectAll_text:t.data("gallery-select-all"),deselectAll_text:t.data("gallery-deselect-all"),noImageSelected_msg:t.data("gallery-error")}},hint:[{match:/\B@(\S*)$/,search:function(t,e){return t.length<3?[]:a(t,e)},template:function(t){return n(t)},content:function(t){return e=!1,r(t)}},{match:/\B\[(\S[^:]*)$/,search:function(t,e){return t.length<3?[]:a(t,e)},template:function(t){return n(t)},content:function(t){return e=!0,r(t)}},{match:/\B\#(\S*)$/,search:function(e,a){return function(e,a){$.ajax({url:t.data("months")+"?q="+e,type:"get",dataType:"json",async:!0}).done(a)}(e,a)},template:function(t){return n(t)},content:function(t){return e=!1,r(t)}},{match:/\B{(\S[^:]*)$/,search:function(e,a){return function(e,a){if(!t.data("attributes"))return!1;$.ajax({url:t.data("attributes")+"?q="+e,type:"get",dataType:"json",async:!0}).done(a)}(e,a)},template:function(t){return function(t){return t.name+(t.value?" ("+t.value+")":"")}(t)},content:function(e){return function(e){if(t.data("advanced-mention"))return"{attribute:"+e.id+"}";return $("<a />",{href:"#",class:"attribute attribute-mention",text:"{"+e.name+"}","data-attribute":"{attribute:"+e.id+"}"})[0]}(e)}}],keyMap:{pc:{ESC:"escape",ENTER:"insertParagraph","CTRL+Z":"undo","CTRL+Y":"redo",TAB:"tab","SHIFT+TAB":"untab","CTRL+B":"bold","CTRL+I":"italic","CTRL+U":"underline","CTRL+SHIFT+I":"strikethrough","CTRL+BACKSLASH":"removeFormat","CTRL+SHIFT+L":"justifyLeft","CTRL+SHIFT+E":"justifyCenter","CTRL+SHIFT+R":"justifyRight","CTRL+SHIFT+J":"justifyFull","CTRL+SHIFT+NUM7":"insertUnorderedList","CTRL+SHIFT+NUM8":"insertOrderedList","CTRL+LEFTBRACKET":"outdent","CTRL+RIGHTBRACKET":"indent","CTRL+NUM0":"formatPara","CTRL+NUM1":"formatH1","CTRL+NUM2":"formatH2","CTRL+NUM3":"formatH3","CTRL+NUM4":"formatH4","CTRL+NUM5":"formatH5","CTRL+NUM6":"formatH6","CTRL+ENTER":"insertHorizontalRule","CTRL+K":"linkDialog.show"},mac:{ESC:"escape",ENTER:"insertParagraph","CMD+Z":"undo","CMD+SHIFT+Z":"redo",TAB:"tab","SHIFT+TAB":"untab","CMD+B":"bold","CMD+I":"italic","CMD+U":"underline","CMD+SHIFT+I":"strikethrough","CMD+BACKSLASH":"removeFormat","CMD+SHIFT+L":"justifyLeft","CMD+SHIFT+E":"justifyCenter","CMD+SHIFT+R":"justifyRight","CMD+SHIFT+J":"justifyFull","CMD+SHIFT+NUM7":"insertUnorderedList","CMD+SHIFT+NUM8":"insertOrderedList","CMD+LEFTBRACKET":"outdent","CMD+RIGHTBRACKET":"indent","CMD+NUM0":"formatPara","CMD+NUM1":"formatH1","CMD+NUM2":"formatH2","CMD+NUM3":"formatH3","CMD+NUM4":"formatH4","CMD+NUM5":"formatH5","CMD+NUM6":"formatH6","CMD+ENTER":"insertHorizontalRule","CMD+K":"linkDialog.show"}}})}})();