<?php
if(!defined('NONECMS_INSTALL')) exit('Access Denied');
$lang = array(
	'install_title' => 'NONECMS 1.0安装向导',
	'install_license' => 'NONECMS内容管理系统-安装用户协议',
	'install_is_lock' => '您已成功安装NONECMS，需重新安装请手动删除网站目录下public/install/install.lock文件', 
	'install_db_error' => '数据库文件无法读取，请检查public/install/inc/wang.sql是否存在。',	
	'agree_and_accept' => '同意并接受',	
	'detection_environment' => '检测环境',
	'data_create' => '创建数据',
	'complete_installation' => '完成安装',
	'environmental_testing' => '环境检测',
	'recommended_configuration' => '推荐配置',
	'current_status' => '当前状态',
	'operating_system' => '操作系统',
	'version' => '版本',
	'attachment_upload' => '附件上传',
	'extension' => '扩展',
	'directory_permissions' => '目录权限检测',
	'write' => '写入',
	'read' => '读取',
	'previous' => '上一步',
	'next' => '下一步',	
	'install' => '安装',
	'faile' => '失败',
	'success' => '成功',
	'database_information' => '数据库信息',
	'database_information_tip' => '安装后,原数据库会被清空,请做好备份',

	'install_mysql_host' => '数据库服务器',
	'install_mysql_host_intro' => '本地填写：127.0.0.1或IP',
	'install_mysql_port' => '数据库端口',
	'install_mysql_port_intro' => '数据库端口一般为3306',

	'install_mysql_username' => '数据库用户名',
	'install_mysql_password' => '数据库密码',
	'install_mysql_name' => '数据库名称',
	'install_mysql_name_intro' => '不存在则自动创建',
	'install_mysql_prefix' => '数据库表前缀',
	'install_mysql_prefix_intro' => '推荐使用默认',
	'site_configuration' => '网站配置',
	'site_name' => '网站名称',
	'site_name_default' => '我的网站',
	'site_url' => '网站网址',
	'site_url_intro' => '请以http://或https://开头',
	'site_style' => '网站风格',
	'site_style_c' => '企业站',
	'site_style_b' => '博客站',
	'website_administrator' => '网站超级管理员',
	'username' => '用户名',
	'password' => '密　码',
	'password_intro' => '最少6位',
	'test_data' => '测试数据',
	'test_data_intro' => '添加默认数据！(适合新手第一次使用)',
	'Installation' => '安装中',
	'Data_initialization' => '数据初始化中',

	'installation_failed' => '安装失败',
	'installation_complete' => '安装完成',
	'installation_successful' => '安装成功',
	'installation_failed_reinstall' => '安装失败,请重新升级安装',
	'congratulations_installation_success' => '恭喜您，安装成功！',
	'please_delete_folder' => '请手动删除Update文件夹',	
	'visit_home' => '访问网站首页',
	'enter_admin' => '进入后台管理',

	'safe_notes' => '为了您站点的安全，安装完成后请立即删除网站根目录public下的“Install”文件夹删除。',
	'system_installation_requirements_php' => '系统安装要求：PHP版本最低不能低于',
	'install_on' => '开启',

	'install_mysql_host_empty' => '请填写数据库服务器!',
	'install_mysql_port_empty' => '请填写数据库端口!',	
	'install_mysql_username_empty' => '请填写数据库用户名!',
	'install_mysql_name_empty' => '请填写数据库名!',
	'install_mysql_prefix_empty' => '请填写数据库表前缀!',
	'site_url_empty' => '请填写网站网址!',
	'install_founder_name_empty' => '创建管理员帐号不能为空',
	'install_founder_password_length' => '管理员密码必须大于6位',
	'founder_invalid_password' => '密码长度必须大于或等于6位',
	'email_failed' => 'E-mail格式不正确!',
	'database_connection_failed' => '数据库连接失败',
	'database_create_failed' => '数据库创建失败',
	'database_select_fails' => '选择数据库失败',
	'error_message' => '错误信息',
	'write_tmp_failed' => '写入临时文件失败!',
	'conf_not_write' => 'Conf目录没有写权限',
	'load_failed_reinstall' => '加载文件失败，请重新安装',
	'data_table' => '数据表',
	'write_data_table' => '写入数据表',
	'create_administrator_failed' => '创建管理员失败',
	'please_refresh_installation' => '请重新刷新安装',


	'support' => '支持',
	'unsupport' => '不支持',
    'mustopen' => '必须开启',
	'suggestopen' => '建议开启',
);
?>