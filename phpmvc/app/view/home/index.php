<div class="container ">
    <div class="jumbotron mt-4">
        <center><h1 class="display-4">Halo, Selamat Datang!</h1>
        <p class="lead">Di <?= $data['nama']; ?> </p>
        <hr class="my-4">
		<h5><b>Sejarah Singkat SMKN 2 TRENGGALEK</b></h5>
        <p>SMK Negeri 2 Trenggalek berdiri tanggal 21 Mei 2004. Menurut SK Bupati Trenggalek no. 275 tahun 2004 tentang pendidikan SMKN 2 Trenggalek, SMKN 2 Trenggalek awalnya bernama SMK Kecil di SMPN 5 Trenggalek. Gedung yang dimiliki dulu adalah Bekas SDN 3 Sumbergedong dan juga Tambahan lahan milik Dinas Pendidikan & kebudayaan, SMK Negeri 2 pada awal tahun berdiri mempunyai 2 Jurusan yaitu :

			Teknik Konstruksi kayu
			Jasa Boga
			Seiring perkembangan zaman yang ada SMK Negeri 2 Trenggalek pada tahun 2011 mempunyai 5 Kompetensi keahlian yaitu 

			Teknik Konstruksi Kayu,
			Jasa Boga,
			Teknik Gambar Bangunan,
			Patiseri,
			Rekayasa Perangkat Luna</p>
        </center>
    </div>
</div>

<style>
            @import url('http://fonts.googleapis.com/css?family=Open+Sans:400,700');

*{
	padding:0;
	margin:0;
}

html{
	background-color: #eaf0f2;
}

body{
	font:16px/1.6 Arial,  sans-serif;
}
/* The footer is fixed to the bottom of the page */

footer{
	position: fixed;
	bottom: 0;
}

@media (max-height:800px){
	footer { position: static; }
	header { padding-top:40px; }
}


.footer-distributed{
	background-color: #2c292f;
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;
	padding: 50px 50px 60px 50px;
	margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 30%;
}

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Cookie', Tahoma;
	margin: 0;
}

/* The company logo */

.footer-distributed .footer-left img{
	width: 30%;
}

.footer-distributed h3 span{
	color:  #e0ac1c;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}


.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  #e0ac1c;
	text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
	width: 30%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 18px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

/* Here is the code for Responsive Footer */
/* You can remove below code if you don't want Footer to be responsive */


@media (max-width: 880px) {

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}

}
        </style>
        <footer class="footer-distributed bg-secondary">

			<div class="footer-left">
				<h3>PHP<span>MVC</span></h3>

				<p class="footer-links">
					<a href="<?=BASE_URL?>/home/index">Home</a>
					|
					<a href="<?=BASE_URL?>/komli/index">Kompentensi Keahlian</a>
					|
					<a href="<?=BASE_URL?>/guru/index">Data Guru</a>
					|
					<a href="<?=BASE_URL?>/siswa/index">Data Siswa</a>

                    <a href="<?=BASE_URL?>/user/profile">About</a>
				</p>

				<p class="footer-company-name">© 2023 Copyright By Ahmad Rozaqi</p>
			</div>

			<div class="footer-center">
				<div>
					<i class="fa fa-map-marker"></i>
					  <p><span>Jl Ronggowarsito Gg Sidomukti No 1, Trenggalek, Jawa Timur</span>
					 </p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+62 877 7909 2147</p>
				</div>
				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="#">achmadrozaqi636@gmail.com</a></p>
				</div>
			</div>
			<div class="footer-right">
				<p class="footer-company-about">
					<span>About the Website</span>
					Website Ini Berisikan Tentang Semua Data Sekolahan SMKN 2 Trenggalek</p>
			</div>
		</footer>