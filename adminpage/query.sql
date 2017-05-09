

SELECT rental.* , customer.name , customer.lastname ,customer.phone ,customer.dln , location.city_id ,city.name FROM rental
		LEFT JOIN customer
        ON rental.customer_id = customer.id
        LEFT JOIN location
        ON rental.pick_up_location_id = location.id
        LEFT JOIN city
        ON city_id = city.id

SELECT rental.customer_id , rental.start_date , rental.end_date , customer.name , customer.lastname ,customer.phone ,customer.dln ,city.name FROM rental
		LEFT JOIN customer
        ON rental.customer_id = customer.id
        LEFT JOIN location
        ON rental.pick_up_location_id = location.id
        LEFT JOIN city
        ON city_id = city.id