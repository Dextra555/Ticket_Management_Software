var $async = (function(){
	function _get(obj) {
		obj.type = 'GET';
		_ajax(obj);
	};
	function _post(obj) {
		obj.type = 'POST';
		_ajax(obj);
	};
	function _put(obj) {
		obj.type = 'PUT';
		_ajax(obj);
	};
	function _delete(obj) {
		obj.type = 'DELETE';
		_ajax(obj);
	};

	var _ajax = function(obj) {
		obj.type = (obj.type).toUpperCase();
		var ajaxObj = {
			url: obj.url || '',
			type: obj.type,
			dataType: 'JSON',
			beforeSend: function() {
				console.log("## ASYNC BEFORE SEND");	
				$.type(obj.beforeSend) == "function" ? obj.beforeSend() : false;
			},
			success: function(res) {
				console.log("## ASYNC SUCCESS");
				if(res.status != undefined && res.status === 0) {
					console.log('## SESSION END');
					alert('Session End');
				} else {
					$.type(obj.success) == "function" ? obj.success(res) : false;
				}
			},
			error: function(err, ex) {
				console.log("## ASYNC ERROR");	
				console.log(err, ex);
				$.type(obj.error) == "function" ? obj.error(err, ex) : false;
			},
			complete: function(res) {
				console.log("## ASYNC COMPLETE");	
				$.type(obj.complete) == "function" ? obj.complete(res) : false;
			}
		};

		switch(obj.type) {
			case 'PUT':
			case 'DELETE':
				break;
			case 'GET':
			case 'POST':
				ajaxObj.data = (obj.data || ''); 
				break;
			default:
			 ajaxObj.type = 'GET';
			 break;
		}

		$.ajax(ajaxObj);
	};

	return {
		ajax: _ajax,
		get: _get,
		post: _post,
		put: _put,
		delete: _delete,
	};
})();