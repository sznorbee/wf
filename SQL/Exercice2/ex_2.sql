SELECT agent_code, 
	SUM(amount),
		COUNT(id) 
FROM test.orders
WHERE amount >= 1000
	GROUP BY agent_code
			ORDER BY AVG(amount)
				DESC;