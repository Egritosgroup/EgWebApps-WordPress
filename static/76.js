"use strict";(self.webpackChunkegritos_group_eg_web_apps=self.webpackChunkegritos_group_eg_web_apps||[]).push([[76],{2076:(lt,_,r)=>{r.r(_),r.d(_,{TautotitaOfeilisModule:()=>at});var w=r(4864),b=r(6230),x=r(9748),R=r(5265),d=r(7921),o=r(3228),h=r(5657),m=r(6040),p=r(3616),O=r(7368),t=r(4496),A=r(2116),E=r(9161),c=r(1368),k=r(6328),D=r(1148),M=r(2700),G=function(i){return i.paymentCode="\u039a\u03c9\u03b4\u03b9\u03ba\u03cc\u03c2",i}(G||{}),v=function(i){return i.paymentCode="Payment Code",i}(v||{}),P=r(8080),I=r(4704),T=r(9144),F=r(7048);let S=(()=>{class i{constructor(e,n){this.http=e,this.toasterSrv=n,AppConfOptions.finance_api?this.apiUrl=(0,o.sF)(AppConfOptions.finance_api):AppConfOptions.epayments_api&&(this.apiUrl=(0,o.sF)(AppConfOptions.epayments_api)),this.apiUrl=(0,o.sF)(this.apiUrl)+"/api/"}getYpoloipoKodikouPliromis(e){return this.http.get(this.apiUrl+`PraxeisEidopoiisis/GetYpoloipoKodikouPliromis/${e}`).pipe((0,I.k)(s=>s),(0,T.a)(s=>(0,o.Og)(s,this.toasterSrv)))}addPaymentRequestKodikouPliromis(e){return this.http.post(this.apiUrl+"PraxeisEidopoiisis/AddPaymentRequestKodikouPliromis",e).pipe((0,I.k)(s=>s),(0,T.a)(s=>(0,o.Og)(s,this.toasterSrv)))}static#t=this.\u0275fac=function(n){return new(n||i)(t.CoB(F.KK),t.CoB(o.y6))};static#e=this.\u0275prov=t.wxM({token:i,factory:i.\u0275fac})}return i})();var l=r(6504),B=r(120);const Y=["tautotitaOfeilisForm"];function z(i,u){if(1&i&&t.wR5(0,"p-message",17),2&i){const e=t.GaO(2);t.E7m("severity",e.bankStatusMessageClass)("text",e.bankStatusMessage)("styleClass","mb-2")}}function L(i,u){if(1&i&&t.wR5(0,"p-message",18),2&i){const e=t.GaO(2);t.E7m("text",e.errorMessage)("styleClass","mt-2")}}function $(i,u){if(1&i&&t.wR5(0,"p-message",19),2&i){const e=t.GaO(2);t.E7m("styleClass","mt-2 form-msgs")("escape",!1)("text",e.formErrorsMsg)}}function V(i,u){if(1&i){const e=t.KQA();t.SAx(0),t.yuY(1,z,1,3,"p-message",2)(2,L,1,2,"p-message",3),t.I0R(3,"form",4,5)(5,"div",6)(6,"div",7)(7,"label",8),t.OEk(8),t.wVc(9,"translate"),t.C$Y(),t.I0R(10,"input",9),t.iHE("ngModelChange",function(s){t.usT(e);const a=t.GaO();return t.kNx(a.request.kodikos,s)||(a.request.kodikos=s),t.CGJ(s)}),t.wVc(11,"translate"),t.C$Y(),t.I0R(12,"div",10),t.OEk(13),t.wVc(14,"translate"),t.C$Y()()(),t.I0R(15,"div",11)(16,"button",12),t.qCj("click",function(){t.usT(e);const s=t.GaO();return t.CGJ(s.onSubmit())}),t.wR5(17,"span",13),t.OEk(18),t.wVc(19,"translate"),t.C$Y(),t.I0R(20,"button",14),t.qCj("click",function(){t.usT(e);const s=t.GaO();return t.CGJ(s.onClear())}),t.wR5(21,"span",15),t.OEk(22),t.wVc(23,"translate"),t.C$Y()(),t.yuY(24,$,1,3,"p-message",16),t.C$Y(),t.k70()}if(2&i){const e=t.GaO();t.yG2(),t.E7m("ngIf",e.bankStatusMessage&&""!==e.bankStatusMessage),t.yG2(),t.E7m("ngIf",e.errorMessage&&""!==e.errorMessage),t.yG2(6),t.oRS("",t.kDX(9,12,null==e.translation?null:e.translation.eidopoiitiria.code),"*"),t.yG2(2),t.E7m("placeholder",t.kDX(11,14,null==e.translation?null:e.translation.eidopoiitiria.code)),t.OKB("ngModel",e.request.kodikos),t.E7m("disabled",e.response||e.isLoading),t.yG2(2),t.E7m("hidden",!e.isFormSubmitted||e.isFormSubmitted&&e.request.kodikos&&""!==e.request.kodikos),t.yG2(),t.oRS(" *",t.kDX(14,16,null==e.translation?null:e.translation.egwebapps.egrRequiredField)," "),t.yG2(3),t.E7m("disabled",e.response),t.yG2(2),t.oRS(" ",t.kDX(19,18,null==e.translation?null:e.translation.egwebapps.egrSearchBtn)," "),t.yG2(4),t.oRS(" ",t.kDX(23,20,null==e.translation?null:e.translation.egwebapps.egrClearBtn)," "),t.yG2(2),t.E7m("ngIf",e.formErrorsMsg&&""!==e.formErrorsMsg)}}function U(i,u){if(1&i){const e=t.KQA();t.I0R(0,"div",6)(1,"div",27)(2,"label",28),t.OEk(3),t.wVc(4,"translate"),t.C$Y(),t.I0R(5,"input",29),t.iHE("ngModelChange",function(s){t.usT(e);const a=t.GaO(2);return t.kNx(a.unAuthorizedAddress,s)||(a.unAuthorizedAddress=s),t.CGJ(s)}),t.wVc(6,"translate"),t.C$Y(),t.I0R(7,"div",10),t.OEk(8),t.wVc(9,"translate"),t.C$Y()(),t.I0R(10,"div",30)(11,"label",31),t.OEk(12),t.wVc(13,"translate"),t.C$Y(),t.I0R(14,"input",32),t.iHE("ngModelChange",function(s){t.usT(e);const a=t.GaO(2);return t.kNx(a.unAuthorizedTk,s)||(a.unAuthorizedTk=s),t.CGJ(s)}),t.wVc(15,"translate"),t.C$Y(),t.I0R(16,"div",10),t.OEk(17),t.wVc(18,"translate"),t.C$Y()(),t.I0R(19,"div",33)(20,"label",34),t.OEk(21),t.wVc(22,"translate"),t.C$Y(),t.I0R(23,"input",35),t.iHE("ngModelChange",function(s){t.usT(e);const a=t.GaO(2);return t.kNx(a.unAuthorizedPoli,s)||(a.unAuthorizedPoli=s),t.CGJ(s)}),t.wVc(24,"translate"),t.C$Y(),t.I0R(25,"div",10),t.OEk(26),t.wVc(27,"translate"),t.C$Y()(),t.I0R(28,"div",36)(29,"label"),t.OEk(30),t.wVc(31,"translate"),t.C$Y(),t.I0R(32,"ng-select",37),t.iHE("ngModelChange",function(s){t.usT(e);const a=t.GaO(2);return t.kNx(a.unAuthorizedCountryId,s)||(a.unAuthorizedCountryId=s),t.CGJ(s)}),t.C$Y(),t.I0R(33,"div",10),t.OEk(34),t.wVc(35,"translate"),t.C$Y()()()}if(2&i){const e=t.GaO(2);t.yG2(3),t.oRS("",t.kDX(4,23,null==e.translation?null:e.translation.egwebapps.egrAddress),"*"),t.yG2(2),t.E7m("placeholder",t.kDX(6,25,null==e.translation?null:e.translation.egwebapps.egrAddress)),t.OKB("ngModel",e.unAuthorizedAddress),t.yG2(2),t.E7m("hidden",!e.isFormPaySubmitted||e.isFormPaySubmitted&&e.unAuthorizedAddress&&""!==e.unAuthorizedAddress),t.yG2(),t.oRS(" *",t.kDX(9,27,null==e.translation?null:e.translation.egwebapps.egrRequiredField)," "),t.yG2(4),t.oRS("",t.kDX(13,29,null==e.translation?null:e.translation.egwebapps.egrTk),"*"),t.yG2(2),t.E7m("placeholder",t.kDX(15,31,null==e.translation?null:e.translation.egwebapps.egrTk)),t.OKB("ngModel",e.unAuthorizedTk),t.yG2(2),t.E7m("hidden",!e.isFormPaySubmitted||e.isFormPaySubmitted&&e.unAuthorizedTk&&""!==e.unAuthorizedTk),t.yG2(),t.oRS(" *",t.kDX(18,33,null==e.translation?null:e.translation.egwebapps.egrRequiredField)," "),t.yG2(4),t.oRS("",t.kDX(22,35,null==e.translation?null:e.translation.egwebapps.egrPoli),"*"),t.yG2(2),t.E7m("placeholder",t.kDX(24,37,null==e.translation?null:e.translation.egwebapps.egrPoli)),t.OKB("ngModel",e.unAuthorizedPoli),t.yG2(2),t.E7m("hidden",!e.isFormPaySubmitted||e.isFormPaySubmitted&&e.unAuthorizedPoli&&""!==e.unAuthorizedPoli),t.yG2(),t.oRS(" *",t.kDX(27,39,null==e.translation?null:e.translation.egwebapps.egrRequiredField)," "),t.yG2(4),t.oRS("",t.kDX(31,41,null==e.translation?null:e.translation.egwebapps.egrEgsCountry),"*"),t.yG2(2),t.E7m("appendTo","body")("virtualScroll",!0)("searchable",!0)("items",e.countriesList),t.OKB("ngModel",e.unAuthorizedCountryId),t.yG2(),t.E7m("hidden",!e.isFormPaySubmitted||e.isFormPaySubmitted&&e.unAuthorizedCountryId&&""!==e.unAuthorizedCountryId),t.yG2(),t.oRS(" *",t.kDX(35,43,null==e.translation?null:e.translation.egwebapps.egrRequiredField)," ")}}function K(i,u){1&i&&(t.I0R(0,"p",38)(1,"span",39),t.OEk(2,"\u039a\u03c9\u03b4\u03b9\u03ba\u03cc\u03c2 \u03a0\u03bb\u03b7\u03c1\u03c9\u03bc\u03ae\u03c2:"),t.C$Y()())}function X(i,u){1&i&&(t.I0R(0,"p",38)(1,"span",39),t.OEk(2,"\u03a0\u03bf\u03c3\u03cc \u039f\u03c6\u03b5\u03b9\u03bb\u03ae\u03c2:"),t.C$Y()())}function N(i,u){1&i&&(t.I0R(0,"p",38)(1,"span",39),t.OEk(2,"\u03a0\u03bf\u03c3\u03cc \u03a0\u03c1\u03bf\u03c3\u03b1\u03c5\u03be\u03ae\u03c3\u03b5\u03c9\u03bd:"),t.C$Y()())}function q(i,u){1&i&&(t.I0R(0,"p",38)(1,"strong",39),t.OEk(2,"\u03a3\u03c5\u03bd\u03bf\u03bb\u03b9\u03ba\u03cc \u03a0\u03bf\u03c3\u03cc \u039f\u03c6\u03b5\u03b9\u03bb\u03ae\u03c2:"),t.C$Y()())}function j(i,u){if(1&i&&(t.I0R(0,"p",38)(1,"span",40),t.OEk(2),t.C$Y()()),2&i){const e=t.GaO(2);t.yG2(2),t.cNF(e.response.remittanceInfo)}}const g=i=>[i,"\u20ac","symbol","1.2","el"];function H(i,u){if(1&i&&(t.I0R(0,"p",38)(1,"span",40),t.OEk(2),t.wVc(3,"currency"),t.C$Y()()),2&i){const e=t.GaO(2);t.yG2(2),t.cNF(t.MxA(3,1,t.S45(7,g,e.response.currentKatharoPoso)))}}function J(i,u){if(1&i&&(t.I0R(0,"p",38)(1,"span",40),t.OEk(2),t.wVc(3,"currency"),t.C$Y()()),2&i){const e=t.GaO(2);t.yG2(2),t.cNF(t.MxA(3,1,t.S45(7,g,e.response.currentProsafksisi)))}}function Q(i,u){if(1&i&&(t.I0R(0,"p",38)(1,"strong",40),t.OEk(2),t.wVc(3,"currency"),t.C$Y()()),2&i){const e=t.GaO(2);t.yG2(2),t.cNF(t.MxA(3,1,t.S45(7,g,e.response.ypoloipoProsPliromi)))}}function Z(i,u){if(1&i){const e=t.KQA();t.SAx(0),t.wR5(1,"hr"),t.I0R(2,"form",4,20),t.yuY(4,U,36,45,"div",21),t.C$Y(),t.I0R(5,"h5",22),t.OEk(6),t.wVc(7,"translate"),t.C$Y(),t.I0R(8,"div",23)(9,"div",24)(10,"div"),t.yuY(11,K,3,0,"p",25)(12,X,3,0,"p",25)(13,N,3,0,"p",25)(14,q,3,0,"p",25),t.C$Y(),t.I0R(15,"div"),t.yuY(16,j,3,1,"p",25)(17,H,4,9,"p",25)(18,J,4,9,"p",25)(19,Q,4,9,"p",25),t.C$Y()(),t.I0R(20,"eg-checkout",26),t.qCj("payBtnClick",function(s){t.usT(e);const a=t.GaO();return t.CGJ(a.onCreatePaymentRequest(s))}),t.C$Y()(),t.k70()}if(2&i){const e=t.Gew(3),n=t.GaO();t.yG2(4),t.E7m("ngIf",!n.isAuthorized),t.yG2(2),t.cNF(t.kDX(7,15,null==n.translation?null:n.translation.egwebapps.egrResults)),t.yG2(5),t.E7m("ngIf",n.response.remittanceInfo),t.yG2(),t.E7m("ngIf",null!==n.response.currentKatharoPoso),t.yG2(),t.E7m("ngIf",null!==n.response.remittanceInfo),t.yG2(),t.E7m("ngIf",null!==n.response.remittanceInfo),t.yG2(2),t.E7m("ngIf",n.response.remittanceInfo),t.yG2(),t.E7m("ngIf",null!==n.response.currentKatharoPoso),t.yG2(),t.E7m("ngIf",null!==n.response.currentProsafksisi),t.yG2(),t.E7m("ngIf",null!==n.response.ypoloipoProsPliromi),t.yG2(),t.E7m("isPaymentFormValid",e.valid)("doPaymentSubscription",n.onDoPaymentSubject.asObservable())("govPaymentGatewayApiUrl",n.govPaymentGatewayApiUrl)("buttonText",n.translation.egwebapps.egrPaymentBtnText)("cancelButtonText",n.translation.egwebapps.egrCancelBtn)}}let f=(()=>{class i{constructor(e,n,s,a,y,C,rt,ut){this.oidcSecuritySrv=e,this.egPaymentSrv=n,this.tautotitaOfeilisSrv=s,this.cookieSrv=a,this.toasterSrv=y,this.appCacheSv=C,this.cdr=rt,this.route=ut,this.request={},this.countriesList=[],this.onDoPaymentSubject=new h.E,this.onDestroy=new h.E,this.isLoading=!1,this.isLoadingInit=!1,this.errorMessageProfile=null,this.oikonomikiBankMessagesEn=P.o9,this.isFormPaySubmitted=!1,this.isFormSubmitted=!1}ngOnInit(){if(this.request.kodikos=this.route.firstChild?.snapshot.params.kodikos,(0,m.E)([this.appCacheSv.translation$,this.appCacheSv.selectedLang$]).pipe((0,p.a)(this.onDestroy)).subscribe(e=>{e&&(this.translation=e[0],this.selectedLang=e[1],this.formDictionaryEnum="el"==this.selectedLang?G:v,(0,o.Er)(this.cdr))}),this.isLoadingInit=!0,(0,o.Er)(this.cdr),typeof AuthConfOptions<"u"&&AppConfOptions){let e;AppConfOptions.finance_api?e=(0,o.sF)(AppConfOptions.finance_api):AppConfOptions.epayments_api&&(e=(0,o.sF)(AppConfOptions.epayments_api)),this.govPaymentGatewayApiUrl=(0,o.w1)(AppConfOptions.gov_payment_gateway_api)?e:(0,o.sF)(AppConfOptions.gov_payment_gateway_api)}this.appCacheSv.initCountries(AuthConfOptions.stsServer+"/api/general/GetCountries"),(0,m.E)([this.oidcSecuritySrv.getUserData(),this.appCacheSv.countries$]).subscribe(e=>{e&&(e[0]&&(this.user=e[0],this.user&&(this.user.email=(0,o.w1)(this.user.email)?this.user.email:this.user.email.trim(),this.user.username=(0,o.w1)(this.user.username)?this.user.username:this.user.username.trim(),this.user.tin=(0,o.w1)(this.user.tin)?this.user.tin:this.user.tin.trim(),this.user.family_name=(0,o.w1)(this.user.family_name)?this.user.family_name:this.user.family_name.trim(),this.user.given_name=(0,o.w1)(this.user.given_name)?this.user.given_name:this.user.given_name.trim(),this.user.fathers_name=(0,o.w1)(this.user.fathers_name)?this.user.fathers_name:this.user.fathers_name.trim(),this.user.mothers_name=(0,o.w1)(this.user.mothers_name)?this.user.mothers_name:this.user.mothers_name.trim(),this.user.name=(0,o.w1)(this.user.name)?this.user.name:this.user.name.trim(),this.user.address_city=(0,o.w1)(this.user.address_city)?this.user.address_city:this.user.address_city.trim(),this.user.address_country_code=(0,o.w1)(this.user.address_country_code)?this.user.address_country_code:this.user.address_country_code.trim(),this.user.address_country_num=(0,o.w1)(this.user.address_country_num)?this.user.address_country_num:this.user.address_country_num.trim(),this.user.address_zip=(0,o.w1)(this.user.address_zip)?this.user.address_zip:this.user.address_zip.trim(),this.user.address=(0,o.w1)(this.user.address)?this.user.address:this.user.address.trim(),this.user.adt=(0,o.w1)(this.user.adt)?this.user.adt:this.user.adt.trim(),this.user.phone_number=(0,o.w1)(this.user.phone_number)?this.user.phone_number:this.user.phone_number.trim())),e[1]&&(this.countriesList=e[1],this.user&&this.user.address_country_code&&""!=this.user.address_country_code&&(this.user.address_country_num=this.countriesList.find(n=>n.Alpha2Code==this.user.address_country_code).NumericCode.toString()))),this.isLoadingInit=!1,(0,o.Er)(this.cdr)}),this.egPaymentSrv.getBankMessages(this.govPaymentGatewayApiUrl).pipe((0,O.G)(e=>e?(this.oikonomikiBankMessages=e,this.route.queryParams.pipe((0,p.a)(this.onDestroy))):(0,M.of)(!1))).subscribe(e=>{if(e){if(e.messagecode||e.paymentStatus){let s=e.messagecode?e.messagecode:e.paymentStatus;this.bankStatusMessage="el"==this.selectedLang?this.oikonomikiBankMessages[s]:this.oikonomikiBankMessagesEn[s],this.bankStatusMessageClass="TRANSACTION_COMPLETED"==s||"APPROVED"==s?"success":"error"}}else this.toasterSrv.showError("",this.translation?.egwebapps.egrProblemFound);(0,o.Er)(this.cdr)})}ngOnDestroy(){this.onDestroy.next(null)}onSubmit(){this.isFormSubmitted=!0,this.formErrorsMsg=null,(0,o.Er)(this.cdr),this.isFormSubmitted&&this.tautotitaOfeilisForm.valid?(this.response=null,this.isLoading=!0,(0,o.Er)(this.cdr),this.tautotitaOfeilisSrv.getYpoloipoKodikouPliromis(this.request.kodikos).subscribe(e=>{e&&e.statusCode==o.oZ.Ok?this.response=e:(this.toasterSrv.showError("",e.message),this.errorMessage=e.message),this.isLoading=!1,(0,o.Er)(this.cdr)})):(this.formErrorsMsg=(0,o.SG)(this.tautotitaOfeilisForm,this.formDictionaryEnum,""),(0,o.Er)(this.cdr))}onCreatePaymentRequest(e){if(this.isAuthorized&&this.user&&(0,o.w1)(this.user.email))return void this.toasterSrv.showWarning("","\u0395\u03af\u03bd\u03b1\u03b9 \u03b1\u03c0\u03b1\u03c1\u03b1\u03af\u03c4\u03b7\u03c4\u03bf \u03c4\u03bf email \u03c3\u03b1\u03c2 \u03c3\u03c4\u03b7 \u03c3\u03b5\u03bb\u03af\u03b4\u03b1 \u03c4\u03bf\u03c5 \u03c0\u03c1\u03bf\u03c6\u03af\u03bb \u03c3\u03b1\u03c2.");let n={remittanceInfo:this.response.remittanceInfo,amount:this.response.ypoloipoProsPliromi},s={relatedCallbackUrl:AppConfOptions.application_url+"/tautotita-ofeilis/debits",paymentMethodKey:e.key,kodikosDias:this.response.remittanceInfo,entries:[]};"PIRBGRAA"===e.key&&(s.billingAddressCountryCode=null),this.isAuthorized&&this.user&&!(0,o.w1)(this.user.email)&&this.response?(n.debtorName=this.user.family_name+" "+this.user.fathers_name+" "+this.user.mothers_name+" "+this.user.name,n.tin=this.user.tin,s.tinRelated=this.user.tin,s.billingAddressCity=this.user.address_city,s.billingAddressCountryCode=this.user.address_country_code,s.billingAddressZip=this.user.address_zip,s.billingAddress=this.user.address,s.userEmail=this.user.email,s.userPhone=this.user.phone_number):!this.isAuthorized&&this.response&&AppConfOptions.unauthorized_allowed&&(s.billingAddress=this.unAuthorizedAddress,s.billingAddressZip=this.unAuthorizedTk,s.billingAddressCity=this.unAuthorizedPoli,s.billingAddressCountryCode=this.unAuthorizedCountryId),s.entries.push(n),this.paymentRequestDto=s,this.tautotitaOfeilisSrv.addPaymentRequestKodikouPliromis(this.paymentRequestDto).subscribe(a=>{a&&a.statusCode==o.oZ.Ok?(this.paymentResponseDto=a.model,this.onDoPaymentSubject.next(this.paymentResponseDto)):(this.toasterSrv.showError("",a.message),this.errorMessage=a.message)})}onClear(){this.isFormSubmitted=!1,this.request={},this.response=null,this.errorMessage=null,(0,o.Er)(this.cdr)}static#t=this.\u0275fac=function(n){return new(n||i)(t.GI1(A.Bf),t.GI1(o.U5),t.GI1(S),t.GI1(o.q4),t.GI1(o.y6),t.GI1(E.i),t.GI1(t.kD9),t.GI1(d.gV))};static#e=this.\u0275cmp=t.In1({type:i,selectors:[["app-tautotita-ofeilis-debits"]],viewQuery:function(n,s){if(1&n&&t.CC$(Y,5),2&n){let a;t.wto(a=t.Gqi())&&(s.tautotitaOfeilisForm=a.first)}},inputs:{isAuthorized:"isAuthorized"},decls:3,vars:4,consts:[[3,"condition","customClass"],[4,"ngIf"],[3,"severity","text","styleClass",4,"ngIf"],["severity","danger",3,"text","styleClass",4,"ngIf"],[1,"form"],["tautotitaOfeilisForm","ngForm"],[1,"row"],[1,"form-group","col-12"],["for","paymentCode"],["name","paymentCode","type","text","required","",1,"form-control",3,"placeholder","ngModel","disabled","ngModelChange"],[1,"validation-msg","text-danger","pt-1",3,"hidden"],[1,"d-flex","align-items-center","justify-content-center","flex-wrap"],["type","button",1,"btn","btn-primary","me-1",3,"disabled","click"],["aria-hidden","true",1,"fas","fa-search","fa-fw"],["type","button",1,"btn","btn-warning","text-white",3,"click"],["aria-hidden","true",1,"fas","fa-times","fa-fw"],["severity","error",3,"styleClass","escape","text",4,"ngIf"],[3,"severity","text","styleClass"],["severity","danger",3,"text","styleClass"],["severity","error",3,"styleClass","escape","text"],["tautotitaOfeilisExtraInfoForm","ngForm"],["class","row",4,"ngIf"],[1,"mt-4","text-center"],[1,"debits-info","d-flex","justify-content-between"],[1,"debits-info_left","d-flex","me-1"],["class","mb-0",4,"ngIf"],[3,"isPaymentFormValid","doPaymentSubscription","govPaymentGatewayApiUrl","buttonText","cancelButtonText","payBtnClick"],[1,"col-12","col-md-9"],["for","address"],["name","address","type","text","required","",1,"form-control",3,"placeholder","ngModel","ngModelChange"],[1,"col-12","col-md-3"],["for","tk"],["name","tk","type","text","required","",1,"form-control",3,"placeholder","ngModel","ngModelChange"],[1,"col-12","col-md-6"],["for","poli"],["name","poli","type","text","required","",1,"form-control",3,"placeholder","ngModel","ngModelChange"],[1,"form-group","col-12","col-md-6"],["name","egsCountry","bindLabel","Perigrafi","bindValue","Id","required","",1,"ontop-select",3,"appendTo","virtualScroll","searchable","items","ngModel","ngModelChange"],[1,"mb-0"],[1,"me-1",2,"width","220px","line-height","1.7"],[1,"totalPoso",2,"line-height","1.7"]],template:function(n,s){1&n&&(t.wR5(0,"eg-loading",0),t.yuY(1,V,25,22,"ng-container",1)(2,Z,21,17,"ng-container",1)),2&n&&(t.E7m("condition",s.isLoadingInit||s.isLoading)("customClass","egr-load-small"),t.yG2(),t.E7m("ngIf",!s.isLoadingInit),t.yG2(),t.E7m("ngIf",s.response&&!s.isLoading))},dependencies:[c.u_,l.sz,l.ot,l.ue,l.u,l.eJ,l._G,l.SC,o.CG,B.UT,o.uU,k.S,c.cf,b.sD],encapsulation:2,changeDetection:0})}return i})();var W=r(2656);function tt(i,u){if(1&i&&t.wR5(0,"p-message",4),2&i){const e=t.GaO(2);t.E7m("text",null==e.translation?null:e.translation.egwebapps.egwebappsLoginMesg)}}function et(i,u){if(1&i&&(t.I0R(0,"p-panel",8),t.wR5(1,"div",9),t.wVc(2,"decodeHtmlString"),t.C$Y()),2&i){const e=t.GaO(3);t.E7m("header",null==e.translation?null:e.translation.egwebapps.information)("styleClass","tab-msg mb-3")("toggleable",!0),t.yG2(),t.E7m("innerHTML",t.kDX(2,4,e.tabMsg),t.E3n)}}function it(i,u){if(1&i&&(t.SAx(0),t.yuY(1,et,3,6,"p-panel",5),t.I0R(2,"div",6),t.wR5(3,"app-tautotita-ofeilis-debits",7),t.C$Y(),t.k70()),2&i){const e=t.GaO(2);t.yG2(),t.E7m("ngIf",e.tabMsg),t.yG2(2),t.E7m("isAuthorized",e.isAuthorized)}}function st(i,u){if(1&i&&(t.SAx(0),t.yuY(1,tt,1,1,"p-message",3)(2,it,4,2,"ng-container",2),t.k70()),2&i){const e=t.GaO();t.yG2(),t.E7m("ngIf",!e.isAuthorized&&!e.isUnauthorizedAllowed),t.yG2(),t.E7m("ngIf",!e.afmNotFound)}}const nt=[{path:"",component:(()=>{class i{constructor(e,n,s,a,y,C){this.oidcSecuritySrv=e,this.appCacheSrv=n,this.location=s,this.cdr=a,this.router=y,this.route=C,this.onDestroy=new h.E,this.isLoading=!1,this.afmNotFound=!1,this.index=0,this.isUnauthorizedAllowed=AppConfOptions.unauthorized_allowed,this.selectedLang="el"}ngOnInit(){(0,m.E)([this.appCacheSrv.translation$,this.appCacheSrv.selectedLang$]).pipe((0,p.a)(this.onDestroy)).subscribe(e=>{e&&(this.translation=e[0],this.selectedLang=e[1],this.selectedLang&&(1==AppConfOptions.multilingual&&"el"!=this.selectedLang&&AppConfOptions.eidopoiitiria_tab_info_en&&""!=AppConfOptions.eidopoiitiria_tab_info_en?this.tabMsg=AppConfOptions.eidopoiitiria_tab_info_en:AppConfOptions.eidopoiitiria_tab_info&&""!=AppConfOptions.eidopoiitiria_tab_info&&"el"==this.selectedLang&&(this.tabMsg=AppConfOptions.eidopoiitiria_tab_info)),(0,o.Er)(this.cdr))}),this.isLoading=!0,(0,o.Er)(this.cdr),this.oidcSecuritySrv.isAuthenticated$.pipe((0,O.G)(e=>(this.isAuthorized=null!=e&&e.isAuthenticated,this.appCacheSrv.user$)),(0,p.a)(this.onDestroy)).subscribe(e=>{this.afmNotFound=!1,(0,o.Er)(this.cdr),e&&(0,o.w1)(e.tin)&&AppConfOptions.eidopoiitiria_afm_required&&(this.afmNotFound=!0),this.isLoading=!1,(0,o.Er)(this.cdr)}),this.index="receipts"===this.route.children[0].snapshot.url[0].path?1:0,(0,o.Er)(this.cdr)}ngOnDestroy(){this.onDestroy.next(null)}onTabChanged(e){this.router.navigate(0==e.index?["./debits"]:["./receipts"],{relativeTo:this.route})}static#t=this.\u0275fac=function(n){return new(n||i)(t.GI1(A.Bf),t.GI1(E.i),t.GI1(c.oB),t.GI1(t.kD9),t.GI1(d.E5),t.GI1(d.gV))};static#e=this.\u0275cmp=t.In1({type:i,selectors:[["app-tautotita-ofeilis-layout"]],decls:4,vars:4,consts:[[1,"module-title"],[3,"condition","customClass"],[4,"ngIf"],["severity","warn",3,"text",4,"ngIf"],["severity","warn",3,"text"],[3,"header","styleClass","toggleable",4,"ngIf"],[1,"bg-white","p-2"],[3,"isAuthorized"],[3,"header","styleClass","toggleable"],[3,"innerHTML"]],template:function(n,s){1&n&&(t.I0R(0,"h3",0),t.OEk(1),t.C$Y(),t.wR5(2,"eg-loading",1),t.yuY(3,st,3,2,"ng-container",2)),2&n&&(t.yG2(),t.cNF(null==s.translation?null:s.translation.menu.eidopoiitiriaMenuItem),t.yG2(),t.E7m("condition",s.isLoading)("customClass","egr-load-small"),t.yG2(),t.E7m("ngIf",!s.isLoading))},dependencies:[c.u_,o.uU,k.S,D.s,f,W.m],encapsulation:2,changeDetection:0})}return i})(),children:[{path:"",pathMatch:"full",redirectTo:"debits"},{path:"debits",component:f},{path:"debits/:kodikos",component:f}]}];let ot=(()=>{class i{static#t=this.\u0275fac=function(n){return new(n||i)};static#e=this.\u0275mod=t.a4G({type:i});static#i=this.\u0275inj=t.s3X({imports:[d.qQ.forChild(nt),d.qQ]})}return i})(),at=(()=>{class i{static#t=this.\u0275fac=function(n){return new(n||i)};static#e=this.\u0275mod=t.a4G({type:i});static#i=this.\u0275inj=t.s3X({providers:[S,x.A],imports:[ot,R.k,w.IB,b.O0.forChild()]})}return i})()}}]);