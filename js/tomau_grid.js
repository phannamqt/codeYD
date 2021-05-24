/**
 * to mau jqgrid  Plugin
 * @version: 1.0
 * @author: Tran Truong Chinh, trantruongchinh@gmail.com
 * @licence: MIT
 * @desciption: 
 */
$.fn.tomau_grid = function (config) {
	var d = new Date();
	var curr_hour = d.getHours();
	var curr_minute = (d.getMinutes()<10?'0':'') + d.getMinutes(); //phút trả về 1 chữ số nếu bé hơn mười nên phải ghép 0 vào
	var curr_time = curr_hour + ":" + curr_minute+ " ";	
	var dd = d.getDate();
	var mm = d.getMonth()+1;//January is 0!`
	var yyyy = d.getFullYear();				 	  
	var defaults = {        
		_cols: [],	
		_condition: [], 
		_value: [],
		_class: [],
		_types: [],
		_all:[],
    };	
	this.config = $.extend({}, defaults, config || {}); //neu ko khai config se lay default	
	var _cols=this.config._cols;
	var _condition=this.config._condition; 
	var _value=this.config._value; 
	var _class=this.config._class; 
	var _types=this.config._types; 
	var _all=this.config._all;
	var grid=$(this);
	var  ids = grid.jqGrid('getDataIDs');	
	var chuoidich,chuoisosanh,i,ii,chuoisosanh1,chuoisosanh2,doituonggiogoc,hientai;
	for (i = 0; i < ids.length; i++) {
		 var rowData = grid.getRowData(ids[i]);
		 for (ii = 0; ii < _cols.length; ii++) {
			 if(_cols[ii]!="đặc biệt"){	
					if(_types[ii]=="chuỗi"){
						chuoidich=String(rowData[_cols[ii]]);
						chuoisosanh=String(_value[ii]);			
					}else if(_types[ii]=="số"){
						chuoidich= parseFloat(rowData[_cols[ii]].replace(",","."));
						if(_condition[ii]!="trong khoảng"){	
							chuoisosanh=parseFloat(_value[ii].replace(",","."));
						}else{
							chuoisosanh1=parseFloat(_value[ii][0].replace(",","."));
							chuoisosanh2=parseFloat(_value[ii][1].replace(",","."));				
						}		
					}else if(_types[ii]=="giờ"){						
						if((_condition[ii]!="trong khoảng")&&(_condition[ii]!="trong khoảng quy đổi")){	
							var giososanh=_value[ii].split(":");
							var giogoc=rowData[_cols[ii]].split(":");	
							var hientai=Date.today().set({
								millisecond: 0,
								second: 0,
								minute: parseInt(curr_minute),
								hour: parseInt(curr_hour),
								day: parseInt(dd),
								month: parseInt(mm)-1,
								year: parseInt(yyyy)
					 		});					 
							var doituonggiogoc=Date.today().set({
								millisecond: 0,
								second: 0,
								minute: parseInt(giogoc[1]),
								hour: parseInt(giogoc[0]),
								day: parseInt(dd),
								month: parseInt(mm)-1,
								year: parseInt(yyyy)
							});									  
							  hientai=hientai.addMinutes(parseInt(giososanh[1]));
							  hientai=hientai.addHours(parseInt(giososanh[0])).toString("MMMM dd, yyyy  H:mm:ss");
							  doituonggiogoc=doituonggiogoc.toString("MMMM dd, yyyy  H:mm:ss");	
							  chuoidich= new Date(doituonggiogoc); 
							  chuoisosanh= new Date(hientai); 							 					  		
						}else if(_condition[ii]=="trong khoảng"){
							var giososanh=_value[ii][0].split(":");
							var giososanh1=_value[ii][1].split(":");
							var giogoc=rowData[_cols[ii]].split(":");	
							var hientai1=Date.today().set({
								millisecond: 0,
								second: 0,
								minute: parseInt(giososanh1[1]),
								hour: parseInt(giososanh1[0]),
								day: parseInt(dd),
								month: parseInt(mm)-1,
								year: parseInt(yyyy)
					  		});	
							var hientai=Date.today().set({
								millisecond: 0,
								second: 0,
								minute: parseInt(giososanh[1]),
								hour: parseInt(giososanh[0]),
								day: parseInt(dd),
								month: parseInt(mm)-1,
								year: parseInt(yyyy)
					 		});					 
							var doituonggiogoc=Date.today().set({
								millisecond: 0,
								second: 0,
								minute: parseInt(giogoc[1]),
								hour: parseInt(giogoc[0]),
								day: parseInt(dd),
								month: parseInt(mm)-1,
								year: parseInt(yyyy)
							});							 
							  hientai1=hientai1.toString("MMMM dd, yyyy  H:mm:ss");					 
							  hientai=hientai.toString("MMMM dd, yyyy  H:mm:ss");
							  doituonggiogoc=doituonggiogoc.toString("MMMM dd, yyyy  H:mm:ss");	
							  chuoidich= new Date(doituonggiogoc); 
							  chuoisosanh1= new Date(hientai);  
							  chuoisosanh2= new Date(hientai1);													
						}else{
							var giososanh=_value[ii][0].split(":");
							var giososanh1=_value[ii][1].split(":");
							var giogoc=rowData[_cols[ii]].split(":");	
							var gioMin=Date.today().set({
								millisecond: 0,
								second: 0,
								minute: parseInt(giogoc[1]),
								hour: parseInt(giogoc[0]),
								day: parseInt(dd),
								month: parseInt(mm)-1,
								year: parseInt(yyyy)
					  		});	
							var gioMax=Date.today().set({
								millisecond: 0,
								second: 0,
								minute: parseInt(giogoc[1]),
								hour: parseInt(giogoc[0]),
								day: parseInt(dd),
								month: parseInt(mm)-1,
								year: parseInt(yyyy)
					 		});					 
							var hientai=Date.today().set({
								millisecond: 0,
								second: 0,
								minute: parseInt(curr_minute),
								hour: parseInt(curr_hour),
								day: parseInt(dd),
								month: parseInt(mm)-1,
								year: parseInt(yyyy)
							});				
							  gioMin=gioMin.addMinutes(parseInt(giososanh[1]));
							  gioMin=gioMin.addHours(parseInt(giososanh[0])).toString("MMMM dd, yyyy  H:mm:ss");			 
							  gioMax=gioMax.addMinutes(parseInt(giososanh1[1]));
							  gioMax=gioMax.addHours(parseInt(giososanh1[0])).toString("MMMM dd, yyyy  H:mm:ss");	
							  hientai=hientai.toString("MMMM dd, yyyy  H:mm:ss");	
							  chuoidich= new Date(hientai); 
							  chuoisosanh1= new Date(gioMin);  
							  chuoisosanh2= new Date(gioMax);		
							  		
						}
					}else if(_types[ii]=="ngày"){
						if(_condition[ii]!="trong khoảng"){							 
							var ngaysosanh=_value[ii].split(":");
							var ngaygoc=rowData[_cols[ii]].split("-");	
							var hientai=Date.today().set({
								millisecond: 0,
								second: 0,
								minute: 0,
								hour: 0,
								day: parseInt(dd),
								month: parseInt(mm)-1,
								year: parseInt(yyyy)
					 		});					 
							var doituongngaygoc=Date.today().set({
								millisecond: 0,
								second: 0,
								minute: 0,
								hour: 0,
								day: parseInt(ngaygoc[0]),
								month: parseInt(ngaygoc[1])-1,
								year: parseInt(ngaygoc[2])
							});							
							  doituongngaygoc=doituongngaygoc.add({days: parseInt(ngaysosanh[0]), months: parseInt(ngaysosanh[1]), years: 0}).toString("yyyy-MM-dd");
							 
							  hientai=hientai.toString("MMMM dd, yyyy  H:mm:ss");	
							  chuoidich= new Date(doituongngaygoc); 
							  chuoisosanh= new Date(hientai); 		
							  console.log(chuoidich + " < "+ chuoisosanh)					 					  		
						}else{
							var giososanh=_value[ii][0].split(":");
							var giososanh1=_value[ii][1].split(":");
							var giogoc=rowData[_cols[ii]].split(":");	
							var hientai1=Date.today().set({
								millisecond: 0,
								second: 0,
								minute: parseInt(giososanh1[1]),
								hour: parseInt(giososanh1[0]),
								day: parseInt(dd),
								month: parseInt(mm)-1,
								year: parseInt(yyyy)
					  		});	
							var hientai=Date.today().set({
								millisecond: 0,
								second: 0,
								minute: parseInt(giososanh[1]),
								hour: parseInt(giososanh[0]),
								day: parseInt(dd),
								month: parseInt(mm)-1,
								year: parseInt(yyyy)
					 		});					 
							var doituonggiogoc=Date.today().set({
								millisecond: 0,
								second: 0,
								minute: parseInt(giogoc[1]),
								hour: parseInt(giogoc[0]),
								day: parseInt(dd),
								month: parseInt(mm)-1,
								year: parseInt(yyyy)
							});							 
							  hientai1=hientai1.toString("MMMM dd, yyyy  H:mm:ss");					 
							  hientai=hientai.toString("MMMM dd, yyyy  H:mm:ss");
							  doituonggiogoc=doituonggiogoc.toString("MMMM dd, yyyy  H:mm:ss");	
							  chuoidich= new Date(doituonggiogoc); 
							  chuoisosanh1= new Date(hientai);  
							  chuoisosanh2= new Date(hientai1);													
						}
					}  
					
					
					
					if(_condition[ii]=="bằng"){					
						sosanhbang();
					}else if(_condition[ii]=="không bằng"){					
						sosanhkhongbang();
					}else if(_condition[ii]=="lớn hơn"){					
						lonhon();
					}else if(_condition[ii]=="bé hơn"){					
						behon()
					}else if(_condition[ii]=="lớn hơn hoặc bằng"){					
						lonhonhoacbang()
					}else if(_condition[ii]=="bé hơn hoặc bằng"){					
						behonhoacbang()
					}else if(_condition[ii]=="trong khoảng"){								
						trongkhoang();
					}else if(_condition[ii]=="bao gồm"){					
						baogom();
					}else if(_condition[ii]=="không bao gồm"){					
						khongbaogom()
					}else if(_condition[ii]=="trong khoảng quy đổi"){					
						trongkhoang();
					}
					
			 }else{			 
				 window[_condition[ii]](rowData,ids,i,grid);
			 }
			 
		 }
		 		
	}	
	function trongkhoang(){	
	console.log(chuoidich +'>='+ chuoisosanh1)	
	console.log(chuoidich +'<='+ chuoisosanh2)				 	 
	   if((chuoidich>=chuoisosanh1)&&(chuoidich<=chuoisosanh2)){		  
		  tomau();		   
	   }
	}
	function lonhonhoacbang(){			
	   if(chuoidich>=chuoisosanh){		  
		  tomau();		   
	   }
	}
	
	function behonhoacbang(){
		
	   if(chuoidich<=chuoisosanh){		  
		   tomau();		   
	   }
	}
	
	function lonhon(){			
	   if(chuoidich>chuoisosanh){		  
		   tomau(); 		   
	   }
	}
	function behon(){	
	//console.log(chuoidich +'<'+ chuoisosanh)		
	   if(chuoidich<chuoisosanh){		  
		   tomau();		   
	   }
	}
	
	
	
	function sosanhbang(){			
	   if(chuoidich==chuoisosanh){		  
		  tomau();  		   
	   }
	}
	function sosanhkobang(){			
	   if(chuoidich!=chuoisosanh){		  
		  tomau();  		   
	   }
	}
	
	function baogom(){			
	   if(chuoidich.match(chuoisosanh)!=null){  
		   tomau();  		   
	   }
	}
	function khongbaogom(){			
	   if(chuoidich.match(chuoisosanh)==null){  
		   tomau();		   
	   }
	}
	function tomau(){
		$( "tr#" + ids[i] + " td" ).removeClass(function() {		 
		   $( "tr#" + ids[i] + " td" ).removeClass( $( this ).prev().attr( "class" ));
		}); 	
		//$( "tr#" + ids[i] + " td" ).removeClass($( "tr#" + ids[i] + " td" ).attr("class")); 			
		if(_all[ii]=="true"){							   			   
				$("#"+ ids[i]).addClass(_class[ii]);
		  }else{			  
			   grid.setCell(ids[i], _cols[ii], '', _class[ii]); 
		}
		 
	}
	 
};$("#rowed3").tomau_grid({
				_cols:["GioHenKham","GioHenKham"],
				_condition:["bé hơn","trong khoảng quy đổi"],
				_value:["0:15",["0:00","0:10"]],
				_class:["quathoigian_max","quathoigian_min"],
				_types:["giờ","giờ"],
				_all:["false","false"],
			}) 		  