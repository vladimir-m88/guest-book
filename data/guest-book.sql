DROP TABLE IF EXISTS tbl_messages;

CREATE TABLE IF NOT EXISTS tbl_messages
(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(256) NOT NULL,
    email VARCHAR(256) NOT NULL,
    homepage VARCHAR(256),
    text TEXT NOT NULL,
    public_date DATETIME NOT NULL,
	IP VARCHAR(15) NOT NULL,
	browser VARCHAR(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

INSERT INTO tbl_messages (
    id , 
    user_name, 
    email, 
    homepage, 
    text, 
    public_date, 
    IP, 
    browser
) 
VALUES 
(1 , 'user1', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(2 , 'user2', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(3 , 'user3', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(4 , 'user4', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(5 , 'user5', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(6 , 'user6', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(7 , 'user7', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(8 , 'user8', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(9 , 'user9', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(10, 'user10', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(11, 'user11', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(12, 'user12', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(13, 'user13', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(14, 'user14', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(15, 'user15', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(16, 'user16', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(17, 'user17', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(18, 'user18', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(19, 'user19', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(20, 'user20', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(21, 'user21', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(22, 'user22', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(23, 'user23', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(24, 'user24', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(25, 'user25', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(26, 'user26', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(27, 'user27', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(28, 'user28', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(29, 'user29', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser'),
(30, 'user30', 'example@mail.com', 'http://site.com', 'Тестовое сообщение.', '2016-03-20 14:00:00', '127.0.0.1', 'Sample browser')
;