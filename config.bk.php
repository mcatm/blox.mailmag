<?

$config = array(
	'flg_use_db'	=> false,
	'path_csv'		=> EX_FOLDER.'/upload/mailmag/maillist.csv',
	'master_email'	=> 'admin@example.com',
	'master_name'	=> SITE_NAME,
	'charset'		=> 'iso-2022-jp',
	'maillist_test'	=> ''
);

$admin_menu = array(
	'top'	=> array(
		'alias'	=> 'ex/mailmag'
	),
	'add'	=> array(
		'alias'	=> 'ex/mailmag/add'
	),
	'user'	=> array(
		'alias'	=> 'ex/mailmag/user',
		'sub'	=> array(
			'user_pc'	=> array(
				'alias'	=> 'ex/mailmag/user/pc'
			),
			'user_mobile'	=> array(
				'alias'	=> 'ex/mailmag/user/mobile'
			)
		)
	)
);

?>