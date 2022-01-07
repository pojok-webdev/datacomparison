$.fn.stairUp = function(options){
	var settings = $.extend({
		level:1
	},options);
	out=$(this);
	for(i=0;i<settings.level;i++){
		out=out.parent();
	}
	return out;
}
createLog = obj => {
	$.ajax({
		url:'/processors/create',
		data:{
			tableName:'app_logs',
			keyvals:{
				user:'puji',
				subject:obj.subject,
				description:obj.description
			}
		},type:'post',dataType:'json'
	})
	.done(res=>{
		console.log('Success write log',res)
	})
	.fail(err=>{
		console.log('Fail write log',err)
	})
}
