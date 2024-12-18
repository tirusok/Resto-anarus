CREATE TABLE menu (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    name TEXT NOT NULL,
    price INT NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO menu (name, price, description) 
VALUES 
    ('Mie Ayam', 25000, 'Mie ayam dengan topping ayam kampung yang lezat'),
    ('Nasi Goreng', 30000, 'Nasi goreng dengan tambahan telur mata sapi'),
    ('Mie Ayam Special', 35000, 'Mie ayam dengan topping spesial dan pangsit goreng');
