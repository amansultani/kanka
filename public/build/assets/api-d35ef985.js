import{_ as v,c as r,a as e,b as c,F as u,r as h,w as C,h as p,v as b,i as g,d as k,o as i,t as d,p as w,m as M,l as F}from"./_plugin-vue_export-helper-c420bb3b.js";const T={data(){return{clients:[],createForm:{errors:[],name:"",redirect:""},editForm:{errors:[],name:"",redirect:""}}},ready(){this.prepareComponent()},mounted(){this.prepareComponent()},methods:{prepareComponent(){this.getClients()},getClients(){axios.get("/oauth/clients").then(o=>{this.clients=o.data})},showCreateClientForm(){this.openModal("createModal"),this.$refs.createName.focus()},store(){this.persistClient("post","/oauth/clients",this.createForm,"createModal")},edit(o){this.editForm.id=o.id,this.editForm.name=o.name,this.editForm.redirect=o.redirect,this.openModal("editModal"),this.$refs.editName.focus()},update(){this.persistClient("put","/oauth/clients/"+this.editForm.id,this.editForm,"editModal")},persistClient(o,t,a,m){a.errors=[],axios[o](t,a).then(n=>{this.getClients(),a.name="",a.redirect="",a.errors=[],this.closeModal(m)}).catch(n=>{typeof n.response.data=="object"?a.errors=_.flatten(_.toArray(n.response.data.errors)):a.errors=["Something went wrong. Please try again."]})},destroy(o){axios.delete("/oauth/clients/"+o.id).then(t=>{this.getClients()})},openModal(o){this.$refs[o].showModal(),this.$refs[o].addEventListener("click",function(t){let a=this.getBoundingClientRect();!(a.top<=t.clientY&&t.clientY<=a.top+a.height&&a.left<=t.clientX&&t.clientX<=a.left+a.width)&&t.target.tagName==="DIALOG"&&this.close()})},closeModal(o){this.$refs[o].close()}}},S={class:"card card-default"},A={class:"card-header"},$={class:"flex justify-between items-center"},N=e("span",{class:"text-lg"}," OAuth Clients ",-1),I={class:"card-body"},D={key:0,class:"mb-0"},j={key:1,class:"table table-borderless mb-0"},L=e("thead",null,[e("tr",null,[e("th",null,"Client ID"),e("th",null,"Name"),e("th",null,"Secret"),e("th"),e("th")])],-1),R={style:{"vertical-align":"middle"}},U={style:{"vertical-align":"middle"}},Y={style:{"vertical-align":"middle"}},z={style:{"vertical-align":"middle"}},V=["onClick"],P={class:"text-right",style:{"vertical-align":"middle"}},B=["onClick"],K={class:"dialog rounded-2xl text-center",id:"modal-create-client",ref:"createModal","aria-modal":"true","aria-labelledby":"modal-create-client-label"},O=e("h4",{id:"modal-create-client-label"}," Create Client ",-1),q=e("i",{class:"fa-solid fa-times","aria-hidden":"true"},null,-1),E=e("span",{class:"sr-only"},"Close",-1),X=[q,E],W={class:"text-justify"},G={key:0,class:"rounded p-4 bg-red-100 text-red-800 w-full"},H=e("p",{class:"mb-0"},[e("strong",null,"Whoops!"),k(" Something went wrong!")],-1),J=e("br",null,null,-1),Q={class:"mb-5"},Z=e("label",{class:"font-extrabold required"},"Client name",-1),ee=e("span",{class:"text-sm text-muted"}," Something your users will recognize and trust. ",-1),te={class:"mb-5"},se=e("label",{class:"font-extrabold required"},"Redirect URL",-1),oe=e("span",{class:"text-sm text-muted"}," Your application's authorization callback URL. ",-1),le={class:"grid grid-cols-2 gap-2 w-full"},ne={class:"dialog rounded-2xl text-center",id:"modal-edit-client",ref:"editModal","aria-modal":"true","aria-labelledby":"modal-edit-client-label"},re=e("h4",{id:"modal-edit-client-label"}," Create Client ",-1),ie=e("i",{class:"fa-solid fa-times","aria-hidden":"true"},null,-1),ae=e("span",{class:"sr-only"},"Close",-1),de=[ie,ae],ce={class:"text-justify"},ue={key:0,class:"alert alert-danger"},he=e("p",{class:"mb-0"},[e("strong",null,"Whoops!"),k(" Something went wrong!")],-1),me=e("br",null,null,-1),_e={role:"form"},pe={class:"form-group row"},be=e("label",{class:"col-md-3 col-form-label"},"Name",-1),fe={class:"col-md-9"},ge=e("span",{class:"form-text text-muted"}," Something your users will recognize and trust. ",-1),ke={class:"form-group row"},ye=e("label",{class:"col-md-3 col-form-label"},"Redirect URL",-1),Ce={class:"col-md-9"},ve=e("span",{class:"form-text text-muted"}," Your application's authorization callback URL. ",-1),xe={class:"grid grid-cols-2 gap-2 w-full"};function we(o,t,a,m,n,l){return i(),r("div",null,[e("div",S,[e("div",A,[e("div",$,[N,e("a",{class:"btn2 btn-primary btn-outline btn-sm",tabindex:"-1",onClick:t[0]||(t[0]=(...s)=>l.showCreateClientForm&&l.showCreateClientForm(...s))}," Create New Client ")])]),e("div",I,[n.clients.length===0?(i(),r("p",D," You have not created any OAuth clients. ")):c("",!0),n.clients.length>0?(i(),r("table",j,[L,e("tbody",null,[(i(!0),r(u,null,h(n.clients,s=>(i(),r("tr",null,[e("td",R,d(s.id),1),e("td",U,d(s.name),1),e("td",Y,[e("code",null,d(s.secret),1)]),e("td",z,[e("a",{class:"cursor-pointer",tabindex:"-1",onClick:f=>l.edit(s)}," Edit ",8,V)]),e("td",P,[e("a",{class:"btn2 btn-error btn-outline btn-xs",onClick:f=>l.destroy(s)}," Delete ",8,B)])]))),256))])])):c("",!0)])]),e("dialog",K,[e("header",null,[O,e("button",{type:"button",class:"rounded-full",onClick:t[1]||(t[1]=s=>l.closeModal("createModal")),title:"Close"},X)]),e("article",W,[n.createForm.errors.length>0?(i(),r("div",G,[H,J,e("ul",null,[(i(!0),r(u,null,h(n.createForm.errors,s=>(i(),r("li",null,d(s),1))),256))])])):c("",!0),e("form",{role:"form",class:"w-full",onSubmit:t[6]||(t[6]=C((...s)=>l.store&&l.store(...s),["prevent"]))},[e("div",Q,[Z,p(e("input",{id:"create-client-name",type:"text",class:"rounded border w-full p-2",name:"name",placeholder:"Name the token","onUpdate:modelValue":t[2]||(t[2]=s=>n.createForm.name=s),onKeyup:t[3]||(t[3]=g((...s)=>l.store&&l.store(...s),["enter"])),ref:"createName"},null,544),[[b,n.createForm.name]]),ee]),e("div",te,[se,p(e("input",{type:"text",class:"rounded border w-full p-2",name:"redirect",onKeyup:t[4]||(t[4]=g((...s)=>l.store&&l.store(...s),["enter"])),"onUpdate:modelValue":t[5]||(t[5]=s=>n.createForm.redirect=s)},null,544),[[b,n.createForm.redirect]]),oe])],32),e("form",{role:"form",class:"w-full mb-5",onSubmit:t[7]||(t[7]=C((...s)=>l.store&&l.store(...s),["prevent"]))},null,32),e("div",le,[e("button",{type:"button",class:"btn2 btn-ghost",onClick:t[8]||(t[8]=s=>l.closeModal("createModal"))},"Close"),e("button",{type:"button",class:"btn2 btn-primary",onClick:t[9]||(t[9]=(...s)=>l.store&&l.store(...s))}," Create ")])])],512),e("dialog",ne,[e("header",null,[re,e("button",{type:"button",class:"rounded-full",onClick:t[10]||(t[10]=s=>l.closeModal("editModal")),title:"Close"},de)]),e("article",ce,[n.editForm.errors.length>0?(i(),r("div",ue,[he,me,e("ul",null,[(i(!0),r(u,null,h(n.editForm.errors,s=>(i(),r("li",null,d(s),1))),256))])])):c("",!0),e("form",_e,[e("div",pe,[be,e("div",fe,[p(e("input",{id:"edit-client-name",type:"text",class:"form-control",onKeyup:t[11]||(t[11]=g((...s)=>l.update&&l.update(...s),["enter"])),"onUpdate:modelValue":t[12]||(t[12]=s=>n.editForm.name=s),ref:"editName"},null,544),[[b,n.editForm.name]]),ge])]),e("div",ke,[ye,e("div",Ce,[p(e("input",{type:"text",class:"form-control",name:"redirect",onKeyup:t[13]||(t[13]=g((...s)=>l.update&&l.update(...s),["enter"])),"onUpdate:modelValue":t[14]||(t[14]=s=>n.editForm.redirect=s)},null,544),[[b,n.editForm.redirect]]),ve])])]),e("div",xe,[e("button",{type:"button",class:"btn2 btn-ghost",onClick:t[15]||(t[15]=s=>l.closeModal("editModal"))},"Close"),e("button",{type:"button",class:"btn2 btn-primary",onClick:t[16]||(t[16]=(...s)=>l.update&&l.update(...s))}," Create ")])])],512)])}const Me=v(T,[["render",we]]);const Fe={data(){return{tokens:[]}},ready(){this.prepareComponent()},mounted(){this.prepareComponent()},methods:{prepareComponent(){this.getTokens()},getTokens(){axios.get("/oauth/tokens").then(o=>{this.tokens=o.data})},revoke(o){axios.delete("/oauth/tokens/"+o.id).then(t=>{this.getTokens()})}}},x=o=>(w("data-v-73922f67"),o=o(),M(),o),Te={key:0},Se={class:"card card-default"},Ae=x(()=>e("div",{class:"card-header text-lg"},"Authorized Applications",-1)),$e={class:"card-body"},Ne={class:"table table-borderless mb-0"},Ie=x(()=>e("thead",null,[e("tr",null,[e("th",null,"Name"),e("th",null,"Scopes"),e("th")])],-1)),De={style:{"vertical-align":"middle"}},je={style:{"vertical-align":"middle"}},Le={key:0},Re={style:{"vertical-align":"middle"}},Ue=["onClick"];function Ye(o,t,a,m,n,l){return i(),r("div",null,[n.tokens.length>0?(i(),r("div",Te,[e("div",Se,[Ae,e("div",$e,[e("table",Ne,[Ie,e("tbody",null,[(i(!0),r(u,null,h(n.tokens,s=>(i(),r("tr",null,[e("td",De,d(s.client.name),1),e("td",je,[s.scopes.length>0?(i(),r("span",Le,d(s.scopes.join(", ")),1)):c("",!0)]),e("td",Re,[e("a",{class:"action-link text-error",onClick:f=>l.revoke(s)}," Revoke ",8,Ue)])]))),256))])])])])])):c("",!0)])}const ze=v(Fe,[["render",Ye],["__scopeId","data-v-73922f67"]]),Ve={data(){return{accessToken:null,tokens:[],scopes:[],form:{name:"",scopes:[],errors:[]}}},ready(){this.prepareComponent()},mounted(){this.prepareComponent()},methods:{prepareComponent(){this.getTokens(),this.getScopes()},getTokens(){axios.get("/oauth/personal-access-tokens").then(o=>{this.tokens=o.data})},getScopes(){axios.get("/oauth/scopes").then(o=>{this.scopes=o.data})},showCreateTokenForm(){this.openModal("createModal"),this.$refs.createName.focus()},store(){this.accessToken=null,this.form.errors=[],axios.post("/oauth/personal-access-tokens",this.form).then(o=>{this.form.name="",this.form.scopes=[],this.form.errors=[],this.tokens.push(o.data.token),this.showAccessToken(o.data.accessToken)}).catch(o=>{typeof o.response.data=="object"?this.form.errors=_.flatten(_.toArray(o.response.data.errors)):this.form.errors=["Something went wrong. Please try again."]})},toggleScope(o){this.scopeIsAssigned(o)?this.form.scopes=_.reject(this.form.scopes,t=>t==o):this.form.scopes.push(o)},scopeIsAssigned(o){return _.indexOf(this.form.scopes,o)>=0},showAccessToken(o){this.closeModal("createModal"),this.accessToken=o,this.openModal("accessModal")},revoke(o){axios.delete("/oauth/personal-access-tokens/"+o.id).then(t=>{this.getTokens()})},openModal(o){this.$refs[o].showModal(),this.$refs[o].addEventListener("click",function(t){let a=this.getBoundingClientRect();!(a.top<=t.clientY&&t.clientY<=a.top+a.height&&a.left<=t.clientX&&t.clientX<=a.left+a.width)&&t.target.tagName==="DIALOG"&&this.close()})},closeModal(o){this.$refs[o].close()}}},Pe={class:""},Be={class:""},Ke={class:""},Oe={class:"flex justify-between items-center"},qe=e("span",{class:"text-lg"}," Personal Access Tokens ",-1),Ee={class:""},Xe={key:0,class:"mb-0"},We={key:1,class:"table table-borderless mb-0 w-full"},Ge=e("thead",null,[e("tr",null,[e("th",null,"Name"),e("th")])],-1),He={style:{"vertical-align":"middle"}},Je={class:"text-right",style:{"vertical-align":"middle"}},Qe=["onClick"],Ze={class:"dialog rounded-2xl text-center",id:"modal-create-token",ref:"createModal","aria-modal":"true","aria-labelledby":"modal-create-token-label"},et=e("h4",{id:"modal-create-token-label"}," Create Token ",-1),tt=e("i",{class:"fa-solid fa-times","aria-hidden":"true"},null,-1),st=e("span",{class:"sr-only"},"Close",-1),ot=[tt,st],lt={class:"text-justify"},nt={key:0,class:"rounded p-4 bg-red-100 text-red-800 w-full"},rt=e("p",{class:"mb-0"},[e("strong",null,"Whoops!"),k(" Something went wrong!")],-1),it=e("br",null,null,-1),at=e("label",{class:"font-extrabold required"},"Token name",-1),dt={key:0,class:"form-group row"},ct=e("label",{class:"col-md-4 col-form-label"},"Scopes",-1),ut={class:"col-md-6"},ht={class:"checkbox"},mt=["onClick","checked"],_t={class:"grid grid-cols-2 gap-2 w-full"},pt={class:"dialog rounded-2xl text-center",id:"modal-access-token",ref:"accessModal","aria-modal":"true","aria-labelledby":"modal-access-token-label"},bt=e("h4",{id:"modal-access-token-label"}," Personal Access Token ",-1),ft=e("i",{class:"fa-solid fa-times","aria-hidden":"true"},null,-1),gt=e("span",{class:"sr-only"},"Close",-1),kt=[ft,gt],yt={class:"text-justify"},Ct=e("p",{class:"mb-2"}," Here is your new personal access token. This is the only time it will be shown so don't lose it! You may now use this token to make API requests. ",-1),vt={class:"form-control",rows:"10"};function xt(o,t,a,m,n,l){return i(),r("div",Pe,[e("div",null,[e("div",Be,[e("div",Ke,[e("div",Oe,[qe,e("a",{class:"btn2 btn-primary btn-outline btn-sm",tabindex:"-1",onClick:t[0]||(t[0]=(...s)=>l.showCreateTokenForm&&l.showCreateTokenForm(...s))}," Create New Token ")])]),e("div",Ee,[n.tokens.length===0?(i(),r("p",Xe," You have not created any personal access tokens. ")):c("",!0),n.tokens.length>0?(i(),r("table",We,[Ge,e("tbody",null,[(i(!0),r(u,null,h(n.tokens,s=>(i(),r("tr",null,[e("td",He,d(s.name),1),e("td",Je,[e("a",{class:"btn2 btn-error btn-outline btn-xs",onClick:f=>l.revoke(s)}," Delete ",8,Qe)])]))),256))])])):c("",!0)])])]),e("dialog",Ze,[e("header",null,[et,e("button",{type:"button",class:"rounded-full",onClick:t[1]||(t[1]=s=>l.closeModal("createModal")),title:"Close"},ot)]),e("article",lt,[n.form.errors.length>0?(i(),r("div",nt,[rt,it,e("ul",null,[(i(!0),r(u,null,h(n.form.errors,s=>(i(),r("li",null,d(s),1))),256))])])):c("",!0),e("form",{role:"form",class:"w-full mb-5",onSubmit:t[3]||(t[3]=C((...s)=>l.store&&l.store(...s),["prevent"]))},[at,p(e("input",{id:"create-token-name",type:"text",class:"rounded border w-full p-2",name:"name",placeholder:"Name the token","onUpdate:modelValue":t[2]||(t[2]=s=>n.form.name=s),ref:"createName"},null,512),[[b,n.form.name]]),n.scopes.length>0?(i(),r("div",dt,[ct,e("div",ut,[(i(!0),r(u,null,h(n.scopes,s=>(i(),r("div",null,[e("div",ht,[e("label",null,[e("input",{type:"checkbox",onClick:f=>l.toggleScope(s.id),checked:l.scopeIsAssigned(s.id)},null,8,mt),k(" "+d(s.id),1)])])]))),256))])])):c("",!0)],32),e("div",_t,[e("button",{type:"button",class:"btn2 btn-ghost",onClick:t[4]||(t[4]=s=>l.closeModal("createModal"))},"Close"),e("button",{type:"button",class:"btn2 btn-primary",onClick:t[5]||(t[5]=(...s)=>l.store&&l.store(...s))}," Create ")])])],512),e("dialog",pt,[e("header",null,[bt,e("button",{type:"button",class:"rounded-full",onClick:t[6]||(t[6]=s=>l.closeModal("accessModal")),title:"Close"},kt)]),e("article",yt,[Ct,e("textarea",vt,d(n.accessToken),1),e("button",{type:"button",class:"btn2 btn-ghost",onClick:t[7]||(t[7]=s=>l.closeModal("accessModal"))},"Close")])],512)])}const wt=v(Ve,[["render",xt]]),y=F({});y.component("passport-clients",Me);y.component("passport-authorized-clients",ze);y.component("passport-personal-access-tokens",wt);y.mount("#api");
