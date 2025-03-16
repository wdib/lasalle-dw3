SELECT
  A.id,   A.title, A.summary,
  C.name AS category,
  CONCAT( M.forename, ' ', M.surname ) AS author,
  I.file AS image_file,
  I.alt  AS image_alt
FROM article AS A
JOIN      category AS C ON A.category_id = C.id
JOIN      member   AS M ON A.member_id   = M.id
LEFT JOIN image    AS I ON A.image_id    = I.id
WHERE
  A.summary LIKE '%design%' AND
  A.published = 1
ORDER BY A.created DESC
LIMIT 6;