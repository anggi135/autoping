<?php
$url = "https://www.nama-blogspot-anda.blogspot.com/feeds/posts/default?alt=rss"; // ganti dengan URL feed blogspot Anda
$services = array(
    "http://pingomatic.com/ping/",
    "http://blogsearch.google.com/ping/RPC2",
    "http://ping.blogs.yandex.ru/RPC2",
    "http://rpc.pingomatic.com/",
    "http://rpc.twingly.com/",
    "http://www.blogpeople.net/servlet/weblogUpdates",
    "http://ping.feedburner.com/",
    "http://ping.weblogs.se/"
); // daftar mesin pencari yang akan di-ping

foreach ($services as $service) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $service);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, "url=$url");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    echo $result;
}
?>
