CREATE DATABASE FRU10;

USE FRU10;

CREATE TABLE Program (
    ProgramCode VARCHAR(10) PRIMARY KEY,
    ProgramName VARCHAR(50)
);

CREATE TABLE Student (
    StudentNo INT PRIMARY KEY,
    Firstname VARCHAR(50),
    Lastname VARCHAR(50),
    Gender VARCHAR(10),
    ContactNo VARCHAR(15),
    ProgramCode VARCHAR(10),
    FOREIGN KEY (ProgramCode) REFERENCES Program(ProgramCode)
);

INSERT INTO Program VALUES ('BS', 'Business Studies');
INSERT INTO Program VALUES ('IS', 'Information Systems');

INSERT INTO Student VALUES (11111, 'James', 'Peter', 'Male', '71717171', 'BS');
INSERT INTO Student VALUES (22222, 'Peter', 'Mark', 'Male', '71727172', 'IS');
INSERT INTO Student VALUES (33333, 'Mary', 'John', 'Female', '71737173', 'BS');
INSERT INTO Student VALUES (44444, 'Belinda', 'Cain', 'Female', '71717271', 'IS');
