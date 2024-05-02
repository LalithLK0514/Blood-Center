BLOOD CENTRE

Abstract Blood Centre

Blood Centre management plays a critical role in ensuring the availability and safety of blood products for medical treatment and emergencies. This abstract provides an overview of the key aspects and importance of effective blood Centre management systems.

Blood Centre management encompasses various processes, including donor recruitment, registration, screening, donation, and follow-up. These systems aim to maintain a consistent supply of blood while prioritizing donor safety and satisfaction.

The primary objectives of blood donor management systems are:

Donor Recruitment and Registration: Encouraging individuals to become regular blood donors through awareness campaigns, community outreach, and convenient registration processes.

Donor Screening and Eligibility: Screening potential donors for eligibility based on health criteria to ensure the safety of both donors and recipients.

Donation Management: Facilitating blood donation appointments, ensuring a positive donation experience, and tracking donation history.

Inventory Control: Monitoring blood inventory levels, including blood types and expiration dates, to meet the demands of hospitals and medical facilities.

Donor Retention and Engagement: Implementing strategies to retain donors by providing feedback, recognition, and incentives for their contributions.
Effective blood donor management systems leverage technology, such as donor databases, scheduling software, and communication tools, to streamline processes and enhance donor experience. These systems also comply with regulatory standards and ethical guidelines to uphold the integrity of blood donation practices.

In conclusion, blood donor management is fundamental for maintaining a stable blood supply, promoting public health, and supporting healthcare services. Implementing efficient donor management systems ensures that blood centers can meet the continuous demand for safe and sufficient blood products, ultimately saving lives and improving patient outcomes.


Blood Donor Pre-Request Form

Thank you for your interest in donating blood. Your donation can save lives! Please fill out this form to determine your eligibility and assist us in providing the best possible care during the donation process.

Medical History

Please answer the following questions truthfully. Your responses will help ensure the safety of both you as a donor and the recipient of your blood.

Are you currently feeling unwell or experiencing any symptoms of illness?
Have you ever been diagnosed with or treated for:
HIV/AIDS
Hepatitis B or C
Malaria
Syphilis
Other infectious diseases
Have you recently received any vaccinations or undergone any medical procedures?
Please specify:
Are you currently taking any medications?
Please specify:
Have you had any tattoos or body piercings within the last 12 months?
Have you recently traveled to regions where certain infections (e.g., malaria) are prevalent?
Please specify countries visited:

Lifestyle and Eligibility

Do you engage in any high-risk behaviors that could affect blood safety?
Examples include intravenous drug use, multiple sexual partners, or recent body piercings.
Are you pregnant or have you given birth in the last 6 months?
Have you donated blood or undergone a blood transfusion in the past 3 months?
Consent and Acknowledgment
By signing below, I confirm that the information provided is accurate and complete to the best of my knowledge. I understand that my eligibility to donate blood will be determined based on the information provided and additional screening conducted by healthcare professionals.


Please note that this pre-request form serves as an initial screening tool. Additional assessments and tests may be conducted by healthcare professionals at the blood donation center to ensure the safety of the blood supply and the well-being of both donors and recipients.

Feel free to adapt this template based on specific requirements or regulations applicable to your blood donation program.

INSTALL PROCESS
The installation process for a blood Centre management system typically involves setting up the required software components and database to run the application.
Prerequisites
Before beginning the installation, ensure you have the following prerequisites installed and configured on your system:

Operating System: Linux, macOS, or Windows.
Python: Version 3.x installed on your system.
Database: PostgreSQL or MySQL database server.
Git: Version control system to clone the project repository.

Installation Steps
Follow these steps to set up the blood centre management system:

1.Clone the Repository:
Open a terminal or command prompt and clone the project repository from GitHub:
git clone https://github.com/your/https://github.com/LalithLK0514/Blood-Center


2.Navigate to Project Directory:
Change into the project directory:
cd repository

3.Create Virtual Environment:
Set up a virtual environment for the project to manage dependencies:
$ sudo dnf update
$ sudo dnf install https://rpms.remirepo.net/enterprise/remi-release-9.rpm
$ sudo dnf module list php
$ sudo dnf module enable php:remi-<VERSION>
$ sudo dnf install php 
$ php -v 


Activate the virtual environment:
On macOS/Linux:
source venv/bin/activate

On Windows:
venv\Scripts\activate

4.Set Up Database:
Create a new PostgreSQL database for the application. You can use a database management tool like psql or a GUI tool (e.g., pgAdmin) to manage the database.Update the database configuration in the project settings file (config.py or similar) with your database credentials (e.g., database name, username, password, host).


5.Initialize Database Schema:
Apply database migrations and initialize the database schema:

python manage.py db upgrade
Run the Application:Start the development server to run the Blood Center:
[
http://52.146.10.96/Blood-Center/index.php](http://bcenter.centralindia.cloudapp.azure.com/project1/Blood-Center/)


Configuration and Customization
Environment Variables: Set any necessary environment variables for configuration (e.g., database credentials, secret keys).
Customization: Modify the application code to customize features, layouts, or functionality based on specific requirements.

To deploy a blood center project in the Azure cloud computing environment, you'll need to follow several steps to set up the necessary resources and deploy your application.
1. Prepare Your Blood Center Project
Ensure your blood center project is ready for deployment. This includes:
*A working codebase of your project, typically stored in a version control system like Git (e.g., GitHub repository).
*Configuration files needed for your project (e.g., requirements.txt, config.py).
*Any necessary environment variables or settings needed for deployment.

2. Create an Azure Account
If you don't have an Azure account yet, sign up for one at azure.com and log in to the Azure portal.

3. Set Up Azure Resources

a. Azure App Service (Web App)
In the Azure portal, navigate to Create a resource > Web App.
Fill in the required details for your web app, such as:
App name: Unique name for your web app
Subscription: Select your subscription
Resource Group: Create a new one or use an existing resource group
Runtime stack: Choose the appropriate runtime stack (e.g., Python)
Operating System: Choose the appropriate OS (Windows/Linux)
Click Review + create and then Create to provision the Azure App Service.

b. Azure Database (e.g., Azure Database for PostgreSQL)
Navigate to Create a resource > Databases > Azure Database for PostgreSQL.
Provide the necessary details for your database, including:
Server name
Admin username and password
Resource group
Pricing tier (choose based on your needs)
Configure networking settings to allow access from your Azure App Service.
Click Review + create and then Create to provision the Azure Database for PostgreSQL.

4. Configure Deployment Settings

a. Deployment Source
Set up deployment from your Git repository (e.g., GitHub) to your Azure App Service.

Go to your Azure App Service in the Azure portal.
Navigate to Deployment Center under Deployment.
Choose your preferred source (e.g., GitHub) and follow the prompts to connect your repository.

b. Environment Configuration
Configure environment variables and connection strings needed for your application in the Azure App Service settings.

Go to your Azure App Service in the Azure portal.
Navigate to Configuration under Settings.
Add the necessary environment variables (e.g., database connection string, secret keys) for your application.

5. Deploy Your Blood Center Project

Once your Azure resources and deployment settings are configured:

Push your project code to the configured branch (e.g., main or master) in your Git repository.
Azure App Service will automatically deploy your project based on the configured deployment source.

6. Access and Test Your Deployed Application

Once the deployment is complete:

Access your deployed blood center application by navigating to the URL of your Azure App Service (e.g., http://52.146.10.96/Blood-Center/index.php)

Test your application to ensure it's running correctly in the Azure cloud environment.

7. Monitor and Manage Your Azure Resources

Use Azure monitoring and management tools to monitor the performance, scalability, and health of your deployed blood center application and associated Azure resources.

Additional Considerations

Security: Implement security best practices such as HTTPS, secure connection strings, and Azure Active Directory (Azure AD) integration for authentication.

Scalability: Configure auto-scaling rules for your Azure App Service to handle varying loads.

Backup and Disaster Recovery: Set up backups and disaster recovery plans for your Azure Database to ensure data integrity and availability.

By following these steps, you'll successfully deploy your blood center project in the Azure cloud computing environment, leveraging scalable and managed services provided by Microsoft Azure.

Contribution

Lalith Kannan R
Role:Front end
Responsibilities:Create and maintain project front end(PHP,CSS,JAVASCRIPT,BOOTSTRAP)

Siva P
Role:Back end
Responsibilities:create and maintain project back end(PHP and MYSQL)

Naresh Babu T
Role:Deploy project
Responsibilities:To deploy a blood center project in azure cloud

Ajith Kumar R
Role:Voice Over 
Responsibilities:Give step by step voice to guide the project

![Screenshot (75)](https://github.com/LalithLK0514/Blood-Center/assets/162984639/9ef67e56-fa30-4b47-be12-61c89451ef8c)
![Screenshot (78)](https://github.com/LalithLK0514/Blood-Center/assets/162984639/e9cc94d5-a305-418a-872f-3f8195a171da)
![Screenshot (80)](https://github.com/LalithLK0514/Blood-Center/assets/162984639/3bd0e9f2-62d2-463b-94d6-1770182d1b94)
![Screenshot (81)](https://github.com/LalithLK0514/Blood-Center/assets/162984639/6724d946-f6be-4c37-be53-5dfe27f1bd4c)
![Screenshot (82)](https://github.com/LalithLK0514/Blood-Center/assets/162984639/ac71dda9-756a-458a-9890-8102577bcfe5)
![Screenshot (83)](https://github.com/LalithLK0514/Blood-Center/assets/162984639/d0c0b8c1-e735-46d3-8a44-a510b44558f7)
![Screenshot (84)](https://github.com/LalithLK0514/Blood-Center/assets/162984639/2928b31c-f770-418e-a8f5-a31fa4098fe9)
![Screenshot (85)](https://github.com/LalithLK0514/Blood-Center/assets/162984639/ea642220-d9fa-4ffb-a15e-4821cc5a7c2c)
![Screenshot (86)](https://github.com/LalithLK0514/Blood-Center/assets/162984639/361e78f1-0bf0-4e22-b5de-4ee5308b1441)
![Screenshot (87)](https://github.com/LalithLK0514/Blood-Center/assets/162984639/563f2808-6165-4af5-af5d-7b1f5bfe3028)
![Screenshot (88)](https://github.com/LalithLK0514/Blood-Center/assets/162984639/4dffeda5-848a-48ec-9fb2-0c6705444b5f)
![Screenshot (89)](https://github.com/LalithLK0514/Blood-Center/assets/162984639/88bfe970-13c9-4908-a600-0bed4feb897c)





## demo url 
http://bcenter.centralindia.cloudapp.azure.com/project1/Blood-Center/


https://www.youtube.com/watch?v=BFSHSzBjG-8












 
                   
