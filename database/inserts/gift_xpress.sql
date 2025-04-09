USE gift_xpress;

INSERT INTO products 
(name, brand, amount, price, currency, description, image, category, available_stock, is_active, created_at, updated_at) 
VALUES 
('Amazon $25 Gift Card', 'Amazon', 25.00, 25.00, 'USD', 'Perfect for any occasion. Use on Amazon.com.', 'amazon_card.png', 'Retail', 100, true, '2021-10-01 00:00:00', '2021-10-01 00:00:00'),

('Starbucks $15 Gift Card', 'Starbucks', 15.00, 14.00, 'USD', 'Give the gift of coffee!', 'starbucks_card.png', 'Food & Beverage', 80, true, '2021-10-01 00:00:00', '2021-10-01 00:00:00'),

('Google Play $50 Gift Card', 'Google', 50.00, 50.00, 'USD', 'Use for apps, games, movies & more.', 'google_play_card.png', 'Entertainment', 50, true, '2021-10-01 00:00:00', '2021-10-01 00:00:00'),

('iTunes $10 Gift Card', 'Apple', 10.00, 9.50, 'USD', 'Great for music, movies, and more.', 'itunes_card.png', 'Entertainment', 60, true, '2021-10-01 00:00:00', '2021-10-01 00:00:00'),

('Netflix $30 Gift Card', 'Netflix', 30.00, 30.00, 'USD', 'Binge-worthy gift for series lovers.', 'netflix_card.png', 'Entertainment', 40, true, '2021-10-01 00:00:00', '2021-10-01 00:00:00');