DROP DATABASE IF EXISTS bokus;
CREATE DATABASE bokus;
USE bokus;

CREATE TABLE books
(
    book_id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    price INT NOT NULL,
    PRIMARY KEY (book_id)
);

CREATE TABLE purchases
(
    book_id INT NOT NULL, 
    quantity INT NOT NULL,
    FOREIGN KEY (book_id) REFERENCES books(book_id)
);

INSERT INTO books(title, author, price)
VALUES  ("To Kill a Mockingbird", "Harper Lee", 150),
        ("The Count of Monte Cristo", "Alexandre Dumas", 140),
        ("A Thousand Splendid Suns", "Khaled Hosseini", 120),
        ("State of Wonder", "Ann Patchett", 100);

--Show all books
SELECT * FROM books;

--If book exists add into purchases
SELECT EXISTS(SELECT * FROM books WHERE book_id=1);
INSERT INTO purchases(book_id, quantity)
    VALUES (2, 2);

--Show all purchases
SELECT * FROM purchases;
