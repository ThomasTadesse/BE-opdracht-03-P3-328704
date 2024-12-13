/******************************************************
-- Doel: Opvragen van records uit de tabellen ProductPerAllergeen
         Allergeen en Product op basis
         van het ProductId
*******************************************************
-- Versie: 01
-- Datum:  22-11-2024
-- Auteur: Thomas Tadesse
******************************************************/

-- Selecteer de juiste database voor je stored procedure
use `magazijn-jamin`;

-- Verwijder de oude stored procedure
DROP PROCEDURE IF EXISTS spSelectAllergeenPerProductById;

-- Verander even tijdelijk de opdrachtprompt naar //
DELIMITER //

CREATE PROCEDURE spSelectAllergeenPerProductById(
    IN ProductId INT UNSIGNED
)
BEGIN

    SELECT   PROD.Naam       AS ProductNaam   
            ,PROD.Barcode
            ,ALLE.Naam       AS AllergeenNaam
            ,ALLE.Omschrijving


    FROM Product AS PROD
 
    LEFT JOIN ProductPerAllergeen AS PPA
            ON PPA.ProductId = PROD.Id 
        
    LEFT JOIN Allergeen AS ALLE 
            ON PPA.AllergeenId = ALLE.Id

    WHERE PROD.Id = ProductId

    ORDER BY PROD.Naam ASC;

    
   


END //
DELIMITER ;

/************* debug code stored procedure **************

CALL spSelectAllergeenPerProductById(1);

********************************************************/



