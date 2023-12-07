    #count(p.module_id )#,
	 #sum(l.capacite_Ens) AS Capacity_Ratio
SELECT
    p.date_debut,
    p.heure_debut,
    p.heure_fin,
    l.nom,
    l.capacite_Ens,
    b.nom
FROM
    part_examens AS p
    JOIN examens AS e ON e.id = p.examen_id
    JOIN modules AS m ON m.id = p.module_id
    JOIN filieres AS f ON f.id = m.filiere_id
    JOIN filoc AS fl ON fl.filier_id = f.id
    JOIN locals AS l ON l.id = fl.local_id
    JOIN blocs AS b ON b.id = l.bloc_id
WHERE
    e.id = 1 AND (p.heure_debut = "08:30:00" or p.heure_debut = "14:30:00" OR p.heure_debut = "15:00:00")
GROUP BY
    p.date_debut,
    p.heure_debut,
    p.heure_fin,
    l.nom,
    l.capacite_Ens,
    b.nom
ORDER BY p.date_debut;
    
SELECT
    sum(l.capacite_Ens) AS Total
FROM
    part_examens AS p
    JOIN examens AS e ON e.id = p.examen_id
    JOIN modules AS m ON m.id = p.module_id
    JOIN filieres AS f ON f.id = m.filiere_id
    JOIN filoc AS fl ON fl.filier_id = f.id
    JOIN locals AS l ON l.id = fl.local_id
    JOIN blocs AS b ON b.id = l.bloc_id
WHERE
    e.id = 1 AND (p.heure_debut = "08:30:00" or p.heure_debut = "14:30:00" OR p.heure_debut)
GROUP BY
    p.date_debut,
    p.heure_debut,
    p.heure_fin,
    l.nom,
    l.capacite_Ens,
    l.bloc_id,
    b.nom
ORDER BY p.date_debut;

DROP VIEW exam_schedule_view;

CREATE VIEW exam_schedule_view AS
select
    p.date_debut,
    p.heure_debut,
    p.heure_fin,
    l.nom AS local_name,
    l.capacite_Ens,
    b.nom AS bloc_name
FROM
    part_examens AS p
    JOIN examens AS e ON e.id = p.examen_id
    JOIN modules AS m ON m.id = p.module_id
    JOIN filieres AS f ON f.id = m.filiere_id
    JOIN filoc AS fl ON fl.filier_id = f.id
    JOIN locals AS l ON l.id = fl.local_id
    JOIN blocs AS b ON b.id = l.bloc_id
WHERE
    e.id = 1  AND (
        (p.heure_debut BETWEEN '08:30:00' AND '13:00:00') OR
        (p.heure_debut BETWEEN '14:00:00' AND '20:00:00'))
GROUP BY
    p.date_debut,
    p.heure_debut,
    p.heure_fin,
    l.nom,
    l.capacite_Ens,
    b.nom
ORDER BY p.date_debut;

SELECT sum(capacite_Ens) from exam_schedule_view


CREATE FUNCTION exam_schedule(@num2 VARCHAR(500))
RETURNS INT
AS
BEGIN
    DECLARE @result INT;
select
    p.date_debut,
    p.heure_debut,
    p.heure_fin,
    l.nom AS local_name,
    l.capacite_Ens,
    b.nom AS bloc_name
FROM
    part_examens AS p
    JOIN examens AS e ON e.id = p.examen_id
    JOIN modules AS m ON m.id = p.module_id
    JOIN filieres AS f ON f.id = m.filiere_id
    JOIN filoc AS fl ON fl.filier_id = f.id
    JOIN locals AS l ON l.id = fl.local_id
    JOIN blocs AS b ON b.id = l.bloc_id
WHERE
    e.id = 1  AND (
        (p.heure_debut BETWEEN '08:30:00' AND '13:00:00') OR
        (p.heure_debut BETWEEN '14:00:00' AND '20:00:00'))
GROUP BY
    p.date_debut,
    p.heure_debut,
    p.heure_fin,
    l.nom,
    l.capacite_Ens,
    b.nom
ORDER BY p.date_debut;
    SET @result = @num1 + @num2;
    RETURN @result;
END;

DROP VIEW bkb_date;
CREATE VIEW bkb_date as
SELECT 
    p.date_debut,
    l.nom AS local_name,
    l.capacite_Ens,
    b.nom AS bloc_name,
    p.jour
FROM
    part_examens AS p
    JOIN examens AS e ON e.id = p.examen_id
    JOIN modules AS m ON m.id = p.module_id
    JOIN filieres AS f ON f.id = m.filiere_id
    JOIN filoc AS fl ON fl.filier_id = f.id
    JOIN locals AS l ON l.id = fl.local_id
    JOIN blocs AS b ON b.id = l.bloc_id
WHERE
    e.id = 1  
GROUP BY
    p.date_debut,
    local_name,
    l.capacite_Ens,
    bloc_name,
    b.nom ,
    p.jour
ORDER BY p.date_debut;





SELECT (SUM(capacite_ens) %  FROM  bkb_date ;

SELECT COUNT(*) from fonctionnaires AS f WHERE f.etat != "non"	AND f.`type` = "ENS"


SELECT DISTINCT heure_debut,heure_fin FROM part_examens WHERE heure_debut BETWEEN '08:30:00' AND '13:00:00';
UPDATE part_examens
SET jour = 'matain'
WHERE heure_debut BETWEEN '08:30:00' AND '13:00:00';

UPDATE part_examens
SET jour = 'soir'
WHERE heure_debut BETWEEN '13:30:00' AND '18:00:00';
SELECT * FROM part_examens;

SELECT
    (COUNT(l.capacite_Ens) +120) %
    (SELECT COUNT(*) FROM fonctionnaires AS f
     WHERE f.etat != 'non' AND f.type = 'ENS') AS Capacity_Ratio
FROM
    part_examens AS p
    JOIN examens AS e ON e.id = p.examen_id
    JOIN modules AS m ON m.id = p.module_id
    JOIN filieres AS f ON f.id = m.filiere_id
    JOIN filoc AS fl ON fl.filier_id = f.id
    JOIN locals AS l ON l.id = fl.local_id
WHERE
    e.id = 1;
    
    
    
SELECT
    pe.id AS Part_Examen_ID,
    COUNT(s.surveillant_id) AS Total_Supervisors,
    l.capacite_Fon AS Total_Capacity_Fon
FROM
    Part_Examens pe
JOIN
    Surveillances s ON pe.id = s.Part_Examen_id
JOIN
    locals l ON pe.module_id = l.id
WHERE
    pe.id = your_part_exam_id;


select `Fonctionnaires`.*, `Services`.* from `fonctionnaires` inner join `Services` on `Fonctionnaires`.`id_service` = `Services`.`id`