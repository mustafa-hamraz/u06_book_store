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
    purchased_time VARCHAR(255) NOT NULL,
    FOREIGN KEY (book_id) REFERENCES books(book_id)
);

INSERT INTO books(title, author, price)
VALUES  ("To Kill a Mockingbird", "Lukas", 150),
        ("The Count of Monte Cristo", "Mustafa", 140),
        ("A Thousand Splendid Suns", "Khaled Hosseini", 120),
        ("State of Wonder", "Ann Patchett", 100);



-- If book exists add into purchases
SELECT EXISTS(SELECT * FROM books WHERE book_id=1);

-- Search Book
SELECT * FROM books WHERE title LIKE "%A%" AND author like "%Kha%";