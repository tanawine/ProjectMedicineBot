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
		      || strpos( $textUser,"ดีครับ")
		      || strpos( $textUser,"ดีค่ะ"))
		&& ( $event['message']['text'] != "สวัสดี" && $event['message']['text'] != "หวัดดี" && $event['message']['text'] != "ดีครับ"
		   && $event['message']['text'] != "ดีค่ะ")){ 
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
				strpos( $textUser,"ตัวร้อน") ||  $event['message']['text'] == "ตัวร้อน" || 
				 ( strpos( $textUser,"ไข้")&& strpos($textUser,"ยังไง")) || ( strpos( $textUser,"ไข้")&& strpos($textUser,"ไง")) ||
				( strpos( $textUser,"ไข้")&& strpos($textUser,"อย่างไร")) ) {
				// Get text sent
				$a = rand(0,1);
				
				if( $a==0 && !(strpos($textUser,"ไข้")&&strpos($textUser,"ยังไง")) ){
					$text = "อาการของคนมีไข้ คือ อุณหภูมิกายเพิ่มสูงกว่าปกติ คือ 36 หรือ 37.2 องศา หากวัดจากทางปาก เวลาที่มีไข้ไม่จำเป็นว่าทุกส่วนของร่างกายจะต้องร้อนเท่ากันหมดนะครับ อาจร้อนที่ศีรษะ ลำตัว และแขนขา แต่ฝ่ามือฝ่าเท้ายังเย็นเป็นปกติก็ได้นะครับ โดยยาที่ใช้ลดไข้คือ Paracetamol โดยไข้หวัดธรรมดาจะมีอาการ 3-5 วัน ถ้ามีอาการมากกว่านี้แนะนำให้พบแพทย์นะครับ \n*กรณีอยากเห็นรูปตัวอย่างยาให้พิมพ์คำว่า \"paracetamol\" \n**กรณีอยากทราบวิธีดูตัวเองพิมพ์ \"ไข้TC\" . ";
				} else if($a==1 !(strpos($textUser,"ไข้")&&strpos($textUser,"ยังไง")) ) {
					$text = "เป็นไข้ใช่ไหมครับ ไม่ต้องตกใจ ก่อนอื่น เวลาที่มีไข้ไม่จำเป็นว่าทุกส่วนของร่างกายจะต้องร้อนเท่ากันหมดนะครับ อาจร้อนที่ศีรษะ ลำตัว และแขนขา แต่ฝ่ามือฝ่าเท้ายังเย็นเป็นปกติก็ได้นะครับ โดยยาที่ใช้ลดไข้คือ Paracetamol โดยไข้หวัดธรรมดาจะมีอาการ 3-5 วัน ถ้ามีอาการมากกว่านี้แนะนำให้พบแพทย์นะครับ \n*กรณีอยากเห็นรูปตัวอย่างยาให้พิมพ์คำว่า \"paracetamol\" \n**กรณีอยากทราบวิธีดูตัวเองพิมพ์ \"ไข้TC\" . ";
				} else if ( (strpos($textUser,"ไข้")&&strpos($textUser,"ยังไง")) >=0 ){
					$text = " dddddddddddddd ";
				}
				
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
				$text = "เป็นอะไรไหนบอกหมอได้นะครับ บอกทีละอาการจะได้ให้คำแนะนำได้ง่ายๆ จาก CODE . ";
				
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
				 ||(strpos( $textUser,"ตุุ่มใส") && strpos( $textUser,"ผิวหนัง"))
				 ||(strpos( $textUser,"ตุุ่มพอง") && strpos( $textUser,"ผิวหนัง"))
				  ||(strpos( $textUser,"ตุุ่มพอง") && strpos( $textUser,"ไข้"))
				||strpos( $textUser,"เริม") && $event['message']['text'] != "เริม") { 

				$text = "ถ้ามีอาการเป็นตุ่มพองใสเล็กๆ ต่อมาเกิดเป็นตุ่มน้ำอย่างรวดเร็วภายใน 1 - 2 วัน ตุ่มมักเกิดเป็นกลุ่มๆ ลักษณะตุ่มคล้ายของโรคงูสวัดและตุ่มโรคอีสุกอีใส แต่เกิดในตำแหน่งและมีการแพร่กระจายของตุ่มผิดกัน อาการเป็นอยู่ประมาณ 1 - 2 สัปดาห์ จากนั้นตุ่มก็จะแตกกลายเป็นแผลตื้นๆตกสะเก็ดแล้วก็หายไปในที่สุด สันนิษฐานได้เลยครับว่าเรากำลังเป็น เริม อยากรู้รายละเอียดโรคพิมพ์ \" เริม \" . ";
				
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
			 } else if ( $z=123 ) { 

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
	echo "OK555";
	//echo "OK9999";
