<?php
sleep($sleep);
$AP1= "https://52d1f218-ad90-44c8-8600-e5054676f6fb:PXqbmFYEwVsPwoOrUL627w@api.blower.io/messages";
$AP2= "https://4b66ce22-e6b5-45d7-a9b1-149e0bdc26db:GWOVDBzTguUWJ4LWdeJ4Pw@api.blower.io/messages";
$AP3= "https://119e7c00-3818-4ef8-9514-b4dd149c72f4:6thRNpGcXy8bXhDptKULNw@api.blower.io/messages";
$AP4= "https://fba383a3-a3e8-4bf6-9e6c-2f68f587cccf:8YN1r_fnr3fhzLG1JQXp7A@api.blower.io/messages";
$AP5= "https://87917a58-22be-4edf-9bd1-ad40d18ae593:fITEDqv8AAT5nfPYkFgRYg@api.blower.io/messages";
$AP6= "https://482376ad-00ec-4668-b329-e450ea0c9091:bx6kCGlIQO34kC4AYsqAaw@api.blower.io/messages";
$AP7= "https://c2133965-3a3f-49c5-a753-fb8e7c1d3197:jdDhzXBKyFyG-qcnM-krMA@api.blower.io/messages";
$AP8= "https://04f6a656-285c-47cb-ace1-d850ff5d5eb9:hfL0BaINVxmZ5hbIDqNG1g@api.blower.io/messages";
$AP9= "https://754d09eb-cf7b-4e98-aec4-cf74789f4695:-sNfLYIQJeKoc3JUdxoESQ@api.blower.io/messages";
if($tnumber == "1"){$url = $AP1;}else {
if($tnumber == "2"){$url = $AP2;}else {
if($tnumber == "3"){$url = $AP3;}else {
if($tnumber == "4"){$url = $AP4;}else {
if($tnumber == "5"){$url = $AP5;}else {
if($tnumber == "6"){$url = $AP6;}else {
if($tnumber == "7"){$url = $AP7;}else {
if($tnumber == "8"){$url = $AP8;}
if($tnumber == "9"){$url = $AP9;}
}}}}}}}



$data = array('to' => "".$number, 'message' => $message, 'from' => $from); 
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 1); 
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$js = json_decode($result);
curl_close($ch);
if($js->message == "ok"){echo "sent"; echo "<br>";} else {
if (!isset($js->message)){echo $result;
echo "<br>";
echo $url;
echo "<br>";
$file = fopen("not_sent.txt","a"); 
;
fwrite($file,$number); fclose($file);
} else  {
echo "not sent <br> message  =";
echo  $js->message;
echo "<br>";
echo $url;
echo "<br>";
$file = fopen("not_sent.txt","a"); 
;
fwrite($file,$number); fclose($file);
}

}


?>