Review page : ไฟล์ review.css review.php submit_review.php ถ้าอยากลองใช้เต็มๆ แบบเพิ่มคหได้ เปิดXampp สร้างตารางตามโค้ดด้านล่าง + ต้องสร้าง folder ชื่อ uploads ในไดเรกทอรีเดียวกับพวกโค้ด review.css submit_review ไรงี้ด้วย

MYSQL code เพื่อใช่สร้างตารางใน MySQL:
CREATE DATABASE FernNFriend;

CREATE TABLE FernNFriend.reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    review_text TEXT NOT NULL,
    photo_url VARCHAR(255)
);
