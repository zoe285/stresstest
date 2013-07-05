CREATE TABLE users (
	id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
	name varchar(200) NOT NULL,
	email varchar(250) NOT NULL,
	age varchar(50) NOT NULL,
	region varchar(5) NOT NULL,
	location varchar(50) NOT NULL,
	position varchar(200) NOT NULL,
	createdon timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;