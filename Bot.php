<?php
	$access_token = 'y21E/lcOxq4ZF/kHu6VIDejcq7qOscI8bCIifzD0Cq24bFd0Z71wn9CGeswZxoymLKtKtIJ+wp6hG4LXkT2Tk+eUr95/Xo7+T5Df2fgH5EAlgFPji16ToHUlsZWVjjFBdlQtE+E+UEDLVPEwmBQVWAdB04t89/1O/w1cDnyilFU=';
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// Get POST body content
	$content = file_get_contents('php://input');
	// Parse JSON
	$events = json_decode($content, true);
	$z = 123;
	// Validate parsed JSON data
	if (!is_null($events['events'])) {
		// Loop through each event
		foreach ($events['events'] as $event) {
			// Reply only when message sent is in 'text' format
			 $textUser = $event['message']['text'];
//ทักทาย	
		 if (( strpos( $textUser,"สวัสดี") 
		      || strpos( $textUser,"หวัดดี")
		     || strpos( $textUser,"สวัสดีค่ะ")
		     || strpos( $textUser,"สวัสดีครับ"))
		&& ( $event['message']['text'] != "สวัสดี" && $event['message']['text'] != "หวัดดี" 
		   && $event['message']['text'] != "สวัสดีค่ะ" && $event['message']['text'] != "สวัสดีครับ"
		    && $event['message']['text'] != "สวัสดีค่ะหมอ" && $event['message']['text'] != "สวัสดีหมอ")){ 
				// Get text sent
				$text = " วันนี้สบายดีไหมครับ . ";
				
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
			 	$z = 1;
			
			}
//ไม่ป่วย
			else if (  ( strpos( $textUser,"ไม่ป่วย")
				 ||strpos( $textUser,"สบายดี")
				 ||strpos( $textUser,"ไม่เป็นอะไร")
				 ||strpos( $textUser,"ไม่เป็นไร") ) && ( $event['message']['text'] != "สบายดี"
								       && $event['message']['text'] != "ไม่ป่วย"
								       && $event['message']['text'] != "ไม่เป็นอะไร"
								       && $event['message']['text'] != "ไม่เป็นไร" )){
				// Get text sent
				$text = "ดีแล้วครับ ดูแลตัวเองอย่าให้ป่วยนะครับ . ";
				
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
				$z = 1;
			 }
//ไอ
			else if (strpos( $textUser,"ไอ") ||  $event['message']['text'] == "ไอ" 
				 || strpos( $textUser,"ไอเจ็บคอ") ||  $event['message']['text'] == "ไอเจ็บคอ" 
				 || strpos( $textUser,"ไอค่ะ") ||  $event['message']['text'] == "ไอค่ะ" 
				 || strpos( $textUser,"ไอครับ") ||  $event['message']['text'] == "ไอครับ"
				 ||strpos( $textUser,"เจ็บคอ") ||  $event['message']['text'] == "เจ็บคอ") {
				// Get text sent
				$text = "\t\tถ้ามีอาการไอแบบมีเสมหะ หมอแนะนำว่า ให้ใช้ตัวยาที่มีส่วนประกอบของ Guaifenesin ซึ่งช่วยบรรเทาอาการไอชนิดมีเสมหะ\tโดยยาที่หาซื้อได้ทั่วไปคือ Bromhexine หรือ Bisolvon \n***กรณี อยากเห็นภาพตัวอย่างยา พิมพ์คำว่า \"Bromhexine\" หรือ \"Bisolvon\" \n\n กรณี มีอาการไอแบบไม่มีเสมหะ พิมพ์คำว่า \"ไอแบบไม่มีเสมหะ\" . ";
				
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
				$z = 1;
				
				
			}
//ปวดเมื่อยกล้ามเนื้อ
			else if (strpos( $textUser,"เมื่อย") ||  $event['message']['text'] == "เมื่อย"||
				 strpos( $textUser,"ปวดแขน") ||  $event['message']['text'] == "ปวดแขน"||
				 strpos( $textUser,"ปวดขา") ||  $event['message']['text'] == "ปวดขา"||
				 strpos( $textUser,"ปวดเข่า") ||  $event['message']['text'] == "ปวดเข่า"||
				 strpos( $textUser,"ปวดไหล่") ||  $event['message']['text'] == "ปวดไหล่"||
				 strpos( $textUser,"ปวดหลัง") ||  $event['message']['text'] == "ปวดหลัง"||
				 strpos( $textUser,"ปวดตัว") ||  $event['message']['text'] == "ปวดตัว"||
				 strpos( $textUser,"ปวดต้นขา") ||  $event['message']['text'] == "ปวดต้นขา"||
				strpos( $textUser,"ปวดข้อเท้า") ||  $event['message']['text'] == "ปวดข้อเท้า"||
				strpos( $textUser,"ปวดข้อมือ") ||  $event['message']['text'] == "ปวดข้อมือ"||
				strpos( $textUser,"ปวดเอว") ||  $event['message']['text'] == "ปวดเอว"||
				strpos( $textUser,"ปวดน่อง") ||  $event['message']['text'] == "ปวดน่อง"||
				strpos( $textUser,"เคล็ดขัดยอก") ||  $event['message']['text'] == "เคล็ดขัดยอก") { 
				$text = "\tกรณีที่ปวดเมื่อยกล้ามเนื้อจากการทำกิจกรรมในชีวิตประจำวัน ที่เป็นอาการปวดเมื่อยเบื้องต้น หมอแนะนำให้ใช้แผ่นแปะบรรเทาปวด หรือใช้ยาแก้ปวดเมื่อยชนิดนวด\n*กรณีอยากเห็นรูปตัวอย่างยาให้พิมพ์คำว่า \"plaster\" หรือ \"ยาแก้ปวดกล้ามเนื้อ\"  \n**อยากทราบวิธีดูแลอาการปวดเมื่อย พิมพ์  \"ปวดTC\" \n***อยากทราบ ความแตกต่างของยาแก้ปวดเมื่อยชนิดนวด แบบร้อน และ แบบเย็น พิมพ์ \"แตกต่างยาแก้ปวดกล้ามเนื้อ\" . ";
				
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
				$z = 1;
			 }
//ไข้
			else if ( (strpos( $textUser,"ไข้")&& !strpos($textUser,"ผื่น")) ||  $event['message']['text'] == "ไข้" || 
				 ( strpos( $textUser,"มีไข้")&& !strpos($textUser,"ผื่น")) ||  $event['message']['text'] == "มีไข้"||
				strpos( $textUser,"ตัวร้อน") ||  $event['message']['text'] == "ตัวร้อน" ||strpos( $textUser,"หวัด") ||  $event['message']['text'] == "หวัด"||
				 ( strpos( $textUser,"ไข้")&& strpos($textUser,"ยังไง")) || ( strpos( $textUser,"ไข้")&& strpos($textUser,"ไง")) ||
				( strpos( $textUser,"ไข้")&& strpos($textUser,"อย่างไร")) ) {
				// Get text sent
				$a = rand(0,1);
				
				if( $a==0 ){
					$text = "อาการของคนมีไข้ คือ อุณหภูมิกายเพิ่มสูงกว่าปกติ คือ 36 หรือ 37.2 องศา หากวัดจากทางปาก เวลาที่มีไข้ไม่จำเป็นว่าทุกส่วนของร่างกายจะต้องร้อนเท่ากันหมดนะครับ อาจร้อนที่ศีรษะ ลำตัว และแขนขา แต่ฝ่ามือฝ่าเท้ายังเย็นเป็นปกติก็ได้นะครับ โดยยาที่ใช้ลดไข้คือ Paracetamol โดยไข้หวัดธรรมดาจะมีอาการ 3-5 วัน ถ้ามีอาการมากกว่านี้แนะนำให้พบแพทย์นะครับ \n*กรณีอยากเห็นรูปตัวอย่างยาให้พิมพ์คำว่า \"paracetamol\" \n**กรณีอยากทราบวิธีดูตัวเองพิมพ์ \"ไข้TC\" . ";
				} else if($a==1) {
					$text = "เป็นไข้ใช่ไหมครับ ไม่ต้องตกใจ ก่อนอื่น เวลาที่มีไข้ไม่จำเป็นว่าทุกส่วนของร่างกายจะต้องร้อนเท่ากันหมดนะครับ อาจร้อนที่ศีรษะ ลำตัว และแขนขา แต่ฝ่ามือฝ่าเท้ายังเย็นเป็นปกติก็ได้นะครับ โดยยาที่ใช้ลดไข้คือ Paracetamol โดยไข้หวัดธรรมดาจะมีอาการ 3-5 วัน ถ้ามีอาการมากกว่านี้แนะนำให้พบแพทย์นะครับ \n*กรณีอยากเห็นรูปตัวอย่างยาให้พิมพ์คำว่า \"paracetamol\" \n**กรณีอยากทราบวิธีดูตัวเองพิมพ์ \"ไข้TC\" . ";
				} //else if ( $a==3 ) >=0 ){
					//$text = " dddddddddddddd ";
				//}
				
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
				$z = 1;
			}
// ป่วย 
			else if ((strpos( $textUser,"ป่วย")  
				|| strpos( $textUser,"ไม่สบาย")
				|| strpos( $textUser,"ไม่ok")  
				||strpos( $textUser,"ไม่โอเค") 
				||strpos( $textUser,"ไม่ค่อยสบาย")
				||strpos( $textUser,"ไม่ค่อยดี")) && ( $event['message']['text'] != "ไม่ค่อยดี" && $event['message']['text'] != "ป่วย" 
								      && $event['message']['text'] != "ไม่สบาย"  
								     && $event['message']['text'] != "ไม่ok"
								    &&  $event['message']['text'] != "ไม่โอเค" 
								    && $event['message']['text'] != "ไม่ค่อยสบาย")) { 
				$text = "เป็นอะไรไหนบอกหมอได้นะครับ บอกทีละอาการจะได้ให้คำแนะนำได้ง่ายๆ . ";
				
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
				$z = 1;
			 }

//ท้องเสีย
			else if ((strpos( $textUser,"ถ่ายบ่อย")  
				|| strpos( $textUser,"ถ่ายเป็นน้ำ")
				|| strpos( $textUser,"ท้องเสีย")  
				||strpos( $textUser,"ถ่ายเหลว") 
				||strpos( $textUser,"อุจจาระเหลว")
				||strpos( $textUser,"อุจจาระเป็นน้ำ")) && ( $event['message']['text'] != "ถ่ายบ่อย" 
								      && $event['message']['text'] != "ถ่ายเป็นน้ำ"  
								     && $event['message']['text'] != "ท้องเสีย"
								    &&  $event['message']['text'] != "ถ่ายเหลว" 
								    && $event['message']['text'] != "อุจจาระเหลว"
								   && $event['message']['text'] != "อุจจาระเป็นน้ำ")) { 

				$text = "ถ้าคนไข้มีอาการถ่ายอุจจาระเหลว ถ่ายเป็นน้ำมากกว่า 3 ครั้งขึ้นไป หรือถ่ายเป็นมูกปนเลือด 1 ครั้งหรือมากกว่านั้นภายใน 24 ชั่วโมง โดยยาที่ใช้รักษาอาการท้องเสีย หมอขอแนะนำ เป็นการดื่มน้ำหรือดื่มน้ำเกลือแร่ซึ่งเป็นยาผงละลายน้ำที่ทั่วไปเรียกว่า ยาORS  \n\n*ดูภาพตัวอย่างยาพิมพ์ \"ยาORS\"\n**ถ้าผู้ป่วยยังมีอาการอาเจียนมาก เหงื่อออกมาก ตัวเย็น ความรู้สึกเปลี่ยนแปลงไป หรือหมดสติ ควรนำผู้ป่วยส่งโรงพยาบาลโดยด่วนนะครับ . ";
				
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
				$z = 1;
			 }	
// แน่นท้อง อึดอัดท้อง มีลมในกระเพาะ
			else if ((strpos( $textUser,"แน่นท้อง")
				||strpos( $textUser,"จุกเสียด")  
 				||strpos( $textUser,"อึดอัดท้อง") 
				||strpos( $textUser,"ตดบ่อย")
 				||strpos( $textUser,"มีลมในกระเพาะอาหาร")  
				||strpos( $textUser,"กรดในกระเพาะ")
 				||strpos( $textUser,"ท้องอืด") 
 				||strpos( $textUser,"เรอ")
 				||strpos( $textUser,"ท้องเฟ้อ")
 				||strpos( $textUser,"ผายลมบ่อย")) && ( $event['message']['text'] != "แน่นท้อง"  
								   && $event['message']['text'] != "จุกเสียด" 
 								   && $event['message']['text'] != "อึดอัดท้อง"  
 								   && $event['message']['text'] != "มีลมในกระเพาะอาหาร"
 								   && $event['message']['text'] != "ท้องอืด" 
 								   && $event['message']['text'] != "เรอ"  
								   && $event['message']['text'] != "กรดในกระเพาะ"
 								   && $event['message']['text'] != "ท้องเฟ้อ"
				 				   && $event['message']['text'] != "ตดบ่อย"
 				 				   && $event['message']['text'] != "ผายลมบ่อย")) { 
  
 				$text = "อาการท้องอืดมักจะรู้สึกไม่สบายท้อง รู้สึกแน่น และอาจมีอาการปวด และมีลมในกระเพาะอาหารเป็นจำนวนมาก จนทำให้เรอ หรือผายลมบ่อย อาจได้ยินเสียงโครกครากภายในท้อง และมีอาการปวดท้องร่วมด้วย โดยยาที่ใช้รักษาอาการท้องอืด หมอขอแนะนำ เป็นยาช่วยย่อยอาหาร ยาลดกรด \n*ดูภาพตัวอย่างยาพิมพ์ \"ยาลดกรด\" \n*กรณีอยากรู้เรื่องเกี่ยวกับการเปลี่ยนพฤติกรรมที่เสี่ยงต่ออาการท้องอืด พิมพ์ \"เปลี่ยนพฤติกรรม\" . ";
 				
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
				$z = 1;
 			 } 
 // ผื่นไข้ งูสวัด
			else if ( 
				( strpos( $textUser,"ผื่น") && strpos( $textUser,"ไข้") )&& ( $event['message']['text'] != "ผื่นคัน" )
				 ||( strpos( $textUser,"ผื่น") && strpos( $textUser,"ปวดแสบปวดร้อน") )&& ( $event['message']['text'] != "ผื่นปวดแสบปวดร้อน" )
				  ||( strpos( $textUser,"ตุ่มใส") && strpos( $textUser,"ผื่นแดง") )&& ( $event['message']['text'] != "ผื่นแดง" )
				||(strpos( $textUser,"ปวดแสบปวดร้อน")) && ( $event['message']['text'] != "ปวดแสบปวดร้อน")
				||(strpos( $textUser,"ตุ่มใส")) && ( $event['message']['text'] != "ตุ่มใส")){
			
 				$text = "\t\tหากคนไข้เป็นผื่นแดง โดยผื่นขึ้นตามแนวเส้นประสาท ประกอบกับการมีไข้ และรู้สึกปวดแสบปวดร้อนบริเวณผื่นแดง แสดงว่าคนไข้เป็นโรคงูสวัส \n*กรณีโรคงูสวัดพิมพ์ \" งูสวัด \" \n\t\tถ้าหากคนไข้มีตุ่มใส ประกอบกับการเป็นไข้แสดงว่าคนไข้เป็นเริมนะครับ \n*กรณีเริมพิมพ์ \" เริม \" . ";
 				
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
				$z = 1;
 			 } 
// โรคผื่นคัน		
			else if ( (strpos( $textUser,"ผื่น") && strpos( $textUser,"คัน"))
				 ||(strpos( $textUser,"คัน")  
				|| (strpos( $textUser,"ผื่น")&& !strpos($textUser,"ไข้"))
				|| strpos( $textUser,"ตุ่มน้ำ")  
				||strpos( $textUser,"ตุ่มแดง") 
				||strpos( $textUser,"จุดแดง")
				||strpos( $textUser,"ตุ่มใส")) && ( $event['message']['text'] != "คัน" 
								&& $event['message']['text'] != "ผื่น"  
								&& $event['message']['text'] != "ตุ่มน้ำ"
								&&  $event['message']['text'] != "ตุ่มแดง" 
								&& $event['message']['text'] != "จุดแดง"
								&& $event['message']['text'] != "ตุ่มใส"
								&& $event['message']['text'] != "ผื่นคันTC"
								&& $event['message']['text'] != "ผื่นคันtc")) { 

				$text = "\t\tหากคนไข้มีอาการผื่นคัน ผื่นแดง หรือตุ่มใส บริเวณผิวหนัง หรือร่างกายที่เกิดจากการแพ้  ให้พิมพ์คำว่า \"ผื่นคันTC\" นะครับ \n\t\t ถ้าหากคนไข้มีผื่นคัน แล้วมีอาการไข้ประกอบด้วย อาจจะเป็นผื่นจากโรคงูสวัสก็ได้ครับ อาการโรคงูสวัดดิพิมพ์ \" งูสวัด \" . ";
				
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
				$z = 1;
			 }
//เริม		
			else if ( (strpos( $textUser,"ตุ่มใส") && strpos( $textUser,"ไข้"))
				 ||(strpos( $textUser,"ตุ่มน้ำ") && strpos( $textUser,"ไข้"))
				 ||(strpos( $textUser,"ตุ่มใส") && strpos( $textUser,"ผิวหนัง"))
				 ||(strpos( $textUser,"ตุุ่มพอง") && strpos( $textUser,"ผิวหนัง"))
				  ||(strpos( $textUser,"ตุุ่มพอง") && strpos( $textUser,"ไข้"))
				||strpos( $textUser,"เริม") && $event['message']['text'] != "เริม") { 

				$text = "ถ้ามีอาการเป็นตุ่มพองใสเล็กๆ ต่อมาเกิดเป็นตุ่มน้ำอย่างรวดเร็วภายใน 1 - 2 วัน ตุ่มมักเกิดเป็นกลุ่มๆ ลักษณะตุ่มคล้ายของโรคงูสวัดและตุ่มโรคอีสุกอีใส แต่เกิดในตำแหน่งและมีการแพร่กระจายของตุ่ดติดกัน อาการเป็นอยู่ประมาณ 1 - 2 สัปดาห์ จากนั้นตุ่มก็จะแตกกลายเป็นแผลตื้นๆตกสะเก็ดแล้วก็หายไปในที่สุด สันนิษฐานได้เลยครับว่าเรากำลังเป็น เริม อยากรู้รายละเอียดโรคพิมพ์ \" เริม \" . ";
				
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
				$z = 1;
			 } 
//ท้องผูก	
			else if ( strpos( $textUser,"ถ่ายไม่ออก") 
				||(strpos( $textUser,"ไม่ถ่ายมาหลายวันแล้ว")  
				||strpos( $textUser,"ท้องผูก")
				||strpos( $textUser,"ถ่ายอุจจาระไม่สุด")  
				||strpos( $textUser,"ถ่ายไม่สุด")) && ( $event['message']['text'] != "ท้องผูก" 
								&& $event['message']['text'] != "ไม่ถ่ายมาหลายวันแล้ว"  
								&& $event['message']['text'] != "ถ่ายไม่ออกำ"
								&&  $event['message']['text'] != "ถ่ายอุจจาระไม่สุด" 
								&& $event['message']['text'] != "ถ่ายไม่สุด")
				&& ($event['message']['text'] != "ท้องผูกtc")&& ($event['message']['text'] != "ท้องผูกTC")) { 
				$text = "อาการท้องผูกคือถ่ายอุจจาระน้อยกว่าปกติที่เคยเป็น อุจจาระมีลักษณะเป็นก้อนแข็ง เป็นเม็ดเล็กๆ รู้สึกถ่ายอุจจาระไม่ออก หรือถ่ายได้ไม่สุด อาจมีอาการเจ็บขณะถ่ายอุจจาระร่วมด้วย รู้สึกท้องอืด ปวดท้อง หรือปวดเกร็งบริเวณหน้าท้องโดยยาที่ใช้รักษาอาการท้องผูก หมอขอแนะนำคือ ยาแก้ท้องผูก (Anticonstipation) หรือ ยาระบายอ่อน (Laxative) หรือ นิยมเรียกว่า \"ยาถ่าย\" เช่น ยามะขามแขกแคปชูล ห้ามใช้เมื่อมีอาการปวดท้อง หรือคลื่นไส้อาเจียน  \n*กรณีอยากเห็นวิธีดูแลตัวเองพิมพ์ \"ท้องผูกTC\"\n*กรณีอยากเห็นรูปตัวอย่างยาพิมพ์ \"ยาระบายมะขามแขก\" . ";
				
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
				$z = 1;
			 }	
//ปวดหัว
			else if ((strpos( $textUser,"ปวดหัว")  
				|| strpos( $textUser,"ปวดศีรษะ")
				|| strpos( $textUser,"เจ็บหัว")) && ( $event['message']['text'] != "ปวดหัว" 
								      && $event['message']['text'] != "ปวดศีรษะ"  
								     && $event['message']['text'] != "เจ็บหัว"
								     && $event['message']['text'] != "อาการปวดหัวเบื้องต้น")) { 

				$text = "อาการปวดศีรษะมีได้ตั้งแต่ปวดเพียงตำแหน่งใดตำแหน่งหนึ่งของศีรษะ หรือปวดทั้งศีรษะ หรือปวดร้าวไปยังอวัยวะอื่นๆในศีรษะ เช่น ตาหรือต้นคอ เป็นต้น ทั้งนี้ขึ้นกับสาเหตุซึ่งรวมถึงความรุนแรงของอาการด้วย ใน Medicine Botจะกล่าวถึงอาการปวดหัวเบื้องต้นที่ไม่รุนแรงเท่านั้น \n*กรณีอยากรู้อาการปวดหัวเบื้องต้นพิมพ์ \"อาการปวดหัวเบื้องต้น\" . ";
				
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
				$z = 1;
			 }
			else if ( $z=123 && $event['message']['text'] != "หวัดดี"&& $event['message']['text'] != "ดีค่ะ" 
				 && $event['message']['text'] != "ดีครับ" && $event['message']['text'] != "สวัสดี"
				 && $event['message']['text'] != "สวัสดีค่ะ"&& $event['message']['text'] != "สวัสดีครับ" 
				 && $event['message']['text'] != "ดีคับ" && $event['message']['text'] != "Hi"
				 && $event['message']['text'] != "hi"&& $event['message']['text'] != "Hello" 
				 && $event['message']['text'] != "hello" && $event['message']['text'] != "สวัสดีค่ะหมอ"
				 && $event['message']['text'] != "สวัสดีหมอ"&& $event['message']['text'] != "สวัสดีครับหมอ" 
				 && $event['message']['text'] != "ดีครับพี่หมอ" && $event['message']['text'] != "ดีครับหมอ"
				 && $event['message']['text'] != "หมอ"&& $event['message']['text'] != "ดีหมอ" 
				 && $event['message']['text'] != "ไม่ป่วย" && $event['message']['text'] != "สบายดี"
				 && $event['message']['text'] != "สบายดีจ้า"&& $event['message']['text'] != "สบายดีค่ะ" 
				 && $event['message']['text'] != "สบายดีครับ" && $event['message']['text'] != "ไข้TC"
				 && $event['message']['text'] != "ไข้tc"&& $event['message']['text'] != "Bisolvon" 
				 
				 && $event['message']['text'] != "bisolvon" && $event['message']['text'] != "Bromhexine"
				 && $event['message']['text'] != "bromhexine"&& $event['message']['text'] != "Paracetamol" 
				 && $event['message']['text'] != "paracetamol" && $event['message']['text'] != "พาราเซตามอล"
				 && $event['message']['text'] != "ไอแบบไม่มีเสมหะ"&& $event['message']['text'] != "ไม่ค่อยสบาย" 
				 && $event['message']['text'] != "ป่วยอ่ะ" && $event['message']['text'] != "ไม่สบาย"
				 && $event['message']['text'] != "ไม่ค่อยดี"&& $event['message']['text'] != "ป่วย" 
				
				 && $event['message']['text'] != "ไม่สบายอะ" && $event['message']['text'] != "dextro"
				 && $event['message']['text'] != "Dextro"&& $event['message']['text'] != "คู่มือการใช้งาน" 
				 && $event['message']['text'] != "สาระออกกำลังกาย" && $event['message']['text'] != "อาหาร5หมู่"
				 && $event['message']['text'] != "ให้คะแนน Medicine Bot"&& $event['message']['text'] != "vote" 
				 && $event['message']['text'] != "vote app" && $event['message']['text'] != "Vote app"
				 && $event['message']['text'] != "Vote"&& $event['message']['text'] != "โหวต" 
				 
				 && $event['message']['text'] != "โหวตคะแนนแอป" && $event['message']['text'] != "เคล็ดขัดยอกกล้ามเนื้อ"
				 && $event['message']['text'] != "ปวดกล้ามเนื้อ"&& $event['message']['text'] != "ปวดกล้ามเนื้อทำยังไงดี" 
				 && $event['message']['text'] != "ปวดTC" && $event['message']['text'] != "ปวดtc"
				 && $event['message']['text'] != "แตกต่างยาแก้ปวดกล้ามเนื้อ"&& $event['message']['text'] != "plaster" 
				 && $event['message']['text'] != "Plaster" && $event['message']['text'] != "ยาแก้ปวดกล้ามเนื้อ"
				 && $event['message']['text'] != "งูสวัด"&& $event['message']['text'] != "งูสวัดTC" 
				 
				 && $event['message']['text'] != "งูสวัดtc" && $event['message']['text'] != "ผื่นคันTC"
				 && $event['message']['text'] != "ผื่นคันtc"&& $event['message']['text'] != "คลอร์เฟนิรามีน" 
				 && $event['message']['text'] != "chlorpheniramine" && $event['message']['text'] != "Chlorpheniramine"
				 && $event['message']['text'] != "ท้องเสียTC"&& $event['message']['text'] != "ท้องเสียtc" 
				 && $event['message']['text'] != "คัน" && $event['message']['text'] != "ผื่น"
				 && $event['message']['text'] != "ตุ่มน้ำ"&& $event['message']['text'] != "ตุ่มแดง" 
				 
				  && $event['message']['text'] != "จุดแดง" && $event['message']['text'] != "ตุ่มใส"
				  && $event['message']['text'] != "ผื่นคัน"&& $event['message']['text'] != "ยาORS" 
				  && $event['message']['text'] != "ยาโออาร์เอส" && $event['message']['text'] != "ยาors"
				  && $event['message']['text'] != "ORS"&& $event['message']['text'] != "ors" 
				  && $event['message']['text'] != "EX1" && $event['message']['text'] != "ex1"
				  && $event['message']['text'] != "EX2" && $event['message']['text'] != "ex2"
				  && $event['message']['text'] != "ยาลดกรด" && $event['message']['text'] != "ยาลดกรด"
				  && $event['message']['text'] != "เปลี่ยนพฤติกรรม" && $event['message']['text'] != "เปลี่ยนพฤติกรรม"
				  && $event['message']['text'] != "EX3" && $event['message']['text'] != "ex3"
				  && $event['message']['text'] != "ถ่ายบ่อย" && $event['message']['text'] != "ถ่ายเป็นน้ำ"
				  && $event['message']['text'] != "ท้องเสีย" && $event['message']['text'] != "ถ่ายเหลว"
				  && $event['message']['text'] != "อุจจาระเหลว" && $event['message']['text'] != "อุจจาระเป็นน้ำ"
				  && $event['message']['text'] != "ถ่ายบ่อยอะหมอ" && $event['message']['text'] != "แน่นท้อง"
				  && $event['message']['text'] != "จุกเสียด" && $event['message']['text'] != "อึดอัดท้อง"
				  && $event['message']['text'] != "มีลมในท้อง" && $event['message']['text'] != "ตดบ่อย"
				  && $event['message']['text'] != "มีลมในกระเพาะอาหาร" && $event['message']['text'] != "กรดในกระเพาะ"
				  && $event['message']['text'] != "ท้องอืด" && $event['message']['text'] != "เรอ"
				  && $event['message']['text'] != "ท้องเฟ้อ" && $event['message']['text'] != "ผายลมบ่อย"
				  && $event['message']['text'] != "กรดไหลย้อน" && $event['message']['text'] != "ex1"
				  && $event['message']['text'] != "EX4" && $event['message']['text'] != "ex4"
				  && $event['message']['text'] != "EX5" && $event['message']['text'] != "ex5"
				  && $event['message']['text'] != "EX6" && $event['message']['text'] != "ex6"
				  && $event['message']['text'] != "EX7" && $event['message']['text'] != "ex7"
				  && $event['message']['text'] != "EX8" && $event['message']['text'] != "ex8"
				  && $event['message']['text'] != "EX9" && $event['message']['text'] != "ex9"
				  && $event['message']['text'] != "EX10" && $event['message']['text'] != "ex10"
				  && $event['message']['text'] != "EX11" && $event['message']['text'] != "ex11"
				  && $event['message']['text'] != "EX12" && $event['message']['text'] != "ex12"
				  && $event['message']['text'] != "EX13" && $event['message']['text'] != "ex13"
				  && $event['message']['text'] != "EX14" && $event['message']['text'] != "ex14"
				  && $event['message']['text'] != "EX15" && $event['message']['text'] != "ex15"
				
				 && $event['message']['text'] != "ท้องผูกTC" && $event['message']['text'] != "ท้องผูกtc" 
				 && $event['message']['text'] != "ยาระบาย" && $event['message']['text'] != "ยาระบายแมกนีเซียม" 
				 && $event['message']['text'] != "Milk of magnesia" && $event['message']['text'] != "milk of magnesia" 
				 && $event['message']['text'] != "ยาระบายมะขามแขก" && $event['message']['text'] != "เริมTC" 
				 && $event['message']['text'] != "เริมtc" && $event['message']['text'] != "Calamine" 
				 && $event['message']['text'] != "คาลาไมน์โลชั่น"&& $event['message']['text'] != "Calamine" 
				 && $event['message']['text'] != "calamine" && $event['message']['text'] != "CALAMINE" 
				 && $event['message']['text'] != "calamine lotion" && $event['message']['text'] != "Calamine lotion" 
				 && $event['message']['text'] != "คลอร์เฟนิรามีนชนิดน้ำเชื่อม"
				 && $event['message']['text'] != "ท้องผูก" && $event['message']['text'] != "ท้องผูกมาก" 
				 && $event['message']['text'] != "ท้องผูกอะ" && $event['message']['text'] != "ท้องผูกค่ะ" 
				 && $event['message']['text'] != "ท้องผูกครับ" && $event['message']['text'] != "ท้องผูกอะหมอ" 
				 && $event['message']['text'] != "ท้องผูกทำยังไงดี" && $event['message']['text'] != "ท้องผูกทำยังไง"
				 && $event['message']['text'] != "ท้องผูกเราทำยังไง"
				 
				  && $event['message']['text'] != "ปวดหัว" && $event['message']['text'] != "ปวดศีรษะ" 
				 && $event['message']['text'] != "เจ็บหัว" && $event['message']['text'] != "ปวดหัวทำยังไงดีค่ะ" 
				 && $event['message']['text'] != "ปวดหัวทำยังไงดี" && $event['message']['text'] != "ปวดหัวทำยังไง" 
				 && $event['message']['text'] != "ปวดหัวค่ะ" && $event['message']['text'] != "ปวดหัวครับ"
				 && $event['message']['text'] != "ปวดหัวค่ะ" && $event['message']['text'] != "ปวดหัวครับ"
				 
				  && $event['message']['text'] != "อาการปวดหัวเบื้องต้น" && $event['message']['text'] != "วิธีกำจัดเหา"
 -				  && $event['message']['text'] != "เบนซิลเบนโซเอต" && $event['message']['text'] != "Benzyl benzoate"
 -				 && $event['message']['text'] != "benzyl benzoate" && $event['message']['text'] != "เหา"
 -				&& $event['message']['text'] != "คันหัว" 
		
				 
				
				) { 

				$text = "สวัสดีครับ ยินดีต้อนรับเข้าสู่ medicine bot หากคุณมีอาการเจ็บป่วยสามารถพิมพ์ชื่ออาการมาสอบถามได้เลยครับ เช่น หากคุณปวดหัว พิมพ์คำว่า \"ฉันรู้สึกปวดหัว\" หรือ พิมพ์ชื่อโรคเลยก็ได้ครับ เช่น \"ปวดหัว\" ทางเราจะให้คำปรึกษากลับไปครับผม ";
				
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

// test
			//else if ( strpos( $textUser, "win") {
 				
 				// Get replyToken
 			//	$replyToken = $event['replyToken'];
 				
 				// Build message to reply back
 			//	$messages = [
 			//		'type' => 'image',"originalContentUrl": "https://s26.postimg.org/laiepkveh/385697-636167162089341239-16x9.jpg",
 			//		"previewImageUrl": "https://s26.postimg.org/laiepkveh/385697-636167162089341239-16x9.jpg"
 			//	];    
 				// Make a POST Request to Messaging API to reply to sender
 			//	$url = 'https://api.line.me/v2/bot/message/reply';
 			//	$data = [
 			//		'replyToken' => $replyToken,
 			//		'messages' => [$messages],
 			//	];
 			//	$post = json_encode($data);
 			//	$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
 			//	$ch = curl_init($url);
 			// } 
// Test By ธนนวินท์     
			//else if ($event['message']['text'] != "ดอกอุ้ม") {
			//	 $text = "\uDBC0\uDC84 LINE emoji";
			//	$replyToken = $event['replyToken'];
			//	$messages = [
 			//		'type' => 'text',
 			//		'text' => $text
 			//	];
			//	$url = 'https://api.line.me/v2/bot/message/reply';
 			//	$data = [
 			//		'replyToken' => $replyToken,
 			//		'messages' => [$messages],
 			//	];
 			//	$post = json_encode($data);
 			//	$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
 			//	$ch = curl_init($url);
			//}
			
			
			
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
	echo "OK9999";
