function goodsBrandCreatecommit(){
	var formInfo=getFormJson($("#goodsbrandform"));
			console.log(formInfo);
		var jsonParam={ data: formInfo, name: "saveBrand" };
		$.post("/upload/manageplatform/adminplat/database/dao/goods.dao.php",jsonParam,function(e){
			$("#testdiv").html(e);
			alert(e);
            console.log(e);
		} );
}
