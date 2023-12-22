# DansLesNuages

## The app

Discover fun facts about clouds and test your imagination in the DansLesNuages website.

This site can be built through OpenStack. Using the provided template will build an entire environment composed of : 
- One virtual machine hosting a docker container for PHP and Apache, which will display the front of the app
- One virtual machine hosting a docker container for MySQL, which will manage the data of the app
- A router and its interfaces to link the VMs and to connect to Internet
- A floating IP linked to the front that will allow us to access the app through Internet
- Security groups and rules to allow or deny traffic on specific ports
- A volume attached to the BACK VM.

## Requirements

To build the app, you need an OpenStack environnement.

## How to build the app

1. Get all the files from the "HOT-Templates" folder.

2. Specify variables in the "env-template.yml" file according to your parameters and your OpenStack environemment. For the sake of practicality for the exercise, we provide an already-filled environment file env.yaml that allows you to build directly the app.

3. On OpenStack, through "Orchestration" and "Stacks", click on "Launch Stack".
![Launch a stack on OpenStack](/assets/images/open-stack1.png)

4. Add the "Stack-DansLesNuages.yaml" file and the env.yaml file.
![Choose your files](/assets/images/open-stack2.png)

5. On the next step, you can check all the data found by OpenStack through the env file. Fill the Stack Name and your OpenStack password and launch the creation of the stack.
![Check stack data](/assets/images/open-stack3.png)

6. Through the tab Compute/Instances, you can manage the VMs previously created through the stack. We can notice that the FRONT VM has two IP adresses, one of them being the floating IP.
![Instances](/assets/images/open-stack4.png)

7. After waiting for few minutes for the end of the deployment (around 10 minutes), use the floating IP to access to the website with a browser.
![Instances](/assets/images/open-stack5.png)

## Encountered Issues

Unfortunatly, during the deployment of the OpenStack environment, we encountered an issue.
We need to allow traffic on port 3306 of the BACK VM to allow the connection between the database and the front of the app. To do so, we need to add security rules in the security group of the BACK VM.

We noticed that, if we deploy these security rules thanks to the HEAT template, the deployment of the BACK VM is blocked, we can't access to the VM and nothing works. But, if we deploy the stack without these security rules, the deployment is runned perfectly, but after the deployment, we need to add the security rules through the OpenStack interface to allow the connection to the database.

We decided to keep the second case, knowing that it would be something to improve in the case of a complete automated deployment of the app.

### Add Security Rules

1. In the tab Network/Security Groups, click on "Manage Rules" of the security group of the BACK and click on "Add Rule"
![Instances](/assets/images/open-stack6.png)

2. Let all default params and specify the 3306 port
![Instances](/assets/images/open-stack7.png)

3. The rule that would allow traffic ingress on port 3306 for any would be added to your security group
![Instances](/assets/images/open-stack8.png)

4. You can finally access to the app !