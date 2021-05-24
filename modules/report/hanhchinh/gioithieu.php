<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<style>
.items{
	display:inline;
	width:330px;
		height:238px;
	border:1px solid #ccc;
	margin:1px;
	float:left;
	background: url("images/GGT.jpg") ;
	background-size: 100% 100%;
    background-repeat: no-repeat;
	position:relative;
}
.showid{
    bottom: 2px;
    position: absolute;
    margin-right: 5px;
    font-family: airal;
    font-style: italic;
    font-size: 16px;
    font-weight: normal;
    right: 2px;
}
body{
	margin-left:20px;
}
@media print {
	.items{
		display:inline;
		width:333px;
		height:240px;
		border:1px solid #ccc;
		margin:2px;
		float:left;
		background: url("images/GGT.jpg") ;
		background-size: 100% 100%;
		background-repeat: no-repeat;
	}
	.showid{
		bottom: 2px;
		position: absolute;
		margin-right: 5px;
		font-family: airal;
		font-style: italic;
		font-size: 16px;
		font-weight: normal;
		right: 2px;
}
html{
	padding-left:30px;
}
}
</style>
</head>
<body>

 <div class="items">
 <span class="showid"><?=$_GET['mabenhnhan']?></span>
 </div>
 
 <div class="items">
 <span class="showid"><?=$_GET['mabenhnhan']?></span>
 </div>
 
 <div class="items">
	<span class="showid"><?=$_GET['mabenhnhan']?></span>
 </div>
 
 <div class="items">
	<span class="showid"><?=$_GET['mabenhnhan']?></span>
 </div>
 
  <div class="items">
 <span class="showid"><?=$_GET['mabenhnhan']?></span>
 </div>
 
 <div class="items">
 <span class="showid"><?=$_GET['mabenhnhan']?></span>
 </div>
 
 <div class="items">
	<span class="showid"><?=$_GET['mabenhnhan']?></span>
 </div>
 
 <div class="items">
	<span class="showid"><?=$_GET['mabenhnhan']?></span>
 </div>

</body>
<script type="application/javascript">
$(document).ready(function() {

print_preview();
});

</script>
</html>
