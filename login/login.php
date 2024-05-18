<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/
dist/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/
jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/
umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/
bootstrap.min.js"></script>

<style>
    div{
        margin: auto;
        margin-top: 20px;
        height: auto;
        width: 500px;
        color: white;
        border: 2px solid black;
        padding: 25px;
        background: lightskyblue;
    }
</style>
    </head>
    <body>
        <div>
            <form action="giriskontrol.php" name="kontrol" method="post">
                <h3 align="center">Yönetim Sisteme Giris</h3>
                <table cellpadding ="5px" width = "450px">
                    <tr>
                        <td>Kullanıcı adınız:</td>
                        <td><input type="text" name = "kAdi" maxlength="11" class="form-control" placeholder="kullanici adini giriniz"></td>
                    </tr>
                    <tr>
                        <td>Şifrenizi:</td>
                        <td><input type="password" name="sifre" class="form-control" placeholder="şifrenizi giriniz"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="giriş için tiklayiniz" style="width: 450px; color:white;" class="btn btn-outline-primary"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>