drop database if exists soccer_dev;

create database soccer_dev;

use soccer_dev;

CREATE TABLE player (
`id` int(10) not null AUTO_INCREMENT,
`name` varchar(20) not null,
`image` text not null,
`isActive` tinyint(1) not null default 1,
PRIMARY KEY (`id`)
);

CREATE TABLE team (
`id` int(10) not null AUTO_INCREMENT,
`name` varchar(20) not null,
`isActive` tinyint(1) not null default 1,
PRIMARY KEY (`id`)
);

INSERT INTO player values
(null, 'player 1', 'player/1.png', 1),
(null, 'player 2', 'player/2.png', 1),
(null, 'player 3', 'player/3.png', 1),
(null, 'player 4', 'player/4.png', 1),
(null, 'player 5', 'player/5.png', 1),
(null, 'player 6', 'player/6.png', 1);

INSERT INTO team values
(null, 'team 1', 1),
(null, 'team 2', 1),
(null, 'team 3', 1),
(null, 'team 4', 1),
(null, 'team 5', 1),
(null, 'team 6', 1);
