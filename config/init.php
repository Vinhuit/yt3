<?php

	$GLOBALS['config'] = [
		'google_key_api' => 'AIzaSyCw_ahcB3ZyrDl-l7u4eJY-A6Zq-xAb5Dk',
		'client_id' => '821039443474-ane7lekcr3imq1fds710b4mags6ge52r.apps.googleusercontent.com',
		'client_secret' => 'mP1rFqTSInYvKZLnnp-NvZLi ',
		'home_title' => 'Youtube Tool | Giúp bạn làm youtube dễ dàng hơn',
		'home_url' =>	'http://'. $_SERVER['SERVER_NAME'] .'/v2',
		'site_name' => 'Youtube Tool',
		'site_description' => 'Support Tool, get info video từ channel, keyword, playlist, ... get playlist id từ channel, suggest từ khóa, quản lý channel, ...',
		'aside_menu' => [
			['title' => 'Dashboard', 'uri' => './'],
			['title' => 'Get Info With Channel', 'uri' => 'get-info-with-channel'],
			['title' => 'Get Info With Keyword', 'uri' => 'get-info-with-keyword'],
			['title' => 'Get Info With Playlist Id', 'uri' => 'get-info-with-playlist-id'],
			['title' => 'Get List Playlist with Channel', 'uri' => 'get-playlist-id-with-channel-id'],
			['title' => 'Manage Multi Channel', 'uri' => 'manage-multi-channel'],
			['title' => 'Video Đã Lưu', 'uri' => 'all-saved-video'],
			['title' => 'Video Đã Upload', 'uri' => 'all-upload-video'],
			['title' => 'Quản Lý Token', 'uri' => 'get-auth'],
			['title' => 'Tạo Playlist', 'uri' => 'create-playlist'],
			['title' => 'Updating ...', 'uri' => 'updating']
		],
		'show_recent_video' => 8,
		'show_recent_channel' => 4,
		'show_recent_saved_video' => 4,
	];
