<?php

return [
	'accepted'=>'必須接受:attribute。',
	'active_url'=>':attribute並非一個有效的網址。',
	'after'=>':attribute必須要在:date之後。',
	'after_or_equal'=>':attribute必須要在:date之後或相等。',
	'alpha'=>':attribute只能以字母組成。',
	'alpha_dash'=>':attribute只能以字母、數字及斜線組成。',
	'alpha_num'=>':attribute只能以字母及數字組成。',
	'array'=>':attribute必須為陣列。',
	'before'=>':attribute必須要在:date之前。',
	'before_or_equal'=>':attribute必須要在:date之前或相等。',
	'between'=>[
		'numeric'=>':attribute必須介於:min和:max之間。',
		'file'=>':attribute必須介於:min和:maxKB之間。',
		'string'=>':attribute必須介於:min和:max個字元之間。',
		'array'=>':attribute必須介於:min和:max個元素之間。',
		],
		'boolean'=>':attribute必須為布林值。',
		'confirmed'=>':attribute確認欄位的輸入並不相符',
		'date'=>':attribute並非一個有效的日期。',
		'date_equals'=>':attribute必須和:date相等',
		'date_format'=>':attribute與:format格式不相符。',
		'different'=>':attribute與:other必須不同。',
		'digits'=>':attribute必須是:digits位數字。',
		'digits_between'=>':attribute必須介於:min至:max位數字。',
		'dimensions'=>':attribute不符合圖片尺寸',
		'distinct'=>':attribute已經存在。',
		'email'=>':attribute不是有效的E-mail格式',
		'ends_with'=>':attribute必須以:values作為結束。',
		'exists'=>'所選擇的:attribute選項無效',
		'file'=>':attribute必須是一個檔案。',
		'filled'=>':attribute不能為空。',
		'gt'=>[
			'numeric'=>':attribute必須大於:value。',
			'file'=>':attribute必須大於:valueKB。',
			'string'=>':attribute必須大於:value個字元。',
			'array'=>':attribute必須大於:value個元素。',
			],
			'gte'=>[
				'numeric'=>':attribute必須大於等於:value。',
				'file'=>':attribute必須大於等於:valueKB。',
				'string'=>':attribute必須大於等於:value個字元。',
				'array'=>':attribute必須大於等於:value個元素。',
				],
			'image'=>':attribute必須是一張圖片。',
			'in'=>'所選擇的:attribute選項無效。',
			'in_array'=>':attribute沒有在:other中。',
			'integer'=>':attribute必須是一個整數。',
			'ip'=>':attribute不是一個有效的IP網址。',
			'ipv4'=>':attribute不是一個有效的IPv4網址。',
			'ipv6'=>':attribute不是一個有效的IPv6網址。',
			'json'=>':attribute不是一個有效的JSON字串。',
			'lt'=>[
				'numeric'=>':attribute必須小於:value。',
				'file'=>':attribute必須小於:valueKB。',
				'string'=>':attribute必須小於:value個字元。',
				'array'=>':attribute必須小於:value個元素。',
				],
				'lte'=>[
					'numeric'=>':attribute必須小於等於:value。',
					'file'=>':attribute必須小於等於:valueKB。',
					'string'=>':attribute必須小於等於:value個字元。',
					'array'=>':attribute必須小於等於:value個元素。',
					],
					'max'=>[
						'numeric'=>':attribute不能超過:max。',
						'file'=>':attribute不能超過:maxKB。',
						'string'=>':attribute不能超過:max個字元。',
						'array'=>':attribute不能超過:max個元素。',
						],
						'mimes'=>':attribute必須為:values的檔案。',
						'mimetypes'=>':attribute必須為:values的檔案。',
						'min'=>[
							'numeric'=>':attribute不能小於:min。',
							'file'=>':attribute不能小於:minKB。',
							'string'=>':attribute不能小於:min個字元。',
							'array'=>':attribute不能小於:min個元素。',
							],
							'not_in'=>'所選擇的:attribute選項無效。',
							'not_regex'=>':attribute格式錯誤。',
							'numeric'=>':attribute必須是一個數字。',
							'present'=>':attribute必須是百分比。',
							'regex'=>':attribute格式錯誤。',
							'required'=>':attribute不能為空。',
							'required_if'=>'當:other是:value時，:attribute不能為空。',
							'required_unless'=>'當:other不是:value時，:attribute不能為空。',
							'required_with'=>'當:values出現時:attribute不能為空。',
							'required_with_all'=>'當:values出現時:attribute不能為空。',
							'required_without'=>'當:values為空時:attribute不能為空。',
							'required_without_all'=>'當:values都沒出現時:attribute不能為空。',
							'same'=>':attribute與:other必須相同。',
							'size'=>[
								'numeric'=>':attribute的大小必須是:size。',
								'file'=>':attribute的大小必須是:sizeKB。',
								'string'=>':attribute必須是:size個字元。',
								'array'=>':attribute必須有:size個元素。',
								],
								'starts_with'=>':attribute必須以:values其中之一開始。',
								'string'=>':attribute必須是一個字串。',
								'timezone'=>':attribute必須是一個正確的時區值。',
								'unique'=>':attribute已經存在。',
								'uploaded'=>':attribute上傳失敗。',
								'url'=>':attribute格式錯誤。',
								'uuid'=>':attribute必須是一個有效的UUID值。',

								'custom'=>[
									'attribute-name'=>[
										'rule-name'=>'custom-message',
										],
								],

									    'attributes' => [
									            'name' => '暱稱',
									            'account' => '帳號',
									            'password' => '密碼',
									            'password_confirm' => '密碼確認',
									        ],
							];

