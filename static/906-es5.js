!function(){"use strict";function e(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function t(e,t){for(var i=0;i<t.length;i++){var n=t[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}function i(e,i,n){return i&&t(e.prototype,i),n&&t(e,n),Object.defineProperty(e,"prototype",{writable:!1}),e}(self.webpackChunkegritos_group_eg_web_apps=self.webpackChunkegritos_group_eg_web_apps||[]).push([[906],{35906:function(t,n,s){s.r(n),s.d(n,{TautotitaOfeilisModule:function(){return Y}});var r,a=s(43645),o=s(29790),u=s(23292),l=s(88052),p=s(54655),d=s(68214),c=s(79765),m=s(46782),f=s(37716),h=s(87622),g=s(12622),y=s(38583),b=s(21571),_=((_||(_={})).paymentCode="\u039a\u03c9\u03b4\u03b9\u03ba\u03cc\u03c2",_),v=((v||(v={})).paymentCode="Payment Code",v),A=s(84608),C=s(91841),w=((r=function(){function t(i,n){e(this,t),this.http=i,this.toasterSrv=n,this.apiUrl=AppConfOptions.eidopoiitiria_api+"api/"}return i(t,[{key:"getEidopoiitiria",value:function(e){return this.http.post(this.apiUrl+"Atm/Eidopoiitiria",e)}}]),t}()).\u0275fac=function(e){return new(e||r)(f.LFG(C.eN),f.LFG(d.MJ))},r.\u0275prov=f.Yz7({token:r,factory:r.\u0275fac}),r),x=s(3679),Z=s(3379),S=["tautotitaOfeilisForm"];function k(e,t){if(1&e&&f._UZ(0,"p-message",16),2&e){var i=f.oxw(2);f.Q6J("severity",i.bankStatusMessageClass)("text",i.bankStatusMessage)("styleClass","mb-2")}}function O(e,t){if(1&e&&f._UZ(0,"p-message",17),2&e){var i=f.oxw(2);f.Q6J("styleClass","mt-2 form-msgs")("escape",!1)("text",i.formErrorsMsg)}}function M(e,t){if(1&e&&(f.TgZ(0,"p",22),f._uU(1,"\u039a\u03c9\u03b4\u03b9\u03ba\u03cc\u03c2 \u03a0\u03bb\u03b7\u03c1\u03c9\u03bc\u03ae\u03c2: "),f.TgZ(2,"span",23),f._uU(3),f.qZA(),f.qZA()),2&e){var i=f.oxw(3);f.xp6(3),f.Oqu(i.model.paymentCode)}}function E(e,t){if(1&e&&(f.TgZ(0,"p",22),f._uU(1,"\u03a3\u03c4\u03bf\u03b9\u03c7\u03b5\u03af\u03b1 \u039f\u03c6\u03b5\u03b9\u03bb\u03ae\u03c2: "),f.TgZ(2,"span",23),f._uU(3),f.qZA(),f.qZA()),2&e){var i=f.oxw(3);f.xp6(3),f.Oqu(i.model.paymentCaption)}}function q(e,t){if(1&e&&(f.TgZ(0,"p",22),f._uU(1,"\u03a3\u03c5\u03bd\u03bf\u03bb\u03b9\u03ba\u03cc \u03a0\u03bf\u03c3\u03cc \u039f\u03c6\u03b5\u03b9\u03bb\u03ae\u03c2: "),f.TgZ(2,"span",23),f._uU(3),f.ALo(4,"currency"),f.qZA(),f.qZA()),2&e){var i=f.oxw(3);f.xp6(3),f.Oqu(f.gM2(4,1,i.model.paymentAmount,"\u20ac","symbol","1.2"))}}function L(e,t){if(1&e){var i=f.EpF();f.ynx(0),f._UZ(1,"hr"),f.TgZ(2,"h5",18),f._uU(3),f.ALo(4,"translate"),f.qZA(),f.TgZ(5,"div",19),f.TgZ(6,"div"),f.YNc(7,M,4,1,"p",20),f.YNc(8,E,4,1,"p",20),f.YNc(9,q,5,6,"p",20),f.qZA(),f.TgZ(10,"app-checkout",21),f.NdJ("onPayBtnClick",function(e){return f.CHM(i),f.oxw(2).onCreatePaymentRequest(e)}),f.qZA(),f.qZA(),f.BQk()}if(2&e){var n=f.oxw(2);f.xp6(3),f.Oqu(f.lcZ(4,9,null==n.translation?null:n.translation.egwebapps.egrResults)),f.xp6(4),f.Q6J("ngIf",n.model.paymentCode),f.xp6(1),f.Q6J("ngIf",n.model.paymentCaption),f.xp6(1),f.Q6J("ngIf",n.model.paymentAmount),f.xp6(1),f.Q6J("isPaymentFormValid",!0)("doPaymentSubscription",n.onDoPaymentSubject.asObservable())("finApiUrl",n.financeApiUrl)("buttonText",n.translation.egwebapps.egrPaymentBtnText)("cancelButtonText",n.translation.egwebapps.egrCancelBtn)}}function T(e,t){if(1&e){var i=f.EpF();f.ynx(0),f.YNc(1,k,1,3,"p-message",2),f.TgZ(2,"form",3,4),f.TgZ(4,"div",5),f.TgZ(5,"div",6),f.TgZ(6,"label",7),f._uU(7),f.ALo(8,"translate"),f.qZA(),f.TgZ(9,"input",8),f.NdJ("ngModelChange",function(e){return f.CHM(i),f.oxw().paymentCode=e}),f.ALo(10,"translate"),f.qZA(),f.TgZ(11,"div",9),f._uU(12),f.ALo(13,"translate"),f.qZA(),f.qZA(),f.qZA(),f.TgZ(14,"div",10),f.TgZ(15,"button",11),f.NdJ("click",function(){return f.CHM(i),f.oxw().onSubmit()}),f._UZ(16,"span",12),f._uU(17),f.ALo(18,"translate"),f.qZA(),f.TgZ(19,"button",13),f.NdJ("click",function(){return f.CHM(i),f.oxw().onClear()}),f._UZ(20,"span",14),f._uU(21),f.ALo(22,"translate"),f.qZA(),f.qZA(),f.YNc(23,O,1,3,"p-message",15),f.qZA(),f._UZ(24,"lib-egr-loading",0),f.YNc(25,L,11,11,"ng-container",1),f.BQk()}if(2&e){var n=f.oxw();f.xp6(1),f.Q6J("ngIf",n.bankStatusMessage&&""!=n.bankStatusMessage),f.xp6(6),f.hij("",f.lcZ(8,14,null==n.translation?null:n.translation.eidopoiitiria.code),"*"),f.xp6(2),f.Q6J("placeholder",f.lcZ(10,16,null==n.translation?null:n.translation.eidopoiitiria.code))("ngModel",n.paymentCode)("disabled",n.model),f.xp6(2),f.Q6J("hidden",!n.isFormSubmitted||n.isFormSubmitted&&n.paymentCode),f.xp6(1),f.hij(" *",f.lcZ(13,18,null==n.translation?null:n.translation.egwebapps.egrRequiredField)," "),f.xp6(3),f.Q6J("disabled",n.model),f.xp6(2),f.hij(" ",f.lcZ(18,20,null==n.translation?null:n.translation.egwebapps.egrSearchBtn)," "),f.xp6(4),f.hij(" ",f.lcZ(22,22,null==n.translation?null:n.translation.egwebapps.egrClearBtn)," "),f.xp6(2),f.Q6J("ngIf",n.formErrorsMsg&&""!=n.formErrorsMsg),f.xp6(1),f.Q6J("condition",n.isLoadingInit)("customClass","egr-load-small"),f.xp6(1),f.Q6J("ngIf",n.model&&!n.isLoading)}}var J=function(){var t=function(){function t(i,n,s,r,a,o,u,l,p){e(this,t),this.oidcSecuritySrv=i,this.epaymentsSrv=n,this.egPaymentSrv=s,this.tautotitaOfeilisSrv=r,this.cookieSrv=a,this.toasterSrv=o,this.appCacheSv=u,this.cdr=l,this.route=p,this.countriesList=[],this.onDoPaymentSubject=new c.xQ,this.onDestroy=new c.xQ,this.isLoading=!1,this.isLoadingInit=!1,this.errorMessageProfile=null,this.oikonomikiBankMessagesEn=A.Px,this.isFormSubmitted=!1}return i(t,[{key:"ngOnInit",value:function(){var e=this;this.appCacheSv.translation$.pipe((0,m.R)(this.onDestroy)).subscribe(function(t){t&&(e.translation=t,(0,d.RA)(e.cdr))}),this.appCacheSv.selectedLang$.pipe((0,m.R)(this.onDestroy)).subscribe(function(t){t&&(e.selectedLang=t,e.formDictionaryEnum="el"==e.selectedLang?_:v,(0,d.RA)(e.cdr))}),this.isLoadingInit=!0,(0,d.RA)(this.cdr),"undefined"!=typeof AuthConfOptions&&AppConfOptions&&AppConfOptions.epayments_api&&(this.financeApiUrl=(0,d.Qj)(AppConfOptions.epayments_api)),this.route.queryParams.pipe((0,m.R)(this.onDestroy)).subscribe(function(t){var i;if(t){var n=t;if(n.messagecode||n.paymentStatus){var s=n.messagecode?n.messagecode:n.paymentStatus;e.bankStatusMessage="el"==e.selectedLang?e.oikonomikiBankMessages[s]:e.oikonomikiBankMessagesEn[s],e.bankStatusMessageClass="TRANSACTION_COMPLETED"==s||"APPROVED"==s?"success":"error"}}else e.toasterSrv.showError("",null===(i=e.translation)||void 0===i?void 0:i.egwebapps.egrProblemFound);(0,d.RA)(e.cdr)}),this.appCacheSv.initCountries(AuthConfOptions.stsServer+"/api/general/GetCountries"),(0,b.$R)(this.epaymentsSrv.getBankMessages(),this.oidcSecuritySrv.userData$,this.appCacheSv.countries$).subscribe(function(t){t&&(t[0]&&(e.oikonomikiBankMessages=t[0]),t[1]&&(e.user=t[1],e.user.email=(0,d.Ew)(e.user.email)?e.user.email:e.user.email.trim(),e.user.username=(0,d.Ew)(e.user.username)?e.user.username:e.user.username.trim(),e.user.tin=(0,d.Ew)(e.user.tin)?e.user.tin:e.user.tin.trim(),e.user.family_name=(0,d.Ew)(e.user.family_name)?e.user.family_name:e.user.family_name.trim(),e.user.given_name=(0,d.Ew)(e.user.given_name)?e.user.given_name:e.user.given_name.trim(),e.user.fathers_name=(0,d.Ew)(e.user.fathers_name)?e.user.fathers_name:e.user.fathers_name.trim(),e.user.mothers_name=(0,d.Ew)(e.user.mothers_name)?e.user.mothers_name:e.user.mothers_name.trim(),e.user.name=(0,d.Ew)(e.user.name)?e.user.name:e.user.name.trim(),e.user.address_city=(0,d.Ew)(e.user.address_city)?e.user.address_city:e.user.address_city.trim(),e.user.address_country_code=(0,d.Ew)(e.user.address_country_code)?e.user.address_country_code:e.user.address_country_code.trim(),e.user.address_country_num=(0,d.Ew)(e.user.address_country_num)?e.user.address_country_num:e.user.address_country_num.trim(),e.user.address_zip=(0,d.Ew)(e.user.address_zip)?e.user.address_zip:e.user.address_zip.trim(),e.user.address=(0,d.Ew)(e.user.address)?e.user.address:e.user.address.trim(),e.user.adt=(0,d.Ew)(e.user.adt)?e.user.adt:e.user.adt.trim(),e.user.phone_number=(0,d.Ew)(e.user.phone_number)?e.user.phone_number:e.user.phone_number.trim()),t[2]&&(e.countriesList=t[2],e.user&&e.user.address_country_code&&""!=e.user.address_country_code&&(e.user.address_country_num=e.countriesList.find(function(t){return t.Alpha2Code==e.user.address_country_code}).NumericCode.toString()))),e.isLoadingInit=!1,(0,d.RA)(e.cdr)})}},{key:"ngOnDestroy",value:function(){this.onDestroy.next(null)}},{key:"onSubmit",value:function(){var e=this;if(this.isFormSubmitted=!0,this.formErrorsMsg=null,(0,d.RA)(this.cdr),this.isFormSubmitted&&this.tautotitaOfeilisForm.valid){this.model=null,this.isLoading=!0;var t={language:"el",kodikos:this.paymentCode};(0,d.RA)(this.cdr),this.tautotitaOfeilisSrv.getEidopoiitiria(t).subscribe(function(t){t&&t.isSuccessful?e.model=t.result:(e.toasterSrv.showError("",t.errorDescription),e.errorMessage=t.errorDescription),e.isLoading=!1,(0,d.RA)(e.cdr)})}else this.formErrorsMsg=(0,d.CD)(this.tautotitaOfeilisForm,this.formDictionaryEnum,""),(0,d.RA)(this.cdr)}},{key:"onCreatePaymentRequest",value:function(e){var t=this;if((0,d.Ew)(this.user.email))this.toasterSrv.showWarning("","\u0395\u03af\u03bd\u03b1\u03b9 \u03b1\u03c0\u03b1\u03c1\u03b1\u03af\u03c4\u03b7\u03c4\u03bf \u03c4\u03bf email \u03c3\u03b1\u03c2 \u03c3\u03c4\u03b7 \u03c3\u03b5\u03bb\u03af\u03b4\u03b1 \u03c4\u03bf\u03c5 \u03c0\u03c1\u03bf\u03c6\u03af\u03bb \u03c3\u03b1\u03c2.");else{var i={tinRelated:this.user.tin,relatedCallbackUrl:AppConfOptions.application_url+"/tautotita-ofeilis/debits",billingAddressCity:this.user.address_city,billingAddressCountryCode:this.user.address_country_code,billingAddressZip:this.user.address_zip,billingAddress:this.user.address,userEmail:this.user.email,userPhone:this.user.phone_number,paymentMethodKey:e.key,entries:[]};"PIRBGRAA"===e.key&&(i.billingAddressCountryCode=null),i.entries.push({remittanceInfo:this.model.paymentCode,amount:this.model.paymentAmount,debtorName:this.user.family_name+" "+this.user.fathers_name+" "+this.user.mothers_name+" "+this.user.name,tin:this.user.tin,description:this.model.paymentCaption}),this.paymentRequestDto=i,this.egPaymentSrv.addPaymentRequest(this.financeApiUrl,this.paymentRequestDto).subscribe(function(e){e?(t.paymentResponseDto=e,t.onDoPaymentSubject.next(t.paymentResponseDto)):t.toasterSrv.showError("",t.translation.egwebapps.egrPaymentProblemFound)})}}},{key:"onClear",value:function(){this.isFormSubmitted=!1,this.paymentCode=null,this.model=null,(0,d.RA)(this.cdr)}}]),t}();return t.\u0275fac=function(e){return new(e||t)(f.Y36(h.J_),f.Y36(u.C),f.Y36(d.te),f.Y36(w),f.Y36(d.N_),f.Y36(d.MJ),f.Y36(g.g),f.Y36(f.sBO),f.Y36(p.gz))},t.\u0275cmp=f.Xpm({type:t,selectors:[["app-tautotita-ofeilis-debits"]],viewQuery:function(e,t){var i;(1&e&&f.Gf(S,5),2&e)&&(f.iGM(i=f.CRH())&&(t.tautotitaOfeilisForm=i.first))},inputs:{isAuthorized:"isAuthorized"},decls:2,vars:3,consts:[[3,"condition","customClass"],[4,"ngIf"],[3,"severity","text","styleClass",4,"ngIf"],[1,"form"],["tautotitaOfeilisForm","ngForm"],[1,"row"],[1,"form-group","col-12"],["for","paymentCode"],["name","paymentCode","type","text","required","",1,"form-control",3,"placeholder","ngModel","disabled","ngModelChange"],[1,"validation-msg","text-danger","pt-1",3,"hidden"],[1,"d-flex","align-items-center","justify-content-center","flex-wrap"],["type","button",1,"btn","btn-primary","mr-1",3,"disabled","click"],["aria-hidden","true",1,"fas","fa-search","fa-fw"],["type","button",1,"btn","btn-warning","text-white",3,"click"],["aria-hidden","true",1,"fas","fa-times","fa-fw"],["severity","error",3,"styleClass","escape","text",4,"ngIf"],[3,"severity","text","styleClass"],["severity","error",3,"styleClass","escape","text"],[1,"mt-4","text-center"],[1,"debits-info","d-flex","flex-wrap","justify-content-between","w-100","align-items-center"],["class","mb-0",4,"ngIf"],[3,"isPaymentFormValid","doPaymentSubscription","finApiUrl","buttonText","cancelButtonText","onPayBtnClick"],[1,"mb-0"],[1,"totalPoso"]],template:function(e,t){1&e&&(f._UZ(0,"lib-egr-loading",0),f.YNc(1,T,26,24,"ng-container",1)),2&e&&(f.Q6J("condition",t.isLoadingInit)("customClass","egr-load-small"),f.xp6(1),f.Q6J("ngIf",!t.isLoadingInit))},directives:[d.IE,y.O5,x._Y,x.JL,x.F,x.Fj,x.Q7,x.JJ,x.On,Z.q,d.Hl],pipes:[o.X$,y.H9],encapsulation:2,changeDetection:0}),t}(),R=s(24020),U=s(41886);function P(e,t){if(1&e&&f._UZ(0,"p-message",4),2&e){var i=f.oxw();f.Q6J("text",null==i.translation?null:i.translation.egwebapps.egwebappsLoginMesg)}}function D(e,t){if(1&e&&(f.TgZ(0,"p-panel",5),f._UZ(1,"div",6),f.ALo(2,"decodeHtmlString"),f.qZA()),2&e){var i=f.oxw();f.Q6J("header",null==i.translation?null:i.translation.egwebapps.information)("styleClass","tab-msg mb-3")("toggleable",!0),f.xp6(1),f.Q6J("innerHTML",f.lcZ(2,4,i.tabMsg),f.oJD)}}var I=[{path:"",component:function(){var t=function(){function t(i,n,s,r,a,o){e(this,t),this.oidcSecuritySrv=i,this.appCacheSv=n,this.location=s,this.cdr=r,this.router=a,this.route=o,this.onDestroy=new c.xQ,this.index=0,this.isUnauthorizedAllowed=AppConfOptions.unauthorized_allowed,this.selectedLang="el"}return i(t,[{key:"ngOnInit",value:function(){var e=this;this.appCacheSv.translation$.pipe((0,m.R)(this.onDestroy)).subscribe(function(t){t&&(e.translation=t,(0,d.RA)(e.cdr))}),this.appCacheSv.selectedLang$.pipe((0,m.R)(this.onDestroy)).subscribe(function(t){t&&(e.selectedLang=t),1==AppConfOptions.multilingual&&"el"!=e.selectedLang&&AppConfOptions.eidopoiitiria_tab_info_en&&""!=AppConfOptions.eidopoiitiria_tab_info_en?e.tabMsg=AppConfOptions.eidopoiitiria_tab_info_en:AppConfOptions.eidopoiitiria_tab_info&&""!=AppConfOptions.eidopoiitiria_tab_info&&"el"==e.selectedLang&&(e.tabMsg=AppConfOptions.eidopoiitiria_tab_info),(0,d.RA)(e.cdr)}),this.oidcSecuritySrv.isAuthenticated$.subscribe(function(t){e.isAuthorized=t,(0,d.RA)(e.cdr)}),this.index="receipts"===this.route.children[0].snapshot.url[0].path?1:0,(0,d.RA)(this.cdr)}},{key:"ngOnDestroy",value:function(){this.onDestroy.next(null)}},{key:"onTabChanged",value:function(e){this.router.navigate(0==e.index?["./debits"]:["./receipts"],{relativeTo:this.route})}}]),t}();return t.\u0275fac=function(e){return new(e||t)(f.Y36(h.J_),f.Y36(g.g),f.Y36(y.Ye),f.Y36(f.sBO),f.Y36(p.F0),f.Y36(p.gz))},t.\u0275cmp=f.Xpm({type:t,selectors:[["app-tautotita-ofeilis-layout"]],inputs:{isAuthorized:"isAuthorized"},decls:6,vars:3,consts:[[1,"module-title"],["severity","warn",3,"text",4,"ngIf"],[3,"header","styleClass","toggleable",4,"ngIf"],[1,"bg-white","p-2"],["severity","warn",3,"text"],[3,"header","styleClass","toggleable"],[3,"innerHTML"]],template:function(e,t){1&e&&(f.TgZ(0,"h3",0),f._uU(1),f.qZA(),f.YNc(2,P,1,1,"p-message",1),f.YNc(3,D,3,6,"p-panel",2),f.TgZ(4,"div",3),f._UZ(5,"app-tautotita-ofeilis-debits"),f.qZA()),2&e&&(f.xp6(1),f.Oqu(null==t.translation?null:t.translation.menu.eidopoiitiriaMenuItem),f.xp6(1),f.Q6J("ngIf",!t.isAuthorized&&!t.isUnauthorizedAllowed),f.xp6(1),f.Q6J("ngIf",t.tabMsg))},directives:[y.O5,J,Z.q,R.s],pipes:[U.o],encapsulation:2,changeDetection:0}),t}(),children:[{path:"",pathMatch:"full",redirectTo:"debits"},{path:"debits",component:J}]}],Q=function(){var t=i(function t(){e(this,t)});return t.\u0275fac=function(e){return new(e||t)},t.\u0275mod=f.oAB({type:t}),t.\u0275inj=f.cJS({imports:[[p.Bz.forChild(I)],p.Bz]}),t}(),Y=function(){var t=i(function t(){e(this,t)});return t.\u0275fac=function(e){return new(e||t)},t.\u0275mod=f.oAB({type:t}),t.\u0275inj=f.cJS({providers:[w,u.C],imports:[[l.m,a.IJ,Q,o.aw.forChild()]]}),t}()}}])}();