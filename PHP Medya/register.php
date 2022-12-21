<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['name'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$re_password = md5($_POST['re_password']);

	if ($password == $re_password) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (name, email, password)
					VALUES ('$name', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$name = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['re_password'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="tr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Medya| Sosyal Medya Hizmetleri</title>
    <meta name="description" content="PHP Medya Artık Türkiyenin Gururu Hadi Durma Sende Katıl!"/>
    <meta name="keywords" content="takipçi,takipci,takipçi satın al,takipci satın al,instagram takipci,instagram,phpmedya,php,ces medya,ucuz hizmet"/>
    <meta name="author" content="phpmedya.com" />
    
    <!-- Facebook ve Twitter Entegrasyonu -->
    <meta property="og:title" content="PHP Medya| En Kral Sosyal Medya Servisi."/>
    <meta property="og:keywords" content="takipçi satın al,takipçi al,instagram takipçi al,instagram takipçi,beğeni satın al,beğeni al, instagram beğeni al,instagram beğeni,otolike satın al,otolike al,instagram otolike al,instagram otolike,instagram takipçi satın al,instaavm,instatakipci,begeni.vip,sadece takipci,php,php medyam,phpmedya.com,phpmedyaoffical,gerçek takipçi,instagram, şimdi takipçi,aktif türk takipçi,türk takipçi,phpmedya takipçi,phpmedya beğenme,phpmedya.net,phpmedya.com"/>
    <meta property="og:image" content="banner/banner.png"/>
    <meta property="og:url" content="index.php"/>
    <meta property="og:site_name" content="PHP Medya| En Kral Sosyal Medya Servisi."/>
    <meta property="og:description" content="PHP Medya Artık Türkiyenin Gururu Hadi Durma Sende Katıl!"/>
    <meta name="twitter:title" content="PHP Medya| En Kral Sosyal Medya Servisi." />
    <meta name="twitter:image" content="banner/banner.png" />
    <meta name="twitter:url" content="index.html" />
    <meta name="twitter:card" content="App" />
    
    <!-- Favicons -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="manifest" href="manifest.php">
    <link rel="mask-icon" href="safari-pinned-tab.php" color="#111a2b">
    <meta name="theme-color" content="#111a2b">     
    <link rel="icon" sizes="192x192" href="favicon-192-192.php">

	<!-- CSS Dosyaları -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" href="css/register.css">

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b89d63eafc2c34e96e81c7b/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->	
	
</head>
<body>
<div id="header-holder">
    <nav id="nav" class="navbar navbar-full">
        <div class="container-fluid">
            <div class="container container-nav">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <button aria-expanded="false" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index-2.php"><img src="images/logo.png"></a>
                        </div>
                       <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse navbar-collapse-centered" id="bs">
                            <ul class="nav navbar-nav navbar-nav-centered">
                                <li class="nav-item active"><a class="nav-link" href="index.php">Anaysafa</a></li>
                                <li class="nav-item"><a class="nav-link" href="contact.php">İletişim</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Paketler</a>
                                    <div class="dropdown-menu custom-dropdown-menu" aria-labelledby="navbarDropdown">
                                        <div class="dropdown-items-holder">
                                            <div class="items-with-icon">
                                                <div class="row">
													<div class="col-xs-6">
                                                        <a href="instagram-takipci.php" class="link-with-icon">
                                                            <span class="icon"><img src="images/icon/takipci.png" alt=""></span>
                                                            <span class="text">Takipçi Paketleri</span>
                                                        </a>
                                                        <a href="instagram-begeni.php" class="link-with-icon">
                                                            <span class="icon"><img src="images/icon/begeni.png" alt=""></span>
                                                            <span class="text">Beğeni Paketleri</span>
                                                        </a>
                                                        <a href="instagram-otobegeni.php" class="link-with-icon">
                                                            <span class="icon"><img src="images/icon/otobegeni.png" alt=""></span>
                                                            <span class="text">OtoBeğeni Paketleri</span>
													     </a>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <a href="instagram-otoizleme.php" class="link-with-icon">
                                                            <span class="icon"><img src="images/icon/otoizlenme.png" alt=""></span>
                                                            <span class="text">Otoİzleme Paketleri</span>
                                                        </a>
                                                        <a href="instagram-izlenme.php" class="link-with-icon">
                                                            <span class="icon"><img src="images/icon/izlenme.png" alt=""></span>
                                                            <span class="text">İzlenme Paketleri</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            <div class="items">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <a href="kullanim-sozlesmesi.php" class="link">Kullanım Sözleşmesi</a>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <a href="sikca-sorulan-sorular.php" class="link">Sıkça Sorulan Sorular</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Diğer</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="hakkimizda.php">Hakkımızda</a></li>
                                        <li><a class="dropdown-item" href="kullanim-sozlesmesi.php">Kullanım Sözleşmesi</a></li>
                                        <li><a class="dropdown-item" href="sikca-sorulan-sorular.php">Sıkça Sorulan Sorular</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right other-navbar">
                                <li class="nav-item">
                                    <a class="nav-link btn-client-area"><img src="images/lock.svg" alt="">Bilgileriniz Korunuyor.</a>
                                    <a class="nav-link btn-client-area" href="https://api.whatsapp.com/send?phone=905327723934&amp;text=Merhaba%20CESMedyam.online%20sitenizden%20geliyorum%20yardım%20edebilirmisiniz?"><i class="fa fa-whatsapp"></i> Whatsapp Destek Hattı.</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn-chat" href="https://api.whatsapp.com/send?phone=905327723934&amp;text=Merhaba%20CESMedyam.online%20sitenizden%20geliyorum%20yardım%20edebilirmisiniz?"><i class="fa fa-whatsapp"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div id="top-content" class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title"><center><b>Kullanım Sözleşmesi</b></center></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main">

<section class="signup">
    <div class="container">
        <div class="signup-content">
            <form method="POST" id="signup-form" class="signup-form">
                <h2 class="form-title">Create account</h2>
                <div class="form-group">
                    <input type="text" class="form-input" name="name" id="name" placeholder="Ad" value="<?php echo $name; ?>/>
                </div>
                <div class="form-group">
                    <input type="email" class="form-input" name="email" id="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" name="password" id="password" placeholder="Şifre" value="<?php echo $_POST['password']; ?>/>
                    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                </div>
                <div class="form-group">
                    <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Tekrar Şifre" value="<?php echo $_POST['re_password']; ?>/>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="kullanim-sozlesmesi.php" class="term-service">Terms of service</a></label>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" id="submit" class="form-submit" value="Kayıt ol"/>
                </div>
            </form>
            <p class="loginhere">
                Hesabınız var mı? <a href="login.php" class="loginhere-link">Buradan giriş yapın</a>
            </p>
        </div>
    </div>
</section>

</div>
<div class="support-links container-fluid">
    <div class="row">
        <div class="col-sm-6 hylink-holder">
            <div class="hylink-box">
                <div class="icon"><img src="images/icon-whatsapp.png" alt=""></div>
                <a href="https://api.whatsapp.com/send?phone=905327723934&amp;text=Merhaba%20CESMedya.online%20sitenizden%20geliyorum%20yardım%20edebilirmisiniz?" class="link">Şimdi yardım alın</a>
                <div class="text">Aklınıza takılan herhangi bir sorunda Whatsapp üzerinden yardım alabilirsiniz...</div>
            </div>
        </div>
        <div class="col-sm-6 hylink-holder">
            <div class="hylink-box">
                <div class="icon"><img src="images/icon-talk.png" alt=""></div>
                <a href="https://tawk.to/chat/5b89d63eafc2c34e96e81c7b/default" class="link">Canlı destek ile görüşün</a>
                <div class="text">Siparişinize dair herhangi bir bilgiyi Canlı Destek Hattından alabilirsiniz...</div>
            </div>
        </div>
    </div>
</div>
<div class="footer container-fluid">
    <center><img src="images/logo.png" height="68" width="274"><br>
	</center><br><br>
    <a class="btn-go-top" href="#"><i class="hstb hstb-down-arrow"></i></a>
    <div class="container">
        <div class="sub-footer">
            <div class="row">
                <div class="col-md-6">
                    <div class="sub-footer-menu">		
                        <ul>
                            <li><a href="kullanim-sozlesmesi.php">Kullanım Sözleşmesi</a></li>
                            <li><a href="sikca-sorulan-sorular.php">Sıkça Sorulan Sorular</a></li>
							</ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="copyright">©2022 CES Medya Sosyal Medya Hizmetleri, Tüm Hakları Saklıdır. </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/register.js"></script>
</body>
</html>
