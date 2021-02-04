var apiGateway=apiGateway||{};apiGateway.core=apiGateway.core||{},apiGateway.core.sigV4ClientFactory={},apiGateway.core.sigV4ClientFactory.newClient=function(e){var t="AWS4-HMAC-SHA256",n="aws4_request";function r(e){return CryptoJS.SHA256(e)}function a(e){return e.toString(CryptoJS.enc.Hex)}function o(e,t){return CryptoJS.HmacSHA256(t,e,{asBytes:!0})}function i(e){if(Object.keys(e).length<1)return"";var t=[];for(var n in e)e.hasOwnProperty(n)&&t.push(n);t.sort();for(var r,a="",o=0;o<t.length;o++)a+=t[o]+"="+(r=e[t[o]],encodeURIComponent(r).replace(/[!'()*]/g,function(e){return"%"+e.charCodeAt(0).toString(16).toUpperCase()}))+"&";return a.substr(0,a.length-1)}function s(e){var t=[];for(var n in e)e.hasOwnProperty(n)&&t.push(n.toLowerCase());return t.sort(),t.join(";")}var c={};return void 0===e.accessKey||void 0===e.secretKey?c:(c.accessKey=apiGateway.core.utils.assertDefined(e.accessKey,"accessKey"),c.secretKey=apiGateway.core.utils.assertDefined(e.secretKey,"secretKey"),c.sessionToken=e.sessionToken,c.serviceName=apiGateway.core.utils.assertDefined(e.serviceName,"serviceName"),c.region=apiGateway.core.utils.assertDefined(e.region,"region"),c.endpoint=apiGateway.core.utils.assertDefined(e.endpoint,"endpoint"),c.makeRequest=function(u){var p=apiGateway.core.utils.assertDefined(u.verb,"verb"),y=apiGateway.core.utils.assertDefined(u.path,"path"),d=apiGateway.core.utils.copy(u.queryParams);void 0===d&&(d={});var v=apiGateway.core.utils.copy(u.headers);void 0===v&&(v={}),void 0===v["Content-Type"]&&(v["Content-Type"]=e.defaultContentType),void 0===v.Accept&&(v.Accept=e.defaultAcceptType);var f=apiGateway.core.utils.copy(u.body);""!==(f=void 0===f||"GET"===p?"":JSON.stringify(f))&&null!=f||delete v["Content-Type"];var l=(new Date).toISOString().replace(/\.\d{3}Z$/,"Z").replace(/[:\-]|\.\d{3}/g,"");v["x-amz-date"]=l;var w=document.createElement("a");w.href=c.endpoint,v.host=w.hostname;var h=a(r(function(e,t,n,o,c){return p+"\n"+encodeURI(y)+"\n"+i(n)+"\n"+function(e){var t="",n=[];for(var r in e)e.hasOwnProperty(r)&&n.push(r);n.sort();for(var a=0;a<n.length;a++)t+=n[a].toLowerCase()+":"+e[n[a]]+"\n";return t}(o)+"\n"+s(o)+"\n"+a(r(c))}(0,0,d,v,f))),C=function(e,t,r){return e.substr(0,8)+"/"+t+"/"+r+"/"+n}(l,c.region,c.serviceName),g=t+"\n"+l+"\n"+C+"\n"+h,G=function(e,t){return a(o(e,g))}(function(e,t,r,a){return o(o(o(o("AWS4"+e,t.substr(0,8)),r),a),n)}(c.secretKey,l,c.region,c.serviceName));v.Authorization=function(e,n,r,a){return t+" Credential="+e+"/"+C+", SignedHeaders="+s(v)+", Signature="+a}(c.accessKey,0,0,G),void 0!==c.sessionToken&&""!==c.sessionToken&&(v["x-amz-security-token"]=c.sessionToken),delete v.host;var m=e.endpoint+y,S=i(d);return""!=S&&(m+="?"+S),void 0===v["Content-Type"]&&(v["Content-Type"]=e.defaultContentType),axios({method:p,url:m,headers:v,data:f})},c)};