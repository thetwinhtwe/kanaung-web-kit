<?php
/**
 * @file Myanmar3/Zawgyi-One-rules.php	Zawgyi-One to Unicode conveting rules.
 * @ingroup m_modules
 * 
 */



/**
 * @var array $conv_rules Zawgyi-One to Unicode.
 */
$conv_rules = array(
			'ဳ' => 'ု',
			'ဴ' => 'ူ',
			'္' => '်',
			'်' => 'ျ',
			'ျ' => 'ြ',
			'ြ' => 'ွ',
			'ွ' => 'ှ',
			'ၚ' => 'ါ်',
			'ၠ' => '္က',
			'ၡ' => '္ခ',
			'ၢ' => '္ဂ',
			'ၣ' => '္ဃ',
			'ၤ' => 'င်္',
			'ၥ' => '္စ',
			'ၦ' => '္ဆ',
			'ၧ' => '္ဆ',
			'ၨ' => '္ဇ',
			'ၩ' => '္ဈ',
			'ၪ' => 'ဉ',
			'ၫ' => 'ည',
			'ၬ' => '္ဋ',
			'ၭ' => '္ဌ',
			'ၮ' => 'ဍ္ဍ',
			'ၯ' => 'ဍ္ဎ',
			'ၰ' => '္ဏ',
			'ၱ' => '္တ',
			'ၲ' => '္တ',
			'ၳ' => '္ထ',
			'ၴ' => '္ထ',
			'ၵ' => '္ဒ',
			'ၶ' => '္ဓ',
			'ၷ' => '္န',
			'ၷ' => '္ပ',
			'ၹ' => '္ဖ',
			'ၺ' => '္ဗ',
			'ၻ' => '္ဘ',
			'ၼ' => '္မ',
			'ၽ' => 'ျ',
			'ၾ' => 'ြ',
			'ၿ' => 'ြ',
			'ႀ' => 'ြ',
			'ႁ' => 'ြ',
			'ႂ' => 'ြ',
			'ႃ' => 'ြ',
			'ႄ' => 'ြ',
			'ႅ' => '္လ',
			'ႆ' => 'ဿ',
			'ႇ' => 'ှ',
			'ႈ' => 'ှု',
			'ႉ' => 'ှူ',
			'ႊ' => 'ွှ',
			'ႏ' => 'န',
			'႐' => 'ရ',
			'႑' => 'ဏ္ဍ',
			'႒' => 'ဋ္ဌ',
			'႓' => '္ဘ',
			'႔' => '့',
			'႕' => '့',
			'႗' => 'ဋ္ဋ',
			'၈ၤ'=>'ဂင်္',
			'ဧ။္'=>'၏',
			'၄​င္း'=>'၎င်း',
			'၎'=>'၎င်း',
			'၎င္း'=>'၎င်း',
			'ေ၀' => 'ေဝ',
			'ေ၇' => 'ေရ',
			'ေ၈'=>'ေဂ',
			'စ်'=>'ဈ',
			'ဥ​ာ'=>'ဉာ​',
			'ဥ​္'=>'ဉ်',
			'ၾသ'=>'ဩ',
			'ေၾသာ္'=>'ဪ',
		);


/**
 * @var array $order reorder Zawgyi-One to Unicode standard.
 *//*
$order = array(
			'(ြ)([က-အ])'=>'$2$1',
			'ေ([က-အ])င်္'=>'င်္$1ေ',
			'(ေ)([က-အ])([ျြွဲှ]+)?'=>'$2$3$1',
			'(ံ	)(ု	)' => '$2$1',
			'(်	)(့	)'=>'$2$1',
			'([က-အ])([က-အ])(င်္)' => '$1$3$2'
		);
		*/
$order = array(
	'([ေြ]|ေြ)([က-အ၀၈၇])' => '$2$1',
	'([က-အ၀၈၇])(ေ)([ျ	ြ	ွ		ဲ	ှ	]+)'=>'$1$3$2',
	'([	ု		ူ	])([	ိ		ီ	])'=>'$2$1',
	'(|ွှ|[ှွ])(ျ)'=>'$2$1',
	'([	ံ	်	])([	ွ		ှ	ုူ])'=>'$2$1',
	'([က-အ])([က-အ])(င်္)' => '$1$3$2',
	'([က-အ])ေင်္'=>'င်္$1ေ',
);
?>

