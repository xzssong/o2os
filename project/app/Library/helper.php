<?php 
function pay(){
	echo "这是支付功能";
}

//发送短信码
function sendphone($p){
	// echo "this is";
	$options['accountsid']='40789dd07d00fb349afe78daf9b07ab8';
	$options['token']='1abd3f293a861e89e11a75ce2638b122';
	$ucpass = new Ucpaas($options);
	$appid = '541daf6be5b7458b89cac2db934bad80';
	$templateid='399930';
	$param=rand(1,10000);
	$mobile=$p;
	$uid="";

	echo $ucpass->SendSms($appid,$templateid,$param,$mobile,$uid);
 }
//支付宝接口调用
function pays($ordercode,$name,$fes,$des){
	require_once("alipay.config.php");
			require_once("lib/alipay_submit.class.php");

			/**************************请求参数**************************/
	        //商户订单号，商户网站订单系统中唯一订单号，必填
	        $out_trade_no = $ordercode;

	        //订单名称，必填
	        $subject = $name;

	        //付款金额，必填 单价乘以数量
	        $total_fee = $fes;

	        //商品描述，可空
	        $body = $des;
			/************************************************************/
			//构造要请求的参数数组，无需改动
			$parameter = array(
					"service"       => $alipay_config['service'],
					"partner"       => $alipay_config['partner'],
					"seller_id"  => $alipay_config['seller_id'],
					"payment_type"	=> $alipay_config['payment_type'],
					"notify_url"	=> $alipay_config['notify_url'],
					"return_url"	=> $alipay_config['return_url'],
					
					"anti_phishing_key"=>$alipay_config['anti_phishing_key'],
					"exter_invoke_ip"=>$alipay_config['exter_invoke_ip'],
					"out_trade_no"	=> $out_trade_no,
					"subject"	=> $subject,
					"total_fee"	=> $total_fee,
					"body"	=> $body,
					"_input_charset"	=> trim(strtolower($alipay_config['input_charset']))
					//其他业务参数根据在线开发文档，添加参数.文档地址:https://doc.open.alipay.com/doc2/detail.htm?spm=a219a.7629140.0.0.kiX33I&treeId=62&articleId=103740&docType=1
			        //如"参数名"=>"参数值"	
			);

			//建立请求
			$alipaySubmit = new AlipaySubmit($alipay_config);
			$html_text = $alipaySubmit->buildRequestForm($parameter,"get", "确认");
			echo $html_text;
}


 ?>
