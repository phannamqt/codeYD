<style>
	body {
		margin-top: 20px;
		text-align: center;
		font-size: 14px;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		}
		
	#loading {
		position: absolute;
		top: 5px;
		right: 5px;
		}

	#calendar {
		width: 900px;
		margin: 0 auto;	 
		}

</style>
<body>
<div id='loading' style='display:none'>loading...</div>
<div id='calendar'></div>
 
</body>
</html>
<?php
if(!isset($_GET["params"])){
    $d = new DateTime( date('Y-m-01') );  
	$params=date('Y-m-01')."_".$d->format( 'Y-m-t' )."_".$_SESSION["user"]["id_user"];	
}else{
	$params=$_GET["params"];
}
	$params=explode("_",$params); 
	$from=$params[0];
	$to=$params[1];
	$idnhanvien=$params[2];
	$tam=explode("-",$params[0]);
	$tam1= " year: $tam[0],\n
			 month: ".($tam[1]-1).",\n
			 date: $tam[2],\n	";

?>
<script>
	$(document).ready(function() {	
		$('#calendar').fullCalendar({
			<?=$tam1?>	 
			theme: true,
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			editable: false,			
			//events: "json-events.php",
			events: 'pages.php?module=<?=$modules?>&view=<?=$view?>&action=data_lich&idnhanvien=<?=$idnhanvien?>',
			
			eventDrop: function(event, delta) {
				alert(event.title + ' was moved ' + delta + ' days\n' +
					'(should probably update your database)');
			},
			
			loading: function(bool) {
				if (bool) $('#loading').show();
				else $('#loading').hide();
			}
			
		});
		//alert($("#calendar").height())
		$('#calendar').fullCalendar('option', 'height', $(window).height()-120);
		$('#calendar').fullCalendar('option', 'width', $(window).width());
		$(".fc-button-agendaWeek,.fc-button-agendaDay").click(function() {		 
		  $('#calendar').fullCalendar('option', 'height', $(window).height()-20);
		});
		$(".fc-button-month").click(function() {		 
		  $('#calendar').fullCalendar('option', 'height', $(window).height()-120);
		}); 
		 
		
		$(window).resize(function() {			 
		   $('#calendar').fullCalendar('option', 'height', $(window).height()-20);
		   $('#calendar').fullCalendar('option', 'width', $(window).width());
		}); 		
	}); 

</script>


