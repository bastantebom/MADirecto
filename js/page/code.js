var Code = Code || {};


Code.initialize=function(){
  $('#code-table').DataTable();
};

Code.generate=function(){
   
    var ucode ="";
    var entries = new Array();
    var points  = $('#vehicle').val().split(",")[0];
    var code  = $('#vehicle').val().split(",")[1];
    var quantity = $('#quantity').val();
    
    //alert(code);
    
 $("body").spin("modal");   
 for(ctr=0;ctr<parseInt(quantity);ctr++){
   
   $.ajax({
     url:'count',
     type:'POST',
     async: false,
     data: {'code':code},			
     success:function(currentCount){	
       $.ajax({
       url:'uniqueCode',
       type:'POST',
       async: false,
       success:function(ucode){	
         var entry =  new Object();
         entry.userCode = "MA-"+ code + "-" + ucode;
         entry.unitCode = code;
            //entry.userCode = "MA-"+ code + "-" + ucode;
         if(currentCount==0){
           entry.status = "Active";
         }else{
           entry.status = "Inactive";
         }
         entry.entryNumber = parseInt(currentCount) + 1 ;
         entry.points = 0;
         entry.bonus = 0;
         entry.graduation = (entry.entryNumber * parseInt(points));
         entry = JSON.stringify(entry);
         //entries.push(entry);
          $.ajax({ 
          url:'save',
          type:'POST',
          async: false,
          data: {'entries':entry},			
          success:function(tosave){	
             
          },
          error:function(data){
    
          }
          });  
       },
       error:function(data){
	    //alert(data);
       }
       });
      
      },
      error:function(data){
       
      }
      
    });
  }
   $("body").spin("modal");
   window.location.reload();
 //console.log(entries);
};    

$(document).ready(function(){
  Code.initialize();	
});
