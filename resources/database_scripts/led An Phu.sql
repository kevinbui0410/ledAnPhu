CREATE TABLE `khach_hang` (
  `id` integer PRIMARY KEY,
  `ho_ten` varchar(255),
  `dia_chi` varchar(255),
  `dien_thoai` varchar(255),
  `created_at` timestamp
);

CREATE TABLE `nhan_vien` (
  `id` integer PRIMARY KEY,
  `username` varchar(255),
  `role` varchar(255),
  `ho_ten` varchar(255),
  `dia_chi` varchar(255),
  `dien_thoai` varchar(255),
  `phong_id` integer COMMENT 'phòng ban nhân viên làm việc',
  `chi_nhanh_id` integer COMMENT 'chi nhánh làm việc',
  `created_at` timestamp
);

CREATE TABLE `don_hang` (
  `id` integer PRIMARY KEY,
  `ten_don_hang` varchar(255),
  `khach_hang` integer,
  `noi_dung` text COMMENT 'nội dung chi tiết đơn hàng',
  `trang_thai` tinyint COMMENT 'trạng thái đơn hàng',
  `ngay_nhan` timestamp COMMENT 'ngày nhận đơn hàng',
  `ngay_thiet_ke` timestamp COMMENT 'ngày thiết kế',
  `ngay_thi_cong` timestamp COMMENT 'ngày thi công',
  `ngay_hoan_thanh` timestamp COMMENT 'ngày hoàn thành',
  `created_at` timestamp
);

CREATE TABLE `chi_nhanh` (
  `id` integer PRIMARY KEY,
  `ten_chi_nhanh` varchar(255),
  `dia_chi` varchar(255),
  `dien_thoai` varchar(255),
  `quan_ly` integer COMMENT 'id nhân viên',
  `created_at` timestamp
);

CREATE TABLE `phong_ban` (
  `id` integer PRIMARY KEY,
  `ten_phong_ban` varchar(255),
  `dien_thoai` varchar(255),
  `quan_ly` integer COMMENT 'id nhân viên',
  `created_at` timestamp
);

CREATE TABLE `don_hang_nhan_vien` (
  `id` integer PRIMARY KEY,
  `don_hang` integer,
  `nhan_vien` integer
);

CREATE TABLE `khach_hang_nhan_vien` (
  `id` integer PRIMARY KEY,
  `khach_hang` integer,
  `nhan_vien` integer
);


CREATE  VIEW `vw_chi_nhanh`  
AS SELECT `chi_nhanh`.*, `nhan_vien`.`ho_ten` AS `ten_quan_ly` 
FROM (`chi_nhanh` join `nhan_vien` on(`chi_nhanh`.`quan_ly` = `nhan_vien`.`id`)) ;


CREATE  VIEW `vw_phong_ban`  
AS SELECT `phong_ban`.*, `nhan_vien`.`ho_ten` AS `ten_quan_ly` 
FROM (`phong_ban` join `nhan_vien` on(`phong_ban`.`quan_ly` = `nhan_vien`.`id`)) ;

INSERT INTO don_hang(`ten_don_hang`,`khach_hang`,`noi_dung`,`trang_thai`,`ngay_nhan`,`ngay_thiet_ke`,`ngay_thi_cong`,`ngay_hoan_thanh`)
VALUES
('Đơn hàng 1',1,'Nội dung đơn hàng 1',0,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 2',1,'Nội dung đơn hàng 2',1,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 3',1,'Nội dung đơn hàng 3',2,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 4',1,'Nội dung đơn hàng 4',3,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 5',1,'Nội dung đơn hàng 5',4,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 1',2,'Nội dung đơn hàng 1',0,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 2',2,'Nội dung đơn hàng 2',1,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 3',2,'Nội dung đơn hàng 3',2,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 4',2,'Nội dung đơn hàng 4',3,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 5',2,'Nội dung đơn hàng 5',4,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 1',3,'Nội dung đơn hàng 1',0,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 2',3,'Nội dung đơn hàng 2',1,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 3',3,'Nội dung đơn hàng 3',2,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 4',3,'Nội dung đơn hàng 4',3,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 5',3,'Nội dung đơn hàng 5',4,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 1',4,'Nội dung đơn hàng 1',0,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 2',4,'Nội dung đơn hàng 2',1,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 3',4,'Nội dung đơn hàng 3',2,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 4',4,'Nội dung đơn hàng 4',3,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 5',4,'Nội dung đơn hàng 5',4,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 1',5,'Nội dung đơn hàng 1',0,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 2',5,'Nội dung đơn hàng 2',1,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 3',5,'Nội dung đơn hàng 3',2,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 4',5,'Nội dung đơn hàng 4',3,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 5',5,'Nội dung đơn hàng 5',4,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 1',6,'Nội dung đơn hàng 1',0,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 2',6,'Nội dung đơn hàng 2',1,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 3',6,'Nội dung đơn hàng 3',2,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 4',6,'Nội dung đơn hàng 4',3,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 5',6,'Nội dung đơn hàng 5',4,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 1',7,'Nội dung đơn hàng 1',0,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 2',7,'Nội dung đơn hàng 2',1,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 3',7,'Nội dung đơn hàng 3',2,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 4',7,'Nội dung đơn hàng 4',3,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 5',7,'Nội dung đơn hàng 5',4,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 1',7,'Nội dung đơn hàng 1',0,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 2',8,'Nội dung đơn hàng 2',1,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 3',8,'Nội dung đơn hàng 3',2,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 4',8,'Nội dung đơn hàng 4',3,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 5',8,'Nội dung đơn hàng 5',4,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 1',9,'Nội dung đơn hàng 1',0,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 2',9,'Nội dung đơn hàng 2',1,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 3',9,'Nội dung đơn hàng 3',2,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 4',9,'Nội dung đơn hàng 4',3,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 5',9,'Nội dung đơn hàng 5',4,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 1',10,'Nội dung đơn hàng 1',0,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 2',10,'Nội dung đơn hàng 2',1,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 3',10,'Nội dung đơn hàng 3',2,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 4',10,'Nội dung đơn hàng 4',3,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 5',10,'Nội dung đơn hàng 5',4,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 1',11,'Nội dung đơn hàng 1',0,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 2',11,'Nội dung đơn hàng 2',1,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 3',11,'Nội dung đơn hàng 3',2,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 4',11,'Nội dung đơn hàng 4',3,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 5',11,'Nội dung đơn hàng 5',4,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 1',12,'Nội dung đơn hàng 1',0,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 2',12,'Nội dung đơn hàng 2',1,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 3',12,'Nội dung đơn hàng 3',2,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 4',12,'Nội dung đơn hàng 4',3,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP),
('Đơn hàng 5',12,'Nội dung đơn hàng 5',4,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,CURRENT_TIMESTAMP);

INSERT INTO trang_thai_don_hang(`trang_thai`,`dien_giai`) VALUES (0,'Đã nhận'),(1,'Đang thiết kế'),(2,'Đã thiết kế'),(3,'Đang thi công'),(4,'Hoàn thành');

CREATE VIEW vw_don_hang AS SELECT don_hang.*, khach_hang.ho_ten as ten_khach_hang, trang_thai_don_hang.dien_giai as dien_giai FROM don_hang INNER JOIN khach_hang ON don_hang.khach_hang = khach_hang.id INNER JOIN trang_thai_don_hang on don_hang.trang_thai = trang_thai_don_hang.trang_thai;

/*
ALTER TABLE `nhan_vien` ADD FOREIGN KEY (`id`) REFERENCES `chi_nhanh` (`quan_ly`);

ALTER TABLE `nhan_vien` ADD FOREIGN KEY (`id`) REFERENCES `phong_ban` (`quan_ly`);

ALTER TABLE `don_hang` ADD FOREIGN KEY (`khach_hang`) REFERENCES `khach_hang` (`id`);

ALTER TABLE `don_hang_nhan_vien` ADD FOREIGN KEY (`don_hang`) REFERENCES `don_hang` (`id`);

ALTER TABLE `don_hang_nhan_vien` ADD FOREIGN KEY (`nhan_vien`) REFERENCES `nhan_vien` (`id`);
*/
