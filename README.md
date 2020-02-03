# mysql-webapp

prod_p2p is a web application that provides protein-phenotype information. A phenotype is the set of observable characteristics of an individual resulting from the interaction of its genotype with the environment.

I developed this web application by engineering a MySQL database and utilizing PHP, HTML & CSS.


## Getting Started

Kindly continue reading for instructions on how to deploy my project on your local machine.


### Prerequisites

What are the tools you need to install?

```
You must have administrator access to install the following:

Browser       Chrome or any other
Servers       Web server, database server, PHP server
XAMPP         5.6.32/PHP 5.6.32 or newer
MySQL         MySQL Workbench
Text Editor   VS Code or any other
```


## Deployment

Follow the instructions to successfully deploy my web application:

* Run Apache server and MySQL server on XAMPP
* Unzip the file webapp_p2p into htdocs sub-folder within the installed xampp folder
* Launch MySQL Workbench and create a DBA user by running the following code in MySql Workbench:

```
-- username: DBAuser & password: Xampp64097
CREATE USER 'DBAuser'@'localhost' IDENTIFIED BY 'Xampp640697';

-- to use custom username & password: change content in DbConnection.php file using a text editor

-- grant database administrator privileges to the created DBAuser
GRANT ALL PRIVILEGES ON * . * TO 'DBAuser'@'localhost';
```

* Open the script prod_p2p_bk from the contents of the unzipped folder
* Run the script on MySQL Workbench to import the prod_p2p database 
* This restored database does not have any unused views, functions and stored procedures
* The prod_p2p database has stored procedures required to generate reports from the web application
* To check if the database is properly connected open: http://localhost/webapp_p2p/DbConnection.php
* A successful deployment of the database shows a blank screen.

* If you do not see a blank screen:
      - Open the DbConnection.php file from the contents of the unzipped folder
      - Verify if details such as username & password are correct

* If you see a blank screen:
      - visit the home page: http://localhost/webapp_p2p/ProjectPresentation.php
      - use other aspects of my web application


## Author

**Prakash Dontaraju** [LinkedIn](https://www.linkedin.com/in/prakashdontaraju) [Medium](https://medium.com/@wittygrit)


## Acknowledgments

My web application presents information extracted from the following data sources:

* [The Universal Protein Resource (UniProt)](https://www.uniprot.org/uniprot/)
* [HUGO Gene Nomenclature Committee at the European Bioinformatics Institute (HGNC)](https://www.genenames.org/)
* [Online Mendelian Inheritance in Man (OMIM)](http://omim.org/)
* [Disease Ontology (DO)](http://disease-ontology.org/)

I selected a few diseases and utilized the associated protein/gene data. However, all data belongs to these specified entities.


