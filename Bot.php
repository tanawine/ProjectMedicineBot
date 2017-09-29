<?php
	$access_token = 'y21E/lcOxq4ZF/kHu6VIDejcq7qOscI8bCIifzD0Cq24bFd0Z71wn9CGeswZxoymLKtKtIJ+wp6hG4LXkT2Tk+eUr95/Xo7+T5Df2fgH5EAlgFPji16ToHUlsZWVjjFBdlQtE+E+UEDLVPEwmBQVWAdB04t89/1O/w1cDnyilFU=';
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// Get POST body content
	$content = file_get_contents('php://input');
	// Parse JSON
	$events = json_decode($content, true);
	// Validate parsed JSON data
	if (!is_null($events['events'])) {
		// Loop through each event
		foreach ($events['events'] as $event) {
			// Reply only when message sent is in 'text' format
			 $textUser = $event['message']['text'];
			 //$text1 = "ไร";
		 if (strpos( $textUser,"จ้า") ||  $event['message']['text'] == "จ้า" ) { //&& $event['message']['text'] == "ไร"
				// Get text sent

				$text = "วันนี้สบายดีไหมครับ";
				
				// Get replyToken
				$replyToken = $event['replyToken'];
				
				// Build message to reply back
				$messages = [
					'type' => 'text',
					'text' => $text
				];
				// Make a POST Request to Messaging API to reply to sender
				$url = 'https://api.line.me/v2/bot/message/reply';
				$data = [
					'replyToken' => $replyToken,
					'messages' => [$messages],
				];
				$post = json_encode($data);
				$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
				$ch = curl_init($url);
			
			}
			else if (strpos( $textUser,"ไม่ป่วย") ||  $event['message']['text'] == "ไม่ป่วย" || strpos( $textUser,"สบายดี") ||  $event['message']['text'] == "สบายดี" || strpos( $textUser,"ไม่เป็นอะไร") ||  $event['message']['text'] == "ไม่เป็นอะไร"||strpos( $textUser,"ไม่เป็นไร") ||  $event['message']['text'] == "ไม่เป็นไร") { //&& $event['message']['text'] == "ไร"
				// Get text sent

				$text = "ดีแล้วครับ ดูแลตัวเองอย่าให้ป่วยนะครับ ";
				
				// Get replyToken
				$replyToken = $event['replyToken'];
				
				// Build message to reply back
				$messages = [
					'type' => 'text',
					'text' => $text
				];
				// Make a POST Request to Messaging API to reply to sender
				$url = 'https://api.line.me/v2/bot/message/reply';
				$data = [
					'replyToken' => $replyToken,
					'messages' => [$messages],
				];
				$post = json_encode($data);
				$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
				$ch = curl_init($url);
			 }else if (strpos( $textUser,"ป่วย") ||  $event['message']['text'] == "ป่วย" || strpos( $textUser,"ไม่สบาย") ||  $event['message']['text'] == "ไม่สบาย" || strpos( $textUser,"ไม่ok") ||  $event['message']['text'] == "ไม่ok"||strpos( $textUser,"ไม่โอเค") ||  $event['message']['text'] == "ไม่โอเค") { //&& $event['message']['text'] == "ไร"
				// Get text sent

				$text = "เป็นอะไรไหนบอกหมอได้นะครับ บอกทีละอาการจะได้ให้คำแนะนำได้ง่ายๆ ";
				
				// Get replyToken
				$replyToken = $event['replyToken'];
				
				// Build message to reply back
				$messages = [
					'type' => 'text',
					'text' => $text
				];
				// Make a POST Request to Messaging API to reply to sender
				$url = 'https://api.line.me/v2/bot/message/reply';
				$data = [
					'replyToken' => $replyToken,
					'messages' => [$messages],
				];
				$post = json_encode($data);
				$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
				$ch = curl_init($url);
			 }
			else if (strpos( $textUser,"ไอ") ||  $event['message']['text'] == "ไอ" || strpos( $textUser,"ไอเจ็บคอ") ||  $event['message']['text'] == "ไอเจ็บคอ" || strpos( $textUser,"ไอค่ะ") ||  $event['message']['text'] == "ไอค่ะ" || strpos( $textUser,"ไอครับ") ||  $event['message']['text'] == "ไอครับ") { //&& $event['message']['text'] == "ไร"
				// Get text sent

				$text = "ถ้าอาการไอแบบมีเสมหะ หมอแนะนำว่า ให้ใช้ตัวยาที่มีส่วนประกอบของ Guaifenesin ซึ่งช่วยบรรเทาอาการไอชนิดมีเสมหะโดยยาที่หาซื้อได้ทั่วไปคือ Bromhexine หรือ Bisolvon 
				กรณี อาการไอแบบไม่มีเสมหะ หมอแนะนำว่าดูแลสุขภาพตัวเอง ดื่มน้ำอุ่นก็จะช่วยบรรเทาอาการได้ครับ และควรงดอาหารรสเผ็ดจัด น้ำแข็ง น้ำเย็นจัด ของทอด เหล้าและบุหรี่ครับ (กรณี อยากเห็นภาพตัวอย่างยา พิมพ์คำว่า Bromhexine หรือ Bisolvon)";
				
				// Get replyToken
				$replyToken = $event['replyToken'];
				
				// Build message to reply back
				$messages = [
					'type' => 'text',
					'text' => $text
				];
				// Make a POST Request to Messaging API to reply to sender
				$url = 'https://api.line.me/v2/bot/message/reply';
				$data = [
					'replyToken' => $replyToken,
					'messages' => [$messages],
				];
				$post = json_encode($data);
				$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
				$ch = curl_init($url);
				
				
			}
			else if ($event['type'] == 'message' && $event['message']['type'] == 'text' && $event['message']['text'] == "ชื่ออะไร") {
				// Get text sent
				$text = "ชื่อ Medicine Bot จ้า ";
				// Get replyToken
				$replyToken = $event['replyToken'];
		
				// Build message to reply back
				$messages = [
					'type' => 'text',
					'text' => $text
				];
				// Make a POST Request to Messaging API to reply to sender
				$url = 'https://api.line.me/v2/bot/message/reply';
				$data = [
					'replyToken' => $replyToken,
					'messages' => [$messages],
				];
				$post = json_encode($data);
				$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
				$ch = curl_init($url);
			}
			
				//$ch = curl_init($url);
				curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
				curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				$result = curl_exec($ch);
				curl_close($ch);
				echo $result . "\r\n";
		}
	}
	echo "OK545";
	//echo "OK999";
