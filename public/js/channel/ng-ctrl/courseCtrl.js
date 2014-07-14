channelApp.controller('courseController',function($scope,$http,HTTP,$rootScope,$window,$timeout){
	$scope.course=[];
	$scope.start;
	$scope.item_per_page=4;
	$scope.alert=[];
	$scope.list=function()
	{
		$scope.$watch('currentPage',function(){
			var datas =	$.param({'currentPage':$scope.currentPage,'perPage':$scope.item_per_page});
			HTTP.postRequest('course/view',datas).then(function(response){
				$scope.course     =response.data;
				$scope.dataLength =response.length;
			});
		});

	};
	$scope.paginate=function()
	{
		$scope.currentPage=1;
		$scope.setPage=function(pageNo){
			$scope.currentPage=pageNo;
		};
		$scope.maxsize=10;
		$scope.bigTotalItems=100;
		$scope.bigCurrentPage=1;
	};
	$scope.delete=function(cid)
	{
		var cId=$.param({'cId':cid});
		HTTP.postRequest('course/delete',cId)
			.success(function(response){
				if(response.error=='N')
					$scope.alert.push({type:'success',msg:'Deleted successfully'});
					$scope.list();
					$timeout(function() {
						$scope.alert.pop();
					}, 2000);
					
				});
			
	};
	$scope.activate=function(cid)
	{
		var cId=$.param({'cId':cid});
		HTTP.postRequest('course/activate',cId).then(function(response){

		});
	};

});