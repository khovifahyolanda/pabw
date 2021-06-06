create table mahasiswa (
nim char(9) not null primary key,
nama varchar(30),
kelamin enum('L', 'P'),
jurusan enum('TI', 'SI', 'MI', 'TK', 'KA')
);

insert into mahasiswa(nim, nama, kelamin, jurusan)
values
('133110001', 'Agus Budianto', 'L', 'MI'),
('133110002', 'Pujiawati', 'P', 'KA'),
('133110003', 'MARIO', 'L', 'TK'),
('133110004', 'Michell', 'P', 'SI'),
('133110005', 'Nando', 'L', 'TI'),
('133110006', 'Nana', 'P', 'TK'),
('133110007', 'Riko', 'L', 'SI'),
('133110008', 'Lili', 'P', 'TK'),
('133110009', 'Miko', 'L', 'TI'),
('133110010', 'Andini', 'P', 'KA'),
('133110011', 'Panji', 'L', 'MI'),
('133110012', 'Tiwi', 'P', 'TI'),
('133110013', 'Iwan', 'L', 'SI'),
('133110014', 'Naila', 'P', 'TK'),
('133110015', 'Ridwan', 'L', 'KA'),
('133110016', 'Dini', 'P', 'MI'),
('133110017', 'Reza', 'L', 'KA'),
('133110018', 'Mutia', 'P', 'TK'),
('133110019', 'Tio', 'L', 'MI'),
('133110020', 'Riri', 'P', 'TI');