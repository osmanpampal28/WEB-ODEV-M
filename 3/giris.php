<!DOCTYPE html>
<html>
    <head>
        <title>Osman Pampal Kişisel WEB Sitesi</title>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="150">
        <meta name="description" content="Osman Pampal">
        <meta name="keywords" content="Osman Pampal,iletisim">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="cssdosya.css" type="text/css">
        <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="il2.php">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mx-auto" id="sayfa">
                    <table>
                        <tr>
                            <td>
                                <img src="fotoğraf.jpg" alt="OSMAN PAMPAL" width="200px" height="200px">
                            </td>
                            <td width="1000">
                                <div class="container">
                                    <div class="row">
                                        <div class="menu">
                                            <h1 style="color:blue;">OSMAN PAMPAL</h1><br>
                                            <span><a href="hakkimda.html" target="_blank">HAKKIMDA</a></span>
                                            <span><a href="sehrim.html" target="_blank">ŞEHRİM</a></span>
                                            <span><a href="takimimiz.html" target="_blank">TAKIMIMIZ</a></span>
                                            <span><a href="login2.php" target="_blank">LOGİN</a></span>
                                            <span><a href="iletisim.html" target="_blank">İLETİŞİM</a></span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>            
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto">
                    <div class="iletisim_yazi">
                        <?php
                            //$ad=$_POST["ad"];
                            //$soyad=$_POST["soyad"];
                            //$yas=$_POST["yas"];
                            //$cinsiyet=$_POST["cinsiyet"];
                            /*echo $_POST['ad']."&nbsp;".$_POST['soyad']."<br>";
                            echo "adı :".$_POST['ad']."<br>";
                            echo "soyadı :".$_POST['soyad']."<br>";
                            echo "yaşı :".$_POST['yas']."<br>";
                            echo "Cinsiyeti :".$_POST['cinsiyet']."<br>";
                            echo "adı :".$_POST['ad']."<br>";*/
                            function Yonlendir($url,$zaman = 0)
                            {
                                if($zaman != 0)
                                {
                                    header("Refresh: $zaman; url=$url");
                                }
                                else header("Location: $url");
                            }
                            $mail=$_POST['girismail'];
                            $sifre=$_POST['girispassword'];
                            //echo "Hoşgeldiniz ".$_POST['girismail'];
                            if($sifre=="GİREsun" and $mail=="b191210083@gmail.com")
                            {
                                echo "hoşgeldiniz ".$_POST['girismail'];
                                Yonlendir("http://localhost/proje/hakkimda.html",3);
                            }
                            else
                            {
                                echo "hatalı giriş!"."<br>"."Login sayfasına yönlendiriliyorsunuz";
                                yonlendir("http://localhost/proje/login.html",3);
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>