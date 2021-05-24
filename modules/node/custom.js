module.exports = {
	formatDateBHYT(date) {
		if(date === null){
			return '';
		}else{
			var d = date;
			var _userOffset = d.getTimezoneOffset()*60000;
			d=new Date(d.getTime()+_userOffset);
			month = '' + (d.getMonth() + 1);
			day = '' + d.getDate();
			year = d.getFullYear();
			if (month.length < 2) month = '0' + month;
			if (day.length < 2) day = '0' + day;
			return [year, month, day].join('');
		}
	},
	formatDatehour(date) {
		if(date === null){
			return '';
		}else{
			var d = date;
			var _userOffset = d.getTimezoneOffset()*60000;
			d=new Date(d.getTime()+_userOffset);
			month = '' + (d.getMonth() + 1);
			day = '' + d.getDate();
			year = d.getFullYear();
			Hour = '' + d.getHours();
			Minute = '' + d.getMinutes();
			if (month.length < 2) month = '0' + month;
			if (day.length < 2) day = '0' + day;
			if (Hour.length < 2) Hour = '0' + Hour;
			if (Minute.length < 2) Minute = '0' + Minute;		
			return [year, month, day , Hour ,Minute].join('');
		}
	},
	formatTimezoneOffset(date) {
		if(date === null){
			return '';
		}else{
			var d = date;
			var _userOffset = d.getTimezoneOffset()*60000;
			d=new Date(d.getTime()+_userOffset);		
			return d;
		}
	},
	formatDate: function (date) {
		if(date === null){
			return '';
		}else{
			var d = date;
			var _userOffset = d.getTimezoneOffset()*60000;
			d=new Date(d.getTime()+_userOffset);
			month = '' + (d.getMonth() + 1);
			day = '' + d.getDate();
			year = d.getFullYear().toString().substr(-2);
			if (month.length < 2) month = '0' + month;
			if (day.length < 2) day = '0' + day;
			return [day, month, year].join('/');
		}		

		
	},
	formatHour: function (date) {
		if(date === null){
			return '';
		}else{
			var d = date;
			var _userOffset = d.getTimezoneOffset()*60000;
			d=new Date(d.getTime()+_userOffset);
			month = '' + (d.getMonth() + 1);
			day = '' + d.getDate();
			year = d.getFullYear();
			Hour = '' + d.getHours();
			Minute = '' + d.getMinutes();
			if (month.length < 2) month = '0' + month;
			if (day.length < 2) day = '0' + day;
			if (Hour.length < 2) Hour = '0' + Hour;
			if (Minute.length < 2) Minute = '0' + Minute;		
			return [Hour ,Minute].join(':')
		}
	},
	formatDatetime: function (date) {
		if(date === null){
			return '';
		}else{
			var d = date;
			var _userOffset = d.getTimezoneOffset()*60000;
			d=new Date(d.getTime()+_userOffset);
			month = '' + (d.getMonth() + 1);
			day = '' + d.getDate();
			year = d.getFullYear().toString().substr(-2);
			Hour = '' + d.getHours();
			Minute = '' + d.getMinutes();
			if (month.length < 2) month = '0' + month;
			if (day.length < 2) day = '0' + day;
			if (Hour.length < 2) Hour = '0' + Hour;
			if (Minute.length < 2) Minute = '0' + Minute;		
			return [Hour ,Minute].join(':')+' '+[day, month, year].join('/');
		}		
	},
	config : {
		user: 'qlbv',
		password: 'qlbv@123',
		server: '192.168.1.5',
		database: 'MedSmart',    
		options: {
			encrypt: false
		}
	},
	config1 : {
		user: 'qlbv',
		password: 'qlbv@123',
		server: '192.168.1.5',
		database: 'MedSmart',  
		requestTimeout: 300000,  
		pool: {
			max: 5,
			min: 0,
			idleTimeoutMillis: 100000
		},
		options: {
			encrypt: false
		}
	}
};