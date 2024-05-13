CREATE TABLE sales (
    id bigint PRIMARY KEY AUTO_INCREMENT,
    price int NOT NULL,
    created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
);