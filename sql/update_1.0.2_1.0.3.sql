alter table stocks
 drop article_reference;
alter table stocks
 add article_returned boolean;
drop view articles;
create view articles as select 
    id,
    stock_type,
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
    supplier_invoice_id,
    article_returned
    from stocks
    where stock_type='A';
ALTER TABLE  `customer_order_lines` CHANGE  `order_line_description`  `order_line_description` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;
ALTER TABLE  `customer_order_lines` CHANGE  `order_line_left_article_description`  `order_line_left_article_description` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;
ALTER TABLE  `customer_orders` CHANGE  `order_comments`  `order_comments` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;
ALTER TABLE  `customer_payments` CHANGE  `payment_comments`  `payment_comments` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;
ALTER TABLE  `customer_invoices` CHANGE  `customer_invoice_comments`  `customer_invoice_comments` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;
ALTER TABLE  `stocks` CHANGE  `stock_comment`  `stock_comment` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;
drop table if exists service_types;
create table service_types(
    id int(10) unsigned auto_increment primary key,
    description varchar(50) not null
);
ALTER TABLE  `customer_order_lines` ADD  `service_type_id` INT( 10 ) NULL;
Alter table customer_order_lines add foreign key (service_type_id) references service_types (id);
ALTER TABLE  `options` ADD PRIMARY KEY (  `id` ) ;
ALTER TABLE  `options` ADD  `order_status_id` INT( 10 ) NULL ,
ADD  `customer_invoice_status_id` INT( 10 ) NULL ,
ADD  `supplier_invoice_status_id` INT( 10 ) NULL;
drop view if exists raw_materials;
create view raw_materials as select 
    id,
    stock_type,
    raw_material_type_id,
    raw_mat_units,
    raw_mat_userfield01, /* casc */
    stock_comment,
    stock_userfield01,
    stock_userfield02,
    stock_userfield03,
    stock_buy_price,
    stock_vat,
    stock_vat_re,
    created,
    modified,
    supplier_slip_id,
    supplier_slip_line,
    supplier_invoice_id
    from stocks
    where stock_type='M';
ALTER TABLE  `options` ADD  `order_invoiced_status_id` INT( 10 ) NULL;
drop table if exists series;
create table invoice_groups (
    id int(10) unsigned auto_increment primary key,
    code varchar(5) not null,
    description varchar(255) not null,
    active boolean not null default true,
    created datetime default null,
    modified datetime default null
);
ALTER TABLE invoice_groups ENGINE = INNODB;
drop table if exists customer_invoices;
create table customer_invoices (
    id int(10) unsigned auto_increment primary key,
    customer_id int(10) not null,
    customer_invoice_date date not null,
    invoice_group_id int(10) not null,
    customer_invoice_number int(10) not null,
    customer_invoice_status_id int(10) not null,
    customer_invoice_comments varchar(255),
    created datetime default null,
    modified datetime default null,
    foreign key (customer_id) references customers(id),
    foreign key (invoice_group_id) references invoice_groups(id)
);
