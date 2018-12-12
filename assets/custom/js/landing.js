$(document).ready(function(){

	function realTime() {
		moment.locale('id');
		var tanggal = moment().format('dddd, D MMMM YYYY');
		var waktu   = moment().format('H:mm:ss');

		$('#currentDate').html(tanggal);
		$('#currentDate2').html(tanggal);
		$('#currentTime').html(waktu);
	}	setInterval(realTime, 1000);
})
