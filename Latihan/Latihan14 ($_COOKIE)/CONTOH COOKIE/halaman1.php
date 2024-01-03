<?php 

// membuat cookie
// setcookie('key', 'value', 'waktu expired')
setcookie('nama', 'Fadli Zuhri', time()+60);
// cookie hanya berlaku 1 sesi jika tidak di setting waktu expirednya, sama seperti $_SESSION. Tapi jika kita mengsetting waktu expirednya, cookienya akan mengikuti waktu expirednya.



?>