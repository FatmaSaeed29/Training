// var myChart = new Chart("myChart", {
//     type: "line",
//     data: {},
//     options: {}
//   });
//   var xyValues = [
//     {x:50, y:7},
//     {x:60, y:8},
//     {x:70, y:8},
//     {x:80, y:9},
//     {x:90, y:9},
//     {x:100, y:9},
//     {x:110, y:10},
//     {x:120, y:11},
//     {x:130, y:14},
//     {x:140, y:14},
//     {x:150, y:15}
//   ];
  
//   new Chart("myChart", {
//     type: "scatter",
//     data: {
//       datasets: [{
//         pointRadius: 4,
//         pointBackgroundColor: "rgb(0,0,255)",
//         data: xyValues
//       }]
//     },
//     options: {
//       legend: {display: false},
//       scales: {
//         xAxes: [{ticks: {min: 40, max:160}}],
//         yAxes: [{ticks: {min: 6, max:16}}],
//       }
//     }
//   });

$(document).ready(function () {

	$("#repeatDivBtn").click(function () {

		$newid = $(this).data("increment");
		$repeatDiv = $("#repeatDiv").wrap('<div/>').parent().html();
		$('#repeatDiv').unwrap();
		$($repeatDiv).insertAfter($(".repeatDiv").last());
		$(".repeatDiv").last().attr('id',   "repeatDiv" + '_' + $newid);
		$("#repeatDiv" + '_' + $newid).append('<div class="input-group-append"><i class="far fa-times ml-2 mt-2 removeDivBtn" style="color:red; font-size:20px; cursor:pointer" data-id="repeatDiv'+'_'+ $newid+'"></i></div>');
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