MYSQL code 

CREATE DATABASE FernNFriend;

CREATE TABLE FernNFriend.reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    review_text TEXT NOT NULL,
    photo_url VARCHAR(255)
);
