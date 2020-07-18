cr10_ChristophBarton_biglibrary

CREATE  TABLE `cr10_ChristophBarton_biglibrary`.`customer` (
`id`  INT(11) NOT NULL AUTO_INCREMENT,
`first_name` VARCHAR(255) NOT NULL ,
`last_name` VARCHAR(255) NOT  NULL,
`date_of_birth` DATE NOT  NULL,
`active` int(1 ) NOT NULL DEFAULT '0' ,
PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

CREATE  TABLE `cr10_ChristophBarton_biglibrary`.`media` (
`id`  INT(11) NOT NULL AUTO_INCREMENT,
`title` VARCHAR(255) NOT NULL ,
`genre` VARCHAR(255) NOT  NULL,
`author` Varchar(255) NOT  NULL,
`ISBN_Code` INT NOT NULL,
`active` int(1 ) NOT NULL DEFAULT '0' ,
PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;