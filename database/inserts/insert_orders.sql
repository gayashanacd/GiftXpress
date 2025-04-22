USE gift_xpress;

INSERT INTO  orders
(id, user_id, product_id, quantity, total_price, status, created_at, updated_at) 
VALUES 
(1, 1, 3, 5, 250, 'processing', '2024-10-01 00:00:00', '2024-10-01 00:00:00'),
(2, 2, 2, 5, 70, 'processing', '2024-11-01 00:00:00', '2024-11-01 00:00:00');