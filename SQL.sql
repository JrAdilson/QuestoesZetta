SELECT p.id, count(pi.item) FROM pedidos p
JOIN pedidos_itens pi 
ON pi.pedido_id = p.id
GROUP BY p.id, pi.item
HAVING count(pi.item) > 1