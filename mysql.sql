CREATE DATABASE IF NOT EXISTS bookstore;
USE bookstore;

CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    price DECIMAL(10,2),
    category VARCHAR(100),
    publisher VARCHAR(255),
    author VARCHAR(255),
    stock INT
);
GO
INSERT INTO books (title, price, category, publisher, author, stock) VALUES
('A Game of Thrones', 46.00, 'Novel', 'Bantam Spectra', 'George R. R. Martin', 174),
('The Hobbit or There and Back Again', 22.00, 'Fantasy', 'Allen & Unwin', 'J. R. R. Tolkien', 200),
('A Promised Land', 19.00, 'Biography', 'Crown Publishing Group', 'Barack Obama', 186),
('X-Men: God Loves Man Kills', 21.00, 'Comics', 'Marvel Comics', 'Chris Claremont', 116),
('Dune', 23.00, 'Sci-Fi', 'Chilton Company', 'Frank Herbert', 165),
('The Exorcist', 18.00, 'Horror', 'Harper', 'William Peter Blatty', 101),
('Invisible Man', 19.00, 'Novel', 'Penguin Random House', 'Ralph Ellison', 113),
('The Nightingale', 17.00, 'Historical Fiction', 'St Martin\'s Press', 'Kristin Hannah', 123);
