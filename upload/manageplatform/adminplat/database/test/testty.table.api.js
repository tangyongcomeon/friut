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
    var table=$("<table border=\"1\">");
    table.appendTo($("#"+tabName));
    //-----------------------生成表头信息开始4----------------------------
    var thead=$("<thead></thead>");
    var theadTr=$("<tr></tr>");
    var theadThFirst=$("<th class=\"no-sorting sorting_asc\" rowspan=\"1\" colspan=\"1\" aria-label=\"\" style=\"width: 27.0104px;\"><div class=\"cbr-replaced\"><div class=\"cbr-input\"><input type=\"checkbox\" class=\"cbr cbr-done\"></div><div class=\"cbr-state\"><span></span></div></div></th>");
    theadThFirst.appendTo(theadTr);
    var headAttrArray=[];
    var dataTabThead=dataArray['tabThead'];
     var theadTd=$("<td></td>");
    $.each(dataTabThead,function(key1,value1){
       headAttrArray.push(value1.name);
        var th=$("<th>"+value1.desc+"</th>");
        th.appendTo(theadTd);
        td.appendTo(theadTr);
    });
    theadTr.appendTo(thead);
    thead.appendTo(table);
    //-----------------------生成表头信息结束----------------------------

// var arr = [ "xml", "html", "css", "js" ];
// $.inArray("js", arr);  //返回 3,

    //-----------------------生成表体信息开始----------------------------
    var dataTabArray=dataArray['tabArray'];
    for(var i=0;i<dataTabArray.length;i++)
     {
        var tr=$("<tr></tr>");
        tr.appendTo(table);
        $.each(dataTabArray[i],function(key1,value1){
            alert(key1);
            console.log("---->:"+key1);
            if(!$.inArray(key1, headAttrArray)){
                break;
            }
            var td=$("<td>"+value1+"</td>");
            var tdcheckbox=$("<td class=\"sorting_1\"><div class=\"cbr-replaced\"><div class=\"cbr-input\"><input type=\"checkbox\" class=\"cbr cbr-done\"></div><div class=\"cbr-state\"><span></span></div></div></td>");
            tdcheckbox.appendTo(tr);
            td.appendTo(tr);
        });
     }
     tr.appendTo(table);
     $("#"+tabName).append("</table>");
     //-----------------------生成表体信息结束----------------------------
  }