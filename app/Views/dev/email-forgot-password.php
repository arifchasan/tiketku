<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<p>Halo, <?= $user['nama'] ?></p>
<p>Anda baru saja melakukan proses reset password. klik <a href="<?= base_url('forgot-password-form/'.$user['key_forgot']); ?>"> disini </a> untuk mengganti password anda <br/>atau copy paste url berikut di browser anda <?= base_url('forgot-password-form/'.$user['key_forgot']); ?></p>
<p>Abaikan email ini jika anda tidak melakukan request lupa password.</p>

</body>
</html>