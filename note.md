# CMD
-git init
-git status (Check trạng thái các thư mục)
-git add index.php
-git add . (Chuẩn bị lưu)
-git reset (Bỏ chuẩn lưu)

-git commit -m 'initial commit' (Trong 'initial commit' ý để note là điểm bắt đầu dự án)

- SAU KHI HOÀN THÀNH V2 THÌ LƯU NHƯ SAU:
-git add .
-git commit -m 'second commit'

-git log (Xem lịch sử lưu)
-git log --oneline (Xem lịch sử lưu và xem được id lưu)
-git checkout {id lưu} (Xoá)

- git checkout -b dev (Tạo branch mới)
- git checkout master (Quay lại branch master)
- git merge dev (Tổng hợp branch dev lại)
- git branch -d {tên branch}

--Cách push lên
-git remote add origin https://github.com/HauKiett/TruongAn.git (Định nghĩa origin là đg dẫn)
- git push origin master

--Tạo branch để up lên github rồi up lên github
-git checkout -b dev
-git checkout -b dev
-git push -u origin dev


--Muốn lấy dự án trên github về thì dùng câu lệnh
-cd vào thư mục
-git clone https://github.com/HauKiett/TruongAn.git

--Lấy cái branch trên github đã tạo đem về máy chưa có gì
-git checkout master
-git fetch origin
-git checkout -b {Tên branch} origin/{Tên branch}


----Cách Merge trên github
Vào Pull Requests -> new
Chọn master và nguyen 
Chọn Create hết 
Chọn Merge

