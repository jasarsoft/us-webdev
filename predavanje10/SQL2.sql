-- GRANT komanda
-- sledecom naredbom se korisniku nebojsa@localhost
-- dodeljuju privilegije UPDATE i DELETE nad svim 
-- tabelama u bazi podataka sii
GRANT UPDATE, DELETE ON sii.* TO 'nebojsa'@'localhost';