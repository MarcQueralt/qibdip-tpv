/**
  Creation script for qibdip-tpv
  Marc@demomentsomtres.com
  version 1.0
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
    townname varchar(50) not null,
    created datetime default null,
    modified datetime default null
);
drop table if exists clients;
create table clients (
    id int(10) unsigned auto_increment primary key,
    name varchar(100) not null,
    address varchar(100) not null,
    town_id int(10),
    idcard varchar(12),
    phone1 varchar(15),
    phone2 varchar(15),
    email varchar(100),
    created datetime default null,
    modified datetime default null,
    foreign key (town_id) references towns(id) on delete restrict
);
drop table if exists proveidors;
create table proveidors (
    id int(10) unsigned auto_increment primary key,
    name varchar(100) not null,
    address varchar(100) not null,
    town_id int(10),
    cif varchar(12),
    phone1 varchar(15),
    phone2 varchar(15),
    created datetime default null,
    modified datetime default null,
    foreign key (town_id) references towns(id) on delete restrict
);
drop table if exists estats_factures_proveidors;
create table estats_factures_proveidors (
    id int(10) unsigned auto_increment primary key,
    name varchar(25),
    estat_final boolean not null default false,
    created datetime default null,
    modified datetime default null
);
drop table if exists factures_proveidors;
create table factures_proveidors (
    id int(10) unsigned auto_increment primary key,
    num varchar(15) not null,
    proveidor_id int(10) not null,
    date datetime default null,
    amount decimal(10,2) not null default 0,
    iva decimal(10,2) not null default 0,
    recarrec_equivalencia decimal(10,2) default 0,
    estat_id int(10) not null,
    created datetime default null,
    modified datetime default null,
    foreign key (proveidor_id) references proveidors(id) on delete restrict,
    foreign key (estat_id) references estats_factures_proveidors(id) on delete restrict
);
drop table if exists albarans;
create table albarans (
    id int(10) unsigned auto_increment primary key,
    num varchar(15) not null,
    proveidor_id int(10) not null,
    date datetime default null,
    created datetime default null,
    modified datetime default null,
    foreign key (proveidor_id) references proveidors(id) on delete restrict
);
drop table if exists tipus_materies_primeres;
create table tipus_materies_primeres(
    id int(10) unsigned auto_increment primary key,
    text varchar(25) not null,
    consum_parcial float default true, /* Indica si es consumeix totalment o per unitats */
    unitat_mesura varchar(25)
);
drop table if exists inventaris;
create table inventaris (
    id int(10) unsigned auto_increment primary key,
    tipus varchar(1) not null default 'A', /* A - Article, M - Materia primera */
    /* Articles */
    referencia varchar(50) not null,
    model varchar(250) not null,
    talla varchar(10),
    /* Materia primera */
    tipus_materia_id int(10),
    unitats decimal(10,2),
    casc varchar(50),
    preu_unitat decimal(10,2),
    /* Comu */
    comentari varchar(250) default '',
    pell varchar(10),
    acabat varchar(10),
    color varchar(10),
    preu_compra decimal(10,2) default 0,
    iva decimal(10,2) default 0,
    recarrec_equivalencia decimal(10,2) default 0,
    pvp decimal(10,2) default 0,
    created datetime default null,
    modified datetime default null,
    factura_id int(10) not null,
    foreign key (factura_id) references factures_proveidors(id),
    foreign key (tipus_materia_id) references tipus_materies_primeres(id)
);
drop table if exists consums;
create table consums (
    id int(10) unsigned auto_increment primary key,
    article_id int(10) not null,
    materia_id int(10),
    unitats_consumides decimal(10,2) not null,
    tallar decimal(10,2) not null default 0,
    cosir decimal(10,2) not null default 0,
    complements decimal(10,2) not null default 0,
    altres decimal(10,2) not null default 0,
    foreign key (article_id) references inventaris(id),
    foreign key (materia_id) references inventaris(id)
);
drop table if exists estats_encarrecs;
create table estats_encarrecs(
    id int(10) unsigned auto_increment primary key,
    name varchar(25),
    estat_final boolean not null default false,
    created datetime default null,
    modified datetime default null
);
drop table if exists encarrecs;
create table encarrecs (
    id int(10) unsigned auto_increment primary key,
    client_id int(10) not null,
    estat_id int(10) not null,
    observacions varchar(255),
    created datetime default null,
    modified datetime default null,
    foreign key (client_id) references clients(id) on delete restrict,
    foreign key (estat_id) references estats_encarrecs(id) on delete restrict
);
drop table if exists pagaments;
create table pagaments (
    id int(10) unsigned auto_increment primary key,
    date datetime not null,
    import decimal(10,2) not null default 0,
    observacions varchar(255),
    paga_i_senyal boolean default false,
    encarrec_id int(10) not null,
    created datetime default null,
    modified datetime default null,
    foreign key (encarrec_id) references encarrecs(id)    
);
drop table if exists factures_clients;
create table factures_clients (
    id int(10) unsigned auto_increment primary key,
    encarrec_id int(10) not null,
    date datetime not null,
    num int(10) not null,
    observacions varchar(255),
    created datetime default null,
    modified datetime default null,
    foreign key (encarrec_id) references encarrecs(id)
);
drop table if exists linies;
create table linies (
    id int(10) unsigned auto_increment primary key,
    encarrec_id int(10) not null,
    estat_id int(10) not null,
    tipus varchar(1) not null default 'S', /* legend S-Servei, V-Venda */
    article_id int(10) default null,
    en_diposit boolean default false, 
    en_diposit_descripcio varchar(250),
    data_prevista datetime default null,
    created datetime default null,
    modified datetime default null,
    factura_id int(10) not null,
    import decimal(10,2) not null,
    iva decimal(10,2) not null,
    observacions varchar(255) default null,
    foreign key (encarrec_id) references encarrecs(id) on delete restrict,
    foreign key (estat_id) references estats_encarrecs(id) on delete restrict,
    foreign key (article_id) references articles(id) on delete restrict,
    foreign key (factura_id) references factures_clients(id) on delete restrict
);
/* Conversio a InnoDB */
ALTER TABLE users ENGINE = INNODB;
ALTER TABLE towns ENGINE = INNODB;
ALTER TABLE clients ENGINE = INNODB;
ALTER TABLE proveidors ENGINE = INNODB;
ALTER TABLE estats_factures_proveidors ENGINE = INNODB;
ALTER TABLE factures_proveidors ENGINE = INNODB;
ALTER TABLE albarans ENGINE = INNODB;
ALTER TABLE tipus_materies_primeres ENGINE = INNODB;
ALTER TABLE inventaris ENGINE = INNODB;
ALTER TABLE consums ENGINE = INNODB;
ALTER TABLE estats_encarrecs ENGINE = INNODB;
ALTER TABLE encarrecs ENGINE = INNODB;
ALTER TABLE pagaments ENGINE = INNODB;
ALTER TABLE factures_clients ENGINE = INNODB;
ALTER TABLE linies ENGINE = INNODB;
/* Valors per defecte */
insert into users(username,password,role) values ('admin',md5('R2D2!C3PO'),'admin');
insert into estats_encarrecs(id,name,estat_final,created,modified) values
    (1,'pressupost',false,now(),now()),
    (2,'comanda',false,now(),now()),
    (3,'descartat',true,now(),now()),
    (4,'per recollir',true,now(),now()),
    (5,'lliurat',true,now(),now()),
    (6,'cancel·lat',true,now(),now()
);