/**
  Creation script for qibdip-tpv
  Marc@demomentsomtres.com
  version 1.0.2
**/
drop table if exists users;
create table users (
    id int(10) unsigned auto_increment primary key,
    username varchar(50) not null,
    password varchar(50) not null,
    role varchar(20),
    created datetime default null,
    modified datetime default null
);
drop table if exists towns;
create table towns (
    id int(10) unsigned auto_increment primary key,
    town_name varchar(50) not null,
    created datetime default null,
    modified datetime default null
);
drop table if exists customers;
create table customers (
    id int(10) unsigned auto_increment primary key,
    customer_name varchar(100) not null,
    customer_address varchar(100),
    town_id int(10),
    customer_vat_number varchar(12),
    customer_phone1 varchar(15),
    customer_phone2 varchar(15),
    customer_email varchar(100),
    created datetime default null,
    modified datetime default null,
    foreign key (town_id) references towns(id) on delete restrict
);
drop table if exists suppliers;
create table suppliers (
    id int(10) unsigned auto_increment primary key,
    supplier_name varchar(100) not null,
    supplier_address varchar(100),
    town_id int(10),
    supplier_vat_number varchar(12),
    supplier_phone1 varchar(15),
    supplier_phone2 varchar(15),
    created datetime default null,
    modified datetime default null,
    foreign key (town_id) references towns(id) on delete restrict
);
drop table if exists supplier_invoice_status;
create table supplier_invoice_status (
    id int(10) unsigned auto_increment primary key,
    sup_inv_status_name varchar(25) not null,
    sup_inv_is_final_status boolean not null default false,
    created datetime default null,
    modified datetime default null
);
drop table if exists customer_invoice_status;
create table customer_invoice_status (
    id int(10) unsigned auto_increment primary key,
    cus_inv_status_name varchar(25) not null,
    cus_inv_is_final_status boolean not null default false,
    created datetime default null,
    modified datetime default null
);
drop table if exists supplier_invoices;
create table supplier_invoices (
    id int(10) unsigned auto_increment primary key,
    supplier_invoice_number varchar(15) not null,
    supplier_id int(10) not null,
    supplier_invoice_date date not null,
    supplier_invoice_amount decimal(10,2) not null default 0,
    supplier_invoice_vat decimal(10,2) not null default 0,
    supplier_invoice_vat_re decimal(10,2) not null default 0,
    supplier_invoice_status_id int(10) not null,
    created datetime default null,
    modified datetime default null,
    foreign key (supplier_id) references suppliers(id) on delete restrict,
    foreign key (supplier_invoice_status_id) references supplier_invoice_status(id) on delete restrict
);
drop table if exists supplier_slips;
create table supplier_slips (
    id int(10) unsigned auto_increment primary key,
    supplier_slip_num varchar(15) not null,
    supplier_id int(10) not null,
    supplier_slip_date date not null,
    created datetime default null,
    modified datetime default null,
    foreign key (supplier_id) references suppliers(id) on delete restrict
);
drop table if exists raw_material_types;
create table raw_material_types(
    id int(10) unsigned auto_increment primary key,
    raw_mat_type_name varchar(25) not null,
    raw_mat_type_is_partial_consume boolean default true, /* Indica si es consumeix totalment o per unitats */
    raw_mat_measuring_unit varchar(25) not null
);
drop table if exists stocks;
create table stocks (
    id int(10) unsigned auto_increment primary key,
    stock_type varchar(1) not null default 'A', /* A - Final Article, R - Raw Material */
    /* Articles */
    article_reference varchar(50),
    article_model varchar(250),
    article_size varchar(10),
    /* Raw Material */
    raw_material_type_id int(10),
    raw_mat_units decimal(10,2),
    raw_mat_userfield01 varchar(50), /* casc */
    raw_mat_unit_price decimal(10,2),
    /* Common */
    stock_comment varchar(250) default '',
    stock_userfield01 varchar(10), /* pell */
    stock_userfield02 varchar(10), /* acabat */
    stock_userfield03 varchar(10), /* color */
    stock_buy_price decimal(10,2) default 0,
    stock_vat decimal(10,2) default 0,
    stock_vat_re decimal(10,2) default 0,
    stock_sale_price decimal(10,2) default 0,
    created datetime default null,
    modified datetime default null,
    supplier_slip_id int(10) not null,
    supplier_slip_line int(10) not null default 1,
    supplier_invoice_id int(10),
    foreign key (supplier_invoice_id) references supplier_invoices(id),
    foreign key (raw_material_type_id) references raw_material_types(id),
    foreign key (supplier_slip_id) references supplier_slips(id)
);
drop table if exists consumptions;
create table consumptions (
    id int(10) unsigned auto_increment primary key,
    article_id int(10) not null,
    raw_material_id int(10),
    consumption_raw_mat_consumed_units decimal(10,2) not null,
    consumption_cost_01 decimal(10,2) not null default 0, /* tallar */
    consumption_cost_02 decimal(10,2) not null default 0, /* cosir */
    consumption_cost_03 decimal(10,2) not null default 0, /* complements */
    consumption_cost_04 decimal(10,2) not null default 0, /* altes costos */
    foreign key (article_id) references stocks(id),
    foreign key (raw_material_id) references stocks(id)
);
drop table if exists order_status;
create table order_status(
    id int(10) unsigned auto_increment primary key,
    order_status_name varchar(25) not null,
    order_status_is_final boolean not null default false,
    created datetime default null,
    modified datetime default null
);
drop table if exists customer_orders;
create table customer_orders (
    id int(10) unsigned auto_increment primary key,
    customer_id int(10) not null,
    order_status_id int(10) not null,
    order_date date not null,
    order_comments varchar(255),
    created datetime default null,
    modified datetime default null,
    foreign key (customer_id) references customers(id) on delete restrict,
    foreign key (order_status_id) references order_status(id) on delete restrict
);
drop table if exists customer_payments;
create table customer_payments (
    id int(10) unsigned auto_increment primary key,
    customer_id int(10),
    payment_date date not null,
    payment_amount decimal(10,2) not null default 0,
    payment_comments varchar(255),
    payment_is_down_payment boolean default false, /* paga i senyal */
    customer_order_id int(10) not null,
    created datetime default null,
    modified datetime default null,
    foreign key (customer_order_id) references customer_orders(id),
    foreign key (customer_id) references customers(id)
);
drop table if exists customer_invoices;
create table customer_invoices (
    id int(10) unsigned auto_increment primary key,
    customer_id int(10) not null,
    customer_invoice_date date not null,
    serie_id int(10) not null,
    customer_invoice_number int(10) not null,
    customer_invoice_status int(10) not null,
    customer_invoice_comments varchar(255),
    created datetime default null,
    modified datetime default null,
    foreign key (customer_id) references customers(id),
    foreign key (serie_id) references series(id)
);
drop table if exists customer_order_lines;
create table customer_order_lines (
    id int(10) unsigned auto_increment primary key,
    customer_order_id int(10) not null,
    order_line_number int(10) not null,
    order_status_id int(10) not null,
    order_line_type varchar(1) not null default 'E', /* legend E-Service, A-Sale */
    stock_id int(10) default null,
    order_line_description varchar(50) default null, /* Description of the line if it is a service */
    order_line_is_left_article boolean default false, 
    order_line_left_article_description varchar(250),
    order_line_due_date date default null,
    created datetime default null,
    modified datetime default null,
    customer_invoice_id int(10) default null,
    customer_invoice_line_number int(10) default null,
    order_line_amount decimal(10,2) not null,
    order_line_vat decimal(10,2) not null,
    order_line_comments varchar(255) default null,
    foreign key (customer_order_id) references customer_orders(id) on delete restrict,
    foreign key (order_status_id) references order_status(id) on delete restrict,
    foreign key (stock_id) references stocks(id) on delete restrict,
    foreign key (customer_invoice_id) references customer_invoices(id) on delete restrict
);
/* Conversio a InnoDB */
ALTER TABLE users ENGINE = INNODB;
ALTER TABLE towns ENGINE = INNODB;
ALTER TABLE customers ENGINE = INNODB;
ALTER TABLE suppliers ENGINE = INNODB;
ALTER TABLE supplier_invoice_status ENGINE = INNODB;
ALTER TABLE supplier_invoices ENGINE = INNODB;
ALTER TABLE supplier_slips ENGINE = INNODB;
ALTER TABLE raw_material_types ENGINE = INNODB;
ALTER TABLE stocks ENGINE = INNODB;
ALTER TABLE consumptions ENGINE = INNODB;
ALTER TABLE order_status ENGINE = INNODB;
ALTER TABLE customer_orders ENGINE = INNODB;
ALTER TABLE customer_payments ENGINE = INNODB;
ALTER TABLE customer_invoices ENGINE = INNODB;
ALTER TABLE customer_order_lines ENGINE = INNODB;
/* Valors per defecte */
insert into users(username,password,role) values ('admin','5c46418cf7ac76fdb0264b333de494ddfdb4465f','admin');
/* Per trobar el valor de la contrasenya, convé mirar els resultats de debug de la pantalla de login */
insert into order_status (id,order_status_name,order_status_is_final,created,modified) values
    (1,'pressupost',false,now(),now()),
    (2,'comanda',false,now(),now()),
    (3,'descartat',true,now(),now()),
    (4,'per recollir',false,now(),now()),
    (5,'lliurat',true,now(),now()),
    (6,'cancel·lat',true,now(),now()
);
drop view if exists articles;
create view articles as select 
    id,
    stock_type,
    article_reference,
    article_model,
    article_size,
    stock_comment,
    stock_userfield01,
    stock_userfield02,
    stock_userfield03,
    stock_buy_price,
    stock_vat,
    stock_vat_re,
    stock_sale_price,
    created,
    modified,
    supplier_slip_id,
    supplier_slip_line,
    supplier_invoice_id
    from stocks
    where stock_type='A';
drop view if exists raw_materials;
create view raw_materials as select 
    id,
    stock_type,
    raw_material_type_id,
    raw_mat_units,
    raw_mat_userfield01, /* casc */
    raw_mat_unit_price,
    stock_comment,
    stock_userfield01,
    stock_userfield02,
    stock_userfield03,
    stock_buy_price,
    stock_vat,
    stock_vat_re,
    stock_sale_price,
    created,
    modified,
    supplier_slip_id,
    supplier_slip_line,
    supplier_invoice_id
    from stocks
    where stock_type='M';
drop view if exists customer_invoice_lines;
create view customer_invoice_lines as select 
    id,
    customer_invoice_id,
    customer_invoice_line_number,
    customer_order_id,
    order_line_number,
    order_line_type as customer_invoice_line_type,
    stock_id,
    order_line_description as customer_invoice_line_description,
    created,
    modified,
    order_line_amount as customer_invoice_line_amount,
    order_line_vat as customer_invoice_line_vat
    from customer_order_lines
    where customer_invoice_id is not null;
drop table if exists options;
create table options (
    id int(10) not null default 1,
    vat decimal(10,2) not null default 0.21,
    vat_re decimal(10,2) not null default 0.04
);
ALTER TABLE options ENGINE = INNODB;
insert into options(id,vat,vat_re) values (1,0.21,0.05);
drop table if exists series;
create table series (
    id int(10) unsigned auto_increment primary key,
    serie_code varchar(5) not null,
    serie_description varchar(255) not null,
    active boolean not null default true,
    created datetime default null,
    modified datetime default null
);
ALTER TABLE series ENGINE = INNODB;