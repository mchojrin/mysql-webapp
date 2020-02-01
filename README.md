# mysql-webapp

Prod_p2p is a web application that provides protein-to-phenotype information. It is developed on a MySQL database, PHP, HTML and CSS.

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. Please continue reading for notes on how to deploy my project on your system.

### Prerequisites

What are the tools you need to install?

```
You must have administrator access to install the following:
Browser     Chrome or any other
Servers     Web server, database server, PHP server --> XAMPP
XAMPP file  5.6.32/PHP 5.6.32 or better
MySQL       MySQL Workbench
Text Editor VS Code or any other
```

## Deployment

Follow the below instructions to succesfully deploy my web application:

*	Run Apache and MySQL Servers on XAMPP
*	Unzip the file webapp_p2p into htdocs sub-folder within the xampp folder
*	Launch MySQL Workbench and create a DBA user by running the following code in MySql Workbench:
...
CREATE USER 'DBAuser'@'localhost' IDENTIFIED BY 'Xampp640697';
-- username: DBAuser & password: Xampp64097
GRANT ALL PRIVILEGES ON * . * TO 'DBAuser'@'localhost'; 
-- To use custom username & password: change content in DbConnection.php file using a text editor
...
*	open the script prod_p2p_bk from the contents of the unzipped folder
*	Run the script to import database
*	The restored database does not have any unused views, functions and stored procedures and has the stored procedures required to generate reports
*	To check if the database is properly connected open: http://localhost/webapp_p2p/DbConnection.php
*	A successful deployment of the database would show a blank screen.
*	If not, open the DbConnection.php file from the contents of the unzipped folder and verify if details such as username & password are correct
*	If you see a blank screen, visit the home page: http://localhost/webapp_p2p/ProjectPresentation.php


## Authors

* **Prakash Dontaraju** [LinkedIn](https://www.linkedin.com/in/prakashdontaraju), [Medium](https://medium.com/@wittygrit)


## Acknowledgments

My web application presents information extracted from the following data sources:

* [The Universal Protein Resource (UniProt)](https://www.uniprot.org/uniprot/)
* [HUGO Gene Nomenclature Committee at the European Bioinformatics Institute (HGNC)](https://www.genenames.org/)
* [Online Mendelian Inheritance in Man (OMIM)](http://omim.org/)
* [Disease Ontology (DO)](http://disease-ontology.org/)

I selected only a few diseases and utilized their associated protein/gene data. However, all data belongs to these specified entities.


