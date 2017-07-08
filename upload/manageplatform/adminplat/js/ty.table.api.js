/*
var ss={
            "tabThead":[
            {"desc":"分类名称","width":"","name":"cate_name"},
            {"desc":"商品数量","width":"","name":"cate_sum"},
            {"desc":"数量单位","width":"","name":"cate_unit"},
            {"desc":"操作","width":"","name":"cate_show"}
            ],
            "tabArray":[
               {
                 "id":"1","subscription_id":"123456",
                 "cate_name":"\u98df\u54c1","cate_sum":"3",
                 "cate_unit":"\u4e2a","cate_nav":"1","cate_show":"1",
                 "cate_price_level":"0","cate_sort":"1"
               }
            ]
            }
    CreateTable('createtable',ss);
*/

function CreateTable(tabName,dataArray)
   { 
    var table=$("<table class=\"table table-bordered table-striped dataTable no-footer\" id=\"example-2\" role=\"grid\" aria-describedby=\"example-2_info\">");
    table.appendTo($("#"+tabName));
    //-----------------------生成表头信息开始4----------------------------
    var thead=$("<thead></thead>");
    var theadTr=$("<tr></tr>");
    var theadThFirst=$("<th class=\"no-sorting sorting_asc\" rowspan=\"1\" colspan=\"1\" aria-label=\"\" style=\"width: 27.0104px;\"><div class=\"cbr-replaced\"><div class=\"cbr-input\"><input type=\"checkbox\" class=\"cbr cbr-done\"></div><div class=\"cbr-state\"><span></span></div></div></th>");
    theadThFirst.appendTo(theadTr);
    var headAttrArray=[];
    var dataTabThead=dataArray['tabThead'];
     var theadTh=$("<th></th>");
    $.each(dataTabThead,function(key1,value1){
       headAttrArray.push(value1.name);
        var th=$("<th>"+value1.desc+"</th>");
        th.addClass("sorting");
        th.attr("tabindex","0");
        th.attr("aria-controls","example-2");
        th.attr("rowspan","1");
        th.attr("colspan","1");
        th.attr("aria-label","Student Name: activate to sort column ascending");
        th.attr({width:"248"});
        th.appendTo(theadTr);
    });
    theadTr.appendTo(thead);
    
    thead.appendTo(table);
    //-----------------------生成表头信息结束----------------------------
    
    
    var tbody=$("<tbody></tbody>");
    tbody.attr("id","trRowInfo");
    tbody.addClass("middle-align");


// var arr = [ "xml", "html", "css", "js" ];
// $.inArray("js", arr);  //返回 3,

    //-----------------------生成表体信息开始----------------------------
    var dataTabArray=dataArray['tabArray'];
    for(var i=0;i<dataTabArray.length;i++)
     {
        var tr=$("<tr></tr>");

        tr.attr("role","row");
  
        if(i%2==0){
             tr.addClass("odd");
         }else{
             tr.addClass("even");
         }
       
        tr.appendTo(table);
        var tdcheckbox=$("<td class=\"sorting_1\"><div class=\"cbr-replaced\"><div class=\"cbr-input\"><input type=\"checkbox\" class=\"cbr cbr-done\"></div><div class=\"cbr-state\"><span></span></div></div></td>");
        tdcheckbox.appendTo(tr);
        $.each(dataTabArray[i],function(key1,value1){
            if($.inArray(key1, headAttrArray)>-1){
                var td=$("<td>"+value1+"</td>");
                td.appendTo(tr);
            }
        });
     }
     tr.appendTo(tbody);
     tbody.appendTo(table);
     $("#"+tabName).append("</table>");
     //-----------------------生成表体信息结束----------------------------
  }


/*
添加带操作属性的表

*/
function CreateTableAndAddOperation(tabName,dataArray)
  { 
  	var table=null;
  	if(null==table){
  		table=$("<table class=\"table table-bordered table-striped dataTable no-footer\" id=\"example-2\" role=\"grid\" aria-describedby=\"example-2_info\">");
  	}
    table.appendTo($("#"+tabName));
    //-----------------------生成表头信息开始4----------------------------
    var thead=$("<thead></thead>");
    var theadTr=$("<tr></tr>");
    var theadThFirst=$("<th class=\"no-sorting sorting_asc\" rowspan=\"1\" colspan=\"1\" aria-label=\"\" style=\"width: 27.0104px;\"><div class=\"cbr-replaced\"><div class=\"cbr-input\"><input type=\"checkbox\" class=\"cbr cbr-done\"></div><div class=\"cbr-state\"><span></span></div></div></th>");
    theadThFirst.appendTo(theadTr);
    var headAttrArray=[];
    var dataTabThead=dataArray['tabThead'];
     var theadTh=$("<th></th>");
    $.each(dataTabThead,function(key1,value1){
       headAttrArray.push(value1.name);
        var th=$("<th>"+value1.desc+"</th>");
        th.addClass("sorting");
        th.attr("tabindex","0");
        th.attr("aria-controls","example-2");
        th.attr("rowspan","1");
        th.attr("colspan","1");
        th.attr("aria-label","Student Name: activate to sort column ascending");
        th.attr({width:"248"});
        th.appendTo(theadTr);
    });
    theadTr.appendTo(thead);
    thead.appendTo(table);
    //-----------------------生成表头信息结束----------------------------
      //-----------------------生成表体信息开始----------------------------
    createTabBody(headAttrArray,table,tabName,dataArray);
     //-----------------------生成表体信息结束----------------------------
  }
  function createTabBody(headAttrArray,table,tabName,dataArray){
  	var tbody=$("<tbody></tbody>");
    tbody.attr("id","trRowInfo");
    tbody.addClass("middle-align");


// var arr = [ "xml", "html", "css", "js" ];
// $.inArray("js", arr);  //返回 3,

  
    var dataTabArray=dataArray['tabArray'];
    for(var i=0;i<dataTabArray.length;i++)
     {
        var tr=$("<tr></tr>");

        tr.attr("role","row");

        if(i%2==0){
             tr.addClass("odd");
         }else{
             tr.addClass("even");
         }
       
        tr.appendTo(table);
        var tdcheckbox=$("<td class=\"sorting_1\"><div class=\"cbr-replaced\"><div class=\"cbr-input\"><input type=\"checkbox\" class=\"cbr cbr-done\"></div><div class=\"cbr-state\"><span></span></div></div></td>");
        tdcheckbox.appendTo(tr);
        $.each(dataTabArray[i],function(key1,value1){
            if($.inArray(key1, headAttrArray)>-1){
                var td=$("<td>"+value1+"</td>");
                td.appendTo(tr);
            }
        });
        var operationTd=$("<td><a href=\"#\" onclick='cateEidtor(this);' class=\"btn btn-secondary btn-sm btn-icon icon-left\">编辑</a><a href=\"#\" onclick='cateDelete(this);' class=\"btn btn-danger btn-sm btn-icon icon-left\">删除</a><a href=\"#\"  onclick='cateInfo(this);' class=\"btn btn-info btn-sm btn-icon icon-left\">简介</a></td>");
        operationTd.appendTo(tr);
     }
     tr.appendTo(tbody);
     tbody.appendTo(table);
     $("#"+tabName).append("</table>");
  }
  function cateEidtor(data){
  	console.log(data);
  }
  function cateDelete(data){
  	jQuery('#modal-4').modal('show', {backdrop: 'fade'});
  }
  function cateInfo(data){
  	console.log(data);
  }


