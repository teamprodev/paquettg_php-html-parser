<?

/*// 1. инициализация
$url = "https://sandbox.bookingcore.org/";
$ch = curl_init();
if (isset($_GET['url'])) {
    $url = $_GET['url'];
}

// 2. указываем параметры, включая url
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/4.0 (compatible; MSIE 6.0; Windows 98)');

// 3. получаем HTML в качестве результата
$subject = curl_exec($ch);

// 4. закрываем соединение
curl_close($ch);*/

require "vendor/autoload.php";
use PHPHtmlParser\Dom;

$dom = new Dom;
$dom->loadStr('<div class="all"><p>Hey bro, <a href="google.com">click here</a><br /> :)</p></div>');
$a = $dom->find('a')[0];
echo $a->text; // "click here"
?>
