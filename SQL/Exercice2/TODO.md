# Exercice 2

> First, we will load the data fixtures into our database. 
We will use this fixtures for the exercice.

In this exercice, our manager ask us for this :

As a manager, I want to have the agent code, 
with the total of the amount for each agent, 
when one of his client give an order upper or equal than 1000.

Additionnaly, I want, to see the count of orders for each agents of the previous list.

It would be great for me to have the list ordered by the average amount.

> Tips :
> Do the job step by step and keep focus on each step.

> Plus :
> You can achieve this without subqueries

1. step:
SELECT agent_code FROM test.orders WHERE amount >= 1000;

2. step:
SELECT agent_code, SUM(amount) FROM test.orders
				  WHERE amount >= 1000
                  GROUP BY agent_code;
3.step
SELECT agent_code, SUM(amount), COUNT(id) FROM test.orders
				  WHERE amount >= 1000
                  GROUP BY agent_code;
4.step
SELECT agent_code, SUM(amount), COUNT(id) FROM test.orders
				  WHERE amount >= 1000
                  GROUP BY agent_code
                  ORDER BY avg(amount);
5.step
SELECT agent_code, 
	SUM(amount),
		COUNT(id) 
FROM test.orders
WHERE amount >= 1000
	GROUP BY agent_code
			ORDER BY AVG(amount)
				DESC;






