<?
$nameFirst = $_POST['nameFirst'];
$nameLast = $_POST['nameLast'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$token = "5824043110:AAG69gkO5AM0I39_rIuhaNagYO5a4wCWXyg";

// https://api.telegram.org/bot5824043110:AAG69gkO5AM0I39_rIuhaNagYO5a4wCWXyg/getUpdates
$chat_id = "-804434207";
$arr = array(
    ' First Name: '      => $nameFirst,
    ' Last Name: '       => $nameLast,
    ' Email Id: '        => $email,
    ' Subject: '         => $subject,
    ' Message: '         => $message
);
foreach ($arr as $key  =>  $value) {
    $tst .= "<b>" . $key . "</b>" . $value. "%0A";
};
$telegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$tst}", "r");
header('Location: donate.html');
?>