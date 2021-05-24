module.exports = {
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
		user: 'cc',
		password: 'Ehe@lth',
		server: '192.168.1.105',
		database: 'ehealth_real',    
		options: {
			encrypt: false
		}
	},
	config1 : {
		user: 'cc',
		password: 'Ehe@lth',
		server: '192.168.1.105',
		database: 'ehealth_real',  
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