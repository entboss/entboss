<?php
/**
 * API Config
 *
 * @package    EntBoss
 * @copyright  Copyright (c) 2019 EntBoss (http://www.entboss.com)
 * @license    http://www.entboss.com/license
 * @author     EntBoss Team
 * @version    3.2
 *
 */

return [
	'cache'			=> false, // API缓存开关
	'cache_time'	=> 60, // 缓存时间（分钟）
	'ttl'			=> 60*60*24*365, // 认证过期时间
	'page_size'		=> 20, // 默认分页条数
	'password'		=> 'HExin888', // 默认用户密码

    'erp_url'		=> 'http://t.hxmis.com:6110', // ERP域名
	'auth_host'		=> 'http://t.hxmis.com:7007', // 认证域名
	'api_host'		=> 'http://t.hxmis.com:7007', // 接口域名

	'sms_host'		=> 'dysmsapi.aliyuncs.com',
	'sms_product'	=> 'Dysmsapi',
	'sms_version'	=> '2017-05-25',
	'sms_key'		=> 'LTAI7DWhW7qbdX2E',
	'sms_secret'	=> 'W00SNVSgUyvhSdLUfihbMcvYDXgeJP',
	'sms_sign_name'	=> '和新电商',
	'sms_send_tpl'	=> 'SMS_173340010',

	'code' => [ // 接口提示代码
		//自定义状态
		0	=>	'fail',								//请求失败
		1	=>	'success',							//请求成功

		1000	=>	'missing params',				//缺少参数
		1001	=>	'exist',						//数据已经存在
		1004	=>	'not found',					//数据不存在
		40000	=>	'too few arguments',			//参数缺失

		100 =>	'Continue',							//
		101 =>	'Switching Protocols',				//
		102 =>	'Processing',						//
		//2××: Success 成功
		200 =>	'OK',								//请求成功，返回相应数据 request succeeded
		201 =>	'Created',							//新建或修改数据成功，返回相应数据，如 POST 的 ADD
		202 =>	'Accepted',							//接受请求，进入后台异步处理 request accepted, but the processing has not been completed
		203 =>	'Non-authoritative Information',	//
		204 =>	'No Content',						//请求成功，删除数据成功，不返回相应数据
		205 =>	'Reset Content',					//
		206 =>	'Partial Content',					//请求成功，但是只返回一部分 request succeeded, but this is only a partial response
		207 =>	'Multi-Status',						//
		208 =>	'Already Reported',					//
		226 =>	'IM Used',							//
		//3××: Redirection 重定向
		300 =>	'Multiple Choices',					//
		301 =>	'Moved Permanently',				//被请求的数据已永久移动到新位置
		302 =>	'Found',							//被请求的数据现在临时从不同的 URI 响应请求
		303 =>	'See Other',						//当前请求的响应可以在另一个 URI 上被找到
		304 =>	'Not Modified',						//数据自从上次请求后没有再次发生变化，主要使用场景在于实现数据缓存
		305 =>	'Use Proxy',						//
		307 =>	'Temporary Redirect',				//当前请求的响应临时可以在另一个 URI 上被找到，客户端应该保持原有的请求方法进行请求
		308 =>	'Permanent Redirect',				//当前请求的响应长期可以在另一个 URI 上被找到，客户端应该保持新的请求方法进行请求
		//4××: Client Error 客户端错误
		400 =>	'Bad Request',						//请求无效，请求体包含语法错误 request invalid, validate usage and try again
		401 =>	'Unauthorized',						//未认证，需要验证用户身份 request not authenticated, API token is missing, invalid or expired
		402 =>	'Payment Required',					//付款没成功或付款方式错误
		403 =>	'Forbidden',						//无权限，请求失败 request not authorized, provided credentials do not provide access to specified resource
		404 =>	'Not Found',						//找不到目标数据 request failed, the specified resource does not exist
		405 =>	'Method Not Allowed',				//不允许执行目标方法，响应中应该带有 Allow 头，内容为对该资源有效的 HTTP 方法
		406 =>	'Not Acceptable',					//服务器不支持客户端请求的内容格式，比如用户请求JSON格式，但是只有XML格式 request failed, set Accept header and try again
		407 =>	'Proxy Authentication Required',	//
		408 =>	'Request Timeout',					//请求超时
		409 =>	'Conflict',							//请求操作和资源的当前状态存在冲突，主要使用场景在于实现并发控制 request failed, see response body for suggested resolution
		410 =>	'Gone',								//数据被永久删除，且不会再得到的 requested resource can no longer be found at this location
		411 =>	'Length Required',					//
		412 =>	'Precondition Failed',				//服务器在验证请求头字段中给出先决条件时，没能满足其中的一个或多个，主要使用场景在于实现并发控制
		413 =>	'Payload Too Large',				//POST 或者 PUT 请求的消息实体过大
		414 =>	'URI Too Long',						//
		415 =>	'Unsupported Media Type',			//服务器不支持请求中提交的数据的格式
		416 =>	'Range Not Satisfiable',			//request failed, validate Content-Range header and try again
		417 =>	'Expectation Failed',				//
		418 =>	'IM a teapot',						//
		421 =>	'Misdirected Request',				//
		422 =>	'Unprocessable Entity',				//请求失败，参数包含无效字段。当创建一个对象时，发生一个验证错误 request failed, validate parameters and try again
		423 =>	'Locked',							//
		424 =>	'Failed Dependency',				//
		426 =>	'Upgrade Required',					//
		428 =>	'Precondition Required',			//要求先决条件，如果想要请求能成功必须满足一些预设的条件
		429 =>	'Too Many Requests',				//因访问频繁被限制访问，稍后重试 request failed, wait for rate limits to reset and try again
		431 =>	'Request Header Fields Too Large',	//
		444 =>	'Connection Closed Without Response',	//
		451 =>	'Unavailable For Legal Reasons',	//
		499 =>	'Client Closed Request',			//
		//5××: Server Error 服务端错误
		500 =>	'Internal Server Error',			//服务器错误 error occurred, we are notified, but contact support if the issue persists
		501 =>	'Not Implemented',					//服务器不支持当前请求所需要的某个功能，405 是表示服务端不允许客户端这么做，501 是表示客户端或许可以这么做，但服务端还没有实现这个功能
		502 =>	'Bad Gateway',						//作为网关或者代理工作的服务器尝试执行请求时，从上游服务器接收到无效的响应
		503 =>	'Service Unavailable',				//由于临时的服务器维护或者过载，服务器当前无法处理请求。这个状况是临时的，并且将在一段时间以后恢复。
		504 =>	'Gateway Timeout',					//网关超时
		505 =>	'HTTP Version Not Supported',		//HTTP版本不支持
		506 =>	'Variant Also Negotiates',			//
		507 =>	'Insufficient Storage',				//
		508 =>	'Loop Detected',					//
		510 =>	'Not Extended',						//
		511 =>	'Network Authentication Required',	//
		599 =>	'Network Connect Timeout Error',	//网络连接超时



		
		40001	=>	'invalid credential',			//不合法的调用凭证，检查下access_token是否正确，是否失效
		40002	=>	'invalid grant_type',			//不合法的凭证类型
		40003	=>	'invalid openid',				//不合法的OpenID
		40004	=>	'invalid media type',			//不合法的媒体文件类型
		40005	=>	'invalid file type',			//不合法的文件类型
		40006	=>	'invalid file size',			//不合法的文件大小，image类型最大1MB，file类型最大10MB，voice类型最大2MB
		40007	=>	'invalid media_id',				//不合法的media_id，检查下mediaId是否为空，是否真实存在
		40008	=>	'invalid message type',	//不合法的消息类型
		40009	=>	'invalid image size',	//不合法的图片大小
		40010	=>	'invalid voice size',	//不合法的语音大小
		40011	=>	'invalid video size',	//不合法的视频大小
		40012	=>	'invalid thumb size',	//不合法的缩略图大小
		40013	=>	'invalid appid',		//不合法的AppID
		40014	=>	'invalid access_token',			//不合法的access_token
		40015	=>	'invalid menu type',	//不合法的菜单类型
		40016	=>	'invalid button size',	//不合法的菜单按钮个数
		40017	=>	'invalid button type',	//不合法的按钮类型
		40018	=>	'invalid button name size',	//不合法的按钮名称长度
		40019	=>	'invalid button key size',	//不合法的按钮KEY长度
		40020	=>	'invalid button url size',	//不合法的url长度
		40023	=>	'invalid sub button size',	//不合法的子菜单按钮个数
		40024	=>	'invalid sub button type',	//不合法的子菜单类型
		40025	=>	'invalid sub button name size',	//不合法的子菜单按钮名称长度
		40026	=>	'invalid sub button key size',	//不合法的子菜单按钮KEY长度
		40027	=>	'invalid sub button url size',	//不合法的子菜单按钮url长度
		40029	=>	'invalid code',				//不合法或已过期的code
		40030	=>	'invalid refresh_token',	//不合法的refresh_token
		40036	=>	'invalid template_id size',	//不合法的template_id长度
		40037	=>	'invalid template_id',		//不合法的template_id
		40039	=>	'invalid url size',			//不合法的url长度
		40048	=>	'invalid url domain',		//不合法的url域名
		40054	=>	'invalid sub button url domain',	//不合法的子菜单按钮url域名
		40055	=>	'invalid button url domain',	//不合法的菜单按钮url域名
		40066	=>	'invalid url',				//不合法的url
		41001	=>	'access_token missing',		//缺失access_token参数
		41002	=>	'appid missing',			//缺失appid参数
		41003	=>	'refresh_token missing',	//缺失refresh_token参数
		41004	=>	'appsecret missing',		//缺失secret参数
		41005	=>	'media data missing',		//缺失二进制媒体文件
		41006	=>	'media_id missing',			//缺失media_id参数
		41007	=>	'sub_menu data missing',	//缺失子菜单数据
		41008	=>	'missing code',				//缺失code参数
		41009	=>	'missing openid',			//缺失openid参数
		41010	=>	'missing url',				//缺失url参数
		42001	=>	'access_token expired',		//access_token超时
		42002	=>	'refresh_token expired',	//refresh_token超时
		42003	=>	'code expired',				//code超时
		43001	=>	'require GET method',		//需要使用GET方法请求
		43002	=>	'require POST method',		//需要使用POST方法请求
		43003	=>	'require https',			//需要使用HTTPS
		43004	=>	'require subscribe',		//需要订阅关系
		44001	=>	'empty media data',			//空白的二进制数据
		44002	=>	'empty post data',			//空白的POST数据
		44003	=>	'empty news data',			//空白的news数据
		44004	=>	'empty content',			//空白的内容
		44005	=>	'empty list size',			//空白的列表
		45001	=>	'media size out of limit',	//二进制文件超过限制
		45002	=>	'content size out of limit',	//content参数超过限制
		45003	=>	'title size out of limit',	//title参数超过限制
		45004	=>	'description size out of limit',	//description参数超过限制
		45005	=>	'url size out of limit',	//url参数长度超过限制
		45006	=>	'picurl size out of limit',	//picurl参数超过限制
		45007	=>	'playtime out of limit',	//播放时间超过限制（语音为60s最大）
		45008	=>	'article size out of limit',	//article参数超过限制
		45009	=>	'api freq out of limit',	//接口调动频率超过限制
		45010	=>	'create menu limit',		//建立菜单被限制
		45011	=>	'api limit',				//频率限制
		45012	=>	'template size out of limit',	//模板大小超过限制
		45016	=>	'cannot modify sys group',	//不能修改默认组
		45017	=>	'cannot set group name too long sys group',	//修改组名过长
		45018	=>	'too many group now, no need to add new',	//组数量过多
		50001	=>	'api unauthorized',			//接口未授权
		50002	=>	'error login',			//接口未授权

		//后台商品
        9001	=> '请绑定商品分类',
        9002	=> '属性名称已存在',
        9003	=> '当前属性值下已有商品，不可删除',
		//商品
        101001 => '上传文件失败',
        101002 => '同步成功-记录保存失败',
        101003 => '权限错误',
        101004 => '文章保存失败', 
        101017 => '临近定时时间不能取消发送任务',
        101018 => '临近定时时间不能修改发送任务',
        101019 => '超过发送时间不能发送',
        101020 => '缺少发表记录ID参数',
        //分类
        201001 => '添加成功,审核中,请耐心等待',
        201002 => '签名添加失败',
        201003 => '名称重复',
        //管理员
        300001 => '账号或邮箱重复，请确认',
        300002 => '账号或邮箱重复，请确认',

        //通用
        600001 => '请求不到数据',
        600002 => '操作失败',
        600003 => '系统错误',
        600004 => '参数错误',
        600005 => '操作失败，请重试',
        600006 => '数据错误',

        //通用-英语
        600101 => 'No data requested',
        600102 => 'operation failed',
        600103 => 'System error',
        600104 => 'Parameter error',
        600105 => 'Operation failed, please try again',
        600106 => 'data error',

        //插件
        700001 => '操作失败，插件已卸载',
        700002 => '未安装该插件',
		700003 => '该插件已被禁用',
		//订单
		710001 => '订单已完成',
		710002 => '订单未支付，不能手动完成订单',
		710003 => '订单不在未付款状态，无法发送催款通知',
		710004 => '订单未取消，无法激活',
		710005 => '订单不在未付款状态，无法手动支付',
		710006 => '订单未支付，不能手动标记发货',
		710007 => '订单未支付，不能发送收款通知',
		710008 => '产品库存不足',
		710009 => '订单已存在该商品，无法重复添加',
		710010 => '请添加订单商品',
		710011 => '操作失败，订单未支付',
		710101 => '订单未发货，不能发送发货通知',
		710102 => '订单已发货，不能执行发货操作',

	],
];
