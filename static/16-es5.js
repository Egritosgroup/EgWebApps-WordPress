!function(){function t(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function e(t,e){for(var i=0;i<e.length;i++){var n=e[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(t,n.key,n)}}function i(t,i,n){return i&&e(t.prototype,i),n&&e(t,n),t}(window.webpackJsonp=window.webpackJsonp||[]).push([[16],{ibjo:function(e,n,s){"use strict";s.r(n),s.d(n,"TautotitaOfeilisModule",function(){return J});var a,o=s("1kSV"),r=s("sYmb"),c=s("AEAu"),l=s("PCNd"),u=s("tyNb"),p=s("3u8h"),b=s("oXA7"),d=s("bk9D"),h=s("wmmr"),f=s("fXoL"),m=s("zazq"),g=s("ofXK"),y=s("FMpt"),v=s("7CaW"),C=s("dPl2"),O=s("2kNk"),S=function(t){return t.paymentCode="\u039a\u03c9\u03b4\u03b9\u03ba\u03cc\u03c2",t}({}),w=function(t){return t.paymentCode="Payment Code",t}({}),P=s("tk/3"),k=((a=function(){function e(i,n){t(this,e),this.http=i,this.toasterSrv=n,this.apiUrl=AppConfOptions.eidopoiitiria_api+"api/"}return i(e,[{key:"getEidopoiitiria",value:function(t){return this.http.post(this.apiUrl+"Atm/Eidopoiitiria",t)}}]),e}()).\u0275fac=function(t){return new(t||a)(f.bc(P.b),f.bc(p.m))},a.\u0275prov=f.Kb({token:a,factory:a.\u0275fac}),a),A=s("KsmB"),T=s("3Pt+"),B=["tautotitaOfeilisForm"];function _(t,e){1&t&&(f.Ub(0,"div",2),f.Ub(1,"span",3),f.Pb(2,"i",4),f.Tb(),f.Tb())}function x(t,e){if(1&t&&f.Pb(0,"p-message",19),2&t){var i=f.gc(2);f.pc("severity",i.bankStatusMessageClass)("text",i.bankStatusMessage)("styleClass","mb-2")}}function M(t,e){if(1&t&&f.Pb(0,"p-message",20),2&t){var i=f.gc(2);f.pc("styleClass","mt-2 form-msgs")("escape",!1)("text",i.formErrorsMsg)}}function U(t,e){1&t&&(f.Ub(0,"div",2),f.Ub(1,"span",3),f.Pb(2,"i",4),f.Tb(),f.Tb())}function I(t,e){if(1&t&&(f.Ub(0,"p",25),f.Rc(1,"\u039a\u03c9\u03b4\u03b9\u03ba\u03cc\u03c2 \u03a0\u03bb\u03b7\u03c1\u03c9\u03bc\u03ae\u03c2: "),f.Ub(2,"span",26),f.Rc(3),f.Tb(),f.Tb()),2&t){var i=f.gc(3);f.Bb(3),f.Sc(i.model.paymentCode)}}function j(t,e){if(1&t&&(f.Ub(0,"p",25),f.Rc(1,"\u03a3\u03c4\u03bf\u03b9\u03c7\u03b5\u03af\u03b1 \u039f\u03c6\u03b5\u03b9\u03bb\u03ae\u03c2: "),f.Ub(2,"span",26),f.Rc(3),f.Tb(),f.Tb()),2&t){var i=f.gc(3);f.Bb(3),f.Sc(i.model.paymentCaption)}}function L(t,e){if(1&t&&(f.Ub(0,"p",25),f.Rc(1,"\u03a3\u03c5\u03bd\u03bf\u03bb\u03b9\u03ba\u03cc \u03a0\u03bf\u03c3\u03cc \u039f\u03c6\u03b5\u03b9\u03bb\u03ae\u03c2: "),f.Ub(2,"span",26),f.Rc(3),f.hc(4,"currency"),f.Tb(),f.Tb()),2&t){var i=f.gc(3);f.Bb(3),f.Sc(f.lc(4,1,i.model.paymentAmount,"\u20ac","symbol","1.2"))}}function D(t,e){if(1&t){var i=f.Vb();f.Sb(0),f.Pb(1,"hr"),f.Ub(2,"h5",21),f.Rc(3),f.hc(4,"translate"),f.Tb(),f.Ub(5,"div",22),f.Ub(6,"div"),f.Pc(7,I,4,1,"p",23),f.Pc(8,j,4,1,"p",23),f.Pc(9,L,5,6,"p",23),f.Tb(),f.Ub(10,"app-checkout",24),f.ec("onPayBtnClick",function(t){return f.Hc(i),f.gc(2).onCreatePaymentRequest(t)}),f.Tb(),f.Tb(),f.Rb()}if(2&t){var n=f.gc(2);f.Bb(3),f.Sc(f.ic(4,9,null==n.translation?null:n.translation.egwebapps.egrResults)),f.Bb(4),f.pc("ngIf",n.model.paymentCode),f.Bb(1),f.pc("ngIf",n.model.paymentCaption),f.Bb(1),f.pc("ngIf",n.model.paymentAmount),f.Bb(1),f.pc("isPaymentFormValid",!0)("doPaymentSubscription",n.onDoPaymentSubject.asObservable())("finApiUrl",n.financeApiUrl)("buttonText",n.translation.egwebapps.egrPaymentBtnText)("cancelButtonText",n.translation.egwebapps.egrCancelBtn)}}function R(t,e){if(1&t){var i=f.Vb();f.Sb(0),f.Pc(1,x,1,3,"p-message",5),f.Ub(2,"form",6,7),f.Ub(4,"div",8),f.Ub(5,"div",9),f.Ub(6,"label",10),f.Rc(7),f.hc(8,"translate"),f.Tb(),f.Ub(9,"input",11),f.ec("ngModelChange",function(t){return f.Hc(i),f.gc().paymentCode=t}),f.hc(10,"translate"),f.Tb(),f.Ub(11,"div",12),f.Rc(12),f.hc(13,"translate"),f.Tb(),f.Tb(),f.Tb(),f.Ub(14,"div",13),f.Ub(15,"button",14),f.ec("click",function(){return f.Hc(i),f.gc().onSubmit()}),f.Pb(16,"span",15),f.Rc(17),f.hc(18,"translate"),f.Tb(),f.Ub(19,"button",16),f.ec("click",function(){return f.Hc(i),f.gc().onClear()}),f.Pb(20,"span",17),f.Rc(21),f.hc(22,"translate"),f.Tb(),f.Tb(),f.Pc(23,M,1,3,"p-message",18),f.Tb(),f.Pc(24,U,3,0,"div",0),f.Pc(25,D,11,11,"ng-container",1),f.Rb()}if(2&t){var n=f.gc();f.Bb(1),f.pc("ngIf",n.bankStatusMessage&&""!=n.bankStatusMessage),f.Bb(6),f.Tc("",f.ic(8,13,null==n.translation?null:n.translation.eidopoiitiria.code),"*"),f.Bb(2),f.pc("placeholder",f.ic(10,15,null==n.translation?null:n.translation.eidopoiitiria.code))("ngModel",n.paymentCode)("disabled",n.model),f.Bb(2),f.pc("hidden",!n.isFormSubmitted||n.isFormSubmitted&&n.paymentCode),f.Bb(1),f.Tc(" *",f.ic(13,17,null==n.translation?null:n.translation.egwebapps.egrRequiredField)," "),f.Bb(3),f.pc("disabled",n.model),f.Bb(2),f.Tc(" ",f.ic(18,19,null==n.translation?null:n.translation.egwebapps.egrSearchBtn)," "),f.Bb(4),f.Tc(" ",f.ic(22,21,null==n.translation?null:n.translation.egwebapps.egrClearBtn)," "),f.Bb(2),f.pc("ngIf",n.formErrorsMsg&&""!=n.formErrorsMsg),f.Bb(1),f.pc("ngIf",n.isLoading),f.Bb(1),f.pc("ngIf",n.model&&!n.isLoading)}}var E,F=((E=function(){function e(i,n,s,a,o,r,c,l,u,p){t(this,e),this.oidcSecuritySrv=i,this.epaymentsSrv=n,this.egPaymentSrv=s,this.tautotitaOfeilisSrv=a,this.cookieSrv=o,this.toasterSrv=r,this.appCacheSv=c,this.cdr=l,this.route=u,this._http=p,this.countriesList=[],this.onDoPaymentSubject=new b.a,this.onDestroy=new b.a,this.isLoading=!1,this.isLoadingInit=!1,this.errorMessageProfile=null,this.oikonomikiBankMessagesEn=A.b,this.isFormSubmitted=!1}return i(e,[{key:"ngOnInit",value:function(){var t=this;this.appCacheSv.translation$.pipe(Object(d.a)(this.onDestroy)).subscribe(function(e){e&&(t.translation=e,Object(p.s)(t.cdr))}),this.appCacheSv.selectedLang$.pipe(Object(d.a)(this.onDestroy)).subscribe(function(e){e&&(t.selectedLang=e,t.formDictionaryEnum="el"==t.selectedLang?S:w,Object(p.s)(t.cdr))}),this.isLoadingInit=!0,Object(p.s)(this.cdr),"undefined"!=typeof AuthConfOptions&&AppConfOptions&&AppConfOptions.epayments_api&&(this.financeApiUrl=Object(p.x)(AppConfOptions.epayments_api)),this.route.queryParams.pipe(Object(d.a)(this.onDestroy)).subscribe(function(e){var i;if(e){var n=e;if(n.messagecode||n.paymentStatus){var s=n.messagecode?n.messagecode:n.paymentStatus;t.bankStatusMessage="el"==t.selectedLang?t.oikonomikiBankMessages[s]:t.oikonomikiBankMessagesEn[s],t.bankStatusMessageClass="TRANSACTION_COMPLETED"==s||"APPROVED"==s?"success":"error"}}else t.toasterSrv.showError("",null===(i=t.translation)||void 0===i?void 0:i.egwebapps.egrProblemFound);Object(p.s)(t.cdr)}),Object(O.a)(this.epaymentsSrv.getBankMessages(),this.oidcSecuritySrv.userData$,this._http.get(AuthConfOptions.stsServer+"/api/general/GetCountries")).subscribe(function(e){e&&(e[0]&&(t.oikonomikiBankMessages=e[0]),e[1]&&(t.user=e[1]),e[2]&&(t.countriesList=e[2],t.user&&t.user.address_country_code&&""!=t.user.address_country_code&&(t.user.address_country_num=t.countriesList.find(function(e){return e.Alpha2Code==t.user.address_country_code}).NumericCode.toString()))),t.isLoadingInit=!1,Object(p.s)(t.cdr)})}},{key:"ngOnDestroy",value:function(){this.onDestroy.next(null)}},{key:"onSubmit",value:function(){var t=this;if(this.isFormSubmitted=!0,this.formErrorsMsg=null,Object(p.s)(this.cdr),this.isFormSubmitted&&this.tautotitaOfeilisForm.valid){this.model=null,this.isLoading=!0;var e={language:"el",kodikos:this.paymentCode};Object(p.s)(this.cdr),this.tautotitaOfeilisSrv.getEidopoiitiria(e).subscribe(function(e){e&&e.isSuccessful?t.model=e.result:(t.toasterSrv.showError("",e.errorDescription),t.errorMessage=e.errorDescription),t.isLoading=!1,Object(p.s)(t.cdr)})}else this.formErrorsMsg=Object(p.u)(this.tautotitaOfeilisForm,this.formDictionaryEnum,""),Object(p.s)(this.cdr)}},{key:"onCreatePaymentRequest",value:function(t){var e=this,i={tinRelated:this.user.tin,relatedCallbackUrl:AppConfOptions.application_url+"/tautotita-ofeilis/debits",billingAddressCity:this.user.address_city,billingAddressCountryCode:this.user.address_country_code,billingAddressZip:this.user.address_zip,billingAddress:this.user.address,userEmail:this.user.email,userPhone:this.user.phone_number,paymentMethodKey:t.key,entries:[]};"PIRBGRAA"===t.key&&(i.billingAddressCountryCode=null),i.entries.push({remittanceInfo:this.model.paymentCode,amount:this.model.paymentAmount,debtorName:this.user.family_name+" "+this.user.fathers_name+" "+this.user.mothers_name+" "+this.user.name,tin:this.user.tin,description:this.model.paymentCaption}),this.paymentRequestDto=i,this.egPaymentSrv.addPaymentRequest(this.financeApiUrl,this.paymentRequestDto).subscribe(function(t){t?(e.paymentResponseDto=t,e.onDoPaymentSubject.next(e.paymentResponseDto)):e.toasterSrv.showError("",e.translation.egwebapps.egrPaymentProblemFound)})}},{key:"onClear",value:function(){this.isFormSubmitted=!1,this.paymentCode=null,this.model=null,Object(p.s)(this.cdr)}}]),e}()).\u0275fac=function(t){return new(t||E)(f.Ob(m.e),f.Ob(c.a),f.Ob(p.k),f.Ob(k),f.Ob(p.d),f.Ob(p.m),f.Ob(h.a),f.Ob(f.h),f.Ob(u.a),f.Ob(P.b))},E.\u0275cmp=f.Ib({type:E,selectors:[["app-tautotita-ofeilis-debits"]],viewQuery:function(t,e){var i;1&t&&f.Wc(B,1),2&t&&f.Ec(i=f.fc())&&(e.tautotitaOfeilisForm=i.first)},inputs:{isAuthorized:"isAuthorized"},decls:2,vars:2,consts:[["class","bg-white","style","width: 100%; height: 300px",4,"ngIf"],[4,"ngIf"],[1,"bg-white",2,"width","100%","height","300px"],[1,"d-flex","justify-content-center","align-items-center","w-100","h-100"],[1,"fas","fa-circle-notch","fa-3x","fa-pulse"],[3,"severity","text","styleClass",4,"ngIf"],[1,"form"],["tautotitaOfeilisForm","ngForm"],[1,"row"],[1,"form-group","col-12"],["for","paymentCode"],["name","paymentCode","type","text","required","",1,"form-control",3,"placeholder","ngModel","disabled","ngModelChange"],[1,"validation-msg","text-danger","pt-1",3,"hidden"],[1,"d-flex","align-items-center","justify-content-center","flex-wrap"],["type","button",1,"btn","btn-primary","mr-1",3,"disabled","click"],["aria-hidden","true",1,"fas","fa-search","fa-fw"],["type","button",1,"btn","btn-warning","text-white",3,"click"],["aria-hidden","true",1,"fas","fa-times","fa-fw"],["severity","error",3,"styleClass","escape","text",4,"ngIf"],[3,"severity","text","styleClass"],["severity","error",3,"styleClass","escape","text"],[1,"mt-4","text-center"],[1,"debits-info","d-flex","flex-wrap","justify-content-between","w-100","align-items-center"],["class","mb-0",4,"ngIf"],[3,"isPaymentFormValid","doPaymentSubscription","finApiUrl","buttonText","cancelButtonText","onPayBtnClick"],[1,"mb-0"],[1,"totalPoso"]],template:function(t,e){1&t&&(f.Pc(0,_,3,0,"div",0),f.Pc(1,R,26,23,"ng-container",1)),2&t&&(f.pc("ngIf",e.isLoadingInit),f.Bb(1),f.pc("ngIf",!e.isLoadingInit))},directives:[g.p,T.w,T.n,T.o,T.d,T.u,T.m,T.p,y.b,p.b],pipes:[r.c,g.d],encapsulation:2,changeDetection:0}),E),z=s("iHy+");function q(t,e){if(1&t&&f.Pb(0,"p-message",3),2&t){var i=f.gc();f.pc("text",null==i.translation?null:i.translation.egwebapps.egwebappsLoginMesg)}}function H(t,e){if(1&t&&(f.Ub(0,"p-panel",4),f.Pb(1,"div",5),f.hc(2,"decodeHtmlString"),f.Tb()),2&t){var i=f.gc();f.pc("styleClass","tab-msg mb-3")("toggleable",!0),f.Bb(1),f.pc("innerHTML",f.ic(2,3,i.tabMsg),f.Ic)}}function V(t,e){if(1&t){var i=f.Vb();f.Ub(0,"p-tabView",6),f.ec("onChange",function(t){return f.Hc(i),f.gc().onTabChanged(t)}),f.Ub(1,"p-tabPanel",7),f.hc(2,"translate"),f.Pb(3,"app-tautotita-ofeilis-debits"),f.Tb(),f.Tb()}if(2&t){var n=f.gc();f.pc("activeIndex",n.index),f.Bb(1),f.pc("header",f.ic(2,2,null==n.translation?null:n.translation.menu.katastimataTabTitle))}}var N,$,K,X=[{path:"",component:(N=function(){function e(i,n,s,a,o,r){t(this,e),this.oidcSecuritySrv=i,this.appCacheSv=n,this.location=s,this.cdr=a,this.router=o,this.route=r,this.onDestroy=new b.a,this.index=0,this.isUnauthorizedAllowed=AppConfOptions.unauthorized_allowed,this.selectedLang="el"}return i(e,[{key:"ngOnInit",value:function(){var t=this;this.appCacheSv.translation$.pipe(Object(d.a)(this.onDestroy)).subscribe(function(e){e&&(t.translation=e,Object(p.s)(t.cdr))}),this.appCacheSv.selectedLang$.pipe(Object(d.a)(this.onDestroy)).subscribe(function(e){e&&(t.selectedLang=e),1==AppConfOptions.multilingual&&"el"!=t.selectedLang&&AppConfOptions.eidopoiitiria_tab_info_en&&""!=AppConfOptions.eidopoiitiria_tab_info_en?t.tabMsg=AppConfOptions.eidopoiitiria_tab_info_en:AppConfOptions.eidopoiitiria_tab_info&&""!=AppConfOptions.eidopoiitiria_tab_info&&"el"==t.selectedLang&&(t.tabMsg=AppConfOptions.eidopoiitiria_tab_info),Object(p.s)(t.cdr)}),this.oidcSecuritySrv.isAuthenticated$.subscribe(function(e){t.isAuthorized=e,Object(p.s)(t.cdr)}),this.index="receipts"===this.route.children[0].snapshot.url[0].path?1:0,Object(p.s)(this.cdr)}},{key:"ngOnDestroy",value:function(){this.onDestroy.next(null)}},{key:"onTabChanged",value:function(t){this.router.navigate(0==t.index?["./debits"]:["./receipts"],{relativeTo:this.route})}}]),e}(),N.\u0275fac=function(t){return new(t||N)(f.Ob(m.e),f.Ob(h.a),f.Ob(g.k),f.Ob(f.h),f.Ob(u.d),f.Ob(u.a))},N.\u0275cmp=f.Ib({type:N,selectors:[["app-tautotita-ofeilis-layout"]],inputs:{isAuthorized:"isAuthorized"},decls:3,vars:3,consts:[["severity","warn",3,"text",4,"ngIf"],["header","\u03a0\u03bb\u03b7\u03c1\u03bf\u03c6\u03bf\u03c1\u03af\u03b5\u03c2",3,"styleClass","toggleable",4,"ngIf"],[3,"activeIndex","onChange",4,"ngIf"],["severity","warn",3,"text"],["header","\u03a0\u03bb\u03b7\u03c1\u03bf\u03c6\u03bf\u03c1\u03af\u03b5\u03c2",3,"styleClass","toggleable"],[3,"innerHTML"],[3,"activeIndex","onChange"],[3,"header"]],template:function(t,e){1&t&&(f.Pc(0,q,1,1,"p-message",0),f.Pc(1,H,3,5,"p-panel",1),f.Pc(2,V,4,4,"p-tabView",2)),2&t&&(f.pc("ngIf",!e.isAuthorized&&!e.isUnauthorizedAllowed),f.Bb(1),f.pc("ngIf",e.isAuthorized&&e.tabMsg&&""!=e.tabMsg),f.Bb(1),f.pc("ngIf",e.isAuthorized||e.isUnauthorizedAllowed))},directives:[g.p,y.b,v.a,C.b,C.a,F],pipes:[z.a,r.c],encapsulation:2,changeDetection:0}),N),children:[{path:"",pathMatch:"full",redirectTo:"debits"},{path:"debits",component:F}]}],G=((K=function e(){t(this,e)}).\u0275fac=function(t){return new(t||K)},K.\u0275mod=f.Mb({type:K}),K.\u0275inj=f.Lb({imports:[[u.g.forChild(X)],u.g]}),K),J=(($=function e(){t(this,e)}).\u0275fac=function(t){return new(t||$)},$.\u0275mod=f.Mb({type:$}),$.\u0275inj=f.Lb({providers:[k,c.a],imports:[[l.a,o.d,G,r.b.forChild()]]}),$)}}])}();