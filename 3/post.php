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
                        ?>
                        <table>
                            <tr>
                                <td>
                                    <?php echo "adı "?>
                                </td>
                                <td>
                                    <?php echo ":"?>
                                </td>
                                <td>
                                    <?php echo $_POST['ad']?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php echo "soyadı "?>
                                </td>
                                <td>
                                    <?php echo ":"?>
                                </td>
                                <td>
                                    <?php echo $_POST['soyad']?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php echo "yaşı "?>
                                </td>
                                <td>
                                    <?php echo ":"?>
                                </td>
                                <td>
                                    <?php echo $_POST['yas']?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php echo "memleketi "?>
                                </td>
                                <td>
                                    <?php echo ":"?>
                                </td>
                                <td>
                                    <?php echo $_POST['memleket']?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php echo "cinsiyeti "?>
                                </td>
                                <td>
                                    <?php echo ":"?>
                                </td>
                                <td>
                                    <?php echo $_POST['cinsiyet']?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php echo "mezuniyeti "?>
                                </td>
                                <td>
                                    <?php echo ":"?>
                                </td>
                                <td>
                                    <?php echo $_POST['mezuniyet']?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php echo "yorum" ?>
                                </td>
                                <td>
                                    <?php echo ":"?>
                                </td>
                                <td>
                                    <?php echo $_POST['yorum']?>
                                </td>
                            </tr>
                        </table>
                        <?php echo "Bizimle iletişime geçtiğinz için teşekkür ederiz";?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>