<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Randevu Onayı</title>
</head>
<body>
    <center>
        <h2>Sn. {{ $adsoyad }} Randevunuz Başarıyla Alındı</h2>
    </center>

    <center>
        <p>ECB Hastanesi Randevu Bilgileriniz</p>
        <table border="1" width="450" height="250">
            <tr>
                <td><b>Adınız Soyadınız:</b></td>
                <td>{{ $adsoyad }}</td>
            </tr>
            <tr>
                <td><b>Telefon Numaranız:</b></td>
                <td>{{ $telno }}</td>
            </tr>
            <tr>
                <td><b>Email Adresiniz:</b></td>
                <td>{{ $email }}</td>
            </tr>
            <tr>
                <td><b>Randevu Tarihiniz:</b></td>
                <td>{{ $randevutarih }}</td>
            </tr>
            <tr>
                <td><b>Aldığınız Bölüm:</b></td>
                <td>{{ $bolum }}</td>
            </tr>
            <tr>
                <td><b>Ek Mesajınız:</b></td>
                <td>{{ $mesaj }}</td>
            </tr>
            <tr>
                <td><b>Kayıt Tarihi:</b></td>
                <td>{{ $kayittarihi }}</td>
            </tr>
            <tr>
                <td><b>IP Adresiniz:</b></td>
                <td>{{ $ipadresi }}</td>
            </tr>
        </table>
        <br>
        <p>Lütfen randevu zamanından 10dk önce geliniz.</p>
    </center>
</body>
</html>
