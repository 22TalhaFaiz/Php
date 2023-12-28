

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    role_id INT,
    User_name VARCHAR(200),
    Password VARCHAR(200),
    Email VARCHAR(200) UNIQUE,
    FOREIGN KEY (role_id) REFERENCES roles(id)
);

CREATE TABLE Movies (
    id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(200),
    Genre VARCHAR(200),
    Poster Varchar(200),
    Release_Date DATE,
    Description VARCHAR(500),
    Rating DECIMAL(5,1) -- Assuming a numeric rating, adjust precision and scale as needed
);

CREATE TABLE Theater (
    id INT PRIMARY KEY AUTO_INCREMENT,
    Theater_Name VARCHAR(200),
    Location VARCHAR(200),
    Capacity INT, -- Assuming it's an integer representing seating capacity
    Class VARCHAR(500)
);

CREATE TABLE Seats (
    id INT PRIMARY KEY AUTO_INCREMENT,
    Theater_id INT, -- Use the same data type as in the referenced table
    Class VARCHAR(50),
    Seat_number INT,
    Status VARCHAR(20),
    FOREIGN KEY (Theater_id) REFERENCES Theater(id)
);

CREATE TABLE Showtime (
    id INT PRIMARY KEY AUTO_INCREMENT,
    movie_id INT,
    Theater_id INT,
    showdatetime DATETIME, -- Use DATETIME for both date and time
    Class VARCHAR(50),
    Rates INT,
    FOREIGN KEY (movie_id) REFERENCES Movies(id),
    FOREIGN KEY (Theater_id) REFERENCES Theater(id)
);

CREATE TABLE Booking (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    showtime_id INT,
    Booking_date DATETIME,
    Number_of_Tickets INT,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (showtime_id) REFERENCES Showtime(id) -- Use "Showtime" instead of "showtime" for consistency
);

CREATE TABLE Reviews (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    movie_id INT,
    Rating DATETIME,
    Comment varchar(200),
    Date datetime,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (movie_id) REFERENCES movies(id) -- Use "Showtime" instead of "showtime" for consistency
);



