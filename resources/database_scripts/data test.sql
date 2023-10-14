/* insert data table khach_hang */
insert into khach_hang(`ho_ten`,`dia_chi`,`dien_thoai`,`created_at`) 
values('Khách hàng 1','Địa chỉ 1', LPAD(FLOOR(RAND() * 10000000000), 10, '0'),CURRENT_TIMESTAMP()),
('Khách hàng 2','Địa chỉ 2', LPAD(FLOOR(RAND() * 10000000000), 10, '0'),CURRENT_TIMESTAMP()),
('Khách hàng 3','Địa chỉ 3', LPAD(FLOOR(RAND() * 10000000000), 10, '0'),CURRENT_TIMESTAMP()),
('Khách hàng 4','Địa chỉ 4', LPAD(FLOOR(RAND() * 10000000000), 10, '0'),CURRENT_TIMESTAMP()),
('Khách hàng 5','Địa chỉ 5', LPAD(FLOOR(RAND() * 10000000000), 10, '0'),CURRENT_TIMESTAMP()),
('Khách hàng 6','Địa chỉ 6', LPAD(FLOOR(RAND() * 10000000000), 10, '0'),CURRENT_TIMESTAMP()),
('Khách hàng 7','Địa chỉ 7', LPAD(FLOOR(RAND() * 10000000000), 10, '0'),CURRENT_TIMESTAMP()),
('Khách hàng 8','Địa chỉ 8', LPAD(FLOOR(RAND() * 10000000000), 10, '0'),CURRENT_TIMESTAMP()),
('Khách hàng 9','Địa chỉ 9', LPAD(FLOOR(RAND() * 10000000000), 10, '0'),CURRENT_TIMESTAMP()),
('Khách hàng 10','Địa chỉ 10', LPAD(FLOOR(RAND() * 10000000000), 10, '0'),CURRENT_TIMESTAMP()),
('Khách hàng 11','Địa chỉ 11', LPAD(FLOOR(RAND() * 10000000000), 10, '0'),CURRENT_TIMESTAMP()),
('Khách hàng 12','Địa chỉ 12', LPAD(FLOOR(RAND() * 10000000000), 10, '0'),CURRENT_TIMESTAMP());
/* insert data table chi_nhanh */
insert into chi_nhanh(`ten_chi_nhanh`,`dia_chi`,`dien_thoai`,`quan_ly`,`created_at`)
values('Châu Đốc','Châu Đốc An Giang',LPAD(FLOOR(RAND() * 10000000000), 10, '0'),1,CURRENT_TIMESTAMP()),
('Cai Lậy','Cai Lậy Tiền Giang',LPAD(FLOOR(RAND() * 10000000000), 10, '0'),1,CURRENT_TIMESTAMP());
/* insert data table phong_ban */
INSERT INTO `phong_ban` (`ten_phong_ban`, `dien_thoai`,`quan_ly`,`created_at`)
values('Phòng Kinh Doanh',LPAD(FLOOR(RAND() * 10000000000), 10, '0'),1,CURRENT_TIMESTAMP()),
('Phòng Sản Xuất',LPAD(FLOOR(RAND() * 10000000000), 10, '0'),1,CURRENT_TIMESTAMP()),
('Phòng Kho',LPAD(FLOOR(RAND() * 10000000000), 10, '0'),1,CURRENT_TIMESTAMP()),
('Phòng Kế Toán',LPAD(FLOOR(RAND() * 10000000000), 10, '0'),1,CURRENT_TIMESTAMP());
/* insert data table nhan_vien*/
INSERT INTO nhan_vien(`username`,`role`,`ho_ten`,`dia_chi`,`dien_thoai`,`phong_id`,`chi_nhanh_id`,`created_at`)
values('admin','Admin','Quản lý công ty','Địa chỉ quản lý',LPAD(FLOOR(RAND() * 10000000000), 10, '0'),1,1,CURRENT_TIMESTAMP()),
('username1','User 1','Nhân viên 1','Địa chỉ nhân viên 1',LPAD(FLOOR(RAND() * 10000000000), 10, '0'),1,1,CURRENT_TIMESTAMP()),
('username2','User 2','Nhân viên 2','Địa chỉ nhân viên 2',LPAD(FLOOR(RAND() * 10000000000), 10, '0'),2,1,CURRENT_TIMESTAMP()),
('username3','User 3','Nhân viên 3','Địa chỉ nhân viên 3',LPAD(FLOOR(RAND() * 10000000000), 10, '0'),3,1,CURRENT_TIMESTAMP()),
('username4','User 4','Nhân viên 4','Địa chỉ nhân viên 4',LPAD(FLOOR(RAND() * 10000000000), 10, '0'),4,1,CURRENT_TIMESTAMP()),
('username5','User 5','Nhân viên 5','Địa chỉ nhân viên 5',LPAD(FLOOR(RAND() * 10000000000), 10, '0'),1,2,CURRENT_TIMESTAMP()),
('username6','User 6','Nhân viên 6','Địa chỉ nhân viên 6',LPAD(FLOOR(RAND() * 10000000000), 10, '0'),2,2,CURRENT_TIMESTAMP()),
('username7','User 7','Nhân viên 7','Địa chỉ nhân viên 7',LPAD(FLOOR(RAND() * 10000000000), 10, '0'),3,2,CURRENT_TIMESTAMP()),
('username8','User 8','Nhân viên 8','Địa chỉ nhân viên 8',LPAD(FLOOR(RAND() * 10000000000), 10, '0'),4,2,CURRENT_TIMESTAMP()),
('username9','User 9','Nhân viên 9','Địa chỉ nhân viên 9',LPAD(FLOOR(RAND() * 10000000000), 10, '0'),1,1,CURRENT_TIMESTAMP()),
('username10','User 10','Nhân viên 10','Địa chỉ nhân viên 10',LPAD(FLOOR(RAND() * 10000000000), 10, '0'),2,2,CURRENT_TIMESTAMP()),
('username11','User 11','Nhân viên 11','Địa chỉ nhân viên 11',LPAD(FLOOR(RAND() * 10000000000), 10, '0'),3,1,CURRENT_TIMESTAMP()),
('username12','User 12','Nhân viên 12','Địa chỉ nhân viên 12',LPAD(FLOOR(RAND() * 10000000000), 10, '0'),4,2,CURRENT_TIMESTAMP());

