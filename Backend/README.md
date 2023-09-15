## Accessibility and connection on AWS instance EC2
Ports of access are configured by panel control of EC2 instance.
Security policies for IPv4 and IPv6 created

Two additional services are integrated to manage protocols HTTP and HTTPS:
Load balancer application to route the protocols HTTP and HTTPS with SSL certificate integration and handle the calls to ports 80 to 443.
Target group: to configure the load balancer it is necessary to create a target group for the VPC
To handle access to users that can manage the instance EC2 by SSH there are two RSA keys, one for the webserver and the other for the sysadmin.

## VPS configuration
LAMP installation (Linux, Apache, MySQL, PHP). For the frontend side, Apache 2 and PHP version 8 are installed.
MySQL server installed and port configured to access by localhost for root user and database manager.
Anaconda 3 with Python 3.11.4  installation in file /opt.
Installation of all Python packages to use the assistant agent


## DNS and SSL certificate
Configuration of the server domain name using the AWS Route 53 service. The domain_name is associated with the alias "www.domain_name".  
Creation of six records for the instance region, two of type A simple, two of type CNAME for the SSL certificate, one SOA type, and one NS type.
Requisition of the SSL certificate using the ACM (Amazon Certificate Manager) application.
Two listeners are created in the load balancer one for port 80 with a redirection to the HTTPS protocol and target group created earlier, and another listener for and another listener for port 443 with a forward policy to SSL.
The corresponding validations are made for DNS and SSL.

## Development of API for communication between Frontend and Backend.

1. The program chatbot.php handles the answers given by chatbot.py, the CPU usage is analyzed to give answers and the messages are read from the web page in FETCH type variables and returned in JSON.
2. The environment variable is constructed to execute the chat_function.py program with the necessary dependencies.Also, this program is modified to perform the insertion of information to the database and generate different answers according to the categories of the assistant agent.
4. Insertion tests are carried out at the console level with the environment variable.
5. Permissions on folders and subfolders of the web project are modified for free user interaction with the user.
6. The configuration of the user www-data is modified from type /sbin/nologin to /bin/bash and added to the /etc/sudoers file so that it can execute shell commands.
7. The connection from the web page to the chatbot program administrator is established by using the API created.
