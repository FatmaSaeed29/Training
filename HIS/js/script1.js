$(document).ready(function () { 
 
  $("#repeatDivBtn").click(function () { 
  
   $newid = $(this).data("increment"); 
   $repeatDiv = $("#repeatDiv").wrap('<div/>').parent().html(); 
   $('#repeatDiv').unwrap(); 
   $($repeatDiv).insertAfter($(".repeatDiv").last()); 
   $(".repeatDiv").last().attr('id',   "repeatDiv" + '_' + $newid); 
   $("#repeatDiv" + '_' + $newid).append('<div class="input-group-append"><i class="fas fa-times ml-2 mt-3 removeDivBtn"   data-id="repeatDiv'+'_'+ $newid+'"></i></div>'); 
   $newid++; 
   $(this).data("increment", $newid); 
  
  }); 
  
  
  $(document).on('click', '.removeDivBtn', function () { 
  
   $divId = $(this).data("id"); 
   $("#"+$divId).remove(); 
   $inc = $("#repeatDivBtn").data("increment"); 
   $("#repeatDivBtn").data("increment", $inc-1); 
  
  }); 
  
 });
 
