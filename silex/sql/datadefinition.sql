USE silex;

-- CREATE YOUR TABLES HERE
CREATE TABLE blog_post (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(255),
  text TEXT,
  created_at DATE,
  ALTER TABLE blog_post ADD author VARCHAR(255)
);

