$(document).ready(function(){
	var txt = 'whiteland';
	$.get("http://mahasiswa.cs.ui.ac.id/~rizal.fa/ajax/weather.php", { q:txt },

	function(data,status) {

		//parse object json yang direturn oleh ajax
		var hasil = JSON.parse(data);

		//cek apakah ada error, jika sukses maka cod=200
		if (hasil.cod == 200) {

			//ambil cuaca di array ke 0
			var cuaca = hasil.weather[0].description;
			cuaca = cuaca.toLowerCase().replace(/\b([a-z])/gi,function(c){return c.toUpperCase()});
			
			//convert dari kelvin ke celcius
			var suhu = parseInt(hasil.main.temp)-273;
			var kota = hasil.name;

			//gabungkan atau concat info yang ingin ditampilkan pada satu variabel
			var info = "<span id='city'>" + kota + "</span> <span id='desc' class='big'>" + cuaca + "</span> <span id='temp'>" + suhu + "&#8451;</span>";
			$("#cuaca").html(info);
		}
		else {
			$("#cuaca").html(hasil.message);
		}
	})
});