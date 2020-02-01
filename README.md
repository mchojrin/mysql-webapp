# mysql-webapp
Introduction
Prod_p2p is a web application that provides protein-to-phenotype information. It is based on a MySQL database, PHP, HTML and CSS.
A phenotype is the set of observable characteristics of an individual resulting from the interaction of its genotype with the environment.
The following are the steps I followed towards building this web application:
•	Gathered data from well-known bioinformatics websites
•	Created conceptual and logical data models based on the data collected
•	Engineered a physical data model and created a MySQL database
•	Loaded data in the MySQL database
•	Created database objects such as views, functions and stored procedures
•	Built a PHP web application using HTML and CSS to present and manage the data
The theme of the web application is to provide protein-disease, protein-phenotype and gene-phenotype relationships.

How to deploy my web application?
•	Run Apache and MySQL Servers on XAMPP
•	Unzip the file webapp_p2p into htdocs sub-folder within the xampp folder
•	Launch MySQL Workbench and create a DBA user by running the following code in MySql Workbench:
CREATE USER 'DBAuser'@'localhost' IDENTIFIED BY 'Xampp640697';
-- username: DBAuser & password: Xampp64097
GRANT ALL PRIVILEGES ON * . * TO 'DBAuser'@'localhost'; 
-- To use custom username & password: change content in DbConnection.php file using a text editor

•	open the script prod_p2p_bk from the contents of the unzipped folder
•	Run the script to import database
•	The restored database does not have any unused views, functions and stored procedures and has the stored procedures required to generate reports
•	To check if the database is properly connected open: http://localhost/webapp_p2p/DbConnection.php
•	A successful deployment of the database would show a blank screen.
•	If not, open the DbConnection.php file from the contents of the unzipped folder and verify if details such as username & password are correct
•	Then, visit the home page: http://localhost/webapp_p2p/ProjectPresentation.php

Data Sources
The information you’ll be able to observe is obtained from the following data sources:
•	The Universal Protein Resource (UniProt)
•	HUGO Gene Nomenclature Committee at the European Bioinformatics Institute (HGNC)
•	Online Mendelian Inheritance in Man (OMIM)
•	Disease Ontology (DO)

I selected only a few diseases and their associated proteins/genes.

System Requirements
The user must be an administrator
Browser: Chrome or any other
Servers: Web server, database server, PHP server --> XAMPP
XAMPP file: 5.6.32/PHP 5.6.32 or better
MySQL: MySQL Workbench
Text Editor: VS Code or any other