
# ITM Departmental Website

## Project Overview
The ITM Departmental Website is a dynamic and fully functional platform designed to manage the departmental activities of the ITM department efficiently. The website includes role-based dashboards for Super-Admin, Admin, and Faculty members, providing tailored functionalities for each user role.

## Features
1. **Faculty Management**
2. **Student Management**
3. **Alumni Management**
4. **Scholarship Management**
5. **Routine Management**
6. **Email Communication** (Specific students or manually selected)
7. **Course Management**
8. **Schedule Management**
9. **Staff Management**
10. **Notice Board Management**
11. **Role and Permission Management**
12. **Website Setup Management**
13. **Club Management**
14. **Feedback Management**
15. **Notification System**

## Technology Stack
### Frontend
- HTML
- CSS
- Bootstrap
- JavaScript

### Backend
- PHP
- Laravel Framework
- MySQL Database

### Version Control
- GitHub Repository: [ITM Website Repository](https://github.com/Roman-oze/ITM_website)

## Stakeholders and Access Levels
- **Students**: Access to courses, routines, schedules, and the notice board.
- **Faculty**: Access to send emails, courses, routines, schedules, and the notice board.
- **Admins**: Manage all features of the system.

## Key Functionalities
### User Roles
- **Super-Admin**: Full access to all functionalities.
- **Admin**: Can manage most functionalities except certain Super-Admin-specific features.
- **Faculty**: Limited access tailored to faculty requirements.

### Dynamic Dashboards
The website dynamically adjusts the dashboard based on the user role, ensuring a seamless and relevant user experience.

## Installation and Setup
1. Clone the repository:
   ```bash
   git clone https://github.com/Roman-oze/ITM_website.git
   ```
2. Navigate to the project directory:
   ```bash
   cd ITM_website
   ```
3. Install dependencies:
   ```bash
   composer install
   npm install
   ```
4. Configure the `.env` file with your database and mail settings.
5. Run database migrations:
   ```bash
   php artisan migrate
   ```
6. Seed the database (if applicable):
   ```bash
   php artisan db:seed
   ```
7. Start the development server:
   ```bash
   php artisan serve
   ```

## Contributing
1. Fork the repository.
2. Create a new branch:
   ```bash
   git checkout -b feature-name
   ```
3. Commit your changes:
   ```bash
   git commit -m "Add detailed description of changes"
   ```
4. Push to the branch:
   ```bash
   git push origin feature-name
   ```
5. Open a pull request.

## License
This project is licensed under the MIT License. See the LICENSE file for details.

## Contact
For any queries or contributions, feel free to contact:
- **Developer**: Roman Oze
- **Email**: rumuislam202@gmail.com

---
Elevating the ITM department with robust, dynamic, and efficient web solutions.
