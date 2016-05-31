<?php
return array(
	//'配置项'=>'配置值'
	'URL_MODEL'	=>1,
	'DB_TYPE'	=>'MYSQL',
	'DB_HOST'	=>'localhost',
	'DB_NAME'	=>'jourlnal',
	'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'jn_',    // 数据库表前缀
    'DB_FIELDTYPE_CHECK'    =>  false,       // 是否进行字段类型检查
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    //'ERROR_MESSAGE'         =>  "砖头还在搬，请喝杯茶再来……",//错误显示信息,非调试模式有效
    'SHOW_ERROR_MSG'        =>  false,    // 显示错误信息
    'TOKEN_ON'              => TRUE,// 开启表单验证
    'DEFAULT_FILTER'        =>  'strip_tags',//开启I函数全局过滤
    'URL_HTML_SUFFIX'       => 'html', //伪静态
    'URL_ROUTER_ON'   => true,
    'URL_DENY_SUFFIX'       =>  'ico|png|jpg|pdf', // URL禁止访问的后缀设置
       //  'LAYOUT_ON'             =>  true, // 是否启用布局
    // 'LAYOUT_NAME'           =>  'layout', // 当前布局名称 默认为layout

);