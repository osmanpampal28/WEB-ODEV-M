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
                        <form action="post.php" method="post" class="form-row">
                            <table style="text-align: left; background-color: antiquewhite;" class="tabla">
                                <tr>
                                    <td>Adınız</td>
                                    <td><input type="text" name="ad" required="required" placeholder="Adınız"></td>
                                </tr>
                                <tr>
                                    <td>Soyadınız</td>
                                    <td><input type="text" name="soyad" required="required" placeholder="Soyadınız"></td>
                                </tr>
                                <tr>
                                    <td>Yaşınız</td>
                                    <td><input type="number" name="yas" required="required" placeholder="Yaşınız"></td>
                                </tr>
                                <tr>
                                    <td>Cinsiyetiniz</td>
                                    <td>
                                        <input type="radio" name="cinsiyet" value="erkek">Erkek
                                        <input type="radio" name="cinsiyet" value="kadin">Kadın
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <input type="submit" name="button" value="gönder" style="background-color: lightgreen;">
                                        <input type="reset" name="button" value="reset" style="background-color: red;">
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>