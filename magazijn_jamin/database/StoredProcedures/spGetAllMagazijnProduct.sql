/******************************************************
-- Doel: Opvragen van alle records uit de tabellen Magazijn
--       en Product
-- Versie: 01
-- Datum:  22-11-2024
-- Auteur: Thomas Tadesse
******************************************************/

-- Selecteer de juiste database voor je stored procedure
use `magazijn-jamin`;

-- Verwijder de oude stored procedure
DROP PROCEDURE IF EXISTS spGetAllMagazijnProduct;

-- Verander even tijdelijk de opdrachtprompt naar //
DELIMITER //

CREATE PROCEDURE spGetAllMagazijnProduct()
BEGIN
    
    SELECT   PROD.Id                    AS ProductId
            ,PROD.Naam
            ,PROD.Barcode
            ,MAGA.Id                    AS MagazijnId
            ,MAGA.ProductId             AS MagazijnProductId 
            ,MAGA.VerpakkingsEenheid
            ,MAGA.AantalAanwezig
            ,MAGA.DatumAangemaakt
            ,MAGA.DatumGewijzigd

    FROM    Product AS PROD

    INNER JOIN  Magazijn AS MAGA
            ON  PROD.Id = MAGA.ProductId
    
    ORDER BY PROD.Barcode ASC;
    

END //
DELIMITER ;

/************* debug code stored procedure **************

CALL spGetAllMagazijnProduct();

********************************************************/



