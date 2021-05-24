// Convert numbers to words
// copyright 25th July 2006, by Stephen Chapman http://javascript.about.com
// permission to use this Javascript on your web page is granted
// provided that all of the code (including this copyright notice) is
// used exactly as shown (you can change the numbering system if you wish)
// American Numbering System
var th = ['', 'ngàn', 'triệu', 'tỷ', 'ngàn tỷ'];
// uncomment this line for English Number System
// var th = ['','thousand','million','milliard','billion'];

var dg = ['không', 'một', 'hai', 'ba', 'bốn', 'năm', 'sáu', 'bảy', 'tám', 'chín'];
var tn = ['mười', 'mười một', 'mười hai', 'mười ba', 'mười bốn', 'mười lăm', 'mười sáu', 'mười bảy', 'mười tám', 'mười chín'];
var tw = ['hai mươi', 'ba mươi', 'bốn mươi', 'năm mươi', 'sáu mươi', 'bảy mươi', 'tám mươi', 'chín mươi'];

/*function toWords(s) {
	if(s==0){
		return 'Không';
	}else{
	var cache_tw=false;//đánh dấu hàng chục
	var cache_dg=false;//đánh dấu hàng đơn vị
    s = s.replace(/[\, ]/g, '');
    if (s != parseFloat(s)) return 'not a number';
    var x = s.indexOf('.');
    if (x == -1) x = s.length;
    if (x > 15) return 'too big';
    var n = s.split('');
    var str = '';
    var sk = 0;
    for (var i = 0; i < x; i++) {
        if ((x - i) % 3 == 2) {
            if (n[i] == '1') {
                str += tn[Number(n[i + 1])] + ' ';
                i++;
                sk = 1;
            } else if (n[i] != 0) {
                str += tw[n[i] - 2] + ' ';
				cache_tw=true;
                sk = 1;
            }
        } else {
			if((cache_tw==true)&&dg[n[i]]=="một"){ 
				 str += "mốt" + ' ';
			}else if(n[i] !=0){
				if((cache_dg==true)&&dg[n[i]]!="không"){ 
           		 str += dg[n[i]] + ' ';
				}else{
				 str += dg[n[i]] + ' ';	
				}
			}
            if ((x - i) % 3 == 0 ) str += 'trăm ';
			cache_dg=true;
            sk = 1;
        }
        if ((x - i) % 3 == 1) {
            if (sk) str += th[(x - i - 1) / 3] + ' ';
            sk = 0;
        }
		if(i==0){
			str=str.charAt(0).toUpperCase() + str.slice(1);	//viết hoa chữ đầu tiên
		}
		
    }
    if (x != s.length) {
        var y = s.length;
        str += 'point ';
        for (var i = x + 1; i < y; i++) str += dg[n[i]] + ' ';
    }
    return str.replace(/\s+/g, ' ');
	}
}

*/

 function toWords(s){
	 if(s==0){
		return 'Không';
	}else if(s==1){
		return 'Một';
	}else if(s==5){
		return 'Năm';
	}
	
	
	else{
	 s = s.replace(/[\, ]/g,''); 
	 var cache_tw=false;
	 if (s != parseFloat(s)) return 'not a number'; 
	 var x = s.indexOf('.');
	 if (x == -1) x = s.length; 
	 if (x > 15) return 'too big';
	 var n = s.split(''); var str = '';
	 var sk = 0; 
	 for (var i=0; i < x; i++)
	 	 {if ((x-i)%3==2) {
			 if (n[i] == '1') {str += tn[Number(n[i+1])] + ' '; i++; sk=1;}
		     else if (n[i]!=0) {str += tw[n[i]-2] + ' ';cache_tw=true;;sk=1;}}
			 else if (n[i]!=0) {
				 
				 if(n[i]==1&&cache_tw==true){
				 str += 'một' +' ';
				 }else if(n[i]==5&&cache_tw==true){
					  str += 'năm' +' ';
				 }else {
					 str += dg[n[i]] +' ';
				 }
				 
				 
				  if ((x-i)%3==0) str += 'trăm ';sk=1;}
		  if ((x-i)%3==1) {if (sk) str += th[(x-i-1)/3] + ' ';sk=0;}
		  
		  
		   if(i==0){
			str=str.charAt(0).toUpperCase() + str.slice(1);	//viết hoa chữ đầu tiên
		   }
		  } 
		 
		  if (x != s.length) {var y = s.length; str += 'point '; 
		  for (var i=x+1; i<y; i++) str += dg[n[i]] +' ';} 
		  return str.replace(/\s+/g,' ');}
 }