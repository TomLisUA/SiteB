<?php
return [
    'stripe'=>['KRW'=>0,'JPY'=>0],
    'paypal_standrd'=>['type'=>2],//0. PayPal Standard Payment post  1.Simple Payment   2.Post containing user information
    'paypal_subscriptions'=>['type'=>0], //PayPal Subscription: 0. API Version, 1. Old Subscription
    'subscription_standrd'=>['type'=>1], //Subscription Form: 0. Post, 1. Get
    
    'env'           =>0 ,// 1.sandbox 0.live
     'gateway_orderurl'       =>"https://gateway.muadata.us/info.php",
    'gateway_notifyurl'       =>"https://gateway.muadata.us/notify.php",
    'gateway_posturl'       =>"https://gateway.muadata.us/index.php",
    'digitalgift'=>
        [
            'env'=>0, 
            
            
            'product'=>[
                [   
                    [
                    'amount'=>"2500",
                    "currency"=>"USD",    
                    "sku"=>"",
                    "imgUrl"=>"",
                    "productName"=>"",
                    "productTermsAndConditions"=>"",
                    ],
                    [
                    'amount'=>"5000",    
                    "currency"=>"",
                    "sku"=>"",
                    "imgUrl"=>"",
                    "productName"=>"",
                    "productTermsAndConditions"=>"",
                    ],
                    [
                    'amount'=>"10000",    
                    "currency"=>"",
                    "sku"=>"",
                    "imgUrl"=>"",
                    "productName"=>"",
                    "productTermsAndConditions"=>"",
                    ],
                    [
                    'amount'=>"1",    
                    "currency"=>"USD",
                    "sku"=>"US-03-296-001-00V-000",
                    "imgUrl"=>"https://www.paypalobjects.com/digitalassets/c/gifts/media/catalog/product/l/o/lowes.png",
                    "productName"=>"Lowe's Gift Card",
                    "productTermsAndConditions"=>"<h2 style=\"font-size: 18px; font-weight: normal;\">Lowe's Terms and Conditions</h2>\n<p>This is not a credit/debit card and has no implied warranties. This Gift Card is not redeemable for cash unless required by law and cannot be used to make payments on any charge account. Lowe&rsquo;s&reg; reserves the right to deactivate or reject any Gift Card issued or procured, directly or indirectly, in connection with fraudulent actions, unless prohibited by law. Lost or stolen Gift Cards can only be replaced upon presentation of original sales receipt for any remaining balance. It will be void if altered or defaced. To check your Lowe&rsquo;s&reg; Gift Card balance, visit <a href=\"http://www.lowes.com/cd_Gift+Cards_1377700830319_\" target=\"_blank\">Lowes.com/GiftCards</a>, call 1-800-560-7172 or see the Customer Service Desk in any Lowe&rsquo;s&reg; store. &copy;2022 Lowe&rsquo;s, LOWE&rsquo;S and the Gable Mansard Design are registered trademarks of LF, LLC.&nbsp;</p>",
                    ]
                ]    
            ],

    
    
        ],
     
     
     'digital'=>'{"operationName":"createPayment","variables":{"sessionData":{"utm_source":""},"cartInfo":{"cartItems":[{"quantity":1,"productName":"Apple Gift Card - App Store, iTunes, iPhone, iPad, Airpods, Macbook, accessories and more (Email Delivery)","productTermsAndConditions":"<!-- expand-panel-tnc -->\n<!--div id=\"termsDescription\"-->\n<p>Valid only for U.S. transactions in Apple properties. For assistance, visit <a href=\"https://support.apple.com/en-us/HT201195\" target=\"_blank\">support.apple.com/giftcard</a> or call 1-800-275-2273. Not redeemable at Apple resellers or for cash, and no resale, refunds, or exchanges, except as required by law.\nApple is not responsible for unauthorized use. Terms apply; see <a href=\"https://www.apple.com/legal/internet-services/itunes/giftcards/us/terms.html\" target=\"_blank\">apple.com/us/go/legal/gc,</a>. Issued by Apple Value Services, LLC (AVS). © 2022 Apple Inc. All rights reserved.</p>","urlKey":"brands/apple","sku":"US-01-016-001-00V-000","imgUrl":"https://pics.paypal.com/00/c/gifts/de/apple-new-top-2.png","isGifting":true,"recipientEmail":"{email}","senderName":"","note":"","selectedDay":"'.gmdate('D, d M Y H:i:s T',time()+8*3600).'-0500 (Central Daylight Time)","customAmount":{"currency_code":"{currency}","value":{amount}},"amountToPay":{"currency_code":"{currency}","value":"{amount}"},"totalAmount":{"currency_code":"{currency}","value":"{amount}"},"discounts":[{"id":"","name":"","amount":""}]}]},"stctype":""},"query":"mutation createPayment($cartInfo: CartInfo!, $stctype: String!, $sessionData: SessionData) {\n  createPayment(cartInfo: $cartInfo, stctype: $stctype, sessionData: $sessionData) {\n    ecToken\n    promotionSoldOutErrors {\n      sku\n    }\n  }\n}"}',
     
        
    ];