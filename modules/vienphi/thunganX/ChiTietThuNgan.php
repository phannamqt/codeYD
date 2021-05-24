
<?php
    if(isset($_GET["id_benhnhan"])){
        echo "<script type='text/javascript'>";
        echo "window.id_benhnhan=".$_GET["id_benhnhan"];
        echo "</script>";
        
    }else{
    if($_SESSION["ThongTinBenhNhan"]["ID"]==""){
        echo "<script type='text/javascript'>";
            echo "parent.postMessage('hosobenhnhantrong;' , '*')";
        
        echo "</script>";
        return;
    }else{
        echo "<script type='text/javascript'>";
        echo "window.id_benhnhan=".$_SESSION["ThongTinBenhNhan"]["ID"];
        echo "</script>";
    }
    }


    if(isset($_GET["id_kham"])){
        echo "<script type='text/javascript'>";
        echo "window.id_kham2=".$_GET["id_kham"];
        echo "</script>";
    }
    else{
        echo "<script type='text/javascript'>";
        echo "window.id_kham2=0";
        echo "</script>";
        }
?>
 
<style>
    #DM_template td  {	 
        word-wrap:normal!important;
        white-space:nowrap;
    }
    #DM_template_container{
        position:absolute;
        z-index:1000000;		 
        display:none;	
        box-shadow:0px 0px 6px #333;	 	
    }
    button#last,button#first,button#prev,button#next{
        font-size:7px!important;
        margin-top:-6px;
        /* padding-left:20px;*/

    }
    #open_template,#add_template{
        font-size:11px!important;
        margin-top:-3px;
        margin-left:-6px;

    }
    #open_template{		
        border-radius:0px!important;	
    }	 
    .ui-corner-all{		 
        border-radius:3px!important;		 
    }
    .fm-button{
        box-shadow:0px 0px 5px #383838;
        border:1px solid #919191;
    }  	
    .top_form{
        width:100%;
        height:139px;
        margin-top:3px;				
    }	 	 
    .thongtin_tongthe,.thongtin_chidinh,.thongtin_luotkham{
        display:inline-block;
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191;
        vertical-align:top;
        width:49%;		
    }
    .thongtin_chidinh{	 	 
        padding-bottom:4px;
        padding-top:4px;		
    }
    .thongtin_luotkham{
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191;
        display:inline-block;
        vertical-align:top;
        width:55%;
        overflow-y:none;
        margin-top:2px;
        height:67px;		 		
    }
    .thongtin_luotkham_scroll{
        overflow-y:scroll;
        width:100%;
        height:45px;
    }	 
    .canlamsang{
        vertical-align:top;
        overflow-y:scroll;
        height:76px;
        border-top:1px solid #919191;
        padding-top:2px;
        padding-left:2px;
        border-bottom:1px solid #919191;		 
    }	 
    .thongtin_luotkham div div{
        display:inline-block;
        box-shadow:0px 0px 10px #a0a0a0;
        border:1px solid #919191;
        font-size:11px;
        margin-left:2px;
        margin-top:2px;		 
        padding:2px;
        width:114px;
        height:30px;
        text-align:center;
        vertical-align:top;
        margin-bottom:2px;	
        text-shadow:0 1px 0 rgba(255, 255, 255, 0.6);		 
        vertical-align:text-bottom;
        cursor:pointer;
    }
    .navigator{
        display:inline-block;
        border:1px solid #327E04;
        padding-top:6px;
        margin-top:-4px;
        margin-left:2px;
        padding-bottom:2px;
        padding-left:2px;
        padding-right:1px; 
    }
    .navigator_title{
        display:inline-block;
        width:100px;
        text-align:center;
    }
    .ui-layout-mask {
        background:#FFF !important;
        opacity:.20 !important;
        filter:	alpha(opacity=20) !important;
    }
    #mota{
        font-size:13px!important;		 	 
    }
</style>
<body>

  

  
    
    

    <div id="panel_main">    

        <div class="ui-widget-content ui-layout-west">
           
        </div>         
 
    </div>
    
  
  
</body>
</html>
<script type="text/javascript">
    function create_layout() {
        //alert("")
        $('#panel_main').layout({
            resizerClass: 'ui-state-default'
                    , west: {
                maskContents: true
                        , resizable: true
                        , size: "35%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }

            }
            , center: {
                resizable: true
                        , size: "35%"
                        , resizerDblClickToggle: false


                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }
            }
            , east: {
                resizable: true
                        , size: "30%"
                        , resizerDblClickToggle: false


                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }
            }

        });



        $('#inner').layout({
            resizerClass: 'ui-state-default'
                    , north: {
                resizable: true
                        , size: "30%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }

            }
            , center: {
                resizable: true
                        , size: "40%"
                        , resizerDblClickToggle: false


                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }
            }
            , south: {
                resizable: true
                        , size: "30%"
                        , resizerDblClickToggle: false
                        , onresize_end: function() {
                    resize_control();
                }
                , onopen_end: function() {

                }
                , onclose_end: function() {

                }

            }
        });

    }

</script>


