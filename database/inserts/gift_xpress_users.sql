USE gift_xpress;

-- Insert an admin user
INSERT INTO users (id, name, email, role, balance, email_verified_at, password, created_at, updated_at)
VALUES (NULL, 'Admin User', 'admin@example.com', 'admin', 1000, '2025-04-09 00:00:00', '$2y$10$hashedpasswordhere', '2025-04-09 00:00:00', '2025-04-09 00:00:00');

-- Insert a regular client user
INSERT INTO users (id, name, email, role, balance, email_verified_at, password, created_at, updated_at)
VALUES (NULL, 'John Doe', 'johndoe@example.com', 'client', 500, '2025-04-09 00:00:00', '$2y$10$hashedpasswordhere', '2025-04-09 00:00:00', '2025-04-09 00:00:00');

-- Insert another regular client user
INSERT INTO users (id, name, email, role, balance, email_verified_at, password, created_at, updated_at)
VALUES (NULL, 'Jane Smith', 'janesmith@example.com', 'client', 250, '2025-04-09 00:00:00', '$2y$10$hashedpasswordhere', '2025-04-09 00:00:00', '2025-04-09 00:00:00');
