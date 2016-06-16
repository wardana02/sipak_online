<?php

DELIMITER //
CREATE TRIGGER insert_mess_reply
AFTER INSERT
   ON inbox FOR EACH ROW

BEGIN

INSERT INTO mess_replay (TextDecoded,SenderNumber,no_pendaftaran,kode,jenis)
(
 SELECT
 	TextDecoded,
 	SenderNumber,
 	SUBSTRING(TextDecoded,8,13) as no, 
 	SUBSTRING(TextDecoded,10,2) as kode,
 	IF(SUBSTRING(TextDecoded,10,2) = '02','akta_kelahiran',
 		IF(SUBSTRING(TextDecoded,10,2) = '29','akta_kematian',
 			IF(SUBSTRING(TextDecoded,10,2) = '12','akta_perkawinan',
 				IF(SUBSTRING(TextDecoded,10,2) = '19','akta_perceraian','tidak_tahu')
 			)
 		)
 	) jenis 
 	FROM inbox WHERE TextDecoded LIKE 'STATUS_%' AND inbox.ID=(SELECT MAX(ID) FROM inbox)
 );

END; //
DELIMITER ;


DELIMITER //
CREATE TRIGGER auto_reply
AFTER INSERT
   ON mess_replay FOR EACH ROW

BEGIN

INSERT INTO outbox (DestinationNumber,TextDecoded)
(
	 SELECT SenderNumber,
	 CONCAT(no_pendaftaran ,
	 '. Verifikasi RW : ',IF(by_rw IS NULL,'Belum Verifikasi',by_rw),
	 '. Verifikasi Kelurahan : ', IF(by_kelurahan IS NULL,'Belum Verifikasi',by_kelurahan),
	 '. Verifikasi Dukcapil : ', IF(by_dukcapil IS NULL,'Belum Verifikasi',by_dukcapil),
	 '. Progres Akta : ', IF(progres IS NULL,'Belum Diproses',progres)
	 ) as kata
		FROM mess_replay JOIN approval ON mess_replay.no_pendaftaran=approval.no_regis
		 WHERE mess_replay.ID=(SELECT MAX(ID) FROM mess_replay)

 );
END; //
DELIMITER ;



	 SELECT SenderNumber,
	 CONCAT(no_pendaftaran ,
	 '. Verifikasi RW : ',IF(by_rw IS NULL,'Belum Verifikasi',by_rw),
	 '. Verifikasi Kelurahan : ', IF(by_kelurahan IS NULL,'Belum Verifikasi',by_kelurahan),
	 '. Verifikasi Dukcapil : ', IF(by_dukcapil IS NULL,'Belum Verifikasi',by_dukcapil),
	 '. Progres Akta : ', IF(progres IS NULL,'Belum Diproses',progres)
	 ) as kata
		FROM mess_replay JOIN approval ON mess_replay.no_pendaftaran=approval.no_regis
		 WHERE mess_replay.ID='10'


DELIMITER //
CREATE TRIGGER ganti_hp
AFTER INSERT
   ON inbox FOR EACH ROW

BEGIN

DECLARE Vjenis VARCHAR(20);
DECLARE Vhp VARCHAR(20);
UPDATE Vjenis SET no_hp=Vhp WHERE no_pendaftaran=kueri.kode(
SELECT
 	TextDecoded,
 	SenderNumber,
 	SUBSTRING(TextDecoded,9,13) as no, 
 	SUBSTRING(TextDecoded,11,2) as kode,
 	IF(SUBSTRING(TextDecoded,11,2) = '02','akta_kelahiran',
 		IF(SUBSTRING(TextDecoded,11,2) = '29','akta_kematian',
 			IF(SUBSTRING(TextDecoded,11,2) = '12','akta_perkawinan',
 				IF(SUBSTRING(TextDecoded,11,2) = '19','akta_perceraian','tidak_tahu')
 			)
 		)
 	) jenis INTO Vjenis,
  SUBSTRING(TextDecoded,23,13) as hp_baru INTO Vhp
 	FROM inbox WHERE TextDecoded LIKE 'GANTIHP_%' AND inbox.ID=(SELECT MAX(ID) FROM inbox)
)as kueri ;

END; //
DELIMITER ;