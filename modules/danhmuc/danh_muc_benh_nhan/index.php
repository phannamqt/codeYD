<!--<link rel="stylesheet" href="../../../css/form_css.css" type="text/css" media="screen"/>-->
<body> 

	<input id="a" >
    <input id="b">
    <button id="c">aa</button>
</body>
</html> 

<script type="text/javascript">


function hex2a(hexx) {
    var hex = hexx.toString();//force conversion
    var str = '';
    for (var i = 0; i < hex.length; i += 2)
        str += String.fromCharCode(parseInt(hex.substr(i, 2), 16));
    return str;
}

function doMath(a) {

number = parseInt(a,16); 

number2 = parseInt(03,16); 

var powerv = eval(number) - eval(number2);



return Number(powerv).toString(16);

}

$('#c').click(function(){	
	tam=$('#a').val().split(" ");
	
	for (var i=1;i<tam.length-4;i++){
		tam[i]=doMath(tam[i]);
	}
	tam=tam.join("");		
	$('#b').val(tam);
	alert(hex2a(tam));
	
	
})

</script>