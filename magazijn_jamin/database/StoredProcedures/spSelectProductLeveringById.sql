/******************************************************
-- Doel: Opvragen van records uit de tabellen Product
         ProductPerLeverancier en Leverancier op basis
         van het ProductId
*******************************************************
-- Versie: 01
-- Datum:  22-11-2024
-- Auteur: Thomas Tadesse
******************************************************/

-- Selecteer de juiste database voor je stored procedure
use `magazijn-jamin`;

-- Verwijder de oude stored procedure
DROP PROCEDURE IF EXISTS spSelectProductLeveringById;

-- Verander even tijdelijk de opdrachtprompt naar //
DELIMITER //

CREATE PROCEDURE spSelectProductLeveringById(
    IN ProductId INT UNSIGNED
)
BEGIN

    SELECT  DATE_FORMAT(PPL.DatumLevering, "%d-%m-%Y") AS DatumLevering
           ,DATE_FORMAT(PPL.DatumEerstVolgendeLevering, "%d-%m-%Y") AS DatumEerstVolgendeLevering
           ,PPL.Aantal
           ,PROD.Naam                       AS ProductNaam
           ,PROD.Id
           ,LEVE.Naam                       AS LeverancierNaam
           ,LEVE.Contactpersoon
           ,LEVE.Leveranciernummer
           ,LEVE.Mobiel
           ,MAGA.AantalAanwezig

    FROM  ProductPerLeverancier AS PPL

    INNER JOIN Product AS PROD
            ON PPL.ProductId = PROD.Id

    INNER JOIN Leverancier AS LEVE 
            ON PPL.LeverancierId = LEVE.Id

    INNER JOIN Magazijn AS MAGA 
            ON MAGA.ProductId = PROD.Id

    WHERE PPL.ProductId = ProductId

    ORDER BY PPL.DatumLevering ASC;


END //
DELIMITER ;

/************* debug code stored procedure **************

CALL spSelectProductLeveringById(1);

********************************************************/



