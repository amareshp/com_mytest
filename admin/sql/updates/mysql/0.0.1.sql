DROP TABLE IF EXISTS `#__mytest`;
 
CREATE TABLE `#__mytest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comm_name` varchar(100) NOT NULL,
  `comm_addr1` varchar(100) NOT NULL,
  `comm_addr2` varchar(100),
  `comm_city` varchar(100) NOT NULL,
  `comm_state` varchar(100) NOT NULL,
  `comm_pin` varchar(8) NOT NULL,
  `comm_country` varchar(8) NOT NULL,
   PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
 
INSERT INTO `#__mytest` (`comm_name`, `comm_addr1`, `comm_addr2`, `comm_city`, `comm_state`, `comm_pin`, `comm_country`) VALUES
        ('comm 1', 'addr 1', 'addr 2', 'bengaluru', 'karnataka', '560101', 'india'),
        ('comm 2', 'addr 1', 'addr 2', 'bengaluru', 'karnataka', '560102', 'india'),
        ('comm 3', 'addr 1', 'addr 2', 'bengaluru', 'karnataka', '560103', 'india'),
        ('comm 4', 'addr 1', 'addr 2', 'bengaluru', 'karnataka', '560104', 'india'),
        ('comm 5', 'addr 1', 'addr 2', 'bengaluru', 'karnataka', '560105', 'india'),
        ('comm 6', 'addr 1', 'addr 2', 'bengaluru', 'karnataka', '560106', 'india'),
        ('comm 7', 'addr 1', 'addr 2', 'bengaluru', 'karnataka', '560107', 'india'),
        ('comm 8', 'addr 1', 'addr 2', 'bengaluru', 'karnataka', '560108', 'india'),
        ('comm 9', 'addr 1', 'addr 2', 'bengaluru', 'karnataka', '560109', 'india');

        