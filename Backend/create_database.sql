Use mywebsite;

CREATE  TABLE users (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	phone VARCHAR(20),
	birthday DATE,
	upassword VARCHAR(255) NOT NULL,
	username VARCHAR(50) NOT NULL,
	gender ENUM('Male', 'Female', 'Other'),
	nationality VARCHAR(50),
	_created TIMESTAMP DEFAULT NOW()
);

CREATE TABLE user_soft_skills (
  id INT PRIMARY KEY AUTO_INCREMENT,
  userId INT,
  skill VARCHAR(50),
  FOREIGN KEY (userId) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE user_technical_skills (
  id INT PRIMARY KEY AUTO_INCREMENT,
  userId INT,
  skill VARCHAR(50),
  FOREIGN KEY (userId) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE user_crowd_work_platforms (
  id INT PRIMARY KEY AUTO_INCREMENT,
  userId INT,
  platform VARCHAR(100),
  FOREIGN KEY (userId) REFERENCES users(id) ON DELETE CASCADE
);


CREATE TABLE crowd_work_platforms (
  id INT PRIMARY KEY AUTO_INCREMENT,
  platform_name VARCHAR(255)
);

CREATE TABLE user_blog_posts (
  id INT PRIMARY KEY AUTO_INCREMENT,
  userId INT,
  topic VARCHAR(255),
  platform_id INT,
  content TEXT,
  _created TIMESTAMP DEFAULT NOW(),
  FOREIGN KEY (platform_id) REFERENCES crowd_work_platforms(id),
  FOREIGN KEY (userId) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE user_qualifications (
  id INT PRIMARY KEY AUTO_INCREMENT,
  userId INT,
  qualification INT,
  FOREIGN KEY (userId) REFERENCES users(id) ON DELETE CASCADE
);


CREATE TABLE post_scores (
  id INT PRIMARY KEY AUTO_INCREMENT,
  post_id INT,
  userId INT,
  score INT,
  FOREIGN KEY (post_id) REFERENCES user_blog_posts(id) ON DELETE CASCADE,
  FOREIGN KEY (userId) REFERENCES users(id) ON DELETE CASCADE
);


CREATE TABLE user_login (
    id INT AUTO_INCREMENT PRIMARY KEY,
    userId INT,
    last_login DATETIME,
    ip_address INT(4),
    FOREIGN KEY (userId) REFERENCES users(id) ON DELETE CASCADE
);
