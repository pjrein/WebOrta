CREATE TABLE `temp` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'unique ID',
  `event` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Event Date and Time',
  `sensor` varchar(30) NOT NULL COMMENT 'Unique ID of the sensor',
  `celsius` varchar(10) NOT NULL COMMENT 'Measured Temperature in Celsius',
  PRIMARY KEY (`id`)
  #KEY `event` (`event`,`sensor`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8