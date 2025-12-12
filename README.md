Absolutely — here is a **clean, professional, resume-friendly README.md** explaining your project, your LAMP deployment on EC2, your RDS integration, and your infrastructure steps, **without CloudFormation (since lab expired)**.

You can copy-paste this directly into your GitHub repository.

---

# 📘 **README.md for TinderJam2 — Two-Tier AWS Architecture (Student Project)**

# 🚀 **TinderJam2 — Simple Two-Tier Web Application on AWS**

TinderJam2 is a lightweight web application built using **HTML, CSS, PHP**, and **MariaDB/MySQL**.
The project demonstrates how to deploy a **two-tier architecture** on AWS using a **LAMP stack on EC2** and an **RDS database**.

This project was created as part of hands-on AWS learning to understand:

* EC2 provisioning
* LAMP server setup (Apache + PHP + MariaDB client)
* RDS connectivity from EC2
* Security Groups
* Two-tier architecture fundamentals
* Git & GitHub deployment workflow

---

# 🏗 **Architecture Overview**

### **Tier 1 — Web Tier**

* Amazon **EC2** instance
* Running **Linux + Apache + PHP**
* Hosts the TinderJam2 frontend (HTML/CSS)
* Contains PHP backend scripts to:

  * Insert user data into RDS
  * Fetch and display records
  * Show dynamic success messages

### **Tier 2 — Database Tier**

* Amazon **RDS (MySQL/MariaDB 8.0)**
* Private subnet access only
* Stores user profile submissions securely

### **Communication**

* EC2 → RDS on port **3306**
* Internet → EC2 on port **80** (HTTP)

---

# ⚙️ **Features**

### ✔️ **Frontend**

* Clean UI with a gradient theme
* Simple form that collects:

  * Name
  * Age
  * Location
  * Gender

### ✔️ **Backend (PHP)**

* Sanitizes input
* Inserts profiles into RDS table `users`
* Redirects with **fun/random success messages** like:

  * 🔥 *Your soulmate just got notified…*
  * ❤️ *Love algorithm activated…*
  * 😂 *We won’t sell your data… probably.*

### ✔️ **Database**

Table schema:

```sql
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  age INT,
  location VARCHAR(150),
  gender ENUM('Male','Female','Other'),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

# 🛠 **Deployment Steps Summary**

### 1️⃣ **Launch EC2 and SSH into it**

* Amazon Linux 2023 / Amazon Linux 2
* Security Group:

  * Allow SSH (22)
  * Allow HTTP (80)

### 2️⃣ **Install LAMP Stack**

```bash
sudo yum update -y
sudo yum install -y httpd php php-mysqlnd git
sudo systemctl enable httpd
sudo systemctl start httpd
```

### 3️⃣ **Clone the project**

```bash
git clone https://github.com/<your-username>/tow-tier-tinderjam2
sudo mv tow-tier-tinderjam2 /var/www/html/tinderjam2
```

### 4️⃣ **Set permissions**

```bash
sudo chown -R ec2-user:apache /var/www/html/tinderjam2
sudo find /var/www/html/tinderjam2 -type d -exec chmod 755 {} \;
sudo find /var/www/html/tinderjam2 -type f -exec chmod 644 {} \;
```

### 5️⃣ **Connect EC2 to RDS**

Update `config.php` with:

```php
$host = "<rds-endpoint>";
$db   = "tinderjam2";
$user = "admin";
$pass = "<your-db-password>";
```

### 6️⃣ **Test Database Connection**

Visit:

```
http://<EC2-Public-IP>/tinderjam2/testdb.php
```

---

# 📂 **Project Structure**

```
tinderjam2/
│── index.php           # Main UI page
│── submit.php          # Handles form submission
│── config.php          # DB configuration
│── testdb.php          # Quick RDS connectivity test
│── error.html
│── phpinfo.php
└── assets/             # (If applicable)
```

---

# 🔐 **Security Considerations**

* RDS is kept **private** inside the VPC
* EC2 allowed to talk to RDS on **port 3306 only**
* DB credentials are stored in a **separate config file (config.php)**
* Apache directory permissions restricted
* No database open to public internet

---

# 💡 **What I Learned**

This project helped me learn:

### ⭐ **AWS EC2 Setup**

* SSH access
* Apache & PHP installation
* Web hosting basics

### ⭐ **RDS Connectivity**

* Creating DB instances
* Managing credentials
* Connecting PHP to RDS over private networking

### ⭐ **Two-Tier Architecture**

* Separation of web tier and DB tier
* Security group design

### ⭐ **Git & Version Control**

* Pushing code from EC2
* Using GitHub repository

---

# 🚀 **Future Improvements**

* Add CloudFormation / IaC (Infrastructure as Code)
* Add AWS Secrets Manager for DB password
* Add Load Balancer + Auto Scaling
* Add API Gateway + Lambda version

---

# 👨‍💻 **Author**

**srisubaram b**
Student learning AWS Cloud, DevOps, and Full Stack Development.
This is part of my AWS two-tier architecture practice project.

---

# ⭐ **If you like this project**

Give the repo a ⭐ on GitHub — it helps!

Just tell me!
