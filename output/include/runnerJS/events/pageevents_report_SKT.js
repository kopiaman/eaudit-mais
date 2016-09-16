
Runner.pages.PageSettings.addPageEvent("report_SKT",Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='SEMUA';if(!pageObj.buttonEventBefore['SEMUA']){pageObj.buttonEventBefore['SEMUA']=function(params,ctrl,pageObj,proxy,pageid,rowData){}}
if(!pageObj.buttonEventAfter['SEMUA']){pageObj.buttonEventAfter['SEMUA']=function(result,ctrl,pageObj,proxy,pageid,rowData){var aYear=result['aYear'];var viewPlan="website/viewPlan.php?aYear="+aYear;window.open(viewPlan,"_blank");}}
$('a[id=SEMUA]').each(function(){if($(this).closest('tr.gridRowAdd').length){return;}
this.id="SEMUA"+"_"+Runner.genId();var button_SEMUA=new Runner.form.Button({id:this.id,btnName:"SEMUA"});button_SEMUA.init({args:[pageObj,proxy,pageid]});});});