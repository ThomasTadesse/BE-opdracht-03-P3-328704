USE `magazijn-jamin`;

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `sp_GetLeverancierWithContact`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_GetLeverancierWithContact` (IN `leverancierId` SMALLINT)   SELECT   LEVE.Id
		,LEVE.Naam 
        ,LEVE.Contactpersoon 
        ,LEVE.Leveranciernummer
        ,LEVE.Mobiel 
        ,CONT.Straat
        ,CONT.Huisnummer
        ,CONT.Postcode 
        ,CONT.Stad

FROM leverancier AS LEVE

LEFT JOIN contact AS CONT 

ON LEVE.contactId = CONT.Id

WHERE LEVE.Id = leverancierId$$

DELIMITER ;
