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
