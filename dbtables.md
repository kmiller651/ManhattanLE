CREATE TABLE people (
userID VARCHAR(50) not null,
pass VARCHAR(200) not null,
token VARCHAR(200),
email VARCHAR(150) not null,
admin VARCHAR(2),
dateJoined DATE,
lastLogin DATETIME NOT NULL ON UPDATE CURRENT_TIMESTAMP,
loginAttempts int,
firstName VARCHAR(100),
lastName VARCHAR(100),
address VARCHAR(150),
phone VARCHAR(50),
PRIMARY KEY (userID)
)

CREATE TABLE userKeys (
userID VARCHAR(50) not null,
userKey VARCHAR(200),
PRIMARY KEY (userID),
FOREIGN KEY (userID) REFERENCES people (userID)
)