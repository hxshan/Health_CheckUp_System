CREATE TABLE Roles(
	Id INT PRIMARY KEY AUTO_INCREMENT,
	Role Varchar(50)
);
INSERT INTO roles(Role) VALUES('patient');
INSERT INTO roles(Role) VALUES('doctor');
INSERT INTO roles(Role) VALUES('dietitian');
INSERT INTO roles(Role) VALUES('admin');

CREATE TABLE Users(
	Id INT PRIMARY KEY AUTO_INCREMENT,
	FirstName Varchar(50),
	LastName Varchar(50),
	Email Varchar(250),
    PhoneNumber varchar(15),
	Pwd Varchar(250),
	RoleId INT,
	CONSTRAINT FK_Roles_Users FOREIGN KEY (RoleId)
    REFERENCES Roles(Id)
);
CREATE TABLE Patient(
	Id INT PRIMARY KEY AUTO_INCREMENT,
	UserId INT not null ,
	DOB Date not null,
	Address Varchar(250) not null,
	Weight float not null,
	Height float not null,
	Gender varchar(10) not null,

	CONSTRAINT FK_Users_Patient FOREIGN KEY (UserId)
    REFERENCES Users(Id)
);
CREATE TABLE Dietitian(
	Id INT PRIMARY KEY AUTO_INCREMENT,
	UserId INT not null,
	Address Varchar(250) not null,
	
	
	CONSTRAINT FK_Users_Dietitian FOREIGN KEY (UserId)
    REFERENCES Users(Id)
);

CREATE TABLE AppointmentType(
	Id INT PRIMARY KEY AUTO_INCREMENT,
	Type Varchar(50) not null
);

CREATE TABLE PatientAppointment(
	Id INT PRIMARY KEY AUTO_INCREMENT,
	PatientId int not null,
	CreatedDate DateTime not null,
	ScheduledDate DateTime not null,
	Status Varchar(20) not null,
	TypeId int not null,
	
	CONSTRAINT FK_Patient_PatientAppointment FOREIGN KEY (PatientId)
    REFERENCES Patient(Id) ,
	CONSTRAINT FK_AppointmentType_PatientAppointment FOREIGN KEY (TypeId)
    REFERENCES AppointmentType(Id)


);
CREATE TABLE Test(
	Id INT PRIMARY KEY AUTO_INCREMENT,
	Test Varchar(350) not null 
);
CREATE TABLE CheckupPlan(
	Id INT PRIMARY KEY AUTO_INCREMENT,
	Name Varchar(100) not null,
	Description varchar(350) not null

);

CREATE TABLE CheckupPlanDetails(
	CheckupPlanId int not null,
	TestId int not null,

	CONSTRAINT FK_Test_CheckupPlanDetails FOREIGN KEY (TestId)
    REFERENCES Test(Id),
	CONSTRAINT FK_CheckupPlan_CheckupPlanDetails FOREIGN KEY (CheckupPlanId)
    REFERENCES CheckupPlan(Id)
);

CREATE TABLE CheckupAppointment(
	Id INT PRIMARY KEY AUTO_INCREMENT,
	PatientAppointmentId INT not null,
	CheckupPlanId int not null,

	CONSTRAINT FK_PatientAppointment_CheckupAppointment FOREIGN KEY (PatientAppointmentId)
    REFERENCES PatientAppointment(Id),
	CONSTRAINT FK_CheckupPlan_CheckupAppointment FOREIGN KEY (CheckupPlanId)
    REFERENCES CheckupPlan(Id)
);


CREATE TABLE Admin(
	Id INT PRIMARY KEY AUTO_INCREMENT,
	UserId INT not null ,

	CONSTRAINT FK_Users_Admin FOREIGN KEY (UserId)
    REFERENCES Users(Id)

);
INSERT INTO AppointmentType(Type) VALUES('Check-Up');INSERT INTO AppointmentType(Type) VALUES('Dietitan');INSERT INTO AppointmentType(Type) VALUES('Doctor');INSERT INTO Test(Test) VALUES('Full Blood Count (General Body Condition)');INSERT INTO Test(Test) VALUES('Fasting Blood Sugar (Glucose Levels)');INSERT INTO Test(Test) VALUES('HbA1C (Diabetes – Glucose Levels)');INSERT INTO Test(Test) VALUES('Lipid Profile (Cardiac Health)');INSERT INTO Test(Test) VALUES('Creatinine & eGFR (Kidney & Renal Health)');INSERT INTO Test(Test) VALUES('Liver Profile (Liver Function & Health)');INSERT INTO Test(Test) VALUES('TSH (3rd Generation) (Thyroid Profile)');INSERT INTO Test(Test) VALUES('PSA (Prostate Cancer Detection – Males Over 50 Years)');INSERT INTO Test(Test) VALUES('hsCRP (Inflammation/Identifying Heart Disease)');INSERT INTO Test(Test) VALUES('Urine Full Report (General Body Condition)');INSERT INTO Test(Test) VALUES('Micro Albumin (Kidney Health)');INSERT INTO Test(Test) VALUES('ECG (Cardiac Health)');INSERT INTO CheckupPlan(Name,Description) VALUES('Starter Health Check','Range of diagnostic tests to screen heart, lungs, liver, kidneys, thyroid and lipids.');INSERT INTO CheckupPlan(Name,Description) VALUES('Premium Health Check','Range of diagnostic tests to screen heart, lungs, liver, kidneys, thyroid and lipids.');INSERT INTO CheckupPlan(Name,Description) VALUES('Premium Plus Health Check','Range of diagnostic tests to screen heart, lungs, liver, kidneys, thyroid and lipids.');INSERT INTO CheckupPlan(Name,Description) VALUES('Essential Health Check','Range of diagnostic tests to screen heart, lungs, liver, kidneys, thyroid and lipids.');INSERT INTO CheckupPlanDetails(CheckupPlanId,TestId) VALUES(1,1);INSERT INTO CheckupPlanDetails(CheckupPlanId,TestId) VALUES(1,2);INSERT INTO CheckupPlanDetails(CheckupPlanId,TestId) VALUES(1,3);INSERT INTO CheckupPlanDetails(CheckupPlanId,TestId) VALUES(1,4);INSERT INTO CheckupPlanDetails(CheckupPlanId,TestId) VALUES(2,1);INSERT INTO CheckupPlanDetails(CheckupPlanId,TestId) VALUES(2,2);INSERT INTO CheckupPlanDetails(CheckupPlanId,TestId) VALUES(2,3);INSERT INTO CheckupPlanDetails(CheckupPlanId,TestId) VALUES(2,4);INSERT INTO CheckupPlanDetails(CheckupPlanId,TestId) VALUES(2,5);INSERT INTO CheckupPlanDetails(CheckupPlanId,TestId) VALUES(2,6);INSERT INTO CheckupPlanDetails(CheckupPlanId,TestId) VALUES(2,7);