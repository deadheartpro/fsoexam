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
    