create table user
	(primary key (user_id)
     user_id varchar(5),
	 name varchar(20),
	 email varchar(50),
	 password varchar(20),
	 
	);

create table product
	(product_id varchar(5),
	sku	varchar(10),
	name varchar(50),
	desc varchar(100),
	price numeric(8,2),
	image varchar(50),
	primary key (product_id)
	);

create table cart
	(cart_id varchar(5),
	user_id	varchar(5),
	primary key (cart_id),
	foreign key (user_id) references user (user_id)
	);

create table cart_item
	(cart_id varchar(5),
	product_id varchar(5),
	quantity numeric(2,0),
	primary key (cart_id, product_id),
	foreign key (cart_id) references cart (cart_id)
	foreign key (product_id) references product (product_id)
	);

create table orders
	(order_id varchar(5),
	user_id varchar(5),
	shipping_address varchar(100),
	primary key (order_id),
	foreign key (user_id) references user (user_id)
	);

create table order_item
	(order_id varchar(5),
	product_id varchar(5),
	quantity numeric(2,0) check (quantity > 0),
	primary key (order_id, product_id),
	foreign key (order_id) references orders (order_id)
	foreign key (product_id) references product (product_id)
	);