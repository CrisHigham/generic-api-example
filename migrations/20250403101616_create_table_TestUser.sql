CREATE TABLE test_user
(
    id integer not null,
    first_name  varchar(255) default '',
    last_name  varchar(255) default '',
    email  varchar(255) default '',
    password varchar(255) default '',
    cellphone integer default 0,
    is_active integer default 0,
    date_created datetime default CURRENT_TIMESTAMP,
    primary key (id)
);