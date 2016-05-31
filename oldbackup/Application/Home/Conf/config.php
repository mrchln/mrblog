<?php
return array(
	//'配置项'=>'配置值'
	'URL_CLASS_INSENSITIVE'		=>TRUE,
	'URL_MODEL'             =>  1,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    // 'APP_STATUS'		 	 =>	 'debug',//开启后，字段s缓存降关闭。
     //'DEFAULT_V_LAYER'       =>  'Template',//修改默认的视图层
     //'LAYOUT_ON'             =>  true, // 是否启用布局
     //'LAYOUT_NAME'           =>  'layout', // 当前布局名称 默认为layout

     'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'test',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'tb_',    // 数据库表前缀
    'DB_FIELDTYPE_CHECK'    =>  false,       // 是否进行字段类型检查
    'DB_FIELDS_CACHE'       =>  false,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    'ERROR_MESSAGE'         =>  '页面错误！请稍后再试～',//错误显示信息,非调试模式有效
    //'ERROR_PAGE'            =>  '__ROOT__/error.html',     // 错误定向页面
    //'SHOW_ERROR_MSG'        =>  true,    // 显示错误信息
    'SESSION_AUTO_START'    => true, //是否开启session
    //'TOKEN_ON'              => TRUE,// 开启表单验证
    'URL_HTML_SUFFIX'=>'html', // 多个用 | 分割
    'URL_DENY_SUFFIX' => 'pdf|ico|png|gif|jpg|xml', // URL禁止访问的后缀设置
    'URL_ROUTER_ON'   => true, //开启路由
    'URL_ROUTE_RULES' => array( //定义路由规则
    	//'mood/index/:p' 		=> 'mood/index',
    	//'skill/index/:p' 		=> 'skill/index',
        'mood/:id$'      => 'mood/detailed',//\d仅支持数字类型的约束定义
        'skill/:id$'      => 'skill/detailed',
       



    ),
);