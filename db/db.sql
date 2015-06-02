/*------------------------------------版本说明---------------------------------------*/
/*2015-05-19 
	+TABLE		gw_group							    分组表
	+TABLE		gw_user_group							用户分组表
	+FIELD		gw_customer			reg_capital			注册资本
	+FIELD		gw_customer			corporate			法人代表
	+FIELD		gw_customer			contact				联系人
	+FIELD		gw_customer			contact_tel			联系电话
	+FIELD		gw_order			order_principal		订单负责人
	+FIELD		gw_order_goods		discount			单品折扣
	+FIELD		gw_price			add_time			添加时间
	+FIELD		gw_price			add_user			添加人员
	+FIELD		gw_price			goods_premium		溢价
	*FIELD		gw_price			goods_price			定价
    -FIELD      gw_goods            goods_number        商品数量， 通过库存表来进行说明

/*2015-05-19
    +TABLE      gw_stock                                库存表
    +TABLE      gw_stock_detail                         库存明细表
/*2015-06-02
	+FIELD		gw_customer			is_del				删除标识
	+FIELD		gw_order			is_del				删除标识
	+FIELD		gw_goods			is_del				删除标识
	-FIELD		gw_goods			goods_img			建立商品图片表，删除该字段
	-FIELD		gw_goods            goods_thumb			建立商品图片表，删除该字段
	+TABLE      gw_goods_imgs 							商品图片表
	+TABLE      gw_order_logs							订单日志表
	
/*------------------------------------版本说明 end---------------------------------------*/
#创建数据库
CREATE DATABASE gwsales_demo charset utf8;

#选择数据库
USE gwsales_demo;

/*------------------------------------用户模块---------------------------------------*/
#创建用户表
CREATE TABLE IF NOT	EXISTS gw_user(
	user_id int unsigned not null auto_increment primary key comment '用户编号',
	user_name varchar(50) not null default '' comment '用户名',
	password char(32) not null default '' comment '用户密码,md5加密',
	reg_time int unsigned not null default 0 comment '用户注册时间',
	authority_id tinyint unsigned not null default 0 comment '权限ID，默认为0，0为用户，1为管理员',
	role_id tinyint unsigned not null default 0 comment '角色ID，默认为0，0为营销员，1为库管员，2为发货员，3为审批者,4为结算员',
	user_add_id tinyint unsigned not null default 0 comment '针对于结算员，定义的地址ID，只能结算相同地址ID（市级）的订单'
)ENGINE=MyISAM DEFAULT CHARSET=UTF8 COMMENT='用户表';

#创建分组表
CREATE TABLE IF NOT	EXISTS gw_group(
	group_id int unsigned not null auto_increment primary key comment '分组编号',
	group_name varchar(50) not null default '' comment '组名'
)ENGINE=MyISAM DEFAULT CHARSET=UTF8 COMMENT='分组表';

#创建用户分组表
CREATE TABLE IF NOT	EXISTS gw_user_group(
	rec_id int unsigned not null auto_increment primary key comment '记录号',
	group_id int unsigned not null default 0 comment '分组ID',
	user_id int unsigned not null default 0 comment '用户ID',
	in_group int unsigned not null default 0 comment '进组时间',
	out_group int unsigned not null default 0 comment '离组时间',
	is_leader tinyint unsigned not null default 0 comment '是否是组长，默认为0，0为不是，1为是'
)ENGINE=MyISAM DEFAULT CHARSET=UTF8 COMMENT='用户分组表';
/*------------------------------------用户模块 end---------------------------------------*/

/*------------------------------------客户模块---------------------------------------*/
#创建客户表
CREATE TABLE IF NOT	EXISTS gw_customer(
	cus_id int unsigned not null auto_increment primary key comment '客户编号',
	cus_name varchar(50) not null default '' comment '客户名',
	user_id int unsigned not null default 0 comment '用户ID',
	company_name varchar(50) not null default '' comment '单位名称',
	reg_add varchar(100) not null default '' comment '单位注册地址',
	tax_no varchar(50) not null default '' comment '税号',
	com_bank varchar(50) not null default '' comment '开户行名称',
	bank_no varchar(50) not null default '' comment '开户行账号',
	reg_capital varchar(50) not null default '' comment '注册资本',
	corporate varchar(50) not null default '' comment '法人代表',
	contact varchar(50) not null default '' comment '联系人',
	contact_tel varchar(50) not null default '' comment '联系电话',	
	channel_id tinyint unsigned not null default 0 comment '渠道类别，默认为0，0为集团，1为个人',
	is_del tinyint unsigned not null default 0 comment '删除标识，默认为0，0为未删除，1为已删除'
)ENGINE=MyISAM DEFAULT CHARSET=UTF8 COMMENT='客户表';

#创建客户收货地址表
CREATE TABLE IF NOT	EXISTS gw_cus_address(
	address_id int unsigned not null auto_increment primary key comment '地址编号',
	cus_id int unsigned not null default 0 comment '地址所属客户ID',
	consignee varchar(60) not null default '' comment '收货人姓名',
	province smallint unsigned not null default 0 comment '省份，保存是ID',
	city smallint unsigned not null default 0 comment '市',
	district smallint unsigned not null default 0 comment '区',
	street varchar(100) not null default '' comment '街道地址',
	zipcode varchar(10) not null default '' comment '邮政编码',
	telephone varchar(20) not null default '' comment '电话',
	mobile varchar(20) not null default '' comment '移动电话',
	index cus_id(cus_id)
)ENGINE=MyISAM DEFAULT CHARSET=UTF8 COMMENT='客户收货地址表';

#创建地区表，包括省市区三级
CREATE TABLE IF NOT	EXISTS gw_region(
	region_id smallint unsigned not null auto_increment primary key comment '地区ID',
	parent_id smallint unsigned not null default 0 comment '父ID',
	region_name varchar(30) not null default '' comment '地区名称',
	region_type tinyint unsigned not null default 1 comment '地区类型 1 省份 2 市 3 区(县)'
)ENGINE=MyISAM DEFAULT CHARSET=UTF8 COMMENT='地区表';
/*------------------------------------客户模块 end-----------------------------------*/

/*------------------------------------订单模块-----------------------------------*/
#创建订单表
CREATE TABLE IF NOT	EXISTS gw_order(
	order_id int unsigned not null auto_increment primary key comment '订单ID',
	order_sn varchar(30) not null default '' comment '订单号',
	user_id int unsigned not null default 0 comment '用户ID',
	cus_id int unsigned not null default 0 comment '客户ID',
	address_id int unsigned not null default 0 comment '收货地址id',
	order_status tinyint unsigned not null default 0 comment '订单状态 1 待付款 2 待发货 3 已发货 4 已完成',
	postscripts varchar(255) not null default '' comment '订单附言',
	order_weight int unsigned not null default 0 comment '订单重量',
	order_amount decimal(10,2) not null default 0 comment '订单总金额',
	logistics_no varchar(30) not null default '' comment '物流单号',
	logistics_name varchar(30) not null default '' comment '物流公司名称',
	order_time int unsigned not null default 0 comment '下单时间',
	order_updatetime int unsigned not null default 0 comment '更新时间',
	delivery_date int unsigned not null default 0 comment '交货时间',
	order_principal int unsigned not null default 0 comment '订单负责人',
	is_del tinyint unsigned not null default 0 comment '删除标识，默认为0，0为未删除，1为已删除',
	index user_id(user_id),
	index cus_id(cus_id),		
	index address_id(address_id)
)ENGINE=MyISAM DEFAULT CHARSET=UTF8 COMMENT='订单表';

#创建订单明细表,即商品订单关系表
CREATE TABLE IF NOT	EXISTS gw_order_goods(
	rec_id int unsigned not null auto_increment primary key comment '编号',
	order_id int unsigned not null default 0 comment '订单ID',
	goods_id int unsigned not null default 0 comment '商品ID',
	price_id int unsigned not null default 0 comment '商品单价,价格ID',     #商品ID + 客户ID 对应一个 价格ID
	goods_number smallint unsigned not null default 1 comment '购买数量',
	discount int unsigned not null default 0 comment '单品折扣',
	sub_weight int unsigned not null default 0 comment '单品重量小计',
	sub_amount decimal(10,2) not null default 0 comment '单品价格小计'
)ENGINE=MyISAM DEFAULT CHARSET=UTF8 COMMENT='订单明细表';

#创建订单日志表，描述订单状态修改信息
CREATE TABLE IF NOT EXISTS gw_order_logs(
	log_id int unsigned not null auto_increment primary key comment '日志编号',
	order_id int unsigned not null default 0 comment '订单ID',
	updatetime int unsigned not null default 0 comment '更新时间',
	user_id int unsigned not null default 0 comment '经办人ID',
	log varchar(255) not null default '' comment '状态信息说明'
)ENGINE=MyISAM DEFAULT CHARSET=UTF8 COMMENT='订单日志表';
/*------------------------------------订单模块 end-----------------------------------*/

/*------------------------------------商品模块---------------------------------------*/
#创建商品类别表
CREATE TABLE IF NOT	EXISTS gw_category(
	cat_id smallint unsigned not null auto_increment primary key comment '商品类别ID',
	cat_name varchar(30) not null default '' comment '商品类别名称',
	parent_id smallint unsigned not null default 0 comment '商品类别父ID',
	cat_desc varchar(255) not null default '' comment '商品类别描述',
	#	is_show tinyint not null default 1 comment '是否显示，0为不显示，1为显示，默认1',	
	index pid(parent_id)
)ENGINE=MyISAM DEFAULT CHARSET=UTF8 COMMENT='商品类别表';

#创建商品表
CREATE TABLE IF NOT	EXISTS gw_goods(
	goods_id int unsigned not null auto_increment primary key comment '商品ID',
	goods_sn varchar(30) not null default '' comment '商品编号',
	goods_name varchar(100) not null default '' comment '商品名称',
	goods_brief varchar(255) not null default '' comment '商品简单描述',
	goods_desc text comment '商品详情',
	cat_id smallint unsigned not null default 0 comment '商品所属类别ID',
	goods_img varchar(50) not null default '' comment '商品图片',
	goods_thumb varchar(50) not null default '' comment '商品缩略图',
	goods_weight int unsigned not null default 0 comment '商品单位重量',
	add_time int unsigned not null default 0 comment '添加时间',
	is_del tinyint unsigned not null default 0 comment '删除标识，默认为0，0为未删除，1为已删除',
	index cat_id(cat_id)
)ENGINE=MyISAM DEFAULT CHARSET=UTF8 COMMENT='商品表';

#创建商品图片表
CREATE TABLE IF NOT EXISTS gw_goods_imgs(
	img_id int unsigned not null auto_increment primary key comment '图片ID',
	goods_img varchar(50) not null default '' comment '商品图片',
	goods_id int unsigned not null default 0 comment '商品ID',
	index goods_id(goods_id)
)ENGINE=MyISAM DEFAULT CHARSET=UTF8 COMMENT='商品图片表';
	
#创建商品价格表
CREATE TABLE IF NOT	EXISTS gw_price(
	price_id int unsigned not null auto_increment primary key comment '价格ID',
	goods_id int unsigned not null default 0 comment '商品ID',
	cus_id int unsigned not null default 0 comment '客户ID',
	add_time int unsigned not null default 0 comment '添加时间',
	add_user int unsigned not null default 0 comment '添加人员',
	goods_price decimal(10,2) not null default 0 comment '定价',
	goods_premium decimal(10,2) not null default 0 comment '溢价'
)ENGINE=MyISAM DEFAULT CHARSET=UTF8 COMMENT='商品价格表';

#创建商品库存表
CREATE TABLE IF NOT	EXISTS gw_stock(
	stock_id int unsigned not null auto_increment primary key comment '库存ID',
	goods_id int unsigned not null default 0 comment '商品ID',
	goods_num int unsigned not null default 0 comment '商品数量',
	update_time int unsigned not null default 0 comment '更新时间'
)ENGINE=MyISAM DEFAULT CHARSET=UTF8 COMMENT='商品库存表';

#创建库存明细表
CREATE TABLE IF NOT	EXISTS gw_stock_detail(
	rec_id int unsigned not null auto_increment primary key comment '记录编号',
	goods_id int unsigned not null default 0 comment '商品ID',
	goods_num int not null default 0 comment '商品数量(+为入，-为出)',
    user_id int unsigned not null default 0 comment '用户ID',
	add_time int unsigned not null default 0 comment '添加时间'
)ENGINE=MyISAM DEFAULT CHARSET=UTF8 COMMENT='库存明细表';

/*------------------------------------暂时用不上---------------------------------------*/
#创建商品类型表
create table gw_goods_type(
	type_id smallint unsigned not null auto_increment primary key comment '商品类型ID',
	type_name varchar(50) not null default '' comment '商品类型名称'
)engine=MyISAM charset=utf8;


#创建商品属性表
create table gw_attribute(
	attr_id smallint unsigned not null auto_increment primary key comment '商品属性ID',
	attr_name varchar(50) not null default '' comment '商品属性名称',
	type_id smallint not null default 0 comment '商品属性所属类型ID',
	attr_type tinyint not null default 1 comment '属性是否可选 0 为唯一，1为单选，2为多选',
	attr_input_type tinyint not null default 1 comment '属性录入方式 0为手工录入，1为从列表中选择，2为文本域',
	attr_value text comment '属性的值',
	sort_order tinyint not null default 50 comment '属性排序依据',
	index type_id(type_id)
)engine=MyISAM charset=utf8;

#创建商品属性对应表
create table gw_goods_attr(
	goods_attr_id int unsigned not null auto_increment primary key comment '编号ID',
	goods_id int unsigned not null default 0 comment '商品ID',
	attr_id smallint unsigned not null default 0 comment '属性ID',
	attr_value varchar(255) not null default '' comment '属性值',
	attr_price decimal(10,2) not null default 0 comment '属性价格',
	index goods_id(goods_id),
	index attr_id(attr_id)
)engine=MyISAM charset=utf8;

#创建商品相册表
create table gw_galary(
	img_id int unsigned not null auto_increment primary key comment '图片编号',
	goods_id int unsigned not null default 0 comment '商品ID',
	img_url varchar(50) not null default '' comment '图片URL',
	thumb_url varchar(50) not null default '' comment '缩略图URL',
	img_desc varchar(50) not null default '' comment '图片描述',
	index goods_id(goods_id)
)engine=MyISAM charset=utf8;

/*------------------------------------商品模块 end-----------------------------------*/
