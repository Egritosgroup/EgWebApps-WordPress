"use strict";(self.webpackChunkegritos_group_eg_web_apps=self.webpackChunkegritos_group_eg_web_apps||[]).push([[638],{7638:(dt,A,r)=>{r.r(A),r.d(A,{TautotitaOfeilisModule:()=>rt});var D=r(1201),y=r(1062),x=r(3292),P=r(7951),p=r(1083),o=r(9238),g=r(7579),d=r(2722),b=r(3900),t=r(5e3),T=r(6194),v=r(2622),c=r(9808),Z=r(3724),F=r(394),J=r(8061),O=r(9841),B=r(9646),h=(()=>((h||(h={})).paymentCode="\u039a\u03c9\u03b4\u03b9\u03ba\u03cc\u03c2",h))(),m=(()=>((m||(m={})).paymentCode="Payment Code",m))(),E=r(4608),M=r(4004),S=r(262),I=r(520);let w=(()=>{class i{constructor(e,s){this.http=e,this.toasterSrv=s,this.apiUrl=AppConfOptions.eidopoiitiria_api+"api/"}getYpoloipoKodikouPliromis(e){return this.http.get(this.apiUrl+`PraxeisEidopoiisis/GetYpoloipoKodikouPliromis/${e}`).pipe((0,M.U)(n=>n),(0,S.K)(n=>(0,o.Zj)(n,this.toasterSrv)))}addPaymentRequestKodikouPliromis(e){return this.http.post(this.apiUrl+"PraxeisEidopoiisis/AddPaymentRequestKodikouPliromis",e).pipe((0,M.U)(n=>n),(0,S.K)(n=>(0,o.Zj)(n,this.toasterSrv)))}}return i.\u0275fac=function(e){return new(e||i)(t.LFG(I.eN),t.LFG(o.MJ))},i.\u0275prov=t.Yz7({token:i,factory:i.\u0275fac}),i})();var l=r(3075),k=r(4376);const q=["tautotitaOfeilisForm"];function Q(i,a){if(1&i&&t._UZ(0,"p-message",17),2&i){const e=t.oxw(2);t.Q6J("severity",e.bankStatusMessageClass)("text",e.bankStatusMessage)("styleClass","mb-2")}}function U(i,a){if(1&i&&t._UZ(0,"p-message",18),2&i){const e=t.oxw(2);t.Q6J("text",e.errorMessage)("styleClass","mt-2")}}function z(i,a){if(1&i&&t._UZ(0,"p-message",19),2&i){const e=t.oxw(2);t.Q6J("styleClass","mt-2 form-msgs")("escape",!1)("text",e.formErrorsMsg)}}function R(i,a){if(1&i){const e=t.EpF();t.ynx(0),t.YNc(1,Q,1,3,"p-message",2),t.YNc(2,U,1,2,"p-message",3),t.TgZ(3,"form",4,5)(5,"div",6)(6,"div",7)(7,"label",8),t._uU(8),t.ALo(9,"translate"),t.qZA(),t.TgZ(10,"input",9),t.NdJ("ngModelChange",function(n){return t.CHM(e),t.oxw().request.kodikos=n}),t.ALo(11,"translate"),t.qZA(),t.TgZ(12,"div",10),t._uU(13),t.ALo(14,"translate"),t.qZA()()(),t.TgZ(15,"div",11)(16,"button",12),t.NdJ("click",function(){return t.CHM(e),t.oxw().onSubmit()}),t._UZ(17,"span",13),t._uU(18),t.ALo(19,"translate"),t.qZA(),t.TgZ(20,"button",14),t.NdJ("click",function(){return t.CHM(e),t.oxw().onClear()}),t._UZ(21,"span",15),t._uU(22),t.ALo(23,"translate"),t.qZA()(),t.YNc(24,z,1,3,"p-message",16),t.qZA(),t.BQk()}if(2&i){const e=t.oxw();t.xp6(1),t.Q6J("ngIf",e.bankStatusMessage&&""!==e.bankStatusMessage),t.xp6(1),t.Q6J("ngIf",e.errorMessage&&""!==e.errorMessage),t.xp6(6),t.hij("",t.lcZ(9,12,null==e.translation?null:e.translation.eidopoiitiria.code),"*"),t.xp6(2),t.Q6J("placeholder",t.lcZ(11,14,null==e.translation?null:e.translation.eidopoiitiria.code))("ngModel",e.request.kodikos)("disabled",e.response||e.isLoading),t.xp6(2),t.Q6J("hidden",!e.isFormSubmitted||e.isFormSubmitted&&e.request.kodikos&&""!==e.request.kodikos),t.xp6(1),t.hij(" *",t.lcZ(14,16,null==e.translation?null:e.translation.egwebapps.egrRequiredField)," "),t.xp6(3),t.Q6J("disabled",e.response),t.xp6(2),t.hij(" ",t.lcZ(19,18,null==e.translation?null:e.translation.egwebapps.egrSearchBtn)," "),t.xp6(4),t.hij(" ",t.lcZ(23,20,null==e.translation?null:e.translation.egwebapps.egrClearBtn)," "),t.xp6(2),t.Q6J("ngIf",e.formErrorsMsg&&""!==e.formErrorsMsg)}}function Y(i,a){if(1&i){const e=t.EpF();t.TgZ(0,"div",6)(1,"div",27)(2,"label",28),t._uU(3),t.ALo(4,"translate"),t.qZA(),t.TgZ(5,"input",29),t.NdJ("ngModelChange",function(n){return t.CHM(e),t.oxw(2).unAuthorizedAddress=n}),t.ALo(6,"translate"),t.qZA(),t.TgZ(7,"div",10),t._uU(8),t.ALo(9,"translate"),t.qZA()(),t.TgZ(10,"div",30)(11,"label",31),t._uU(12),t.ALo(13,"translate"),t.qZA(),t.TgZ(14,"input",32),t.NdJ("ngModelChange",function(n){return t.CHM(e),t.oxw(2).unAuthorizedTk=n}),t.ALo(15,"translate"),t.qZA(),t.TgZ(16,"div",10),t._uU(17),t.ALo(18,"translate"),t.qZA()(),t.TgZ(19,"div",33)(20,"label",34),t._uU(21),t.ALo(22,"translate"),t.qZA(),t.TgZ(23,"input",35),t.NdJ("ngModelChange",function(n){return t.CHM(e),t.oxw(2).unAuthorizedPoli=n}),t.ALo(24,"translate"),t.qZA(),t.TgZ(25,"div",10),t._uU(26),t.ALo(27,"translate"),t.qZA()(),t.TgZ(28,"div",36)(29,"label"),t._uU(30),t.ALo(31,"translate"),t.qZA(),t.TgZ(32,"ng-select",37),t.NdJ("ngModelChange",function(n){return t.CHM(e),t.oxw(2).unAuthorizedCountryId=n}),t.qZA(),t.TgZ(33,"div",10),t._uU(34),t.ALo(35,"translate"),t.qZA()()()}if(2&i){const e=t.oxw(2);t.xp6(3),t.hij("",t.lcZ(4,23,null==e.translation?null:e.translation.egwebapps.egrAddress),"*"),t.xp6(2),t.Q6J("placeholder",t.lcZ(6,25,null==e.translation?null:e.translation.egwebapps.egrAddress))("ngModel",e.unAuthorizedAddress),t.xp6(2),t.Q6J("hidden",!e.isFormPaySubmitted||e.isFormPaySubmitted&&e.unAuthorizedAddress&&""!==e.unAuthorizedAddress),t.xp6(1),t.hij(" *",t.lcZ(9,27,null==e.translation?null:e.translation.egwebapps.egrRequiredField)," "),t.xp6(4),t.hij("",t.lcZ(13,29,null==e.translation?null:e.translation.egwebapps.egrTk),"*"),t.xp6(2),t.Q6J("placeholder",t.lcZ(15,31,null==e.translation?null:e.translation.egwebapps.egrTk))("ngModel",e.unAuthorizedTk),t.xp6(2),t.Q6J("hidden",!e.isFormPaySubmitted||e.isFormPaySubmitted&&e.unAuthorizedTk&&""!==e.unAuthorizedTk),t.xp6(1),t.hij(" *",t.lcZ(18,33,null==e.translation?null:e.translation.egwebapps.egrRequiredField)," "),t.xp6(4),t.hij("",t.lcZ(22,35,null==e.translation?null:e.translation.egwebapps.egrPoli),"*"),t.xp6(2),t.Q6J("placeholder",t.lcZ(24,37,null==e.translation?null:e.translation.egwebapps.egrPoli))("ngModel",e.unAuthorizedPoli),t.xp6(2),t.Q6J("hidden",!e.isFormPaySubmitted||e.isFormPaySubmitted&&e.unAuthorizedPoli&&""!==e.unAuthorizedPoli),t.xp6(1),t.hij(" *",t.lcZ(27,39,null==e.translation?null:e.translation.egwebapps.egrRequiredField)," "),t.xp6(4),t.hij("",t.lcZ(31,41,null==e.translation?null:e.translation.egwebapps.egrEgsCountry),"*"),t.xp6(2),t.Q6J("appendTo","body")("virtualScroll",!0)("searchable",!0)("items",e.countriesList)("ngModel",e.unAuthorizedCountryId),t.xp6(1),t.Q6J("hidden",!e.isFormPaySubmitted||e.isFormPaySubmitted&&e.unAuthorizedCountryId&&""!==e.unAuthorizedCountryId),t.xp6(1),t.hij(" *",t.lcZ(35,43,null==e.translation?null:e.translation.egwebapps.egrRequiredField)," ")}}function N(i,a){1&i&&(t.TgZ(0,"p",38)(1,"span",39),t._uU(2,"\u039a\u03c9\u03b4\u03b9\u03ba\u03cc\u03c2 \u03a0\u03bb\u03b7\u03c1\u03c9\u03bc\u03ae\u03c2:"),t.qZA()())}function j(i,a){1&i&&(t.TgZ(0,"p",38)(1,"span",39),t._uU(2,"\u03a0\u03bf\u03c3\u03cc \u039f\u03c6\u03b5\u03b9\u03bb\u03ae\u03c2:"),t.qZA()())}function H(i,a){1&i&&(t.TgZ(0,"p",38)(1,"span",39),t._uU(2,"\u03a0\u03bf\u03c3\u03cc \u03a0\u03c1\u03bf\u03c3\u03b1\u03c5\u03be\u03ae\u03c3\u03b5\u03c9\u03bd:"),t.qZA()())}function K(i,a){1&i&&(t.TgZ(0,"p",38)(1,"strong",39),t._uU(2,"\u03a3\u03c5\u03bd\u03bf\u03bb\u03b9\u03ba\u03cc \u03a0\u03bf\u03c3\u03cc \u039f\u03c6\u03b5\u03b9\u03bb\u03ae\u03c2:"),t.qZA()())}function G(i,a){if(1&i&&(t.TgZ(0,"p",38)(1,"span",40),t._uU(2),t.qZA()()),2&i){const e=t.oxw(2);t.xp6(2),t.Oqu(e.response.remittanceInfo)}}const f=function(i){return[i,"\u20ac","symbol","1.2","el"]};function $(i,a){if(1&i&&(t.TgZ(0,"p",38)(1,"span",40),t._uU(2),t.ALo(3,"currency"),t.qZA()()),2&i){const e=t.oxw(2);t.xp6(2),t.Oqu(t.G7q(3,1,t.VKq(7,f,e.response.currentKatharoPoso)))}}function V(i,a){if(1&i&&(t.TgZ(0,"p",38)(1,"span",40),t._uU(2),t.ALo(3,"currency"),t.qZA()()),2&i){const e=t.oxw(2);t.xp6(2),t.Oqu(t.G7q(3,1,t.VKq(7,f,e.response.currentProsafksisi)))}}function W(i,a){if(1&i&&(t.TgZ(0,"p",38)(1,"strong",40),t._uU(2),t.ALo(3,"currency"),t.qZA()()),2&i){const e=t.oxw(2);t.xp6(2),t.Oqu(t.G7q(3,1,t.VKq(7,f,e.response.ypoloipoProsPliromi)))}}function X(i,a){if(1&i){const e=t.EpF();t.ynx(0),t._UZ(1,"hr"),t.TgZ(2,"form",4,20),t.YNc(4,Y,36,45,"div",21),t.qZA(),t.TgZ(5,"h5",22),t._uU(6),t.ALo(7,"translate"),t.qZA(),t.TgZ(8,"div",23)(9,"div",24)(10,"div"),t.YNc(11,N,3,0,"p",25),t.YNc(12,j,3,0,"p",25),t.YNc(13,H,3,0,"p",25),t.YNc(14,K,3,0,"p",25),t.qZA(),t.TgZ(15,"div"),t.YNc(16,G,3,1,"p",25),t.YNc(17,$,4,9,"p",25),t.YNc(18,V,4,9,"p",25),t.YNc(19,W,4,9,"p",25),t.qZA()(),t.TgZ(20,"eg-checkout",26),t.NdJ("payBtnClick",function(n){return t.CHM(e),t.oxw().onCreatePaymentRequest(n)}),t.qZA()(),t.BQk()}if(2&i){const e=t.MAs(3),s=t.oxw();t.xp6(4),t.Q6J("ngIf",!s.isAuthorized),t.xp6(2),t.Oqu(t.lcZ(7,15,null==s.translation?null:s.translation.egwebapps.egrResults)),t.xp6(5),t.Q6J("ngIf",s.response.remittanceInfo),t.xp6(1),t.Q6J("ngIf",null!==s.response.currentKatharoPoso),t.xp6(1),t.Q6J("ngIf",null!==s.response.remittanceInfo),t.xp6(1),t.Q6J("ngIf",null!==s.response.remittanceInfo),t.xp6(2),t.Q6J("ngIf",s.response.remittanceInfo),t.xp6(1),t.Q6J("ngIf",null!==s.response.currentKatharoPoso),t.xp6(1),t.Q6J("ngIf",null!==s.response.currentProsafksisi),t.xp6(1),t.Q6J("ngIf",null!==s.response.ypoloipoProsPliromi),t.xp6(1),t.Q6J("isPaymentFormValid",e.valid)("doPaymentSubscription",s.onDoPaymentSubject.asObservable())("finApiUrl",s.financeApiUrl)("buttonText",s.translation.egwebapps.egrPaymentBtnText)("cancelButtonText",s.translation.egwebapps.egrCancelBtn)}}let L=(()=>{class i{constructor(e,s,n,u,_,C,ut,lt,pt){this.oidcSecuritySrv=e,this.epaymentsSrv=s,this.egPaymentSrv=n,this.tautotitaOfeilisSrv=u,this.cookieSrv=_,this.toasterSrv=C,this.appCacheSv=ut,this.cdr=lt,this.route=pt,this.request={},this.countriesList=[],this.onDoPaymentSubject=new g.x,this.onDestroy=new g.x,this.isLoading=!1,this.isLoadingInit=!1,this.errorMessageProfile=null,this.oikonomikiBankMessagesEn=E.Px,this.isFormPaySubmitted=!1,this.isFormSubmitted=!1}ngOnInit(){(0,O.a)([this.appCacheSv.translation$,this.appCacheSv.selectedLang$]).pipe((0,d.R)(this.onDestroy)).subscribe(e=>{e&&(this.translation=e[0],this.selectedLang=e[1],this.formDictionaryEnum="el"==this.selectedLang?h:m,(0,o.RA)(this.cdr))}),this.isLoadingInit=!0,(0,o.RA)(this.cdr),"undefined"!=typeof AuthConfOptions&&AppConfOptions&&AppConfOptions.epayments_api&&(this.financeApiUrl=(0,o.Qj)(AppConfOptions.epayments_api)),this.appCacheSv.initCountries(AuthConfOptions.stsServer+"/api/general/GetCountries"),(0,O.a)([this.oidcSecuritySrv.userData$,this.appCacheSv.countries$]).subscribe(e=>{e&&(e[0]&&(this.user=e[0].userData,this.user&&(this.user.email=(0,o.Ew)(this.user.email)?this.user.email:this.user.email.trim(),this.user.username=(0,o.Ew)(this.user.username)?this.user.username:this.user.username.trim(),this.user.tin=(0,o.Ew)(this.user.tin)?this.user.tin:this.user.tin.trim(),this.user.family_name=(0,o.Ew)(this.user.family_name)?this.user.family_name:this.user.family_name.trim(),this.user.given_name=(0,o.Ew)(this.user.given_name)?this.user.given_name:this.user.given_name.trim(),this.user.fathers_name=(0,o.Ew)(this.user.fathers_name)?this.user.fathers_name:this.user.fathers_name.trim(),this.user.mothers_name=(0,o.Ew)(this.user.mothers_name)?this.user.mothers_name:this.user.mothers_name.trim(),this.user.name=(0,o.Ew)(this.user.name)?this.user.name:this.user.name.trim(),this.user.address_city=(0,o.Ew)(this.user.address_city)?this.user.address_city:this.user.address_city.trim(),this.user.address_country_code=(0,o.Ew)(this.user.address_country_code)?this.user.address_country_code:this.user.address_country_code.trim(),this.user.address_country_num=(0,o.Ew)(this.user.address_country_num)?this.user.address_country_num:this.user.address_country_num.trim(),this.user.address_zip=(0,o.Ew)(this.user.address_zip)?this.user.address_zip:this.user.address_zip.trim(),this.user.address=(0,o.Ew)(this.user.address)?this.user.address:this.user.address.trim(),this.user.adt=(0,o.Ew)(this.user.adt)?this.user.adt:this.user.adt.trim(),this.user.phone_number=(0,o.Ew)(this.user.phone_number)?this.user.phone_number:this.user.phone_number.trim())),e[1]&&(this.countriesList=e[1],this.user&&this.user.address_country_code&&""!=this.user.address_country_code&&(this.user.address_country_num=this.countriesList.find(s=>s.Alpha2Code==this.user.address_country_code).NumericCode.toString()))),this.isLoadingInit=!1,(0,o.RA)(this.cdr)}),this.epaymentsSrv.getBankMessages().pipe((0,b.w)(e=>e?(this.oikonomikiBankMessages=e,this.route.queryParams.pipe((0,d.R)(this.onDestroy))):(0,B.of)(!1))).subscribe(e=>{var s;if(e){let n=e;if(n.messagecode||n.paymentStatus){let u=n.messagecode?n.messagecode:n.paymentStatus;this.bankStatusMessage="el"==this.selectedLang?this.oikonomikiBankMessages[u]:this.oikonomikiBankMessagesEn[u],this.bankStatusMessageClass="TRANSACTION_COMPLETED"==u||"APPROVED"==u?"success":"error"}}else this.toasterSrv.showError("",null===(s=this.translation)||void 0===s?void 0:s.egwebapps.egrProblemFound);(0,o.RA)(this.cdr)})}ngOnDestroy(){this.onDestroy.next(null)}onSubmit(){this.isFormSubmitted=!0,this.formErrorsMsg=null,(0,o.RA)(this.cdr),this.isFormSubmitted&&this.tautotitaOfeilisForm.valid?(this.response=null,this.isLoading=!0,(0,o.RA)(this.cdr),this.tautotitaOfeilisSrv.getYpoloipoKodikouPliromis(this.request.kodikos).subscribe(e=>{e&&e.statusCode==o.WE.Ok?this.response=e:(this.toasterSrv.showError("",e.message),this.errorMessage=e.message),this.isLoading=!1,(0,o.RA)(this.cdr)})):(this.formErrorsMsg=(0,o.CD)(this.tautotitaOfeilisForm,this.formDictionaryEnum,""),(0,o.RA)(this.cdr))}onCreatePaymentRequest(e){if(this.isAuthorized&&this.user&&(0,o.Ew)(this.user.email))return void this.toasterSrv.showWarning("","\u0395\u03af\u03bd\u03b1\u03b9 \u03b1\u03c0\u03b1\u03c1\u03b1\u03af\u03c4\u03b7\u03c4\u03bf \u03c4\u03bf email \u03c3\u03b1\u03c2 \u03c3\u03c4\u03b7 \u03c3\u03b5\u03bb\u03af\u03b4\u03b1 \u03c4\u03bf\u03c5 \u03c0\u03c1\u03bf\u03c6\u03af\u03bb \u03c3\u03b1\u03c2.");let s={remittanceInfo:this.response.remittanceInfo,amount:this.response.ypoloipoProsPliromi},n={relatedCallbackUrl:AppConfOptions.application_url+"/tautotita-ofeilis/debits",paymentMethodKey:e.key,kodikosDias:this.response.remittanceInfo,entries:[]};"PIRBGRAA"===e.key&&(n.billingAddressCountryCode=null),this.isAuthorized&&this.user&&!(0,o.Ew)(this.user.email)&&this.response?(s.debtorName=this.user.family_name+" "+this.user.fathers_name+" "+this.user.mothers_name+" "+this.user.name,s.tin=this.user.tin,n.tinRelated=this.user.tin,n.billingAddressCity=this.user.address_city,n.billingAddressCountryCode=this.user.address_country_code,n.billingAddressZip=this.user.address_zip,n.billingAddress=this.user.address,n.userEmail=this.user.email,n.userPhone=this.user.phone_number):!this.isAuthorized&&this.response&&AppConfOptions.unauthorized_allowed&&(n.billingAddress=this.unAuthorizedAddress,n.billingAddressZip=this.unAuthorizedTk,n.billingAddressCity=this.unAuthorizedPoli,n.billingAddressCountryCode=this.unAuthorizedCountryId),n.entries.push(s),this.paymentRequestDto=n,this.tautotitaOfeilisSrv.addPaymentRequestKodikouPliromis(this.paymentRequestDto).subscribe(u=>{u&&u.statusCode==o.WE.Ok?(this.paymentResponseDto=u.model,this.onDoPaymentSubject.next(this.paymentResponseDto)):(this.toasterSrv.showError("",u.message),this.errorMessage=u.message)})}onClear(){this.isFormSubmitted=!1,this.request={},this.response=null,this.errorMessage=null,(0,o.RA)(this.cdr)}}return i.\u0275fac=function(e){return new(e||i)(t.Y36(T.J_),t.Y36(x.C),t.Y36(o.te),t.Y36(w),t.Y36(o.N_),t.Y36(o.MJ),t.Y36(v.g),t.Y36(t.sBO),t.Y36(p.gz))},i.\u0275cmp=t.Xpm({type:i,selectors:[["app-tautotita-ofeilis-debits"]],viewQuery:function(e,s){if(1&e&&t.Gf(q,5),2&e){let n;t.iGM(n=t.CRH())&&(s.tautotitaOfeilisForm=n.first)}},inputs:{isAuthorized:"isAuthorized"},decls:3,vars:4,consts:[[3,"condition","customClass"],[4,"ngIf"],[3,"severity","text","styleClass",4,"ngIf"],["severity","danger",3,"text","styleClass",4,"ngIf"],[1,"form"],["tautotitaOfeilisForm","ngForm"],[1,"row"],[1,"form-group","col-12"],["for","paymentCode"],["name","paymentCode","type","text","required","",1,"form-control",3,"placeholder","ngModel","disabled","ngModelChange"],[1,"validation-msg","text-danger","pt-1",3,"hidden"],[1,"d-flex","align-items-center","justify-content-center","flex-wrap"],["type","button",1,"btn","btn-primary","me-1",3,"disabled","click"],["aria-hidden","true",1,"fas","fa-search","fa-fw"],["type","button",1,"btn","btn-warning","text-white",3,"click"],["aria-hidden","true",1,"fas","fa-times","fa-fw"],["severity","error",3,"styleClass","escape","text",4,"ngIf"],[3,"severity","text","styleClass"],["severity","danger",3,"text","styleClass"],["severity","error",3,"styleClass","escape","text"],["tautotitaOfeilisExtraInfoForm","ngForm"],["class","row",4,"ngIf"],[1,"mt-4","text-center"],[1,"debits-info","d-flex","justify-content-between"],[1,"debits-info_left","d-flex","me-1"],["class","mb-0",4,"ngIf"],[3,"isPaymentFormValid","doPaymentSubscription","finApiUrl","buttonText","cancelButtonText","payBtnClick"],[1,"col-12","col-md-9"],["for","address"],["name","address","type","text","required","",1,"form-control",3,"placeholder","ngModel","ngModelChange"],[1,"col-12","col-md-3"],["for","tk"],["name","tk","type","text","required","",1,"form-control",3,"placeholder","ngModel","ngModelChange"],[1,"col-12","col-md-6"],["for","poli"],["name","poli","type","text","required","",1,"form-control",3,"placeholder","ngModel","ngModelChange"],[1,"form-group","col-12","col-md-6"],["name","egsCountry","bindLabel","Perigrafi","bindValue","Id","required","",1,"ontop-select",3,"appendTo","virtualScroll","searchable","items","ngModel","ngModelChange"],[1,"mb-0"],[1,"me-1",2,"width","220px","line-height","1.7"],[1,"totalPoso",2,"line-height","1.7"]],template:function(e,s){1&e&&(t._UZ(0,"eg-loading",0),t.YNc(1,R,25,22,"ng-container",1),t.YNc(2,X,21,17,"ng-container",1)),2&e&&(t.Q6J("condition",s.isLoadingInit||s.isLoading)("customClass","egr-load-small"),t.xp6(1),t.Q6J("ngIf",!s.isLoadingInit),t.xp6(1),t.Q6J("ngIf",s.response&&!s.isLoading))},directives:[o.IE,c.O5,Z.q,l._Y,l.JL,l.F,l.Fj,l.Q7,l.JJ,l.On,k.w9,o.Hl],pipes:[y.X$,c.H9],encapsulation:2,changeDetection:0}),i})();var tt=r(1886);function et(i,a){if(1&i&&t._UZ(0,"p-message",5),2&i){const e=t.oxw(2);t.Q6J("text",null==e.translation?null:e.translation.egwebapps.egwebappsLoginMesg)}}function it(i,a){if(1&i&&(t.TgZ(0,"p-panel",9),t._UZ(1,"div",10),t.ALo(2,"decodeHtmlString"),t.qZA()),2&i){const e=t.oxw(3);t.Q6J("header",null==e.translation?null:e.translation.egwebapps.information)("styleClass","tab-msg mb-3")("toggleable",!0),t.xp6(1),t.Q6J("innerHTML",t.lcZ(2,4,e.tabMsg),t.oJD)}}function st(i,a){if(1&i&&(t.ynx(0),t.YNc(1,it,3,6,"p-panel",6),t.TgZ(2,"div",7),t._UZ(3,"app-tautotita-ofeilis-debits",8),t.qZA(),t.BQk()),2&i){const e=t.oxw(2);t.xp6(1),t.Q6J("ngIf",e.tabMsg),t.xp6(2),t.Q6J("isAuthorized",e.isAuthorized)}}function nt(i,a){if(1&i&&(t.ynx(0),t.YNc(1,et,1,1,"p-message",3),t._UZ(2,"app-afmnotfound",4),t.YNc(3,st,4,2,"ng-container",2),t.BQk()),2&i){const e=t.oxw();t.xp6(1),t.Q6J("ngIf",!e.isAuthorized&&!e.isUnauthorizedAllowed),t.xp6(1),t.Q6J("afmNotFound",e.afmNotFound),t.xp6(1),t.Q6J("ngIf",!e.afmNotFound)}}const ot=[{path:"",component:(()=>{class i{constructor(e,s,n,u,_,C){this.oidcSecuritySrv=e,this.appCacheSv=s,this.location=n,this.cdr=u,this.router=_,this.route=C,this.onDestroy=new g.x,this.isLoading=!1,this.afmNotFound=!1,this.index=0,this.isUnauthorizedAllowed=AppConfOptions.unauthorized_allowed,this.selectedLang="el"}ngOnInit(){this.appCacheSv.translation$.pipe((0,d.R)(this.onDestroy)).subscribe(e=>{e&&(this.translation=e,(0,o.RA)(this.cdr))}),this.appCacheSv.selectedLang$.pipe((0,d.R)(this.onDestroy)).subscribe(e=>{e&&(this.selectedLang=e),1==AppConfOptions.multilingual&&"el"!=this.selectedLang&&AppConfOptions.eidopoiitiria_tab_info_en&&""!=AppConfOptions.eidopoiitiria_tab_info_en?this.tabMsg=AppConfOptions.eidopoiitiria_tab_info_en:AppConfOptions.eidopoiitiria_tab_info&&""!=AppConfOptions.eidopoiitiria_tab_info&&"el"==this.selectedLang&&(this.tabMsg=AppConfOptions.eidopoiitiria_tab_info),(0,o.RA)(this.cdr)}),this.isLoading=!0,(0,o.RA)(this.cdr),this.oidcSecuritySrv.isAuthenticated$.pipe((0,b.w)(e=>(this.isAuthorized=null!=e&&e.isAuthenticated,this.oidcSecuritySrv.userData$))).subscribe(e=>{if(e){let s=null==e?void 0:e.userData;this.isAuthorized&&s&&(!s.tin||(0,o.Ew)(s.tin))&&1==AppConfOptions.eidopoiitiria_afm_required&&(this.afmNotFound=!0)}this.isLoading=!1,(0,o.RA)(this.cdr)}),this.index="receipts"===this.route.children[0].snapshot.url[0].path?1:0,(0,o.RA)(this.cdr)}ngOnDestroy(){this.onDestroy.next(null)}onTabChanged(e){this.router.navigate(0==e.index?["./debits"]:["./receipts"],{relativeTo:this.route})}}return i.\u0275fac=function(e){return new(e||i)(t.Y36(T.J_),t.Y36(v.g),t.Y36(c.Ye),t.Y36(t.sBO),t.Y36(p.F0),t.Y36(p.gz))},i.\u0275cmp=t.Xpm({type:i,selectors:[["app-tautotita-ofeilis-layout"]],decls:4,vars:4,consts:[[1,"module-title"],[3,"condition","customClass"],[4,"ngIf"],["severity","warn",3,"text",4,"ngIf"],[3,"afmNotFound"],["severity","warn",3,"text"],[3,"header","styleClass","toggleable",4,"ngIf"],[1,"bg-white","p-2"],[3,"isAuthorized"],[3,"header","styleClass","toggleable"],[3,"innerHTML"]],template:function(e,s){1&e&&(t.TgZ(0,"h3",0),t._uU(1),t.qZA(),t._UZ(2,"eg-loading",1),t.YNc(3,nt,4,3,"ng-container",2)),2&e&&(t.xp6(1),t.Oqu(null==s.translation?null:s.translation.menu.eidopoiitiriaMenuItem),t.xp6(1),t.Q6J("condition",s.isLoading)("customClass","egr-load-small"),t.xp6(1),t.Q6J("ngIf",!s.isLoading))},directives:[o.IE,c.O5,Z.q,F.d,J.s,L],pipes:[tt.o],encapsulation:2,changeDetection:0}),i})(),children:[{path:"",pathMatch:"full",redirectTo:"debits"},{path:"debits",component:L}]}];let at=(()=>{class i{}return i.\u0275fac=function(e){return new(e||i)},i.\u0275mod=t.oAB({type:i}),i.\u0275inj=t.cJS({imports:[[p.Bz.forChild(ot)],p.Bz]}),i})(),rt=(()=>{class i{}return i.\u0275fac=function(e){return new(e||i)},i.\u0275mod=t.oAB({type:i}),i.\u0275inj=t.cJS({providers:[w,x.C],imports:[[P.m,D.IJ,at,y.aw.forChild()]]}),i})()}}]);