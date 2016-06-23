(function($, owner) {
	var BASE_URL='http://192.168.25.81/wuyuan-tech110/';
	//var BASE_URL='http://192.168.3.34/wuyuan-tech110/';
	owner.project_url = BASE_URL;
	//owner.project_url = '';
	owner.tokencheck_url=BASE_URL+'server/tokenpass.php';
	owner.login_url=BASE_URL+'server/gettoken.php';
	owner.changePwd_url=BASE_URL+'updateWorkerInfo.do';
	owner.avatarupload_url=BASE_URL+'addAvatar.do';
	owner.avatar_url=BASE_URL+'getAvatarajax.do';
	
	owner.getstudylist_url=BASE_URL+'server/getstudylist.php';
	owner.getstudydetail_url=BASE_URL+'server/getstudydetail.php';
	
	owner.getproductlist_url=BASE_URL+'server/getproductlist.php';
	owner.getproductdetail_url=BASE_URL+'server/getproductdetail.php';
	owner.saveproductdetail_url=BASE_URL+'server/getproductdetail.php';
	
	owner.getdislist_url=BASE_URL+'server/getdislist.php';
	owner.getdisdetail_url=BASE_URL+'server/getdisdetail.php';
	owner.savedisdetail_url=BASE_URL+'server/getdisdetail.php';
	
	owner.getcaplist_url=BASE_URL+'server/getcaplist.php';
	owner.getcapdetail_url=BASE_URL+'server/getcapdetail.php';
	owner.savecapdetail_url=BASE_URL+'server/getcapdetail.php';
	
	owner.getbrelist_url=BASE_URL+'server/getbrelist.php';
	owner.getbredetail_url=BASE_URL+'server/getbredetail.php';
	owner.savebredetail_url=BASE_URL+'server/getbredetail.php';
	
	owner.getplalist_url=BASE_URL+'server/getplalist.php';
	owner.getpladetail_url=BASE_URL+'server/getpladetail.php';
	owner.savepladetail_url=BASE_URL+'server/getpladetail.php';
	
	owner.getteglist_url=BASE_URL+'server/getteglist.php';
	owner.delteg_url=BASE_URL+'server/getteglist.php';
	owner.gettegdetail_url=BASE_URL+'server/gettegdetail.php';
	owner.savetegdetail_url=BASE_URL+'server/gettegdetail.php';
	
	owner.getteqalist_url=BASE_URL+'server/getteqalist.php';
	owner.delteqa_url=BASE_URL+'server/getteqalist.php';
	owner.getteqadetail_url=BASE_URL+'server/getteqadetail.php';
	owner.saveteqadetail_url=BASE_URL+'server/getteqadetail.php';

	owner.filedownload_url='';
	owner.fileupload_url='';
	
	/**
	 * 本地验证登录信息
	 **/
	owner.validateLogin = function(loginInfo, callback) {
		callback = callback || $.noop;
		loginInfo = loginInfo || {};
		loginInfo.account = loginInfo.account || '';
		loginInfo.password = loginInfo.password || '';
		/* 这里开始检查用户名密码  */
		if (loginInfo.account.length == 0) {
			return callback(errorCode.EMPTY_USERNAME);
		}
		if (loginInfo.password.length == 0) {
			return callback(errorCode.EMPTY_PASSWORD);
		}
		return callback("");
	};
	
	owner.getAttributeValue = function(id, attribute){
		var ele = document.getElementById(id);
		if (ele)
			return ele.getAttribute(attribute);
		else
			return '';
	};
	
	owner.getValue = function(id){
		var ele=document.getElementById(id);
		if(ele)
			return ele.value;
		else
			return '';
	};
	
	owner.getTextByCode = function(data, code, seperator){
		if(!seperator)
			seperator='';
		return textFromCode(data, code, seperator);
	}
	
	function textFromCode(data, code, seperator){
		var text='';
		for(var i=0;i<data.length;i++){
			if(code.indexOf(data[i].value)>=0){
				text=data[i].text;
				if(data[i].children)
					text+=(seperator+textFromCode(data[i].children,code,seperator));
				break;
			}
		}
		return text;
	}
	
	owner.setAttributeValue = function(id, attribute, value){
		var ele=document.getElementById(id);
		if(ele)
			ele.setAttribute(attribute,value);
	};
	
	owner.setValue = function(id, value){
		var ele=document.getElementById(id);
		if(ele)
			ele.value=value;
	};
	
	owner.getValueByText = function(data, text){
		for (var i=0;i<data.length;i++) {
			if(data[i].text==text)
				return data[i].value;
		}
		return "";
	};
	
	owner.getTextByValue = function(data, value){
		for (var i=0;i<data.length;i++) {
			if(data[i].value==value)
				return data[i].text;
		}
		return "";
	};
	
	owner.setText = function(query, text){
		var ele=document.querySelector(query);
		if(ele)
			ele.innerText=text;
	};
	
	owner.setHTML = function(query, html){
		var ele=document.querySelector(query);
		if(ele)
			ele.innerHTML=html;
	};

	owner.setElementVisiablity = function(query, visiable){
		var ele=document.querySelector(query);
		if(ele)
			ele.style.display=visiable?'':'none';
	};
	
	owner.removeAttribute = function(id, attribute){
		var ele=document.getElementById(id);
		if(ele.hasAttribute(attribute))
			ele.removeAttribute(attribute);
	};
	
	owner.toWindow = function(windowId, preAction , afterAction) {
		preAction = preAction || $.noop;
		afterAction = afterAction || $.noop;
		preAction()
		setTimeout(function() {
			$.openWindow({
				id: windowId,
				show: {
					aniShow: 'pop-in'
				},
				waiting: {
					autoShow: false
				}
			});
			afterAction();
		}, 0);
	};
	
	
	owner.webQuery = function(func_url, params, onSuccess, onError, retry){
	    var onSuccess = arguments[2]?arguments[2]:function(){};
	    var onError = arguments[3]?arguments[3]:function(){};
	    var retry = arguments[4]?arguments[4]:3;
	    var request= $.ajax(func_url, {
	        data:params,
	        dataType:'json',
	        type:'post',
	        timeout:3000,
	        success:function(data){
	            if(data.err === 'ok'){
	                onSuccess(data);
	            }
	            else{
	                onError(data.code);
	            }
	        },
	        error:function(xhr,type,errorThrown){
	            retry--;
	            if(retry > 0) return owner.webQuery(func_url, params, onSuccess, onError, retry);
	            onError('FAILED_NETWORK');
	        }
	    });
	    return request;
	};
	
//	$.ready(function() {
//		$('body').on('click', 'a', function(e) {
//			e.preventDefault();
//		});
//	});

}(mui, window.app = {}));