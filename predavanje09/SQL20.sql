-- funkcije za rad sa datumima
-- ADDDATE VRACA VREME 09:49:23
SELECT ADDDATE("2018-08-04 09:34:23", INTERVAL 15 MINUTE);
-- CURRENT_TIME vraca trenutno vreme
SELECT CURRENT_TIME();
-- DAY vraca dan od vremena
SELECT DAY("2018-08-04 09:34:23");
-- LAST_DAY vraca poslednji dan meseca
SELECT LAST_DAY("2018-08-04 09:34:23");