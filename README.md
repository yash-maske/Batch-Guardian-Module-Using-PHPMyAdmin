# Batch Guardian 🚀

Batch Guardian is an all-in-one platform designed for **batch guardians** in colleges to efficiently manage students and ensure smooth coordination between students and teachers. With features like **attendance tracking**, **certificate uploads**, **logbook updates**, and **anonymous complaints**, it simplifies student management. Teachers can also schedule meetings, which students can join seamlessly.

---# Batch Guardian 🚀

Batch Guardian is an all-in-one platform designed for **batch guardians** in colleges to efficiently manage students and ensure smooth coordination between students and teachers. With features like **attendance tracking**, **certificate uploads**, **logbook updates**, and **anonymous complaints**, it simplifies student management. Teachers can also schedule meetings, which students can join seamlessly.

---

### 🚀 Key Features

- **📅 Attendance Management**: Track and manage student attendance effortlessly.
- **📜 Certificate Upload**: Students can upload certificates for various activities and courses.
- **📓 Logbook Updates**: Students can keep their logbook updated with personal achievements.
- **🗣️ Anonymous Complaints**: Students can send complaints to teachers anonymously.
- **💼 Meeting Management**: Teachers can schedule meetings, and students can join with a click.
- **📊 Student Dashboard**: A dynamic dashboard for students to view their profile, attendance, and updates.
- **🔧 Admin Dashboard**: For guardians to manage students, track attendance, handle complaints, and more.

---

### 🔧 Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Email Service**: PHPMailer for notifications and complaints
- **Development Environment**: XAMPP (Apache, MySQL)

---

### 🛠️ Installation

#### Prerequisites
- **XAMPP** (or any local server with PHP & MySQL support)
- **A code editor** (e.g., VSCode, Sublime Text)
- **A web browser** (Google Chrome, Firefox, etc.)

#### Steps to Set Up:

1. **Clone or Download** this repository.
2. **Move the folder** inside the `htdocs` directory of your XAMPP installation:
   - Example: `C:\xampp\htdocs\batch_guardian\`
3. **Create a Database** in phpMyAdmin:
   - Open [phpMyAdmin](http://localhost/phpmyadmin/).
   - Create a database called `batch_guardian_db`.
4. **Import SQL File**: Import the necessary SQL tables into the database.
5. **Update DB Connection**: In `includes/db.php`, update the following credentials:

   ```php
   $servername = "localhost";
   $username = "root";    // Default XAMPP MySQL username
   $password = "";        // Default XAMPP MySQL password (empty)
   $dbname = "batch_guardian_db"; // Your database name


### 🚀 Key Features

- **📅 Attendance Management**: Track and manage student attendance effortlessly.
- **📜 Certificate Upload**: Students can upload certificates for various activities and courses.
- **📓 Logbook Updates**: Students can keep their logbook updated with personal achievements.
- **🗣️ Anonymous Complaints**: Students can send complaints to teachers anonymously.
- **💼 Meeting Management**: Teachers can schedule meetings, and students can join with a click.
- **📊 Student Dashboard**: A dynamic dashboard for students to view their profile, attendance, and updates.
- **🔧 Admin Dashboard**: For guardians to manage students, track attendance, handle complaints, and more.

---

### 🔧 Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Email Service**: PHPMailer for notifications and complaints
- **Development Environment**: XAMPP (Apache, MySQL)

---

### 🛠️ Installation

#### Prerequisites
- **XAMPP** (or any local server with PHP & MySQL support)
- **A code editor** (e.g., VSCode, Sublime Text)
- **A web browser** (Google Chrome, Firefox, etc.)

#### Steps to Set Up:

1. **Clone or Download** this repository.
2. **Move the folder** inside the `htdocs` directory of your XAMPP installation:
   - Example: `C:\xampp\htdocs\batch_guardian\`
3. **Create a Database** in phpMyAdmin:
   - Open [phpMyAdmin](http://localhost/phpmyadmin/).
   - Create a database called `batch_guardian_db`.
4. **Import SQL File**: Import the necessary SQL tables into the database.
5. **Update DB Connection**: In `includes/db.php`, update the following credentials:
   ```php
   $servername = "localhost";
   $username = "root";    // Default XAMPP MySQL username
   $password = "";        // Default XAMPP MySQL password (empty)
   $dbname = "batch_guardian_db"; // Your database name


batch_guardian/
│
├── admin/                  # Admin related files (dashboard, student management)
│   ├── manage_students.php
│   └── view_attendance.php
│
├── includes/               # PHP files for database connection, email functions, etc.
│   ├── db.php
│   ├── mail.php
│   └── functions.php
│
├── student/                # Student related pages (profile, attendance, certificate upload)
│   ├── profile.php
│   ├── upload_certificate.php
│   └── view_attendance.php
│
├── css/                    # Stylesheets
│   ├── main.css
│   └── admin.css
│
├── js/                     # JavaScript files (if needed)
│   └── app.js
│
├── uploads/                # Folder to store uploaded certificates
│
└── index.php               # Home page


🏫 How to Use
For Admin:
Login to the admin dashboard.
Manage Students: Add/edit student details, track attendance, and view complaints.
Schedule Meetings: Teachers can schedule and manage meetings.
For Students:
Login to the student dashboard.
View Attendance: Check individual attendance records.
Upload Certificates: Upload relevant certificates and track progress.
Update Logbook: Add notes and updates to personal logbooks.
Send Complaints: Submit anonymous complaints to teachers without revealing identity.
📧 Email Configuration (For Notifications)
To send emails via PHPMailer:

Set up your Gmail account for sending emails.
Use an App Password for added security.
Configure the email settings in the includes/mail.php file.
Enjoy automated notifications!
📜 License
This project is licensed under the MIT License - see the LICENSE file for details.

🙏 Acknowledgments
PHPMailer for email functionality - PHPMailer GitHub
XAMPP for the local server setup - XAMPP Official Site
Bootstrap for styling components - Bootstrap

Thank you for checking out Batch Guardian! We hope it helps you streamline the management of students in your college. If you have any suggestions or issues, feel free to raise a ticket or contact us.





