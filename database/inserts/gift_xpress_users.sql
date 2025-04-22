USE gift_xpress;

-- Insert an admin user
INSERT INTO users (id, name, email, role, email_verified_at, password, created_at, updated_at)
VALUES (NULL, 'Admin User', 'admin@example.com', 'admin', '2025-04-09 00:00:00', '$2a$10$CAo9PhZuhxk24x0w9Z4Zne7gvSiuPfGl7NcpboBzyATASHlQEssYm', '2025-04-09 00:00:00', '2025-04-09 00:00:00');

-- Insert a regular client user
INSERT INTO users (id, name, email, role, email_verified_at, password, created_at, updated_at)
VALUES (NULL, 'John Doe', 'johndoe@example.com', 'client', '2025-04-09 00:00:00', '$2a$10$oAP7lGZ0r7NyK01YMiO1leD3ErTrzT/.ocLPKgK97tV.bahMmAGQe', '2025-04-09 00:00:00', '2025-04-09 00:00:00');

-- Insert another regular client user
INSERT INTO users (id, name, email, role, email_verified_at, password, created_at, updated_at)
VALUES (NULL, 'Jane Smith', 'janesmith@example.com', 'client', '2025-04-09 00:00:00', '$2a$10$nyZsykdCw3XBMnXU7z13NO5u1iVVrGe.b/8B1YSr.NZUK6etXjsWq', '2025-04-09 00:00:00', '2025-04-09 00:00:00');
