--  Membuat Sebuah Query untuk mencari nama mahasiswa yang memiliki nilai mata kuliah tertinggi pada mata kuliah dengan kode MK303.


SELECT mhs_nama FROM tb_mahasiswa JOIN tb_mahasiswa_nilai ON tb_mahasiswa_nilai.mhs_id = tb_mahasiswa.mhs_id JOIN tb_matakuliah ON tb_matakuliah.mk_id = tb_mahasiswa_nilai.mk_id WHERE tb_matakuliah.mk_kode = 'MK303' ORDER BY tb_mahasiswa_nilai.nilai DESC