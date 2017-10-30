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
		 if (strpos( $textUser,"จ้า") ||  $event['message']['text'] == "จ้า" ) { 
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
			else if (strpos( $textUser,"ไม่ป่วย") ||  $event['message']['text'] == "ไม่ป่วย" 
				 || strpos( $textUser,"สบายดี") ||  $event['message']['text'] == "สบายดี" 
				 || strpos( $textUser,"ไม่เป็นอะไร") ||  $event['message']['text'] == "ไม่เป็นอะไร"
				 ||strpos( $textUser,"ไม่เป็นไร") ||  $event['message']['text'] == "ไม่เป็นไร") { 
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
			 }
			else if (strpos( $textUser,"ไอ") ||  $event['message']['text'] == "ไอ" 
				 || strpos( $textUser,"ไอเจ็บคอ") ||  $event['message']['text'] == "ไอเจ็บคอ" 
				 || strpos( $textUser,"ไอค่ะ") ||  $event['message']['text'] == "ไอค่ะ" 
				 || strpos( $textUser,"ไอครับ") ||  $event['message']['text'] == "ไอครับ"
				 ||strpos( $textUser,"เจ็บคอ") ||  $event['message']['text'] == "เจ็บคอ") {
				// Get text sent

				$text = "\t\tถ้ามีอาการไอแบบมีเสมหะ หมอแนะนำว่า ให้ใช้ตัวยาที่มีส่วนประกอบของ Guaifenesin ซึ่งช่วยบรรเทาอาการไอชนิดมีเสมหะ\tโดยยาที่หาซื้อได้ทั่วไปคือ Bromhexine หรือ Bisolvon \n***กรณี อยากเห็นภาพตัวอย่างยา พิมพ์คำว่า Bromhexine หรือ Bisolvon \n\n กรณี มีอาการไอแบบไม่มีเสมหะ พิมพ์คำว่า ไอแบบไม่มีเสมหะ";
				
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
			else if (strpos( $textUser,"เมื่อย") ||  $event['message']['text'] == "เมื่อย"||
				 strpos( $textUser,"ปวดแขน") ||  $event['message']['text'] != "ปวดแขน"||
				 strpos( $textUser,"ปวดขา") ||  $event['message']['text'] != "ปวดขา"||
				 strpos( $textUser,"ปวดเข่า") ||  $event['message']['text'] != "ปวดเข่า"||
				 strpos( $textUser,"ปวดไหล่") ||  $event['message']['text'] != "ปวดไหล่"||
				 strpos( $textUser,"ปวดหลัง") ||  $event['message']['text'] != "ปวดหลัง"||
				 strpos( $textUser,"ปวดตัว") ||  $event['message']['text'] != "ปวดตัว"||
				 strpos( $textUser,"ปวดต้นขา") ||  $event['message']['text'] != "ปวดต้นขา"||
				strpos( $textUser,"ปวดข้อเท้า") ||  $event['message']['text'] != "ปวดข้อเท้า"||
				strpos( $textUser,"ปวดข้อมือ") ||  $event['message']['text'] != "ปวดข้อมือ"||
				strpos( $textUser,"ปวดเอว") ||  $event['message']['text'] != "ปวดเอว"||
				strpos( $textUser,"ปวดน่อง") ||  $event['message']['text'] != "ปวดน่อง"||
				strpos( $textUser,"เคล็ดขัดยอก") ||  $event['message']['text'] != "เคล็ดขัดยอก") { 

				$text = "\tกรณีที่ปวดเมื่อยกล้ามเนื้อจากการทำกิจกรรมในชีวิตประจำวัน ที่เป็นอาการปวดเมื่อยเบื้องต้น หมอแนะนำให้ใช้แผ่นแปะบรรเทาปวด หรือใช้ยาแก้ปวดเมื่อยชนิดนวด\n*กรณีอยากเห็นรูปตัวอย่างยาให้พิมพ์คำว่า plaster หรือ ยาแก้ปวดกล้ามเนื้อ  \n**อยากทราบวิธีดูแลอาการปวดเมื่อย พิมพ์  ปวดTC\n***อยากทราบ ความแตกต่างของยาแก้ปวดเมื่อยชนิดนวด แบบร้อน และ แบบเย็น  พิมพ์  แตกต่างยาแก้ปวดกล้ามเนื้อ";
				
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
			else if (strpos( $textUser,"ไข้") ||  $event['message']['text'] == "ไข้" || 
				 strpos( $textUser,"มีไข้") ||  $event['message']['text'] == "มีไข้"||
				strpos( $textUser,"ตัวร้อน") ||  $event['message']['text'] != "ตัวร้อน" ) {
				// Get text sent

				$text = "อาการของคนมีไข้ คือ อุณหภูมิกายเพิ่มสูงกว่าปกติ คือ 36 หรือ 37.2 องศา หากวัดจากทางปาก เวลาที่มีไข้ไม่จำเป็นว่าทุกส่วนของร่างกายจะต้องร้อนเท่ากันหมดนะครับ อาจร้อนที่ศีรษะ ลำตัว และแขนขา แต่ฝ่ามือฝ่าเท้ายังเย็นเป็นปกติก็ได้นะครับ โดยยาที่ใช้ลดไข้คือ Paracetamol โดยไข้หวัดธรรมดาจะมีอาการ 3-5 วัน ถ้ามีอาการมากกว่านี้แนะนำให้พบแพทย์นะครับ \n*กรณีอยากเห็นรูปตัวอย่างยาให้พิมพ์คำว่า paracetamol \n**กรณีอยากทราบวิธีดูตัวเองพิมพ์ ไข้TC";
				
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
// ป่วย ไม่ป่วย
			else if (strpos( $textUser,"ป่วย") ||  $event['message']['text'] != "ป่วย"
				|| strpos( $textUser,"ไม่สบาย") ||  $event['message']['text'] != "ไม่สบาย" 
				|| strpos( $textUser,"ไม่ok") ||  $event['message']['text'] == "ไม่ok"
				||strpos( $textUser,"ไม่โอเค") ||  $event['message']['text'] == "ไม่โอเค"
				||strpos( $textUser,"ไม่ค่อยสบาย") ||  $event['message']['text'] != "ไม่ค่อยสบาย"
				||strpos( $textUser,"ไม่ค่อยดี") ||  $event['message']['text'] != "ไม่ค่อยดี") { 

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
	//echo "OK555";
	echo "OK9997";
