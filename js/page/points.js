var Points = Points || {};


Points.initialize=function(){
   $('.topology-unit').qtip({
      content: {
         text: false // Use each elements title attribute
      },
      style: 'cream' // Give it some style
   });
};

Points.getDiagramAndPoints = function(){
    //alert($('.vehicle-list').val()) ;
    $('.diagram-wrapper').html("");
    $('.ep h4').html("");
    $('.bp h4').html("");
    $('.tp h4').html("");
    var name="";
    var diagram="";
    $.ajax({ 
     url:'getListDiagram',
     type:'POST',
     data: {'vehicleCode':$('.vehicle-list').val()},			
     success:function(entryObj){	
       entryObj = $.parseJSON(entryObj);
       //console.log(entryObj);
       
        $.each(entryObj, function(idx,entry) {
            //console.log(idx);
            if(idx==0){
              $('.ep h4').html(entry.points);
              $('.bp h4').html(entry.bonus);
              $('.tp h4').html(parseInt(entry.points) + parseInt(entry.bonus));
            }
            
            if(entry.userId==$('#points-user-id').val()){
                name = "You";
            }else {
                name = entry.userId
            }
            diagram = "<div class='topology-unit col-md-1 col-md-offset-6 row' title='"+entry.userCode+"' >"+
                          "<div class='col-md-12'><span class='fa fa-user fa-2x'></span></div>"+
                          "<div class='col-md-12 topo-name'>"+name+"</div>"+
                          "</div><div class='col-md-1 col-md-offset-6 row diag-line'><div class='f-line'></div></div>";
                      
            $('.diagram-wrapper').append(diagram);          
        });
     },
     error:function(entryObj){
        alert("Error");
     }
   });  
};

$(document).ready(function(){
    Points.initialize();
	
});
