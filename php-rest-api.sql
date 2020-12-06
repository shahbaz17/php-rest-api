CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `author_picture` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

INSERT INTO `posts` (`title`, `body`, `author`, `author_picture`) VALUES 
('What is Magic?', 'Magic is a developer SDK that you can integrate into your application to enable passwordless authentication using magic links - similar to Slack and Medium.', 'mdsbzalam@gmail.com', 'https://www.gravatar.com/avatar/ac8b2ad0f9d1970ab22960ae04f35118.png'), ('Why Magic?', 'Magic leverages blockchain-based, standardized public-private key cryptography to achieve identity management. When a new user signs up to your service, a public-private key pair is generated for them. ', 'mdsbzalam@gmail.com', 'https://www.gravatar.com/avatar/ac8b2ad0f9d1970ab22960ae04f35118.png');
