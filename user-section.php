<?php
$sharh="1- أهلا بك في شرح بوت $bot ✅

2- لإستخدام هذا البوت عليك أولاً شحن حسابك بإحدى طرق الدفع المقبولة بالبوت ✅

3- لشحن حسابك قم بالضغط على زر 💰شحن الرصيد ومن ثم عليك إختيار طريقة دفع متوفرة لديك ومقبولة بالبوت ✅

4- بعد شحن رصيدك قم بالضغط على زر ☎ شراء رقم من البوت ومن ثم قم بإختيار التطبيق المطلوب ومن ثم الدولة التي تريد رقم لها ✅

5- في حال عدم وصول الكود يمكنك 🚫 حظر الرقم، لا تقلق لن يتم خصم سعر الرقم من رصيدك إلا بعد وصول الكود ✅

6- لتحويل رصيد إلى مستخدم آخر قم بالضغط على زر 🔄 تحويل رصيد ثم أرسل أيدي الشخص الذي تريد تحويل الرصيد له ثم أرسل الكمية التي تريد تحويلها، بالتوفيق 🌸✅";//شرح البوت
//هذا الملف من تطوير #م حماده @TTAVIP تغيير حقوق دليل فشلك//
#================#
$ApiKey5sim        = "هنا ايبي حسابك";//5sim
$api_key_super        = "هنا يبي حسابك";//super
$ApiKeySmsMan = "هنا ايبي حسابك";//sms
$Apikeyviotp = "هنا ايبي حسابك";//api key حق الفتنامي
//هذا الملف من تطوير #م حماده @TTAVIP تغيير حقوق دليل فشلك//
#==============#
//هذا الملف من تطوير #م حماده @TTAVIP تغيير حقوق دليل فشلك//
$url_j = $numbers["join"];

if($url_j != null and $url_j != ''){
	if(bot('getChatMember',[
		'chat_id'=>$url_j,
		'user_id'=>$chat_id])->result->status == 'left'){
			bot('sendMessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"*🙋🏻‍♂ ⁞  عذرا عزيزي المستخدم*

*✅ ⁞  لايمكنك إستخدام البوت دون الاشتراك بقناه البوت : $url_j* 

*☑️ ⁞  إشترك بالقناة ثم إرسل /start*"
    ]);
    exit;
   }
}
if(isset($update)):
if(!in_array($chat_id,explode("\n",file_get_contents('mem/members.txt')))){
	file_put_contents('mem/members.txt',$chat_id."\n",FILE_APPEND);
}
if(in_array($chat_id,explode("\n",file_get_contents('ban.txt')))){
	send("تم تقييدك من استخدام البوت");
	exit;
}
if((isset($text) || isset($data)) and $stat == "تشغيل"){
	send("*البوت تحت الصيانة حاليا , سوف يتم إشعاركم في قناة البوت عند الإكتمال , ونشكر انتظاركم 💙🙂*",
[
            [
                ["text"=>"• قناة البوت📢","url"=>"t.me/SUA1ZOu3hOpkNjY8"]
            ],
            ]);      
    exit;
	
}
if(($data == "home" || $text) && $info[$chat_id]["checker"] == "stop"){
	send("*• لايمكنك استخدام البوت لان لديك طلب معلق لم تقم بالغائة 🚸*");
    exit;
    }
    @$home=[[["text"=>"↩️ ⁞  القائمة الرئيسية.","callback_data"=>"numbers"]]]; //home
#==============#
if( $point["members"][$check[$chat_id]['mail']]['point'] == null ):
            $point["members"][$check[$chat_id]['mail']]["point"] = 0;//نقاط العضو
            save($point,"opint");
endif; //ممنوع تغيير حقوق المبرمج ياورع هذا الملف من تطوير #م حماده @TTAVIP تغيير حقوق دليل فشلك
#==============#

#===CHECK_MAIL======#
if($data=="home" && $check[$chat_id]["mail"] == null):
answer("لا يمكنك استخدام البوت قم بإنشاء حساب أولا 🛑");
exit; endif;
#===CHECK_MAIL======#

if( $text == "/start" ):    
    
        $info["members"][$chat_id]["login_pannel"] =   null;
        save($info);
        send("
*🏘 ⁞   أهلاً بكم في بوت حماده العالمي .*

*👨‍✈️ ⁞   ادارة البوت: @TTAVIP*
*🛍 ⁞  قناة البوت: @TTJITT*

*☑️  ⁞   اضغط على زر لبدء الإستخدام 👇🏻*
",
[
            [
                ["text"=>"✅ ⁞  اضغط هنا لدخول الى البوت . 🔁","callback_data"=>"login_pannel"]
            ],
            [
                ["text"=>"☑️ ⁞  اضغط هنا لدخول لقناة البوت .","url"=>"t.me/TTJITT"]
            ]
            ]);

         exit;
#==============#     
elseif ( $data == "home"):
              $info["members"][$chat_id]["mode"] =   null;
              $info[$chat_id][ mode ] =null;
              save($info);
              edit( "👨‍✈️ ⁞  *أهلا* في *القائمة الرئيسية.* 🏡
👨‍✈️ ⁞  هذه *تفاصيل* حسابك *في بوت حماده.* ⬇️

*📧 ⁞  حسابك : " .$check[$chat_id][ mail ]. " 🌝🌙*
*💰 ⁞  رصيدك: " . $point["members"][$check[$chat_id][ mail ]]["point"] . "* ₽ 💷😻 .
*🆔 ⁞  الأيدي: $chat_id 😌*

*☑️ ⁞  قناة البوت الرسمية: @TTJITT*
*🎬 - قم بالتحكم بالبوت الأن عبر الضعط على الأزرار.*" ,
 [
            [
                ["text"=>"☎️ ⁞  شراء ارقام وهمية .","callback_data"=>"numbers"]
                ],
                [
                ["text"=>"👤 ⁞  قسم الرشق .","callback_data"=>"rash"],
                ["text"=>"💰 ⁞  شحن رصيدك .","callback_data"=>"shahn"]
                ],
                [
                ["text"=>'• ربح روبل مجاني 🤑🌪.',"callback_data"=>"collect"]
                ],
                [
                ["text"=>'☑️ ⁞ قسم متجر الكروت 🎁.',"callback_data"=>"kroott"]
                ],
                [
                ["text"=>"✅ ⁞  الارقام الجاهز .","callback_data"=>"readynumbers"],
                ["text"=>"• قسم الوكلاء 👨‍✈️","callback_data"=>"wak"]
                ],       
            [
            ["text"=>"⚙ ⁞  الإعدادات .","callback_data"=>"settings"],
            ["text"=>"• البحث السريع 🔍","callback_data"=>"search"]
            ],
            [
                ['text'=>"📮 ⁞  المساعدة والدعم الفني",'callback_data'=>"rdad92873948"]
            ]
            ]);
        exit;
#==============#        
elseif($el[0] == "/start" && !preg_match("/\d+/",$el[1])) :
$link = base64_decode($el[1]);
$idd =  $check[$link]["idd"];
if($refral[$chat_id]["ref"] == null && $idd != $chat_id) {       
        $refral[$idd]["invit"]++;
        $refral[$chat_id]["ref"] = $link;
        save($refral , "refral");
sendd($idd , "قام " . "[$chat_id](tg://user?id=$chat_id) " . " بالدخول إلى فريقك عدد أعضاء فريقك الحالي " . $refral[$idd]["invit"] );
send("شكرا لإنضمامك إلى البوت الخاص بنا يمكنك إنشاء حساب والتمتع بخدماتنا " , [
            [
                ["text"=>" 🔘 اضغط هنا للدخول للبوت🏅","callback_data"=>"login_pannel"]
            ]
    ]);
  }
exit;
elseif ($ex[0] =="numbers" ):
edit("*☑️ ⁞  هذه قائمة البرامج  المتوفرة لـ تفعيل الأرقام.*
*☑️ ⁞  إختر البرنامج الذي تريد تفعيل رقم فيه.*
☑️ ⁞ مطور البوت حماده : @TTJITT
*✅ ⁞  تحكم بالازرار الموجودة اسفل 😌👍.*",[           
                [                
                    ["text"=>"• واتساب - WhatsApp 💬 .", "callback_data"=>"server#Erub#wa#whatsapp"]
                    ],
                    [
                    ["text"=>"• تيليجرام - Telegram 📢 .", "callback_data"=>"server#Erub#tg#telegram"]
                    ],
                    [
                    ["text"=>"• فيس بوك - Facebook 🌐 .", "callback_data"=>"server#Erub#fb#facebook"]
                    ],
                    [
                    ["text"=>"• إيمو - Imo 🧿 .", "callback_data"=>"server#Erub#im#imo"]
                    ],
                    [
                    ["text"=>"• جوجل - Gogel 🛍 .", "callback_data"=>"server#Erub#go#google"]
                    ],
                    [
                    ["text"=>"• إنستقرام - Instagram 🌟 .", "callback_data"=>"server#Erub#ig#instagram"]
                    ],
                    [
                    ["text"=>"• تويتر - Twitter 🌪 .", "callback_data"=>"server#Erub#tw#twitter"]
                    ],
                    [
                    ["text"=>"• يلا شات - Yalashat 💥 .", "callback_data"=>"server#Erub#yl#yalla"]
                    ],
                    [
                    ["text"=>"• فايبر - Viber 🥁 .", "callback_data"=>"server#Erub#fa#viber"]
                ],
                [  
              ['text'=>'-• سيرفر واتساب المميز','callback_data'=>"srffnfn#Africa#wa#whatsapp"]
                ],
                [              
                    ["text"=>"• الصفحة الرئيسية 🔙", "callback_data"=>"home"]
                ]
                ]);
#==============#               
elseif( $ex[0]  == "rash") :
        answer ("⚠️ ⁞  القسم مغلق من قبل إدارة البوت .
✅ ⁞  سيتم فتحة قريبا ....
📢 ⁞  شكرا لانتضاركم.");
       exit;
        elseif( $ex[0]  == "numbers") :
        edit("*✅ ⁞  اختر السيرفيرات التالية للشراء منها يوجد سيرفيرات للدول العربية والاجنبية التي تريد شراء رقم منها☺️🌻 .*

*☑️ ⁞  يوجد اكثر من 180 دولة متوفره في البوت 😌*" , [
        
              [['text'=>'• البحث السريع عن الدوله 🔍','callback_data'=>"searching"]],
              [['text'=>'🧿 ⁞  قسم الدول العربية .','callback_data'=>"server#Asia#$ex[1]#$ex[2]"],
                ],
                                [
              ['text'=>'🌐 ⁞  قسم الدول الاجنبية .','callback_data'=>"server#Erub#$ex[1]#$ex[2]" ]],
              [['text'=>'📢 ⁞  قسم الدول الرخيصة .','callback_data'=>"server#Africa#$ex[1]#$ex[2]"],
                ],
                                [       
              ['text'=>'⏮ ⁞  القائمة الرئيسيه ♻️ .',"callback_data"=>"home"],
          ]
          ]);
       exit;
#==============#         
elseif( $ex[0]  == "radddsh") :
        answer ("⚠️ ⁞ القسم مغلق مؤقت من قبل الإدارة");
#==============#
elseif($data == "searching"):
	send("⚜ - يرجئ ارسال رمز الدولة مثال ( اليمن🇾🇪");
	$info[$chat_id]["mode"]  =   "search";
     save($info);
exit;
elseif(preg_match("/[0-9]+/",$text) && $info[$chat_id]["mode"] == "search"):
if(isset($numbers["num"][$text])){
	$ser  = $numbers["num"][$text]["ser"]; 
	$cont = $numbers["num"][$text]["name"];
	$list = "";
                      foreach($ser as $k) :    
                      	$list .= $k."-";
                      endforeach;
	send("
*• يرجئ اختيار التطبيق التي تريد تفعيل الرقم عليه لدولة ".$cont."✅*
*• يوجد تطبيقات متنوعه للتفعيل ♻️☺️🏆*
",[           
                [                
                    ["text"=>"• واتساب 🚨.", "callback_data"=>"Buy#$text#$list#wa#whatsapp"]
                ],
                [
                    ["text"=>"• تليجرام 🎬 .", "callback_data"=>"Buy#$text#$list#tg#telegram"],
                    ["text"=>"• فيس بوك  🌐", "callback_data"=>"Buy#$text#$list#fb#facebook"]
                ],
                [
                    ["text"=>"• ايمو 🧩 .", "callback_data"=>"Buy#$text#$list#im#imo"],
                    ["text"=>"• جوجل 🥇 .", "callback_data"=>"con2#$text#go#google"]
                ],
                [
                    ["text"=>"• انستجرام 📸", "callback_data"=>"Buy#$text#$list#ig#instagram"],
                    ["text"=>"• تويتر 🎮 .", "callback_data"=>"Buy#$text#$list#tw#twitter"]
                ],
                [
                    ["text"=>"• يلا شات 🚗 .", "callback_data"=>"Buy#$text#$list#yl#yalla"],
                    ["text"=>"• فايبر 💎 .", "callback_data"=>"Buy#$text#$list#fa#viber"]
                ],
                [                
                    ["text"=>"• الصفحة الرئيسية 🔙", "callback_data"=>"home"]
                ]
                ]);
}else{
	send("• لم يتم اضافة هاذا يرجٰئ الانتضار ريثما يتم الاضافة🔰.");
}
exit;
#==============#
elseif($data == "wak") :
$json["inline_keyboard"][]  =   [["text"=>"👨‍✈️ الوكيل.","callback_data"=>"."],["text"=>"🛒 الرابط. ","callback_data"=>"."]] ;
$e = 1;
foreach($numbers["wak"] as $key => $val) :    
                       
                       $name  = $numbers["wak"][$key]["name"];   
                       $user = $numbers["wak"][$key]["user"];    
                      
        if(isset($name) ) :
        
                      $json["inline_keyboard"][$e][]  =   ["text"=>"$name" ,"callback_data"=>"wakel#$key"];
                      $json["inline_keyboard"][$e][]  =   ["text"=>"▪️إضغط هنا ." ,"url"=>"t.me/$user"];

                      
                      $e++;
                      else : $name = null;
         endif;                     
endforeach;
                $json["inline_keyboard"][]  =   [["text"=>"↩️ ⁞  القائمة الرئيسية.","callback_data"=>"home"]] ;
                 bot("editmessagetext",[
                "chat_id"=>$chat_id,
                "text"=>"🧑‍✈️ ⁞  أهلا بك عزيزي العميل في قسم وكلاء البوت الرسميين في بوت حماده ✅

☑️ ⁞  عن طريق الوكيل تستطيع شحن حسابك او الاستفسار عن اي مشكلة تواجهك👍🤖

▪️• يرجى التحكم بالازرار الموجودة اسفل 👇🏻👍.",
                "message_id" => $message_id,
                "reply_markup" => json_encode($json)
        ]);
        
     exit;
     elseif($ex[0] == "wakel") :
     $nam  = $numbers["wak"][$ex[1]]["name"];   
                       $usr = $numbers["wak"][$ex[1]]["user"];    
     $json["inline_keyboard"][]  =   [["text"=>"🛑 -  الابلاغ !","url"=>"t.me/TTAVIP"]] ;
     $json["inline_keyboard"][]  =   [["text"=>"↩️ ⁞  القائمة الرئيسية.","callback_data"=>"home"]] ;
     bot("editmessagetext",[
                "chat_id"=>$chat_id,
                "text"=>"
                
🧑‍✈️ ⁞  الوكيل: $nam 
🛒 ⁞  يوزر الوكيل: @$usr 

☑️ ⁞  وكيل معتمد من إدارة البوت تستطيع شحن حسابك او اي إستفسارات من خلال الوكيل .
▪️• للإبلاغ عن الوكيل ، اسائة ، نصب ،  إحتيال إضغط زر ابلاغ 👍🤖

",
                "message_id" => $message_id,
                "reply_markup" => json_encode($json)
        ]);
    
       exit;
#==============#
elseif($ex[0] == "server") :
$e = 0;
foreach($numbers["num"] as $key => $val) :    
                       
                       $ser  = $numbers["num"][$key]["ser"];   
                       $con = $numbers["num"][$key]["con"];    
                      $list = "";
                      foreach($ser as $k) :    
                      	$list .= $k."-";
                      endforeach;




        if($numbers["num"][$key]["con"] == $ex[1] ) :
        			$i++;
                      if($i % 3 == 0) $e++;
                  	$name      = $numbers["num"][$key]["name"];
                      $json["inline_keyboard"][$e][]  =   ["text"=>$name ,"callback_data"=>"Buy#$key#$list#$ex[2]#$ex[3]"];
                      else : $name = null;
         endif;                     
endforeach;
                $json["inline_keyboard"][]  =   [["text"=>"🔄 ⁞  رجوع .","callback_data"=>"numbers#$ex[2]#$ex[3]"]] ;
                 bot("editmessagetext",[
                "chat_id"=>$chat_id,
                "text"=>"☑️ ⁞  إختار الدولة التي تريد شراء رقم منها 😌🌸.

☑️ ⁞  يوجد الكثير من الدول حول العالم إختر ماشئت 🌚😻.",
                "message_id" => $message_id,
                "reply_markup" => json_encode($json)
        ]);
        
     exit;
     #==============#
elseif($ex[0] == "Buy2") :
$ser  = $numbers["offers"][$ex[1]]["ser"];
$con = $numbers["offers"][$ex[1]]["con"];
$app1 = $ex[3];
$app2 = $ex[4];
                $json = [];
                $json["inline_keyboard"][]  =   [["text"=>"- السيرفر ✅ .","callback_data"=>"hello"],["text"=>"الكمية🔺.","callback_data"=>"hmm"],["text"=>"- السعر 💸 .","callback_data"=>"Alwalidee"]];
if(in_array("5sim",$ser)) {                     
                $ok = $favourite["number"][$ser]["ok"];
                $country    = $numbers["num"][$ex[1]]["site-name"];
                $name       = $numbers["num"][$ex[1]]["name"];                    
               $p = json_decode(file_get_contents("https://5sim.net/v1/guest/products/$country/any"), true)[$app2]["Price"]; 
               $count = json_decode(file_get_contents("https://5sim.net/v1/guest/products/$country/any"), true)[$app2]["Qty"]; 
               $price = $numbers["num"][$ex[1]]["price"];
               if($p != null)
               $json["inline_keyboard"][]  =   [["text"=>" سيرفر1✅." , "callback_data"=>"nothings"],["text" => "$count" ,"callback_data"=>"add#$ex[1]#$ex[2]#$opvalue"],["text"=>$price ." ₽"  ,"callback_data"=>"B-N#$ex[1]#5sim#$price#$app2"]]; 

 }  if(in_array("man",$ser)) {      
            	$ok = $favourite["number"][$ser]["ok"];
                $country    = $numbers["num"][$ex[1]]["site-name"];
                $name       = $numbers["num"][$ex[1]]["name"];                
                $chart       = json_decode(file_get_contents("http://api.sms-man.com/stubs/handler_api.php?action=getPrices&api_key=$ApiKeySmsMan&country=".$nnn[$ex[1]]."&service=".$app1),true);
                $cost         =  $chart[$app1]["cost"] ;
                $count         =  $chart[$app1]["count"] ;
                $price        = $numbers["num"][$ex[1]]["price"];
                $json["inline_keyboard"][]  =   [["text" => "سيرفر2✅." ,"callback_data"=>"nothings"],["text"=>"$count" ,"callback_data"=>"add#$ex[1]#$ex[2]"],["text"=>"$price ₽","callback_data"=>"B-N#$ex[1]#man#$price#$app1"]]; 
  }
  if(in_array("super",$ser) and ($app2 == "whatsapp" or $app2 == "telegram")) {
  	if($app2 == "whatsapp"){
  		$ap = 2;
  		$cost = 16;
  	}
  	elseif($app2 == "telegram"){
  		$ap = 5;
  		$cost = 14;
  	}
            	$ok = $favourite["number"][$ser]["ok"];
                $country    = $numbers["num"][$ex[1]]["site-name"];
                $name       = $numbers["num"][$ex[1]]["name"];                
                $price        = $numbers["num"][$ex[1]]["price"];
                $json["inline_keyboard"][]  =   [["text" => "سيرفر3✅." ,"callback_data"=>"nothings"],["text"=>"$price ₽","callback_data"=>"B-N#$ex[1]#super#$price#$ap"]]; 
  }
                $json["inline_keyboard"][]  =   [["text" => "تحديث الصفحة 🔁","callback_data"=>"Buy#$ex[1]#$ex[2]#$ex[3]#$ex[4]"]];
                $json["inline_keyboard"][]  =   [["text" => "🔄 ⁞  رجوع .","callback_data"=>"server#$con#$ex[3]#$ex[4]"],["text"=>"↩️ ⁞  القائمة الرئيسية.","callback_data"=>"home"]];
bot("editmessagetext",[
            "chat_id"=>$chat_id,
            "text"=>"- تم إختيار الدولة ( $name ) بنجاح ✅

- يرجى إختيار السيرفر المراد الشراء منه, كل سيرفر يمتلك سعر خاص فيه, وكل سيرفر له توريده الخاص.

☑️ ⁞  التطبيق: واتسأب ( $app2 ) ." ,
            "message_id" => $message_id,
            "reply_markup" => json_encode($json)
        ]);
exit;
     #==============#
elseif($data == "offers") :
$e = 0;
$json = [];
                $json["inline_keyboard"][$e]  =   [["text"=>"🌎 ⁞  الدولة.","callback_data"=>"hello"],["text"=>"⏬ ⁞  البرنامج.","callback_data"=>"hmm"],["text"=>"💰• السعر.","callback_data"=>"Alwalidee"]];
                $e++;
foreach($numbers["offers"] as $key => $val) :    
                       
                       $ser  = $numbers["offers"][$key]["ser"];   
                       $con = $numbers["offers"][$key]["con"];   
                      
                       if($ser == "5sim") {                     
                $app = explode("#",$con)[1];
               $price = $numbers["offers"][$key]["price"];
               if($p != null)
               $json["inline_keyboard"][]  =   [["text"=>" سيرفر1✅." , "callback_data"=>"Alwalidee"],["text"=>$price ." ₽"  ,"callback_data"=>"B-N#$ex[1]#5sim#$price#$app2"]]; 

 }  if($ser == "man") {      
            	$app = explode("#",$con)[0];
                $json["inline_keyboard"][]  =   [["text" => "سيرفر2✅." ,"callback_data"=>"Alwalidee"],["text"=>"$price ₽","callback_data"=>"B-N#$ex[1]#man#$price#$app1"]]; 
  }
					  
                  	$name      = $numbers["offers"][$key]["name"];
                  	$price      = $numbers["offers"][$key]["price"];
                      $json["inline_keyboard"][$e][]  =   ["text"=>"$name","callback_data"=>"B-N#$key#$ser#$price#$app"];
                      $json["inline_keyboard"][$e][]  =   ["text"=>explode("#",$con)[1] ,"callback_data"=>"B-N#$key#$ser#$price#$app"];
                      $json["inline_keyboard"][$e][]  =   ["text"=>"$price","callback_data"=>"B-N#$key#$ser#$price#$app"];
                      $e++;
endforeach;
                $json["inline_keyboard"][]  =   [["text"=>"↩️ ⁞  القائمة الرئيسية.","callback_data"=>"server"]] ;
                 bot("editmessagetext",[
                "chat_id"=>$chat_id,
                "text"=>"⏬ - قائمة العروض المتوفرة بالبوت. ☑️",
                "message_id" => $message_id,
                "reply_markup" => json_encode($json)
        ]);
     exit;
#==============#
elseif($ex[0] == "srffnfn") :
$e = 0;
foreach($numbers["num"] as $key => $val) :    
                       
                       $ser  = $numbers["num"][$key]["ser"];   
                       $con = $numbers["num"][$key]["con"];    
                      $list = "";
                      foreach($ser as $k) :    
                      	$list .= $k."-";
                      endforeach;




        if($numbers["num"][$key]["con"] == $ex[1] ) :
        			$i++;
                      if($i % 3 == 0) $e++;
                  	$name      = $numbers["num"][$key]["name"];
                      $json["inline_keyboard"][$e][]  =   ["text"=>$name ,"callback_data"=>"Buy#$key#$list#$ex[2]#$ex[3]"];
                      else : $name = null;
         endif;                     
endforeach;
                $json["inline_keyboard"][]  =   [["text"=>"🔄 ⁞  رجوع .","callback_data"=>"numbers#$ex[2]#$ex[3]"]] ;
                 bot("editmessagetext",[
                "chat_id"=>$chat_id,
                "text"=>"☑️ ⁞ سيرفر ⁞ واتساب المميز 🌪.

⭐️ ⁞ هذا القسم مخصّص فقط للواتسأب ،  يرجى إختيار أحد الدول في الأسفل ، هذه الدول تم اختيارها من افضل الموردين لدينا حيث ان جميع ارقامها شغاله وليست محظوره  وبأسعار رخيصه جداً☑️.",
                "message_id" => $message_id,
                "reply_markup" => json_encode($json)
        ]);
        
     exit;
     #==============#
elseif($ex[0] == "Buy") :
$ser  = $numbers["num"][$ex[1]]["ser"];
$con = $numbers["num"][$ex[1]]["con"];
$app1 = $ex[3];
$app2 = $ex[4];


                $json = [];
                $json["inline_keyboard"][]  =   [["text"=>"- السيرفر ✅ .","callback_data"=>"Alwalidee"],["text"=>"- السعر 💸 .","callback_data"=>"Alwalidee"]];
if(in_array("5sim",$ser)) {                     
                $ok = $favourite["number"][$ser]["ok"];
                $country    = $numbers["num"][$ex[1]]["site-name"];
                $name       = $numbers["num"][$ex[1]]["name"];                    
               $p = json_decode(file_get_contents("https://5sim.net/v1/guest/products/$country/any"), true)[$app2]["Price"]; 
               $count = json_decode(file_get_contents("https://5sim.net/v1/guest/products/$country/any"), true)[$app2]["Qty"]; 
               $price = $info["nesbah"]+$p;
               if($p != null)
               $json["inline_keyboard"][]  =   [
                   ["text"=>" سيرفر1✅." , "callback_data"=>"nothings"],
                   ["text"=>$price ." ₽"  ,"callback_data"=>"B-N#$ex[1]#5sim#$price#$app2"]
                ];

 }if(in_array("man",$ser)) {      
            	$ok = $favourite["number"][$ser]["ok"];
                $country    = $numbers["num"][$ex[1]]["site-name"];
                $name       = $numbers["num"][$ex[1]]["name"];                
                $chart       = json_decode(file_get_contents("http://api.sms-man.com/stubs/handler_api.php?action=getPrices&api_key=$ApiKeySmsMan&country=".$nnn[$ex[1]]."&service=".$app1),true);
                $cost         =  $chart[$app1]["cost"] ;
                $count         =  $chart[$app1]["count"] ;
                $price        = $info["nesbah"] + $cost;
                $json["inline_keyboard"][]  =   [
                    ["text" => "سيرفر2✅." ,"callback_data"=>"nothings"],
                ["text"=>"$price ₽","callback_data"=>"B-N#$ex[1]#man#$price#$app1"]]; 
  }
  if (($app1=="whatsapp" or $app1=="wa") ) {
     
    $country    = $numbers["num"][$ex[1]]["site-name"];

    if ($country == "vietnam") {

        $json["inline_keyboard"][]=[
            ['text'=>"سيرفر 3 ✅.",'callback_data'=>"B-N#$ex[1]#vio#3#45"],
        ['text'=>"3 ₽",'callback_data'=>"B-N#$ex[1]#vio#3#45"]
    ];
    
        $json["inline_keyboard"][]=[['text'=>"وتساب اعمال  ✅.",'callback_data'=>"B-N#$ex[1]#vio#3#918"],
        ['text'=>"3 ₽",'callback_data'=>"B-N#$ex[1]#vio#3#918"]
    ];
    }

        
  }

  if(in_array("super",$ser) and ($app2 == "whatsapp" or $app2 == "telegram")) {
  	if($app2 == "whatsapp"){
  		$ap = 2;
  		$cost = 16;
  	}
  	elseif($app2 == "telegram"){
  		$ap = 5;
  		$cost = 14;
  	}
            	$ok = $favourite["number"][$ser]["ok"];
                $country    = $numbers["num"][$ex[1]]["site-name"];
                $name       = $numbers["num"][$ex[1]]["name"];                
                $price        = $info["nesbah"] + $cost;
                $json["inline_keyboard"][]  =   [["text" => "سيرفر3✅." ,"callback_data"=>"nothings"],["text"=>"$price ₽","callback_data"=>"B-N#$ex[1]#super#$price#$ap"]]; 
  }
                $json["inline_keyboard"][]  =   [["text" => "🔄 ⁞  رجوع .","callback_data"=>"server#$con#$ex[3]#$ex[4]"]];
bot("editmessagetext",[
            "chat_id"=>$chat_id,
            "text"=>"- تم إختيار الدولة ( $name ) بنجاح ✅

- يرجى إختيار السيرفر المراد الشراء منه, كل سيرفر يمتلك سعر خاص فيه, وكل سيرفر له توريده الخاص.

☑️ ⁞  التطبيق: واتسأب ( $app2 ) ." ,
            "message_id" => $message_id,
            "reply_markup" => json_encode($json)
        ]);
exit;
#==============#
elseif($ex[0] == "add"):
$web = $numbers["num"][$ex[1]]["ser"];
if($web == "5sim") { $elias = $favourite["number"][$web]["key"];
} else { $elias = $favourite["number"][$web]["key"]; }
if($elias == null) :
if($web == "5sim"):
$favourite["number"][$web]["app"] = $ex[2];
$favourite["number"][$web]["ok"] = "🌟";
$favourite["number"][$web]["ope"] = $ex[3];
$favourite["number"][$web]["key"] = $ex[1];
save($favourite , "favourite");

else:
$favourite["number"][$web]["key"] = $ex[2];
$favourite["number"][$web]["ok"] = "🌟";
$favourite["number"][$web]["key"] = $ex[1];
save($favourite , "favourite");
endif;
answer("تم إضافة الرقم الى قسم الأرقام المفضلة 🌟 \n اعمل تحديث للصفحة 🔃");

else : 
answer("تم حذف الرقم من الأرقام المفضلة 🗑");
if($web == "5sim") :
unset($favourite["number"][$web]);
save($favourite , "favourite");
else :
unset($favourite["number"][$web]);
save($favourite , "favourite");
endif;
endif;
#==============#
        elseif ( $data == "shahn" ) :
        edit ("* ⁞  مرحبا بك عزيزي* في قسم *شحن حسابك* في *بوت حماده* 🎗
* ⁞  تستطيع شحن حسابك عبر الكثير من طرق الدفع المتاحه في كافة دول الوطن العربي 🗳*


*#كريمي_إكسبرس_شمالي_جنوبي ✅*
*#نجم_حزمي_الامتياز_وعملائهم ✅*
*#رصيد_سبافون_يمن_موابيل ✅*
*#راجحي_رصيد_سوا ✅*
*#بايير_عملة_USDT ✅*
*#كروت_اسيا_تحويل_فودفون_كاش ✅*

*👨‍💻 ⁞  لشحن حسابك تواصل مع الوكيل الرسمي شحن سريع وبثواني معدودة : @TTAVIP*
",[           
                [
                ['text'=>'💳 كرت شحن','callback_data'=>'card']
                ],
                [
                ["text"=>"✅ ⁞  تواصل مع الإدارة‍💻 .", "url"=>"https://t.me/TTAVIP"]
                ],
[
["text"=>"✅ ⁞ ايداع بنك الكريمي", "url"=>"https://t.me/TTAVIP"]  
],
[
["text"=>"✅ ⁞ رصيد سبافون", "url"=>"https://t.me/TTAVIP"]
],
[
["text"=>"✅ ⁞ بايير - USTD", "url"=>"https://t.me/TTAVIP"]
],
[
["text"=>"✅ ⁞ بطائق سوا STC - موبايلي", "url"=>"https://t.me/TTAVIP"]
],
[
["text"=>"✅ ⁞ النجم +الحزمي +الامتياز....الخ", "url"=>"https://t.me/TTAVIP"]
],
[
["text"=>"✅ ⁞ عبر راجحي - اهلي - ابيان", "url"=>"https://t.me/TTAVIP"]
],
[
["text"=>"✅ ⁞ كروت اسيا -تحويل- فودفون كاش", "url"=>"https://t.me/TTAVIP"]
],
[
                ["text"=>"⏮ ⁞  القائمة الرئيسيه ♻️ .", "callback_data"=>"home"]
                ]
                ]);                  
 exit;
 #==============#
 #==============#
        elseif ( $data == "kroott" ) :
        edit ("*☑️ ⁞ هذا المتجر مخصص لشراء وشحن كروت الشحن فقط 🔽 .*",[           
                [
                ['text'=>'🎁 ⁞ شراء كروت شحن ☑️.','callback_data'=>'market_cards']
],
[
                ['text'=>'🎛  ⁞ شحن كرت 🪪.','callback_data'=>'card']
],
[
                ["text"=>"⏮ ⁞  القائمة الرئيسيه ♻️ .", "callback_data"=>"home"]
                ]
                ]);                  
 exit;
 #==============#
elseif (preg_match("/buycard#([0-9]+)#([0-9]+)#([A-z0-9]+)/",$data,$res)) :
          edit("☑️ ⁞ سيتم خصم *₽ $ex[1]*  من رصيد *حسابك* .
🛍 ⁞ مقابل *شراء* كرت شحن *₽ $ex[1]  روبل* .
🌪 ⁞ رصيدك الان هو: *"  . $point["members"][$check[$chat_id][ mail ]]["point"]
. "💰\n.*

*☑️ هل أنت موافق على ذالك أم لا!! ⬇️*" , [
           [
                ["text"=>"☑️ ⁞ نعم ، موافق .","callback_data"=>"okk#$res[1]#$res[2]#$res[3]"]
                ],
                [
                ["text"=>"❌ ⁞ لا ، الغاء .","callback_data"=>"home"]
                ],
                [
                ["text"=>"🎁 ⁞ العودة الى متجر الكروت .","callback_data"=>"market_cards"]
            ]
]);                         
exit;
#==============#
exit;
       
       elseif($data == "inffjejdw") :
       edit("⚠️ ⁞  مرحباً عزيزي $fname 🌀 . 

*- اولاً: هذا البوت مخصص لعمل ارقام وهمية لجميع مواقع التواصل الإجتماعي.*
*- ثانياً: هذا البوت لايتحمل مسؤولية الارقام في حالة أنها انسرقت او انحظرت , بمعنى: البوت غير مسؤول عن الرقم بعد شرائه.*
*- يرجى عدم استعمال الارقام في أشياء قد تغضب الله عزوجل او تنحرف عن المسار الاسلامي كالإختراقات والإبتزازات والمعاكسات وغيرها.*

*- تعليمات بسيطة حول البوت:*

*- اولاً: البوت يقوم بشراء الأرقام تلقائياً من موردين بالجملة, ثم يقوم بتجزئتها وبيعها لعملائنا الأكارم, لذلك ياعزيزي نحن لا نستطيع فحص جميع الارقام في حالة كانت مستخدمة او جديدة, ببساطه, يمكنك إلغاء الارقام المستخدمة من قبل وشراء الارقام الجديده فقط*

*- ثالثاً: يوجد نظام تصنيف في حالة كنت تبحث عن أرقام مميزة, تبحث عن رقم مختار, تلعب بالارقام (شراء,الغاء,شراء,إلغاء..الخ), سوف يتم خصم رصيد حسابك كاملاً تلقائياً.*

*- تعليمات بسيطة ومبدأيه:*

*- عند شراء رقم, قم بفحصه أولاً, ماإذا كان الرقم جديداً أو لا.*
*- لفحص الرقم, أضغط على زر (رؤية الرقم في واتساب) بعد شراء الرقم, سيقوم بتوجيهك الى الواتساب, في حالة قال لك ( الرقم ليس في واتساب ) هذا يعني ان الرقم جديد, ولم يستخدم في واتساب من قبل.*
*- اما في الحالات الأخرى فهذا يعني أن الرقم مستخدم في واتساب ولا نتحمل مسؤولية تفعيله في اي حال من الاحوال.*

*- في حالة انه لم يصل الكود في هذه النسخه, قم بعمل ارسال رسالة مجدداً في الواتساب وانتظر نصف دقيقة واضغط تحديث, في حالة انه لم يصل بعد, قم بإلغائه وشرا رقم آخر.*

*👨‍💻 ⁞  للإستفسار تواصل معنا: @TTAVIP *" , [
           [
           [ text =>"⚙ ⁞  الإدارة والدعم الفني .", callback_data =>"help"],
           ],
           [
                [ text =>"رجوع ⏪", callback_data =>"settings"],
            ]
      ]);
    exit;
 #==============#
       elseif ( preg_match("/okk#([0-9]+)#([0-9]+)#([A-z0-9]+)/",$data,$res)) :
        if($res[2] > 0) {
        if($res[1] <=  $point["members"][$check[$chat_id]['mail']]["point"] ) :
        $numbers['baageel'] += 1;
        save($numbers,'numbers');
        $acode  =   substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOBQRSTUVWXYZ"), 1, 10);
        $code   =   $numbers['baageel'].$acode;
        $balance = $point['members'][$check[$chat_id]['mail']]['point'] - $res[1];
        edit("☑️ ⁞  تم شراء *الكرت بنجاح!🎁*

🪪 ⁞  رمز الكرت : `$code`
💸 ⁞  السعر: *$res[1]*
🌪 ⁞  رصيدك السابق: *₽ $balance*

*✅ تمت العملية بنجاح.*️",
$home);
       $point["members"][$check[$chat_id]['mail']]["point"] -= $res[1];
        save($point , "point");
        $numbers[$code]['price'] = $res[1];
        save($numbers,"numbers");
        $static['cards']++;
        $static[$chat_id]['cards']++;
        save($static,"static");
        $chart[$chat_id]["buycards"][] = $code;
          done($chart);
        else : 
       answer("رصيدك غير كافي لإتمام العملية");
                  endif;
                }  else {
                  answer("لقد انتهت الكروت لهذه الفئه انتظر حتى يتم توفيرها");         
                }
                
                elseif( $ex[0]  == "help") :
        edit ("لتواصل وحل المشاكل او اي شي يواجهك في البوت يمكنك التواصل معا المدير او الوكيل  من هنا ⬇️
",[           
                [                
                ["text"=>"تواصل خاص (المدير) 👮🏻‍♂️", "url"=>"https://t.me/TTAVIP1"]
                ],
                [                
                ["text"=>"إرسال رسالة مباشرة 📬", "callback_data"=>"rdad92873948"]
                ],
                [
                ["text"=>"⏮ ⁞  القائمة الرئيسيه ♻️ .", "callback_data"=>"home"]
                ]
                ]);
        
       elseif($data == "rdad92873948"):
       edit("*💬 ⁞  قسم التواصل مع الدعم أونلاين.*

*⚜ ⁞  هنا يمكنك التواصل معنا لحل جميع المشكلات التي قد تواجهك في البوت. 💛*
*☑️ ⁞  أرسل رسالتك الآن وسوف يتم إيصالها الى الإدارة مباشرة.*

*🕰 ⁞  متواجدون طوال اليوم. ❄️*
*❎ ⁞  لاترسل الألفاظ البذيئة فضلا. ☺️🖤*", [
            [               
                ["text"=>"الغاء التواصل ⛔","callback_data"=>"home"]
            ],
            ]);
            $info[$chat_id]['mode'] = "help";
            save($info);           
exit;
elseif(preg_match("/send#([0-9])+#([0-9])+/",$data , $s)) :
send("ارسل رسالتك الآن");
$info[$chat_id]["mode"]  =   "id";
$info[$chat_id]['mid']  = $s[2];
$info[$chat_id]['idmem'] = $s[1];
save($info);
exit;
elseif($message && $chat_id == $admin && $info[$chat_id]["mode"]  == "id") :
       bot('sendmessage',[
       'chat_id' => $info[$chat_id]['idmem'],
       'text' => "تم الرد من طرف الإدارة ⬇️👮🏻‍♂️",
       'reply_to_message_id'=> $info[$chat_id]['mid']
       ]);
       
       bot(copymessage,[
            chat_id=>$info[$chat_id]['idmem'],
            message_id=>$message_id,
           from_chat_id=>$admin,
       ]);
     exit;
            elseif ($message && $info[$chat_id]['mode'] =="help") : 
            if(isset($text)) : $type = "نص"; else : $type ="ميديا"; endif;          
            bot(copymessage,[
            chat_id=>$admin,
            message_id=>$message_id,
           from_chat_id=>$chat_id,
       ]);
sendd($admin, "*📥 ⁞  رسالة جديدة ➕.*

*✅ ⁞  الشخص الذي قام بالارسال: $fname*
*Ⓜ️ ⁞  ايدي الشخص المرسل: $chat_id*
*⚠️ ⁞  نوع الرسالة: $type*

*⚜ ⁞  هل تريد الرد على رسالة العميل؟* ❓." , 
          [
            [
                ["text"=>"الرد على الرسالة ✅","callback_data"=>"send#$chat_id#$mid"],                
            ],
            ]);
            unset($info[$chat_id]["idmem"]);
            unset($info[$chat_id]["mid"]);
            save($info);
            send("*✅ ⁞  تم إرسال رسالتك للمدير بنجاح*
*♻️ ⁞  الرجاء التحلي بالصبر ريثما يتم الرد عليك 🤙🏻*");

#==============#
    elseif ( $data == "card" ):
               edit("*• ارسل الآن رمز الكرت للشحن*",$home);
               $info[$chat_id]["mode"]  =   "card";
               save($info);
     exit;
#==============#     
    elseif ( preg_match("/([A-z0-9])+/",$text) && $info[$chat_id]["mode"] == "card" ):
               $price = $numbers[$text]['price'];
               $last = $point["members"][$check[$chat_id]['mail']]["point"] - $price;
    if ( $numbers[$text]['price'] == null ):
               send("الكرت هذا غير موجود أو تم استخدامه",$home);
   else :
              $point["members"][$check[$chat_id]['mail']]["point"] += $price;
               save($point , "point");
              send("تم شحن حسابك ب $price
--------------------------
💰 ⁞  رصيدك السابق :-  $last
💵 ⁞  رصيدك الحالي :- " . $point["members"][$check[$chat_id]['mail']]["point"] . "
-------------------------
شكرا لاستخدامك البوت🌟"
, $home);
            $info[$chat_id]["mode"]   =   null;
            save($info);
            sendd($admin,"*⚜ - تم شحن كرت جديد بنجاح..!*

🎁 - الكرت : *$text\n*
🆔 - الايدي : *$chat_id*
🔥 - الرصيد: *".($point["members"][$check[$chat_id]['mail']]["point"] - $ex[4])."*
☑️ - الايميل: ".$check[$chat_id]['mail']."
");
            $static[$chat_id]['cards']++;
            $static[$chat_id]['cardcount']++;
            $static[$chat_id]['shahn']++;
            save($static,"static");
            unset($numbers[$text]['price']);
            $numbers['cards'][$code]['amount']--;
            save($numbers,"numbers");
            $chart[$chat_id]["cards"][] = $text;
            done($chart);
        endif;
        exit;
#==============#     
elseif ( $data == "How" ):
                  edit($sharh,$home);
#==============#
        elseif($data == "transfer") :
        edit("*🔘 ⁞  قسم تحويل الرصيد:*

*⚜️ ⁞  يمكنك الآن تحويل رصيد روبل من حسابك الى حساب شخص آخر بدون أي ضرائب - في الوقت الحالي - مباشرة وبسرعة. ✅*

*⚠️ ⁞  أقل مبلغ للتحويل: ₽ 20.00*
*⚠️ ⁞  أعلى مبلغ للتحويل: ₽ 1000.00*
*💸 ⁞  رصيدك : " . $point["members"][$check[$chat_id][ mail ]]["point"] . "*

*☑️ ⁞  إضغط على التالي للمتابعة. ⬇️*",  [
           [
                ["text"=>"• التالي ⏩ .","callback_data"=>"continue"],
                ],
                [
                ["text"=>"• رجوع 🔄 .","callback_data"=>"home"]
            ],
            ]);
#==============#         
elseif ($data == "info") :
if($static['conum']==null) { $static['conum']=0; }  if($static['bot']['balance']) $static['bot']['balance'] =0;
if($static['cards']==null) { $static['cards']=0; } if($static[$chat_id]['unconum']==null) { $static[$chat_id]['unconum'] =0; } 
        $mem = count($members);
        $complete = $static['conum'];
        $incomplete = $static['unconum'];
        $cardnum = $static['cards'];
        $botba = $static['bot']['balance'];
        $ready = $static['ready'];
        //user static //
if($static[$chat_id]['conum']==null) { $static[$chat_id]['conum']=0; } if($static[$chat_id]['ready']==null) { $static[$chat_id]['ready']=0; }
if($static[$chat_id]['cards']==null) { $static[$chat_id]['cards']=0; } if($static['unconum']==null) { $static['unconum'] =0; }
        $usco = $static[$chat_id]['conum'];
        $usready = $static[$chat_id]['ready'];
        $uscards = $static[$chat_id]['cards'];
        $minus    = $static[$chat_id]["minus"] ;
        $usrobel = $point["members"][$check[$chat_id]['mail']]['point'];
        $member =  count($members);
        edit("*☑️ ⁞  إحصائيات استخدام بوت : 🌻🌞*

*👬 ⁞  عدد المستخدمين النشطين: { $member }*
*✅ ⁞  عدد الأرقام المكتملة: { $complete }*
*🏷 ⁞  عدد الكروت التي تم شراوها: { $cardnum }*

*🌞 ⁞  عدد الأرقام الجاهزة المشتراة:  $ready  ☑️*

*☑️ ⁞  سجل حسابك الشخصي:*
*❇️ ⁞  عدد الأرقام الجاهزة التي تم شراؤها: { $usready }*
*✅ ⁞  إحصائيات أرقامك المكتملة: { $usco }*
*🏦 ⁞  إحصائيات كروتك المشترى: { $uscards }*
*💰 ⁞  إحصائيات الروبل المتبقي: { $usrobel ₽ }* 

*💹 ⁞  تم بدء نظام الحوسبة 2023 / 2 / 1 م*"
, [
                [                
                ["text"=>"إرسال رسالة مباشرة 📬", "callback_data"=>"rdad92873948"]
                ],
            [
                ['text'=>"رجوع 🏡",'callback_data'=>"home"],
            ]
            ]);
exit;
#==============#
            elseif($data == "continue") :
           if($point["members"][$check[$chat_id]['mail']]["point"] >20){        
            edit("حسنا قم بإرسال ايدي الشخص",$home);
            $info[$chat_id]['mode'] = "send";
            save($info);
                  } else {
        	bot("answercallbackquery",[
                "callback_query_id"=>$update->callback_query->id,
                "text"=>"رصيدك لا يكفي لهذه العملية",
                "show_alert"=>true
            ]);
                  }
            elseif( is_numeric($text) && $info[$chat_id]['mode'] == "send") :
                        $chartchat = bot('getchat',['chat_id'=>$text ])->ok;
            if($chartchat == "true") {
                        send("حسنا قم بإرسال النقاط الآن");
                        $info[$chat_id]['mode'] = "point";
                        $info[$chat_id]['idm'] = $text;
                        save($info);
        } else {
           send("هذا المستخدم غير موجود في البوت أو أنه قام بحظره"); 
           }
                 
        elseif( is_numeric($text) && $info[$chat_id]['mode'] == "point") :
        if($text >15){ 
                if($text > $point['members'][$check[$chat_id]['mail']]['point'])exit;  
                $point['members'][$check[$chat_id]['mail']]['point'] -= $text;
                //$point['members'][$info[$check[$chat_id]['mail']]['idm']]['point'] += $text;
                $point["members"][$check[$info[$chat_id]['idm']][ mail ]]["point"] += $text;
        save($point , "point");
        $last = $point['members'][$check[$chat_id]['mail']]['point'];
        $idm =$info[$chat_id]['idm'];
        send("تم شحن حساب العميل بنجاح ✅.
📟 المرسل : $fname
🧭 المستلم : [$idm](tg://user?id=$idm)
💵 المبلغ المحول : $text
💰 الرصيد المتبقي : $last");
                sendd($info[$chat_id]['idm'] , "💰 ⁞  تم تحويل ₽ $text إليك!✅ ⁞  من  $fname ");
                $info[$chat_id]['idm'] =null;
                $info[$chat_id]['mode'] =null;
                save($info);
        } else {
        	send("عذرا لا يمكنك التحويل برصيد اقل من المسموح به");
        }
        
#====BUY_NUMBER====#

elseif($el[0] == "/start") :
$code = explode("#"  , $el[1]);
if($code[0] == "buy") {
$number           = $readynumber['ready'][$code[1]]['number'];
$price                = $readynumber['ready'][$code[1]]['price'];
$now                = $readynumber['ready'][$code[1]]['now'];
$country          = $readynumber['ready'][$code[1]]['country'];
$what               = $readynumber['ready'][$code[1]]['what'];
$numbery = substr($number, 0,-6)."••••";
 if($number != null ){
 	      $keyboad['inline_keyboard'][] = [['text'=>'االحالة ⁉️','callback_data'=>'no'],['text'=>'السعـــر💲','callback_data'=>'no'],['text'=>'الدولة 🏴','callback_data'=>'no']];
           $keyboad['inline_keyboard'][] = [['text'=>"$now",'callback_data'=>"Noyesnum#$code[1]"],['text'=>$price . ".00₽",'callback_data'=>"Noyesnum#$code[1]"],['text'=>"$country",'callback_data'=>"Noyesnum#$code[1]"]];
           $keyboad['inline_keyboard'][] = [['text'=>'↩️ ⁞  القائمة الرئيسية.',"callback_data"=>"home"]];
           bot('sendmessage', [
           'chat_id' => $chat_id,
           'text' => "💯 إليك قائمة الأرقام الجاهزة للواتس اب\n👇 اضغط على احدها للشراء",
           'reply_markup'=>json_encode($keyboad)
     ]);
} else {
	send("الرقم غير موجود او قد تم شراءه");
	}}
exit;
    
elseif($data == 'readynumbers') :
if($readynumber['ready'] != null ){
               $keyboard = [];
               $keyboad['inline_keyboard'][] = [['text'=>'االحالة ⁉️','callback_data'=>'no'],['text'=>'السعـــر💲','callback_data'=>'no'],['text'=>'الدولة 🏴','callback_data'=>'no']];
foreach($readynumber['ready'] as $zero=>$val) :
               $now = $val['now'];
               $country = $val['country'];
               $price = $val['price'];
               $keyboad['inline_keyboard'][] = [['text'=>"$now",'callback_data'=>"Noyesnum#$zero"],['text'=>$price . ".00₽",'callback_data'=>"Noyesnum#$zero"],['text'=>"$country",'callback_data'=>"Noyesnum#$zero"]];
endforeach;
               $keyboad['inline_keyboard'][] = [['text'=>'تحديث الصفحة 🔂',"callback_data"=>"readynumbers"],['text'=>'↩️ ⁞  القائمة الرئيسية.',"callback_data"=>"server"]];
               bot('EditMessageText',[
               'chat_id'=>$chat_id,
               'message_id'=>$message_id,
               'text' => "💯 إليك قائمة الأرقام الجاهزة للواتس اب \n 👇 اضغط على احدها للشراء",
               'reply_markup'=>json_encode($keyboad)
            ]);
       } else {
              answer("❌ لا يتوفر أرقام جاهزة حاليا ");
  }
exit;

//قبول ورفض شراء الأرقام الجاهزة
elseif(preg_match('/(Noyesnum)/',$data)) :
$zero              = $ex[1];
$num              = $readynumber['ready'][$zero]['number'];
$price             = $readynumber['ready'][$zero]['price'];
$now              = $readynumber['ready'][$zero]['now'];
$country        = $readynumber['ready'][$zero]['country'];
$what             = $readynumber['ready'][$zero]['what'];
$number        = substr($num, 0,-6) . "••••";
$Balancee     = $point["members"][$check[$chat_id]['mail']]['point'];
$Balance       = $Balancee - $price;

if($readynumber[$chat_id]["buy"] == "stop") {
answer(" لا يمكنك شراء الرقم الجاهز في نفس وقت شراء رقم آخر قم بإلغاء الرقم السابق ثم حاول مجدداً 🌚" );

} elseif($price > $point["members"][$check[$chat_id]['mail']]['point']) {
send("⚠️ ⁞  لايوجد لديك رصيد كافي لشراء هذا الرقم!
💰 ⁞  رصيدك المتوفر ⪼ ₽". $point["members"][$check[$chat_id][ mail ]]["point"]
);
} elseif($zero == null) {
send("
❌ هذا الرقم لم يعد متاحا
♻ اضغط تحديث الصفحة
");
} else {
bot('EditMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
*☑️ أنت الان تقوم بشراء رقم جاهز من البوت 🌚
⚠️ معلومات عن الرقم الذي تريد شرائه:
🏴 الدولة: $country
📞 الرقم: $number
📲 التطبيق: واتساب - (Whatsapp)
💰 السعر: $price ₽
✨ الحالة: $now ✅
⁉️ ملاحظة: $what

🛃 رصيدك الان هو: ₽ $Balancee 💰
🔄 سيكون رصيدك بعد الشراء: ₽ $Balance 🧭

📮 هل أنت موافق على ذالك أو لا!! ⬇️*
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'نعم ✅','callback_data'=>"readdd#$zero"],['text'=>'لا ❌','callback_data'=>"readynumbers"]],
[['text'=>'↩️ ⁞  القائمة الرئيسية.','callback_data'=>"home"]]
]
])
]);
$readynumber[$chat_id]["buy"] = "stop";
save($readynumber , "readynum");

}
exit;

// التحقق من الرصيد عند شراء الرقم الجاهز
elseif(preg_match('/(readdd)/',$data)) :
$zero                 = $ex[1];
$num                 = $readynumber['ready'][$zero]['number'];
$code                = $readynumber['ready'][$zero]['code'];
$price                = $readynumber['ready'][$zero]['price'];
$country            = $readynumber['ready'][$zero]['country'];
$now                  = $readynumber['ready'][$zero]['now'];
$what                 = $readynumber['ready'][$zero]['what'];
$idnum              = substr(str_shuffle('12345689807'),1,9);


if($price > $point["members"][$check[$chat_id]['mail']]['point']) {
answer("⚠️ ⁞  لايوجد لديك رصيد كافي لشراء هذا الرقم!
💰 ⁞  رصيدك المتوفر ⪼ ₽". $point["members"][$check[$chat_id][ mail ]]["point"]
);
} elseif( $zero == null) {
answer("
❌ هذا الرقم لم يعد متاحا
♻ اضغط تحديث الصفحة
");
} else {
edit("
*تم شراء الرقم بنجاح ☑️

🔶 الدولة: $country
📞 الرقم: $num
♻️ الكود: $code
💰 السعر: $price ₽
🆔 ايدي معاملتك: $idnum
✨ الحالة: $now ✅
⁉️ ملاحظة: $what

*
",$home);
unset($readynumber['ready'][$zero]);
unset($readynumber[$chat_id]["buy"]);
save($readynumber , "readynum");
$point["members"][$check[$chat_id]['mail']]["point"] -= $price;
save($point , "point");
$static['ready']++;             
$static[$chat_id]['ready']++;             
$static['bot']['balance'] +=  $price;     
$static[$chat_id]["minus"] += $price;        
save($static,"static");             
$chart[$chat_id]["numbers"][] = $num;             
done($chart);
} 


    
elseif( $ex[0] == "B-N" ) :    
if ( $ex[3] <= $point["members"][$check[$chat_id]['mail']]["point"] ) {
	
            $name        =    $numbers["num"][$ex[1]]["name"]; //اسم السلعة//
            $web            =     $ex[2]; //اسم الموقع//
            $price         =     $ex[3] ; //السعر//
            $service      =     $ex[4];//اسم الخدمة//



            if ( $web == "vio" ) {

                $country     =     $numbers["num"][$ex[1]]["site-name"];
                      $apiviotp = file_get_contents("https://api.viotp.com/request/getv2?token=$Apikeyviotp&serviceId=$service&country=vn");            
                      $apiviotp = json_decode($apiviotp,true);
                      $statnumber = $apiviotp["success"];
                      $idnumber = $apiviotp["data"]["request_id"];
                      $number = $apiviotp["data"]["phone_number"];
            
                      
            if($number == null or $idnumber == null){
                      answer("⚠️ ◐ لاتوجد أرقام لهذا السيرفر في الوقت الحالي
            ✅ ◐ أعد الضغط علية مجددا او حاول مرة اخرئ.");
            }else {
                $number="+84".$number;
                                edit("*🔘 ⁞ تم شراء الرقم بنجاح. ☑️*

*☎️ ⁞ الرقم:* `$number`
*📮 ⁞ الكود: في إنتظار الكود ...*
*🔬 ⁞ الحالة: في الإنتظار.*
*💸 ⁞ السعر: ₽ $price*
*🅿️ ⁞ معرف العملية: 𝗕𝗢𝗧$id*

*☑️ ⁞ إضغط على الرقم لنسخة!*
*⚜ ⁞ أدخل الرقم في الواتسأب لوصول الكود، ثم أضغط على زر تحديث.*",             [
                                    [
                                        [
                                            "text"=>"↗️ - فحص حالة الرقم .",
                                            "url"=>"http://wa.me/$number"
                                        ]
                                        
                                    ],
                                    [
                                        [
                                            "text"=>"🔄 - تحديث مره واحدة.",
                                            "callback_data"=>"getcode#$number#$idnumber#vio#$price"
                                        ]
                                    ],
                                    [
                                        [
                                                                                    "text"=>"☑️ - تحديث 10 مرات 🔥. ",
                                            "callback_data"=>"getcode#$number#$idnumber#vio#$price"
                                                                                    ]
                                    ],
                                    [
                                        [
                                                                        "text"=>"⚠️ - إلغاء .",
                                "callback_data"=>"bandnumber#$num#$idnumber#$price#5sim"
                                        ]
                        ],
                        [
                            [
                                            "text"=>"↩️ - الرجوع .",
                                            "callback_data"=>"bandnumber#$number#$idnumber#$price#vio"
                                        ]
                                    ]
                                ]);
            
sendd("-1001652588567","
*☑️ - تم شراء رقم جديـد بدون الكود .*

*➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*

*☎️ - الرقم:* `$num`
*🧿 - التطبيق: $service*
*📥 - الدوله: $country*
*🔥 - الايدي:  $chat_id*
*💸 - السعر: Ꝑ$price*
*🤖 - الرصيد المتبقي: ".($point["members"][$check[$chat_id]['mail']]["point"] - $price)."*
*📨 - الايميل : ".$check[$chat_id]['mail']."*
*🔄 - معرف المشتري: @$user*
*🎦 - الموقع: soper.com*
");            
                        $info[$chat_id][$web]['check'] = "ban"; 
                        save($info);
                        $static["info"]["numbers"]["count"]  +=  1;
                        $static["info"]["numbers"]["point"]  +=  $price;
                        save($static,"static");
                        $info[$chat_id]["checker"] = "stop";
                        $info[$chat_id]["inf"] = "$number-$service-$country";
                         save($info);
                   }
             }
            
if ( $web == "5sim" ) {
	$country     =     $numbers["num"][$ex[1]]["site-name"];
          $sim5 = file_get_contents("https://api1.5sim.net/stubs/handler_api.php?api_key=$ApiKey5sim&action=getNumber&service=$service&forward=forward&operator=any&country=$country");            
          $ex_api = explode(":",$sim5);
          $idnumber = $ex_api[1];
          $num = "+" ."$ex_api[2]";
          
if($sim5 == "NO_NUMBERS" || $sim5 == "BAD_ACTION" || $sim5 == "BAD_SERVICE" || $sim5 == "ERROR_SQL" || $sim5 == "" || $num == null ){
          answer("⚠️ ◐ لاتوجد أرقام لهذا السيرفر في الوقت الحالي
✅ ◐ أعد الضغط علية مجددا او حاول مرة اخرئ.");
} elseif($sim5 == "NO_BALANCE" || $sim5 == "BAD_KEY"){
                	answer("عذرا عزيزي المشترك لقد انتهى الرصيد في الموقع تخلى بالصبر سيتم اعادة شحن الموقع قريبا 🙃 $service $country");
                    sendd($admin,"تم إيقاف النقل، إما بسبب تغير api الحساب أو بسبب نقصان الرصيد في الموقع ❌");
                    sendd($usapi["user_id"],"لقد اكتملت عملية النقل وتم الرصيد اضافة الرصيد الى حسابك");
                    unlink("stor/Api.kson");
                  } else {
                    edit("*🔘 ⁞ تم شراء الرقم بنجاح. ☑️*

*☎️ ⁞ الرقم:* `$num`
*📮 ⁞ الكود: في إنتظار الكود ...*
*🔬 ⁞ الحالة: في الإنتظار.*
*💸 ⁞ السعر: ₽ $price*
*🅿️ ⁞ معرف العملية: 𝗕𝗢𝗧$id*

*☑️ ⁞ إضغط على الرقم لنسخة!*
*⚜ ⁞ أدخل الرقم في الواتسأب لوصول الكود، ثم أضغط على زر تحديث.*",             [
                        [
                        	[
                                "text"=>"↗️ - فحص حالة الرقم .",
                                "url"=>"http://wa.me/$num"
                            ]
                            
                        ],
                        [
                            [
                                "text"=>"🔄 - تحديث مره واحدة.",
                                "callback_data"=>"getcode#$num#$idnumber#5sim#$price"
                            ]
                        ],
                        [
                            [
                                                                        "text"=>"☑️ - تحديث 10 مرات 🔥. ",
                                            "callback_data"=>"getcode#$number#$idnumber#vio#$price"
                                                                                    ]
                                    ],
                                    [
                                        [
                                "text"=>"⚠️ - إلغاء .",
                                "callback_data"=>"bandnumber#$num#$idnumber#$price#5sim"
                                ]
                        ],
                        [
                            [
                                                            "text"=>"↩️ - الرجوع .",
                                "callback_data"=>"bandnumber#$num#$idnumber#$price#5sim"
                            ]
                        ]
                    ]);
sendd("-1001652588567","
*☑️ - تم شراء رقم جديـد بدون الكود .*

*➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*

*☎️ - الرقم:* `$num`
*🧿 - التطبيق: $service*
*📥 - الدوله: $country*
*🔥 - الايدي:  $chat_id*
*💸 - السعر: Ꝑ$price*
*🤖 - الرصيد المتبقي: ".($point["members"][$check[$chat_id]['mail']]["point"] - $price)."*
*📨 - الايميل : ".$check[$chat_id]['mail']."*
*🔄 - معرف المشتري: @$user*
*🎦 - الموقع: soper.com*
");                                
            $info[$chat_id][$web]['check'] = "ban"; 
            save($info);
            $static["info"]["numbers"]["count"]  +=  1;
            $static["info"]["numbers"]["point"]  +=  $price;
            save($static,"static");
            $info[$chat_id]["checker"] = "stop";
            $info[$chat_id]["inf"] = "$num-$service-$country";
             save($info);
       }
 }
                
        
        if ( $web == "man" ) {
        	
        	$country     =     $nnn[$ex[1]]; //الدولة//
            	$man = file_get_contents("http://api.sms-man.com/stubs/handler_api.php?action=getNumber&api_key=$ApiKeySmsMan&service=$service&country=$country");
            
                $sms = explode(":",$man);
                $num = "+" ."`$sms[2]`";
                $idnumber = $sms[1];
                if ($man == "NO_NUMBERS" ) {
                answer("لا يتوفر أرقام حاليا حاول مجددا 😉");
                exit;
       } elseif($man =="NO_BALANCE" ) {
               answer("• لاتتوفر ارقام الان انتضر ريثما نقوم بشحن الموردين 🚦");                       
                  
                   } elseif($sms[0] == "ACCESS_NUMBER" ) {
                    edit("*🔘 ⁞ تم شراء الرقم بنجاح. ☑️*

*☎️ ⁞ الرقم:* `$num`
*📮 ⁞ الكود: في إنتظار الكود ...*
*🔬 ⁞ الحالة: في الإنتظار.*
*💸 ⁞ السعر: ₽ $price*
*🅿️ ⁞ معرف العملية: 𝗕𝗢𝗧$id*

*☑️ ⁞ إضغط على الرقم لنسخة!*
*⚜ ⁞ أدخل الرقم في الواتسأب لوصول الكود، ثم أضغط على زر تحديث.*",[
                        
                        [
                        	[
                                "text"=>"↗️ - فحص حالة الرقم .",
                                "url"=>"http://wa.me/$num"
                            ]
                            
                        ],
                        [
                            [
                                "text"=>"🔄 - تحديث مره واحدة.",
                                "callback_data"=>"getcode#$num#$idnumber#man#$price"
                            ]
                        ],
                        [
                            [
                                                                        "text"=>"☑️ - تحديث 10 مرات 🔥. ",
                                            "callback_data"=>"getcode#$number#$idnumber#vio#$price"
                                                                                    ]
                                    ],
                                    [
                                        [
                                                            "text"=>"⚠️ - إلغاء .",
                                "callback_data"=>"bandnumber#$num#$idnumber#$price#5sim"
                            ]
                        ],
                        [
                            [
                                "text"=>"⬅️ - رجوع .",
                                "callback_data"=>"bandnumber#$num#$idnumber#$price#man"
                            ]
                        ]
                    ]);
                $info[$chat_id][$web]['check'] = "ban"; 
            save($info);
            $static["info"]["numbers"]["count"]  +=  1;
            $static["info"]["numbers"]["point"]  +=  $price;
            save($static,"static");
            $info[$chat_id]["inf"] = "$num-$service-$country";
            $info[$chat_id]["checker"] = "stop";
             save($info);
sendd("-1001652588567","
*☑️ - تم شراء رقم جديـد بدون الكود .*

*➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*

*☎️ - الرقم:* `$num`
*🧿 - التطبيق: $service*
*📥 - الدوله: $country*
*🔥 - الايدي:  $chat_id*
*💸 - السعر: Ꝑ$price*
*🤖 - الرصيد المتبقي: ".($point["members"][$check[$chat_id]['mail']]["point"] - $price)."*
*📨 - الايميل : ".$check[$chat_id]['mail']."*
*🔄 - معرف المشتري: @$user*
*🎦 - الموقع: soper.com*
");            
      }  else {
      	
      	answer("لا يوجد أرقام حاليا حاول مجددا ( hmm🙂 )");
      }
   }          
   ///////
   if ( $web == "super" ) {
   	$country     =     $sup[$ex[1]]; //الدولة//
		$url = "https://www.supersms.ml/api/getnumber?channel=1&country=".$country."&pid=".$service."&secret_key=$api_key_super";
          $sim5 = json_decode(file_get_contents($url), true);
          $num = str_replace('+','',$sim5["phone"]);
          $taskid = $sim5["taskid"];
if($sim5["message"] == "Phone number not found. Please try again later. (Suggestion: Try another country or another channel)" || $sim5["message"] == "8 per 1 minute" || $sim5["message"] == "The phone number is not available. Please try again later. (Suggestion: Try another country or another channel)"){
          answer("⚠️ ◐ لاتوجد أرقام لهذا السيرفر في الوقت الحالي
✅ ◐ أعد الضغط علية مجددا او حاول مرة اخرئ.");
} elseif($sim5["message"] == "Insufficient Balance" || $sim5["message"] == "No user found."){
                	answer("عذرا عزيزي المشترك لقد انتهى الرصيد في الموقع تخلى بالصبر سيتم اعادة شحن الموقع قريبا 🙃");
                    sendd($admin,"تم إيقاف النقل، إما بسبب تغير api الحساب أو بسبب نقصان الرصيد في الموقع ❌");
                    sendd($usapi["user_id"],"لقد اكتملت عملية النقل وتم الرصيد اضافة الرصيد الى حسابك");
                    unlink("stor/Api.kson");
                  } elseif($num != null) {
                    edit("*🔘 ⁞ تم شراء الرقم بنجاح. ☑️*

*☎️ ⁞ الرقم:* `$num`
*📮 ⁞ الكود: في إنتظار الكود ...*
*🔬 ⁞ الحالة: في الإنتظار.*
*💸 ⁞ السعر: ₽ $price*
*🅿️ ⁞ معرف العملية: 𝗕𝗢𝗧$id*

*☑️ ⁞ إضغط على الرقم لنسخة!*
*⚜ ⁞ أدخل الرقم في الواتسأب لوصول الكود، ثم أضغط على زر تحديث.*",             [
                        [
                        	[
                                "text"=>"↗️ - فحص حالة الرقم .",
                                "url"=>"http://wa.me/$num"
                            ]
                            
                        ],
                        [
                            [
                                "text"=>"🔄 - تحديث مره واحدة.",
                                "callback_data"=>"getcode#$num#$taskid#super#$price"
                            ]
                        ],
                        [
                            [
                                                                        "text"=>"☑️ - تحديث 10 مرات 🔥. ",
                                            "callback_data"=>"getcode#$number#$idnumber#vio#$price"
                                                                                    ]
                                    ],
                                    [
                                        [
                                                            "text"=>"⚠️ - إلغاء .",
                                "callback_data"=>"bandnumber#$num#$idnumber#$price#5sim"
                            ]
                        ],
                        [
                            [
                                "text"=>"↩️ - الرجوع .",
                                "callback_data"=>"bandnumber#$num#$taskid#$price#super"
                            ]
                        ]
                    ]
);
sendd("-1001652588567","
*☑️ - تم شراء رقم جديـد بدون الكود .*

*➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*

*☎️ - الرقم:* `$num`
*🧿 - التطبيق: $service*
*📥 - الدوله: $country*
*🔥 - الايدي:  $chat_id*
*💸 - السعر: Ꝑ$price*
*🤖 - الرصيد المتبقي: ".($point["members"][$check[$chat_id]['mail']]["point"] - $price)."*
*📨 - الايميل : ".$check[$chat_id]['mail']."*
*🔄 - معرف المشتري: @$user*
*🎦 - الموقع: soper.com*
");            
            $info[$chat_id][$web]['check'] = "ban"; 
            save($info);
            $static["info"]["numbers"]["count"]  +=  1;
            $static["info"]["numbers"]["point"]  +=  $price;
            save($static,"static");
            $info[$chat_id]["inf"] = "$num-$service-$country";
            $info[$chat_id]["checker"] = "stop";
             save($info);
       }
 }
   //////
        } else {
        answer("⚠️ ⁞  لايوجد لديك رصيد كافي لشراء هذا الرقم!
💰 ⁞  رصيدك المتوفر ⪼ ₽ ". $point["members"][$check[$chat_id][ mail ]]["point"]
);
        }
        exit;
#================================#
    elseif ( $ex[0] == "getcode" && $ex[3] == "5sim" ) :
        $chartcode5sim  =   file_get_contents("http://api1.5sim.net/stubs/handler_api.php?api_key=$ApiKey5sim&action=getStatus&id=$ex[2]");
        $exx    =   explode(":",$chartcode5sim);
        
        if ( $exx[0] == "STATUS_OK" ) {
            $num = $ex[1];
            $code = $exx[1];
            $xc = explode("-",$info[$chat_id]["inf"]);
            edit("*⚜ - تم وصول الكود بنجاح ✔️.*

*📞 - NUMPER:* `$num` 
*💬 - CODE:* `$code` 

*🔱 - تم خصم سعر الرقم من رصيدك*");
sendd("-1001652588567","
*☑️ - تم شراء رقم ناجح مع الكود!*

*➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*
*☎️ - الرقم:- ".$xc[0]."*
*💬 - الكود:- ".$code."*
*📥 - الدولة:- ".$xc[2]."*
*🧿- التطبيق:- ".$xc[1]."*
*🔥 - الرصيد:- ".($point["members"][$check[$chat_id][ mail ]]["point"] - $ex[4])."*
*🏋 - الايدي:- ".$chat_id."*
*💸 - السعر:- ".$ex[4]."*
*📨 - الايميل:- ".$check[$chat_id][ mail ]."*
*🔄 - معرف المشتري: @$user*
*🎦 - الموقع:- 5sim.net*
");
            file_get_contents("http://api1.5sim.net/stubs/handler_api.php?api_key=$ApiKey5sim&action=setStatus&status=6&id=$ex[2]");
            $static['conum'] ++;
            $static[$chat_id]['conum']++;
            $static[$chat_id]['robel']++;
            $static['bot']['balance'] +=  $price;
            save($static,"static");
            $point["members"][$check[$chat_id]['mail']]["point"] -= $ex[4];
            save($point, "point");
            
            unset($info[$chat_id]["checker"]);
             save($info);
            $chart[$chat_id]["numbers"][] = $code;
            done($chart);
        } else {
            answer("❌ - لم يصل الكود الئ الآن حاول بعد 5 دقائق..");
        }
              
        
    elseif ( $ex[0] == "getcode" && $ex[3] == "man" ):
    
        $man    =   file_get_contents("http://api.sms-man.com/stubs/handler_api.php?action=getStatus&api_key=$ApiKeySmsMan&id=$ex[2]");
        if( $man == "STATUS_WAIT_CODE" || $man == "STATUS_WAIT_RETRY"  ) {
        	answer("❌ - لم يصل الكود الئ الآن حاول بعد 5 دقائق..");
        } elseif($sms == "STATUS_CANCEL") {
        	answer("انتهت مهلة الرقم حاول مرة أخرى");
        } else {
        	$sms = explode(":",$man);
            $num = $ex[1];
            $code = $sms[1];  
            $xc = explode("-",$info[$chat_id]["inf"]);
  if($code == null) :       
           answer("لم يصل الكود الى الآن تأكد من ان الرقم غير محظور او تم استخدامه");
  else :
            edit("*⚜ - تم وصول الكود بنجاح ✔️.*

*📞 - NUMPER:* `$num` 
*💬 - CODE:* `$code` 

*🔱 - تم خصم سعر الرقم من رصيد من رصيدك *");
sendd("-1001652588567","
*☑️ - تم شراء رقم ناجح مع الكود!*

*➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*
*☎️ - الرقم:- ".$xc[0]."*
*💬 - الكود:- ".$code."*
*📥 - الدولة:- ".$xc[2]."*
*🧿- التطبيق:- ".$xc[1]."*
*🔥 - الرصيد:- ".($point["members"][$check[$chat_id][ mail ]]["point"] - $ex[4])."*
*🏋 - الايدي:- ".$chat_id."*
*💸 - السعر:- ".$ex[4]."*
*📨 - الايميل:- ".$check[$chat_id][ mail ]."*
*🔄 - معرف المشتري: @$user*
*🎦 - الموقع:- smsman.com*
");            
            file_get_contents("http://api.sms-man.com/stubs/handler_api.php?action=setStatus&api_key=$ApiKeySmsMan&id=$ex[2]&status=6");  
            $static['conum'] ++;
            $static[$chat_id]['conum']++;
            $static[$chat_id]['robel']++;
            $static['bot']['balance'] +=  $price;
            save($static,"static");
            $point["members"][$check[$chat_id]['mail']]["point"] -= $ex[4];
            save($point, "point");
            
            $chart[$chat_id]["numbers"][] = $code;
            done($chart);
            unset($info[$chat_id]["checker"]);
             save($info);
            endif;
        }
      elseif ( $ex[0] == "getcode" && $ex[3] == "vio" ):

            $ch_number = file_get_contents("https://api.viotp.com/session/getv2?requestId=$ex[2]&token=".$Apikeyviotp);
        
            $ch_number = json_decode($ch_number,true);
            $statuscode = $ch_number["data"]["Status"];
              if($statuscode != 1){
                answer("❌ - لم يصل الكود الئ الآن حاول بعد 5 دقائق..");
              }
              else
              { 
                $num=$ex[2];
                $code = $ch_number["data"]["Code"];  
               
            $xc = explode("-",$info[$chat_id]["inf"]);
        if($code == null) :       
               answer("لم يصل الكود الى الآن تأكد من ان الرقم غير محظور او تم استخدامه");
        else :
                edit("*⚜ - تم وصول الكود بنجاح ✔️.*
        
        *📞 - NUMPER:* `$num` 
        *💬 - CODE:* `$code` 
        
        *🔱 - تم خصم سعر الرقم من رصيد من رصيدك *");
        sendd("-1001652588567","
        *☑️ - تم شراء رقم ناجح مع الكود!*
        
        *➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*
        *☎️ - الرقم:- ".$xc[0]."*
        *💬 - الكود:- ".$code."*
        *📥 - الدولة:- ".$xc[2]."*
        *🧿- التطبيق:- ".$xc[1]."*
        *🔥 - الرصيد:- ".($point["members"][$check[$chat_id][ mail ]]["point"] - $ex[4])."*
        *🏋 - الايدي:- ".$chat_id."*
        *💸 - السعر:- ".$ex[4]."*
        *📨 - الايميل:- ".$check[$chat_id][ mail ]."*
        *🔄 - معرف المشتري: @$user*
        *🎦 - الموقع:- vio.com*
        ");
                $static['conum'] ++;
                $static[$chat_id]['conum']++;
                $static[$chat_id]['robel']++;
                $static['bot']['balance'] +=  $price;
                save($static,"static");
                $point["members"][$check[$chat_id]['mail']]["point"] -= $ex[4];
                save($point, "point");
              
                $chart[$chat_id]["numbers"][] = $code;
                done($chart);
                unset($info[$chat_id]["checker"]);
                 save($info);
                endif;
            }
       
        elseif ( $ex[0] == "getcode" && $ex[3] == "super" ):
        $url    =   "https://www.supersms.ml/api/getcode?taskid=$ex[2]&secret_key=$api_key_super";
        $super = json_decode(file_get_contents($url), true);
        $mes = $super["message"];
        if( $mes == "SMS not yet received. Try again!") {
        	answer("❌ - لم يصل الكود الئ الآن حاول بعد 5 دقائق..");
        } elseif($mes == "Task ID is invalid.") {
        	answer("انتهت مهلة الرقم حاول مرة أخرى");
        } else {
        	
            $num = $super["phone"];
            $code = $super["code"];  
            $xc = explode("-",$info[$chat_id]["inf"]);
  if($code == null) :       
           answer("لم يصل الكود الى الآن تأكد من ان الرقم غير محظور او تم استخدامه");
  else :
            edit("*⚜ - تم وصول الكود بنجاح ✔️.*

*📞 - NUMPER:* `$num` 
*💬 - CODE:* `$code` 

*🔱 - تم خصم سعر الرقم من رصيد من رصيدك *");
sendd("-1001652588567","
*☑️ - تم شراء رقم ناجح مع الكود!*

*➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖➖*
*☎️ - الرقم:- ".$xc[0]."*
*💬 - الكود:- ".$code."*
*📥 - الدولة:- ".$xc[2]."*
*🧿- التطبيق:- ".$xc[1]."*
*🔥 - الرصيد:- ".($point["members"][$check[$chat_id][ mail ]]["point"] - $ex[4])."*
*🏋 - الايدي:- ".$chat_id."*
*💸 - السعر:- ".$ex[4]."*
*📨 - الايميل:- ".$check[$chat_id][ mail ]."*
*🔄 - معرف المشتري: @$user*
*🎦 - الموقع:- soper.com*
");
            $static['conum'] ++;
            $static[$chat_id]['conum']++;
            $static[$chat_id]['robel']++;
            $static['bot']['balance'] +=  $price;
            save($static,"static");
            $point["members"][$check[$chat_id]['mail']]["point"] -= $ex[4];
            save($point, "point");
          
            $chart[$chat_id]["numbers"][] = $code;
            done($chart);
            unset($info[$chat_id]["checker"]);
             save($info);
            endif;
        }
 #=================================#
    elseif ( $ex[0] == "bandnumber" && $ex[4] == "5sim" ):
        $sim5    =   file_get_contents("http://api1.5sim.net/stubs/handler_api.php?api_key=$ApiKey5sim&action=getStatus&id=$ex[2]");
        $exx    =   explode(":",$sim5);
        if ( $exx[0] == "STATUS_OK" ) {
            $num = $ex[1];
            $code = $exx[1];
            edit("لم يتم الحظر لانك طلبت الكود وتم استلامه في الموقع الرقم : $num \nالكود : $code \nالحالة مكتملة");
            file_get_contents("http://api1.5sim.net/stubs/handler_api.php?api_key=$ApiKey5sim&action=setStatus&status=6&id=$ex[2]");
            $static['conum'] ++;
            $static[$chat_id]['conum']++;
            save($static,"static");
            unset($info[$chat_id]["checker"]);
             save($info);
        }else{
            //عند الحظر
            edit("✅ - تم إلغاء *الرقم* بنجاح !

🔰 - الرقم: *تم الإلغاء بنجاح ✔️*
⚠️ - الحالة: *ملغية*
⚜ - الكود: *الكود لم يصل الئ الان .. 🛍*
*📋 - تم ارجاع سعر الرقم الئ حسابك بنجاح* ",$home);
            
            file_get_contents("http://api1.5sim.net/stubs/handler_api.php?api_key=$ApiKey5sim&action=setStatus&status=8&id=$ex[2]");
            $static['unconum'] ++;
            $static[$chat_id]['unconum']++;
            save($static,"static");
            unset($info[$chat_id]["checker"]);
             save($info);
        }
           #//////#
           elseif ( $ex[0] == "bandnumber" && $ex[4] == "super" ):
        $url    =   "https://www.supersms.ml/api/getcode?taskid=$ex[2]&secret_key=$api_key_super";
        $super = json_decode(file_get_contents($url), true);
        if ( $super["code"] != null ) {
            $num = $super["phone"];
            $code = $super["code"];
            edit("لم يتم الحظر لانك طلبت الكود وتم استلامه في الموقع الرقم : $num \nالكود : $code \nالحالة مكتملة");
            file_get_contents("http://api1.5sim.net/stubs/handler_api.php?api_key=$ApiKey5sim&action=setStatus&status=6&id=$ex[2]");
            $static['conum'] ++;
            $static[$chat_id]['conum']++;
            save($static,"static");
            unset($info[$chat_id]["checker"]);
             save($info);
        }else{
            //عند الحظر
            edit("✅ - تم إلغاء *الرقم* بنجاح !

🔰 - الرقم: *تم الإلغاء بنجاح ✔️*
⚠️ - الحالة: *ملغية*
⚜ - الكود: *الكود لم يصل الئ الان .. 🛍*
*📋 - تم ارجاع سعر الرقم الئ حسابك بنجاح*",$home);
            
            file_get_contents("https://www.supersms.ml/api/releasenumber?secret_key=$api_key_super&phone=$ex[1]");
            $static['unconum'] ++;
            $static[$chat_id]['unconum']++;
            save($static,"static");
            unset($info[$chat_id]["checker"]);
             save($info);
        }
        
elseif ( $ex[0] == "bandnumber" && $ex[4] == "vio" ):

    $ch_number = file_get_contents("https://api.viotp.com/session/getv2?requestId=$idnum&token=".$Apikeyviotp);
    $ch_number = json_decode($ch_number,true);
    $statuscode = $ch_number["data"]["Status"];

    if($statuscode == 1){
     
        $num = $ex[1];
        $code =$ch_number["data"]["Code"];
        edit("لم يتم الحظر لانك طلبت الكود وتم استلامه في الموقع الرقم : $num \nالكود : $code \nالحالة مكتملة");
        $static['conum'] ++;
        $static[$chat_id]['conum']++;
        save($static,"static");
        unset($info[$chat_id]["checker"]);
         save($info);
    }else{
        //عند الحظر
        edit("✅ - تم إلغاء *الرقم* بنجاح !

🔰 - الرقم: *تم الإلغاء بنجاح ✔️*
⚠️ - الحالة: *ملغية*
⚜ - الكود: *الكود لم يصل الئ الان .. 🛍*
*📋 - تم ارجاع سعر الرقم الئ حسابك بنجاح*",$home);
        $static['unconum'] ++;
        $static[$chat_id]['unconum']++;
        save($static,"static");
        unset($info[$chat_id]["checker"]);
         save($info);
    }
           #//////#
    elseif ( $ex[0] == "bandnumber" && $ex[4] == "man" ):
        $man    =   file_get_contents("http://api.sms-man.com/stubs/handler_api.php?action=getStatus&api_key=$ApiKeySmsMan&id=$ex[2]");
        $sms = explode(":",$man);
            $num = $ex[1];
            $code = $sms[1];  
        if ( $code != null ){//عند استلام الكود في حالة وجوده لكن تم ضغط زر الحظر
            $num = $ex[1];
            edit("لم يتم الحظر لانك طلبت الكود وتم استلامه في الموقع الرقم : $num \nالكود : $code \nالحالة مكتملة");
            file_get_contents("http://api.sms-man.com/stubs/handler_api.php?action=setStatus&api_key=$ApiKeySmsMan&id=$ex[2]&status=6");  
            $static['conum'] ++;
            $static[$chat_id]['conum']++;
            save($static,"static");
            unset($info[$chat_id]["checker"]);
             save($info);
        } else {
            //عند الحظر
            edit("*• تم الغاء شراء الرقم بنجاح ✅.*
*• ولم يتم خصم اي شيئ من رصيدك 🔰.*",$home);
            
            file_get_contents("http://api.sms-man.com/stubs/handler_api.php?action=setStatus&api_key=$ApiKeySmsMan&id=$ex[2]&status=8"); 
            $static['unconum'] ++;
            $static[$check[$chat_id]['mail']]['unconum']++;
            save($static,"static");
            unset($info[$chat_id]["checker"]);
             save($info);
        }
        exit;
        
        elseif($data == "market_cards") : 
        $json = [];
        $json["inline_keyboard"][]  =   [["text"=>"☑️ ⁞ الكمية 💸 ⁞ السعر 🎁• رمز الكرت.","callback_data"=>"card_price"]];
        
        foreach ($numbers['cards'] as $code => $card  ) :
        if($code != null){
        $amount = $numbers['cards'][$code]['amount'];
        $price      = $numbers['cards'][$code]['price'];
        $cod        = substr($code, 0,-6)."×××××";
        $json["inline_keyboard"][]  =   [["text"=>"•($cod) ($price ₽) ($amount)🎁🌪🔥•","callback_data"=>"buycard#$price#$amount#$code"]];
        }
        endforeach;
        $json["inline_keyboard"][]  =   [['text'=>'تحديث الصفحة 🔂',"callback_data"=>"market_cards"],['text'=>'↩️ ⁞  القائمة الرئيسية.',"callback_data"=>"home"]];
        bot("editmessagetext",[
            "chat_id"=>$chat_id,
             "message_id" => $message_id,
            "text" => "🛄 ⁞ إليك متجر الكروت الجاهزة الشحن الخاص بالبوت 👇.

🛍 ⁞ يمكنك شراء الكرت وشحنه في حساب آخر ♻️.

☑️ ⁞ هذا المتجر مخصص لبيع كروت الشحن فقط 🔽 .",
            "reply_markup" => json_encode($json)
        ]);
        exit;
        
        elseif($data == "cCard") :
             	if($chart[$chat_id]["cards"] != null) :
             	foreach($chart[$chat_id]["cards"] as $val):
                 $cards .= "`$val`" . "\n";
                 endforeach;
       edit("سجل الكروت الذي قمت بشحنها  \n $cards");
       else : 
       answer("أنت لم تقم بشحن كرت الى الآن 🤔🤔");
       endif;
       exit;
       
elseif($data == "cNumber") :
             	if($chart[$chat_id]["numbers"] != null) :
foreach($chart[$chat_id]["numbers"] as $val):
                 $nums .= "`$val`" . "\n";
                 endforeach;
       edit("سجل الأرقام الذي قمت بشرائها \n $nums");
else : 
       answer("❌ لا يوجد سجل لك! 👌 لم تقم بشراء أي رقم حتى الآن");
       endif;
       exit;
       elseif($data == "cCardBuy"):
       if($chart[$chat_id]["buycards"] != null) :
             	foreach($chart[$chat_id]["buycards"] as $val):
                 $buycards .= "`$val`" . "\n";
                 endforeach;
       edit("سجل الكروت الذي قمت بشرائها \n $buycards");
       else : 
       answer("❌ لا يوجد سجل لك! 👌 لم تقم بشراء أي كرت حتى الآن");
       endif;
       exit;
    endif;
    
    
#=========================================================================#
else:
    die("@Baageel_Programmer");
endif;
include("login.php");

